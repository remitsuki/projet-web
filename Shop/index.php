<?php
require("config/commandes.php");

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
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Une sauce est une préparation culinaire, froide, tiède ou chaude, destinée à être servie avec un mets salé ou sucré. Composée d'un simple jus ou d'un apprêt très élaboré, la sauce peut servir d'accompagnement, comme la mayonnaise, la béarnaise ou le coulis de fruits, mais aussi d'élément de cuisson, comme pour une daube ou un ragoût. D'une grande diversité, les sauces sont d'une consistance plus ou moins liquide que l'on peut détendre ou épaissir ; elles sont faites à partir de mélange à froid comme la vinaigrette, tiède comme l'émulsion au beurre d'une béarnaise, ou à chaud comme les déglaçages au vin, ou toutes sortes de fonds. Chacune d'elles peut être déclinée et agrémentée d'herbes, aromates, épices, colorants, alcools, mais aussi tomates, jus de fruits, de fromage ou autre foie gras.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="../../favicon.ico" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
          <circle cx="12" cy="13" r="4" /></img>
          <strong>Sauce Site</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart">Products</span>

              </a>
            </li>
          </ul>

        </div>
      </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="produitsboite" name="produitsboite">
              <?php $sauces = afficher(69);
              foreach ($sauces as $sauce) : ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <title><?= $sauce->nom ?></title>
                    <img src="<?= $sauce->image ?>" style="max-height: 500px;">

                    <div class="card-body">
                      <h4 class="card-text" style="text-align:center"><?= substr($sauce->nom, 0, 200); ?></h4>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                        </div>
                        <small class="text-muted"><?= $sauce->prix ?> €</small>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>


            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-0">Suivez-nous sur <a href="https://www.instagram.com/rawsauce_._/" target="_blank">Instagram
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Instagram.svg/1200px-Instagram.svg.png" width="17"></a></p>

    </div>
  </footer>

  <script>
    /*function AffichageParDefaut() {
      $.ajax({
        type: "GET",
        url: 'config/commandes.php?f=afficher',
        data: {
          parametre: 69
        },
        success: function(obj) {
          $('#produitsboite').append(obj);
          alert(obj);
        }
      });
    }*/

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
      } else {
        document.getElementById("A-Z").innerHTML = "A-Z"
        unefoissurdeux = true;
      }
    };

    var unefoissurdeuxPrix = false;
    document.getElementById("prix").onclick = function() {
      if (unefoissurdeux) {
        document.getElementById("stonks").style = "transform: rotate(90deg);"
        unefoissurdeux = false;
      } else {
        document.getElementById("stonks").style = "transform: rotate(0deg);"
        unefoissurdeux = true;
      }
    };
  </script>
</body>

</html>