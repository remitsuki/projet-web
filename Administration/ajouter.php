<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ajouter une sauce - SauceSite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="text-center w-50 mx-auto mt-5 bg-dark">
    <style>p { color : white;}</style>
    <form class="form-signin" action="ajouterBase.php" method="get">
        <p>Nom : </p><input  class="form-control" type="text" name="nom" value=""/>
        <p>Marque : </p><input  class="form-control" type="text" name="marque" value=""/>
        <p>Image (URL) : </p><input  class="form-control" type="text" name="image" value=""/>
        <p>Quantité : </p><input  class="form-control" type="text" name="quantite" value=""/>
        <p>Prix : </p><input  class="form-control" type="text" name="prix" value=""/>
        <p>Description : </p><input  class="form-control" type="textarea" name="description" value=""/>
        <p>Niveau : </p><input  class="form-control" type="text" name="niveau" value=""/>
        <div class="d-none"><p></p><input  class="form-control" type="text" id="id" name="id" value="" /></div>
        <input type="submit" value="ajouter" />
    </form>
</body>
</html>