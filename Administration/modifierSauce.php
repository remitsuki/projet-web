<?php

require '../Shop/config/accesbase.php';

$identifiant =  $_GET['id'];
$chaine = "SELECT * FROM sauce WHERE id = $identifiant";


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
        <p>Nom : </p><input type="text" name="nom" value="' . $sauce->nom . '"/>
        <p>Marque : </p><input type="text" name="marque" value="' . $sauce->marque . '"/>
        <p>Image : </p><img src=" ' . $sauce->image . ' " style="max-height: 500px;">
        <p>URL : </p><input type="text" name="image" value="' . $sauce->image . '"/>
        <p>Quantité : </p><input type="text" name="quantite" value="' . $sauce->quantite . '"/>
        <p>Prix : </p><input type="text" name="prix" value="' . $sauce->prix . '"/>
        <div class="masquer"><p></p><input type="text" id="id" name="id" value="'.$sauce->id.'" /></div>
        <p></p><input type="submit" value="modifier" />
    </form>
</body>
</html>';

?>
