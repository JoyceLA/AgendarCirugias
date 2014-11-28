<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://10.2.48.226/AGENDA-ISSSTE/logeo")
    $this->open("/AGENDA-ISSSTE/logeo/index.php");
    $this->type("name=user", "admin");
    $this->type("name=password", "admin");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("", $this->getText("id=seeWinSala"));
    $this->click("id=seeWinSala");
    $this->waitForPageToLoad("30000");
  }
}
?>