<?php

class UserTest extends PHPUnit_Framework_TestCase {
  public function testThatWeCanGetTheFirstName() {
    $user = new  \SampleApp\Models\User;
    $user->setFirstName('Dipak');

    $this->assertEquals($user->getFirstName(), 'Dipak');
  }

  public function testThatWeCanGetTheLastName() {
    $user = new  \SampleApp\Models\User;
    $user->setLastName('Yadav');

    $this->assertEquals($user->getLastName(), 'Yadav');
  }

  public function testThatWeCanGetTheFullName() {
    $user = new \SampleApp\Models\User;
    $user->setFirstName('Dipak');
    $user->setLastName('Yadav');

    $this->assertEquals($user->getFullName(), 'Dipak Yadav');
  }

  public function testThatWeCanGetTheEmail() {
    $user = new \SampleApp\Models\User;
    $user->setEmail('dipakyadav@example.com');

    $this->assertEquals($user->getEmail(), 'dipakyadav@example.com');
  }

  public function testFirstLastNameAndEmailAreTrimmed() {
    $user = new \SampleApp\Models\User;
    $user->setFirstName(' Dipak     ');
    $user->setLastName('   Yadav ');
    $user->setEmail(' dipakyadav@example.com    ');

    $this->assertEquals($user->getFirstName(), 'Dipak');
    $this->assertEquals($user->getLastName(), 'Yadav');
    $this->assertEquals($user->getEmail(), 'dipakyadav@example.com');
  }

  public function testEmailVariablesContainCorrectValues() {
    $user = new \SampleApp\Models\User;
    $user->setFirstName('Dipak');
    $user->setLastName('Yadav');
    $user->setEmail('dipakyadav@example.com');

    $emailVariables = $user->getEmailVariables();

    $this->assertArrayHasKey('full_name', $emailVariables);
    $this->assertArrayHasKey('email', $emailVariables);
    $this->assertEquals($emailVariables['full_name'], 'Dipak Yadav');
    $this->assertEquals($emailVariables['email'], 'dipakyadav@example.com');
    [
      'full_name' => 'Dipak Yadav',
      'email' => 'dipakyadav@example.com',
    ];
  }
}
