<?php

class SampleTest extends PHPUnit_Framework_TestCase {
  // Basic pass test.
  public function test_TrueAssertsToTrue() {
    $this->assertTrue(true);
  }

  // Basic fail test.
  public function test_FalseAssertsToTrue() {
    $this->assertTrue(false);
  }
}
