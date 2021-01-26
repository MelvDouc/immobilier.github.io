<?php

    require_once('./bdd.php');
    $logements = $bdd->query('SELECT * FROM logement');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Affichage des données</title>
</head>
<body>

<a href="index.php"><h1>Immobilier</h1></a>

<h2>Affichage des données</h2>

<p>Pour voir le profil d'un logement, cliquez sur l'ID.</p>
    
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code postal</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Photo</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php while($logement = $logements->fetch()){ ?>
            <tr>
                <td>
                    <a href="./profil_logement.php?id=<?= $logement['id_logement'] ?>">
                        <?= $logement['id_logement'] ?>
                    </a>
                </td>
                <td><?= $logement['titre'] ?></td>
                <td><?= $logement['adresse'] ?></td>
                <td><?= $logement['ville'] ?></td>
                <td><?= $logement['cp'] ?></td>
                <td><?= $logement['surface'] ?>&thinsp;m²</td>
                <td><?= $logement['prix'] ?>&thinsp;€</td>
                <td class="td-photo"><img src="./img/<?= $logement['photo'] ?>" alt="Photo de <?= $logement['titre'] ?>"></td>
                <td><?= $logement['type'] ?></td>
                <td><?= $logement['description'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="./index.php">Ajouter un nouveau logement</a>


<script>
    const photos = document.querySelectorAll('td.td-photo > img');

    for(photo of photos){
        if(photo.src.includes('.jpg') || photo.src.includes('.jpeg') || photo.src.includes('.png') || photo.src.includes('.gif')){
            photo.style.cursor = 'pointer';
            photo.addEventListener('click', function(){
                if(window.getComputedStyle(this).getPropertyValue('height') > '100px'){
                    this.style.height = '100px';
                    this.setAttribute('title', 'Cliquez pour agrandir.');
                    this.parentElement.style.overflow = 'hidden';
                } else{
                    this.style.height = '200px'
                    this.setAttribute('title', 'Cliquez pour réduire.');
                    this.parentElement.style.overflow = 'visible';
                }
            })
        }
    }

</script>
</body>
</html>