<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour Consentement</title>
</head>
<body>
    <form method="post" action="index.php?action=valide_consentement">
        <input name="consentement" class="form-control" type="checkbox" require />
        <p>J'atteste avoir lu et accepte notre <a target="blank" href="vues/v_politiqueprotectiondonnees.html">politique de protection de données</a></p>
        <input type="submit" class="btn btn-primary signup" value="Accepter"/>
	</form>
</body>
</html>