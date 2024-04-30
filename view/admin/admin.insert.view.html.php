<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion d'un lieu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Insertion d'un lieu</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">

        <form method="POST" name="geo" action="">
                <input type="text" name="nom" value="" placeholder="nom" required><br>
                <input type="text" name="adresse" value="" placeholder="adresse" required><br>
                <input type="text" name="codepostal" value="" placeholder="codepostal" required><br>
                <input type="number" placeholder="latitude" name="latitude" step="0.000000001" value="" required>
                <input type="number" name="longitude" placeholder="longitude" step="0.000000001" value="" required>
                <input type="submit" value="Insérer">
        </form>
    </div>
</body>
</html>