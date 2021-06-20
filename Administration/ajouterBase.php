<?php

require '../config/accesbdd.php';

$chaine = "SELECT id FROM sauce ORDER BY id DESC";

$req = $access->prepare($chaine);

$req->execute();

$data = $req->fetchAll(PDO::FETCH_OBJ);

$id=-1;
$estDispo=false;
while ($estDispo==false)
{
    $id++;
    $estDispo=true;
    foreach ($data as $ident)
    {
        if ($ident->id==$id){
            $estDipo=false;
        }
    }
}




$nom =  $_GET['nom'];
$marque = $_GET['marque'];
$image =  $_GET['image'];
$quantite =  $_GET['quantite'];
$prix =  $_GET['prix'];
$niveau = $_GET['niveau'];
$description = $_GET['description'];
if ($nom=="" || strlen($nom)>64 || strlen($marque)>32 || $quantite<0 || $prix<0 || !is_numeric($prix) || !is_numeric($quantite) || !is_numeric($niveau)){
    

    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>modifierSauce</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="ajouterBase.php" method="get">
            <p>Nom (doit compter entre 1 et 64 caractères) : </p><input type="text" name="nom" value="'.$nom.'"/>
            <p>Marque (doit compter entre 0 et 32 caractères) : </p><input type="text" name="marque" value="' .$marque. '"/>
            <p>Image : </p><img src=" ' .$image. ' " style="max-height: 500px;">
            <p>URL (doit pointer vers une image) : </p><input type="text" name="image" value="' .$image. '"/>
            <p>Quantité (doit être positive) : </p><input type="text" name="quantite" value="' .$quantite. '"/>
            <p>Prix (doit être positif) : </p><input type="text" name="prix" value="' .$prix. '"/>
            <p>description : </p><input type="text" name="description" value="' . $description . '"/>
            <p>niveau (doit être compris entre 0 et 9) : </p><input type="text" name="niveau" value="' . $niveau . '"/>
            <div class="masquer"><p></p><input type="text" id="id" name="id" value="'.$id.'" /></div>
            <p></p><input type="submit" value="ajouter" />
        </form>
    </body>
    </html>';
}
else
{
    $chaine = "INSERT INTO sauce VALUES ($id, '$image', '$nom', $prix, $quantite, '$description', $niveau, '$marque')";

    $req = $access->prepare($chaine);

    $req->execute();

    header('location: index.php');
}


?>