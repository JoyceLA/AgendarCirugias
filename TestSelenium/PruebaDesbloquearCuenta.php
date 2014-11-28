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
    $this->click("id=seeWinDesbloquear");
    $this->click("//td[@onclick=\"desbloquear(this, document.getElementById('CAAJ621027'),'CAAJ621027');\"]");
    $this->assertTrue((bool)preg_match('/^¿Desea bloquear esta cuenta[\s\S]$/',$this->getConfirmation()));
    $this->assertEquals("CUENTA DES/HABILITADA EXITOSAMENTE \r\nEXITO", $this->getAlert());
  }
}
?>