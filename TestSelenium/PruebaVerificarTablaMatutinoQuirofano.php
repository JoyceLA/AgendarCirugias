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
    $this->click("id=seeWinSala");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertEquals("SALA NO. 1", $this->getTable("id=calendario.0.1"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->select("id=sel_turno", "label=MATUTINO");
  }
}
?>