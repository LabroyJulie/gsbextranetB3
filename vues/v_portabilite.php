<?php

// Vérification de la session
if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portabilité</title>
</head>
<body>
    <form action="" method="post">
        <h2>Voulez-vous récupérer vos données ?</h2>
        <button >
            <a href="?uc=portabilite&action=telechargerPortabilite">
                Oui
            </a>
        </button>
        <button> 
            <a href="?uc=connexion&action=reconnexion">
                Retour
            </a>
        </button>
    </form>
</body>
</html>