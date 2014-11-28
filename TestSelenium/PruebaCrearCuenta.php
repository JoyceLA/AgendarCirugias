<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://localhost/AGENDA-ISSSTE/logeo/index.php")
    $this->open("/AGENDA-ISSSTE/logeo/index.php");
    $this->type("name=user", "admin");
    $this->type("name=password", "admin");
    $this->click("name=login");
    $this->waitForPageToLoad("30000");
    $this->click("id=seeWinRegistro");
    $this->type("id=new_user", "LorenaLP");
    $this->type("id=new_password", "lo89pe");
    $this->type("id=conf_password", "lo89pe");
    $this->click("name=login");
    $this->assertEquals("CUENTA CREADA", $this->getAlert());
  }
}
?>