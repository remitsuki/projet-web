<?php


echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>modifierSauce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="ajouterBase.php" method="get">
        <p>Nom : </p><input type="text" name="nom" value=""/>
        <p>Marque : </p><input type="text" name="marque" value=""/>
        <p>Image (URL) : </p><input type="text" name="image" value=""/>
        <p>Quantité : </p><input type="text" name="quantite" value=""/>
        <p>Prix : </p><input type="text" name="prix" value=""/>
        <p>Description : </p><input type="text" name="description" value=""/>
        <p>Niveau : </p><input type="text" name="niveau" value=""/>
        <div class="masquer"><p></p><input type="text" id="id" name="id" value="" /></div>
        <input type="submit" value="ajouter" />
    </form>
</body>
</html>';


?>