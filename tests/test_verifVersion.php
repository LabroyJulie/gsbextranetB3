<?php
require_once ("../include/class.pdogsb.inc.php");

$lePdo = PdoGsb::getPdoGsb();

$version =2;
$id_medecin=16;

var_dump($lePdo->verifVersion($id_medecin, $version));
?>