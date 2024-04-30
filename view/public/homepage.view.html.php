<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Accueil</h1>
    <nav>
        <ul>
            <li>Accueil</li>
            <li><a href="?json" target="_blank">API</a> format JSON</li>
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Liste de nos lieux</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($datas)):
        ?>
            <h3 id="alert"><?=$datas?></h3>
        <?php
        // Pas encore de `geoloc`
        elseif(empty($datas)):
        ?>
            <h3 id="comment">Pas encore de lieu.</h3>
        <?php
        // Nous avons des lieux
        else:
            // on compte le nombre de données 
            $nb = count($datas);
        ?>
            <h3>Il y a <?=$nb?> <?=$nb>1 ? "lieux" : "lieu"?></h3>

            <?php
            // tant qu'on a des données
            // var_dump($datas);
            foreach($datas as $data):
            ?>
            <thead>
                <tr>
            <th><?=$data['nom']?></th>
            <th><?=$data['adresse']?></th>
            <th><?=$data['codepostal']?></th>
            <th><?=$data['latitude']?> | <?=$data['longitude']?></th>
                </tr>
            </thead>
            <hr>
        <?php
            endforeach;
        endif;
        ?>   
    </div>
</body>
</html>