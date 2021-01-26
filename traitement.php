<?php

require_once('./bdd.php');

if(isset($_GET['ajout'])){

    $titre = $_POST['titre'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $surface = $_POST['surface'];
    $prix = $_POST['prix'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    if(isset($_FILES) && $_FILES['photo']['name'] !== ''){
        $photo = time() . strrchr($_FILES['photo']['name'], '.');
    }

    if($titre == null || $adresse == null || $ville == null || $cp == null || $surface == null || $prix == null || $prix == null){
        echo 'Veuillez remplir tous les champs.';
    } else{
        if($cp < 1000 || $cp > 99999){
            echo 'Code postal invalide';
        } else{
            if(!is_numeric($surface) || !is_numeric($prix)){
                echo 'Le prix et la surface doivent être des nombres entiers.';
            } else{
                if($_FILES['photo']['size'] <= 10000000){
                    if($_FILES['photo']['type'] == '' || $_FILES['photo']['type'] == 'image/jpg' || $_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/gif' || $_FILES['photo']['type'] == 'image/png'){

                        $req = $bdd->prepare('INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo,  type, description) VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)');

                        $req->bindParam(':titre', $titre, PDO::PARAM_STR);
                        $req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
                        $req->bindParam(':ville', $ville, PDO::PARAM_STR);
                        $req->bindParam(':cp', $cp);
                        $req->bindParam(':surface', $_POST['surface']);
                        $req->bindParam(':prix', $prix);
                        $req->bindParam(':photo', $photo, PDO::PARAM_STR);
                        $req->bindParam(':type', $type, PDO::PARAM_STR);
                        $req->bindParam(':description', $description, PDO::PARAM_STR);

                        $req->execute();

                        var_dump($_POST);

                        move_uploaded_file($_FILES['photo']['tmp_name'], './img/' . $photo);

                        header('Location: affichage.php');

                    } else{
                        echo 'Type de fichier invalide. Veuillez téléverser une image au format JPG, PNG ou GIF.';
                    }
                } else{
                    echo 'Fichier trop volumineux. 10&thinsp;Mo maximum.';
                }
            }
        }
    }




}

?>