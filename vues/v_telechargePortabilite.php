<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

$pdo= PdoGsb::getPdoGsb();
$pdo->creerFichierJson($_SESSION['id']);

?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telechargement données personnelles</title>
    <link rel="stylesheet" href="css/portabilite.css">
</head>
<body>
    <div class=empreinte>
        <p>L'empreinte de votre fichier est la suivante :</p>
        <p><?php echo hash_file('sha256', "contenant_json/" . $_SESSION['id'] .  ".json");?></p>
    </div>
    <a class=bouton href="contenant_json/<?php echo $_SESSION['id']; ?>.json"
    download="portabilite.json"> Télécharger vos données personnelles</a>

    <p class="felicitations">Félicitations, vos données sont à vous !</p>
</body>
</html>
