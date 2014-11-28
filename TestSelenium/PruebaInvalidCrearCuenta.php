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
    $this->type("id=new_user", "Lorena89");
    $this->type("id=new_password", "lo89re");
    $this->type("id=conf_password", "lo98re");
    $this->click("name=login");
    $this->assertEquals("NO COINCIDE LA CONTRASEÑA. VUELVE A INTENTAR", $this->getText("id=errorCuenta"));
  }
}
?>