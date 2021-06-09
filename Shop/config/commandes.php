<?php

 function ajouter($image, $nom, $prix, $desc, $cat)
{
   if(require("accesbase.php"))
   {
     $req = $access->prepare("INSERT INTO sauce (image, nom, prix, description, cat) VALUES ('$image', '$nom', $prix, '$desc', $cat)");

     $req->execute(array($image, $nom, $prix, $desc, $cat));

     $req->closeCursor();
   }
}

function RecuperationTable()
{
	if(require("accesbase.php"))
	{
        
        $req=$access->prepare("SELECT * FROM sauce");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function recupermarque()
{
    if(require("accesbase.php"))
	{
        $req=$access->prepare("SELECT DISTINCT marque FROM sauce");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}

function supprimer($id)
{
	if(require("accesbase.php"))
	{
		$req=$access->prepare("DELETE FROM sauce WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>