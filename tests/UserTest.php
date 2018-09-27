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
}
