<?php

class GoodbyeTest extends PHPUnit_Framework_TestCase {
  public function testTrue () {
    $this->assertTrue(true);
  }

  public function testUno () {
    $this->assertEquals(1,2,"Does this produce an error message in Bamboo?");
  }
}
