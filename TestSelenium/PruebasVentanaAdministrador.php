<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://10.2.48.226/AGENDA-ISSSTE/logeo")
    $this->open("/AGENDA-ISSSTE/logeo/");
    $this->type("name=user", "admin");
    $this->type("name=password", "admin");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("", $this->getTitle());
    try {
        $this->assertEquals("", $this->getTitle());
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>