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

function afficher($parametre)
{
	if(require("accesbase.php"))
	{
        switch($parametre)
        {
            default:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY id DESC");
                break;
            case 0:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY prix DESC");
                break;
            case 1:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY prix ASC");
                break;
            case 2:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY nom DESC");
                break;
            case 3:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY nom ASC");
                break;
        }

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