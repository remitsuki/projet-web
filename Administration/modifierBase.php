<?php

require '../Shop/config/accesbase.php';




$nom =  $_GET['nom'];
$marque = $_GET['marque'];
$image =  $_GET['image'];
$quantite =  $_GET['quantite'];
$prix =  $_GET['prix'];
$id =  $_GET['id'];
if ($nom=="" || strlen($nom)>64 || strlen($marque)>32 /*|| !(file_exists($image))*/ || $quantite<0 || $prix<0){
    $chaine = "SELECT * FROM sauce WHERE id = $id";


    $req = $access->prepare($chaine);

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    $sauce = $data[0];



    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>modifierSauce</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="modifierBase.php" method="get">
            <p>Nom (doit compter entre 1 et 64 caractères) : </p><input type="text" name="nom" value="' . $sauce->nom . '"/>
            <p>Marque (doit compter entre 0 et 32 caractères) : </p><input type="text" name="marque" value="' . $sauce->marque . '"/>
            <p>Image : </p><img src=" ' . $sauce->image . ' " style="max-height: 500px;">
            <p>URL (doit pointer vers une image) : </p><input type="text" name="image" value="' . $sauce->image . '"/>
            <p>Quantité (doit être positive) : </p><input type="text" name="quantite" value="' . $sauce->quantite . '"/>
            <p>Prix (doit être positif) : </p><input type="text" name="prix" value="' . $sauce->prix . '"/>
            <div class="masquer"><p></p><input type="text" id="id" name="id" value="'.$sauce->id.'" /></div>
            <p></p><input type="submit" value="modifier" />
        </form>
    </body>
    </html>';
}
else
{
    $chaine = "UPDATE sauce SET nom='$nom', image='$image', quantite='$quantite', prix='$prix', marque='$marque'  WHERE id='$id'";

    $req = $access->prepare($chaine);

    $req->execute();

    header('location: index.php');
}


?>