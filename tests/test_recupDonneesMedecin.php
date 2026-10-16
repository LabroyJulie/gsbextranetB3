<?php
require_once ("../include/class.pdogsb.inc.php");

$pdo= PdoGsb::getPdoGsb();
var_dump($pdo->recupDoneesMedecin(1));
?>