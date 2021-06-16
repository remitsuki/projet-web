<?php

require 'accesbase.php';
switch ($_GET['tri']) {

    case 0:
        $tri = "SELECT * FROM sauce WHERE quantite > 0  ORDER BY prix DESC";
        break;
    case 1:
        $tri = "SELECT * FROM sauce WHERE quantite > 0 ORDER BY prix ASC";
        break;
    case 2:
        $tri = "SELECT * FROM sauce WHERE quantite > 0 ORDER BY nom DESC";
        break;
    case 3:
        $tri = "SELECT * FROM sauce WHERE quantite > 0 ORDER BY nom ASC";
        break;
    default:
        $tri = "SELECT * FROM sauce WHERE quantite > 0 ORDER BY id DESC";
        break;
}

$req = $access->prepare($tri);

$req->execute();

$data = $req->fetchAll(PDO::FETCH_OBJ);

$obj['result'] = "";
$nbproduits = 0;
foreach ($data as $sauce) {
    if ($nbproduits < $_GET['page'] * 9 and $nbproduits >= $_GET['page'] * 9 - 9) {
        $obj['result'] = $obj['result'] .
            '<div class="col">
        <div class="card shadow-sm">
          <title> ' . $sauce->nom . ' </title>
          <img src=" ' . $sauce->image . ' " style="max-height: 500px;">
          <div class="card-body">
            <h4 class="card-text" style="text-align:center"> ' . $sauce->nom . ' </h4>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
              </div>
              <small class="text-muted"> ' . $sauce->prix . ' €</small>
            </div>
          </div>
        </div>
      </div>';
    }
    $nbproduits++;
}
$nombredepages = ($nbproduits + 8) / 9;
$obj['pagination'] = "";
for ($numeropage = 1; $numeropage <= $nombredepages; $numeropage++) {
    $obj['pagination'] = $obj['pagination'] .
        '<li class="page-item">
      <button class="page-link" type="button" onclick="AllerALaPage(' . $numeropage . ')">'
        . $numeropage .
        '</li>';
}

echo json_encode($obj);

$req->closeCursor();
