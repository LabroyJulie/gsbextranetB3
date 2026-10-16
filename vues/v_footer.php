<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <footer>
        <a href="vues/v_politiqueprotectiondonnees.html">Politique de protection des données</a>
        <?php
    if (isset($_SESSION['id'])){
        echo  "<a href='index.php?uc=portabilite'> RGPD - Droit</a>";


    } 
    ?>
    </footer>
</body>
</html>

