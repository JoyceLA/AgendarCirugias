<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://10.2.48.226/AGENDA-ISSSTE/logeo")
    $this->open("/AGENDA-ISSSTE/logeo/menu.php");
    $this->click("id=cerrar");
    $this->waitForPageToLoad("30000");
    $this->type("name=user", "cirboss");
    $this->type("name=password", "90909");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->open("/AGENDA-ISSSTE/logeo");
  }
}
?>