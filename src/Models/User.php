<?php

namespace SampleApp\Models;

class User {
  protected $firstName;
  protected $lastName;
  protected $email;

  public function setFirstName($firstName) {
    $this->firstName = trim($firstName);
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function setLastName($lastName) {
    $this->lastName = trim($lastName);
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function setEmail($email) {
    $this->email = trim($email);
  }

  public function getEmail() {
    return $this->email;
  }

  public function getFullName() {
    return $this->firstName . ' ' . $this->lastName;
  }

  public function getEmailVariables() {
    return [
      'full_name' => $this->getFullName(),
      'email' => $this->getEmail(),
    ];
  }
}
