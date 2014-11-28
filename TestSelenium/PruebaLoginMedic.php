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
    try {
        $this->assertEquals("AGENDAR CIRUGÍA", $this->getValue("id=seeWinAgendar"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("MI AGENDA", $this->getValue("id=seeWinVerAgenda"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    try {
        $this->assertEquals("Usuario. JOSE LUIS LOZANO", $this->getText("id=user"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>