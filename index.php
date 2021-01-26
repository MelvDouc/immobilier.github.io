<?php

    require_once('./bdd.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajout de données</title>
</head>
<body>

    <a href="index.php"><h1>Immobilier</h1></a>

    <h2>Ajout de données</h2>

    <form action="./traitement.php?ajout" method="post" enctype="multipart/form-data">
    
        <div class="space-between">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="" required>
        </div>
        <div class="space-between">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="" required>
        </div>
        <div class="space-between">
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="" required>
        </div>
        <div class="space-between">
            <label for="cp">Code postal</label>
            <input type="number" name="cp" min="1000" max="99999" class="is-int" required>
        </div>
        <div class="space-between">
            <label for="surface">Surface (en m²)</label>
            <input type="number" name="surface" class="is-int" required>
        </div>
        <div class="space-between">
            <label for="prix">Prix (en €)</label>
            <input type="number" name="prix" class="is-int" required>
        </div>
        <div class="space-between">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="">
        </div>
        <div>
            <input type="radio" id="location" name="type" value="location">
            <label for="location">location</label>
            <input type="radio" id="vente" name="type" value="vente" checked>
            <label for="vente">vente</label>
        </div>
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" row="10" cols="50" placeholder="&hellip;"></textarea>
        </div>

        <div class="center">
            <button type="submit">Valider</button>
        </div>

    </form>

    <a href="./affichage.php">Voir les logements enregistrés.</a>

    <script>
        const inputsEntiers = document.getElementsByClassName('is-int');

        for(input of inputsEntiers){
            input.addEventListener('keyup', function(){
                if(this.value.length > 0){
                    if(isNaN(this.value) || this.value < 1000 || this.value > 99999){
                        this.style.backgroundColor = 'red';
                    } else{
                        this.style.backgroundColor = '#fff';
                    }
                }
            })
        }
    </script>

</body>
</html>