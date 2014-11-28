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
    $this->click("id=seeWinHorarios");
    $this->type("id=search_doctor", "J");
    $this->click("css=img.botons");
    $this->assertEquals("Administrar Horarios de Médicos", $this->getTitle());
    $this->click("id=list_medicos");
    $this->select("id=list_medicos", "label=LOZANO , JOSE LUIS");
    $this->click("css=option[value=\"213\"]");
    $this->type("id=doc_tel", "4921390909");
    $this->select("id=doc_hrentrada", "label=07:00");
    $this->select("id=doc_hrentrada", "label=08:00");
    $this->select("id=doc_hrsalida", "label=16:00");
    $this->click("id=BtnReporte");
    $this->assertEquals("INFORMACION DE MEDICO MODIFICADA EXITOSAMENTE", $this->getAlert());
  }
}
?>