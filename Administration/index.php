<?php
require("../Shop/config/commandes.php");
$nombredepages = 1;

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Shop - Sauce Site</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    #flechehautbas {
      transition: transform 0.5s ease;
    }
  </style>

</head>

<body onload="AffichageParDefaut()">
  <header>
    
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="https://lipn.univ-paris13.fr/~guerif/images/guerif_small.png" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
          <circle cx="12" cy="13" r="4" /></img>
          <strong>Sauce Site</strong>
        </a>
        <a href="deconnection.php">déconnection</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#FiltreCote" aria-controls="FiltreCote" aria-expanded="false" aria-label="Toggle navigation" id="BoutonCote">
          Filtres
          <svg id="flechehautbas" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path>
          </svg>
        </button>
        <div class="position-sticky pt-3 collapse" id="FiltreCote">
          <ul class="nav flex-column">

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Trié par :</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <li class="nav-item">
              <a id="alphabet" class="nav-link" href="#">
                <span id="A-Z" data-feather="file">A-Z</span>

              </a>
            </li>
            <li class="nav-item">
              <a id="prix" class="nav-link" href="#">
                <span data-feather="file"></span>
                Prix
                <svg id="stonks" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                </svg>
              </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Plus de filtres :</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <li class="nav-item">
              <form class="needs-validation">
                <div class="ps-3 form-group form-check">
                  <label for="selection_pays" class="form-label">Choisir une ou plusieurs marques :</label>
                  <select id="selection_pays" multiple class="form-select" required>
                    <option selected>Toutes</option>
                    <?php $sauces = recupermarque();
                    foreach ($sauces as $sauce) : ?>
                      <option><?= $sauce->marque ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </form>
            </li>
            <li class="nav-item mt-3 ps-3">
              <div class="input-group">
                <label for="PrixMin" class="form-label me-1 mt-auto mb-auto">Min : </label>
                <input type="number" class="form-control" aria-label="Prix minimum" min="0" id="PrixMin">
                <div class="input-group-append">
                  <span class="input-group-text">€</span>
                </div>
              </div>
            </li>
            <li class="nav-item mt-2 ps-3">
              <div class="input-group">
                <label for="PrixMax" class="form-label me-1 mt-auto mb-auto">Max : </label>
                <input type="number" class="form-control" aria-label="Prix maximum" min="0" id="PrixMax">
                <div class="input-group-append">
                  <span class="input-group-text">€</span>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="produitsboite" name="produitsboite">

            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" id="pagination">

            </ul>
          </nav>
        </div>
      </main>
    </div>
  </div>

  <footer class="text-muted py-5">
    <div class="container"
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>

    </div>
  </footer>

  <script>
    var page = 1;
    var tri = 69;

    <?php $sauces = RecuperationTable();
    foreach ($sauces as $sauce) : ?>
      //PrechargementImages("<?= $sauce->image ?>");
    <?php endforeach; ?>
    function AffichageParDefaut() {
      Affichage();
    }
    function PrechargementImages(url) {
      var img = new Image();
      img.src = url;
    }
    var unefoissurdeux = true;
    document.getElementById("BoutonCote").onclick = function() {
      if (unefoissurdeux) {
        document.getElementById("flechehautbas").style = "transform: rotate(180deg);"
        unefoissurdeux = false;
      } else {
        document.getElementById("flechehautbas").style = "transform: rotate(0deg);"
        unefoissurdeux = true;
      }
    };

    var unefoissurdeuxAlph = true;
    document.getElementById("alphabet").onclick = function() {
      if (unefoissurdeux) {
        document.getElementById("A-Z").innerHTML = "Z-A"
        unefoissurdeux = false;
        tri = 2;
      } else {
        document.getElementById("A-Z").innerHTML = "A-Z"
        unefoissurdeux = true;
        tri = 3;
      }
      page = 1;
      Affichage();
    };

    var unefoissurdeuxPrix = false;
    document.getElementById("prix").onclick = function() {
      if (unefoissurdeux) {
        document.getElementById("stonks").style = "transform: rotate(90deg);"
        unefoissurdeux = false;
        tri = 0;
      } else {
        document.getElementById("stonks").style = "transform: rotate(0deg);"
        unefoissurdeux = true;
        tri = 1;
      }
      page = 1;
      Affichage();
    };

    function AllerALaPage(numeropage) {
      if (page == numeropage) {
        window.location.href = "#";
      } else {
        page = numeropage;
        Affichage();
      }
    }

    function Affichage() {
      $.ajax({
        type: "GET",
        url: 'affichageAdmin.php',
        dataType: 'json',
        data: {
          tri: tri,
          page: page,
        },
        success: function(obj) {
          document.getElementById("produitsboite").innerHTML = obj.result;
          document.getElementById("pagination").innerHTML = obj.pagination;
        },
      });
      window.location.href = "#";
    }
  </script>
</body>

</html>