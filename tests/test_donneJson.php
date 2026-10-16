<?php
require_once ("../include/class.pdogsb.inc.php");

$pdo= PdoGsb::getPdoGsb();
$donneeMed=$pdo->recupDoneesMedecin(1);
var_dump($pdo->donneJson($donneeMed));
?>