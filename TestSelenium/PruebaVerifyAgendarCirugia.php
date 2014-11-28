<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://localhost/AGENDA-ISSSTE/logeo/index.php")
    $this->open("/AGENDA-ISSSTE/logeo/index.php");
    $this->type("name=user", "GAJA734807");
    $this->type("name=password", "selene3");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->click("id=seeWinAgendar");
  }
}
?>