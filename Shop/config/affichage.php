<?php

require '../../config/accesbdd.php';

if (isset($_GET['force']) && $_GET['force'] > 0 && $_GET['force'] < 10)
  $force = " AND niveau = " .  $_GET['force'];
else
  $force = "";

if (isset($_GET['prixmin']) && isset($_GET['prixmax']) && ($_GET['prixmin'] <= $_GET['prixmax']) && ($_GET['prixmax'] > 0)) {
  $prixmin = " AND prix >= " . $_GET['prixmin'];
  $prixmax = " AND prix <= " . $_GET['prixmax'];
} else {
  $prixmin = "";
  $prixmax = "";
}


switch ($_GET['tri']) {

  case 0:
    $tri = " ORDER BY prix DESC";
    break;
  case 1:
    $tri = " ORDER BY prix ASC";
    break;
  case 2:
    $tri = " ORDER BY nom DESC";
    break;
  case 3:
    $tri = " ORDER BY nom ASC";
    break;
  case 4:
    $tri = " ORDER BY niveau DESC";
    break;
  case 5:
    $tri = " ORDER BY niveau ASC";
    break;
  default:
    $tri = " ORDER BY id DESC";
    break;
}

$req = $access->prepare("SELECT * FROM sauce WHERE quantite > 0" . $force . $prixmin . $prixmax . $tri);

$req->execute();

$data = $req->fetchAll(PDO::FETCH_OBJ);

$obj['result'] = "";
$page = $_GET['page'];
if (($req->rowCount() + 9) / 9 < $page || $page < 1) {
  $page = 1;
}

$nbproduits = 0;
$imgcasse = "'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/No_image_available_450_x_600.svg/450px-No_image_available_450_x_600.svg.png'";
foreach ($data as $sauce) {
  if ($nbproduits < $page * 9 and $nbproduits >= $page * 9 - 9) {
    $obj['result'] = $obj['result'] .
      '<div class="col">
        <div class="card shadow-sm">
          <title> ' . $sauce->nom . ' </title>
          <img src=" ' . $sauce->image . ' " style="max-height: 500px;" onerror ="this.src = ' . $imgcasse . '">
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

if ($nbproduits == 0)
  $obj['result'] =
    '<div class="alert alert-warning mx-auto" role="alert">
    Aucun produit ne correspond à vos filtres.
  </div>';


$nombredepages = ($nbproduits + 8) / 9;
$page = $page - 1;
if ($page == 0) {
  $obj['pagination'] = '<li class="page-item disabled">
    <button class="page-link" type="button" disabled">
    <span aria-hidden="true">&laquo;</span>
  </li>';
} else {
  $obj['pagination'] = '<li class="page-item">
    <button class="page-link" type="button" onclick="AllerALaPage(' . $page . ')">
    <span aria-hidden="true">&laquo;</span>
  </li>';
}
$page = $page + 1;
for ($numeropage = 1; $numeropage <= $nombredepages; $numeropage++) {
  if ($numeropage == $page) {
    $obj['pagination'] = $obj['pagination'] .
      '<li class="page-item active">
        <button class="page-link" type="button" onclick="AllerALaPage(' . $numeropage . ')">'
      . $numeropage .
      '</li>';
  } else {
    $obj['pagination'] = $obj['pagination'] .
      '<li class="page-item">
        <button class="page-link" type="button" onclick="AllerALaPage(' . $numeropage . ')">'
      . $numeropage .
      '</li>';
  }
}
$page = $page + 1;
if ($page > $nombredepages) {
  $obj['pagination'] = $obj['pagination'] . '<li class="page-item disabled">
    <button class="page-link" type="button" disabled">
    <span aria-hidden="true">&raquo;</span>
  </li>';
} else {
  $obj['pagination'] = $obj['pagination'] . '<li class="page-item">
    <button class="page-link" type="button" onclick="AllerALaPage(' . $page . ')">
    <span aria-hidden="true">&raquo;</span>
  </li>';
}
echo json_encode($obj);

$req->closeCursor();
