<?php


if(!isset($_GET['action'])){
	$_GET['action'] = 'demandeConnexion';
}
$action = $_GET['action'];
switch($action){
	
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		$connexionOk = $pdo->checkUser($login,$mdp);
		if(!$connexionOk){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else { 				
			$infosMedecin = $pdo->donneLeMedecinByMail($login);
			$versionRecente=$pdo->version_politique();
			$versionMedecin=$pdo->verifVersion ($id = $infosMedecin['id'],$versionRecente);
			$id = $infosMedecin['id'];
			$nom =  $infosMedecin['nom'];
			$prenom = $infosMedecin['prenom'];
			connecter($id,$nom,$prenom);
			if($versionMedecin == true)
			{
						   
				include("vues/v_sommaire.php");
			}
			else{
				include("vues/v_miseAJourVersion.php");
			}
		}

			break;	
	}
	case 'valide_consentement':{
		$versionRecente=$pdo->version_politique();
		$creeConsentementAutre=$pdo->creer_consentement($_SESSION['id'],$versionRecente);
		if($creeConsentementAutre==true)
		{
			include("vues/v_sommaire.php");
		}
		
		break;
	}
       
        
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>