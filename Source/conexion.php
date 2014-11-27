<?php
 
//DATOS PARA LA CONEXION A LA BASE DE DATOS
define('DB_SERVER','localhost');
define('DB_NAME','agenda');
define('DB_USER','ISSSTE');
define('DB_PASS','issste123');
 
    $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME,$con);
 
?>