<?php

class UserTest extends PHPUnit_Framework_TestCase {
  protected $user;

  public function setUp() {
    $this->user = new \SampleApp\Models\User;
  }

  public function testThatWeCanGetTheFirstName() {
    $this->user->setFirstName('Dipak');

    $this->assertEquals($this->user->getFirstName(), 'Dipak');
  }

  public function testThatWeCanGetTheLastName() {
    $this->user->setLastName('Yadav');

    $this->assertEquals($this->user->getLastName(), 'Yadav');
  }

  public function testThatWeCanGetTheFullName() {
    $this->user->setFirstName('Dipak');
    $this->user->setLastName('Yadav');

    $this->assertEquals($this->user->getFullName(), 'Dipak Yadav');
  }

  public function testThatWeCanGetTheEmail() {
    $this->user->setEmail('dipakyadav@example.com');

    $this->assertEquals($this->user->getEmail(), 'dipakyadav@example.com');
  }

  public function testFirstLastNameAndEmailAreTrimmed() {
    $this->user->setFirstName(' Dipak     ');
    $this->user->setLastName('   Yadav ');
    $this->user->setEmail(' dipakyadav@example.com    ');

    $this->assertEquals($this->user->getFirstName(), 'Dipak');
    $this->assertEquals($this->user->getLastName(), 'Yadav');
    $this->assertEquals($this->user->getEmail(), 'dipakyadav@example.com');
  }

  public function testEmailVariablesContainCorrectValues() {
    $this->user->setFirstName('Dipak');
    $this->user->setLastName('Yadav');
    $this->user->setEmail('dipakyadav@example.com');

    $emailVariables = $this->user->getEmailVariables();

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
