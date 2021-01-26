<?php

    require_once('./bdd.php');
    $id = (INT)$_GET['id'];
    ;
    $logement = $bdd->query('SELECT * FROM logement WHERE id_logement=' . $id)->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Profil logement</title>
</head>
<body>

    <a href="index.php"><h1>Immobilier</h1></a>

    <style>img {max-height: 300px}</style>

    <h2>Profil logement</h2>

    <ul>
        <li><strong>Titre</strong>&thinsp; <?= $logement['titre']?></li>
        <li><strong>Adresse</strong>&thinsp; <?= $logement['adresse']?></li>
        <li><strong>Ville</strong>&thinsp; <?= $logement['ville']?></li>
        <li><strong>Code postal</strong>&thinsp; <?= $logement['cp']?></li>
        <li><strong>Surface</strong>&thinsp; <?= $logement['surface']?></li>
        <li><strong>Prix</strong>&thinsp; <?= $logement['prix']?></li>
        <li><strong>Type</strong>&thinsp; <?= $logement['type']?></li>
        <li><strong>Description</strong>&thinsp; <?= $logement['description']?></li>
        <li><strong>Photo</strong>&thinsp;: 
            <?php
                $format = strrchr($logement['photo'], '.');
                if($format == '.jpg' || $format == '.jpeg' || $format == '.png' || $format == '.gif'){
                    echo '<img src="./img/'.$logement['photo'].'">';
                } else{
                    echo 'Pas encore disponible.';
                }
            ?>
        </li>
    </ul>

    </ul>

</body>
</html>
