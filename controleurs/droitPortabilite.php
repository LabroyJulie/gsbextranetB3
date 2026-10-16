<?php

if(!isset($_GET['action']) && $_SESSION ['id']){
	$_GET['action'] = 'demandePortabilite';
}
else{

}
$action = $_GET['action'];
switch($action){
	
	case 'demandePortabilite':{
		include("vues/v_portabilite.php");
		break;
	}
	case 'telechargerPortabilite':{
		include("vues/v_telechargePortabilite.php");

		break;
	}
    	
    break;
}



?>