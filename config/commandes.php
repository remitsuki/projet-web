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

/*function afficher($parametre)
{
	if(require("accesbase.php"))
	{
        switch($parametre)
        {
            
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
            default:
                $req=$access->prepare("SELECT * FROM sauce ORDER BY id DESC");
                break;
        }

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        $obj = "";
        foreach ($sauces as $sauce)
        {
            $obj += '<div class="col"> <div class="card shadow-sm"> <title>'
            + $sauce->nom + ' </title> <img src="' + $sauce->image + '"style="max-height: 500px;"' +
            '<div class="card-body"> <h4 class="card-text" style="text-align:center">'
            + $sauce->nom + '</h4>  <div class="d-flex justify-content-between align-items-center">' +
            '<div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
          </div>
          <small class="text-muted">' +  $sauce->prix + ' €</small> </div>
          </div>
        </div>
      </div>';
        }

        $obj = 4;
        echo $obj;

        $req->closeCursor();
	}
}*/

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