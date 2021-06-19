<?php
require("config/commandes.php");
$nombredepages = 1;

include 'config/sessionN.php';
if (isset($_SESSION['user'])) {
  header('location: index.php');
}
if (isset($_SESSION['error'])) {
  echo "
      <p>" . $_SESSION['error'] . "</p> 
  ";
  unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
  echo "
      <p>" . $_SESSION['success'] . "</p> 
  ";
  unset($_SESSION['success']);
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
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
            <h4 class="text-white">A propos de nos merveilleuses sauces</h4>
            <p class="text-muted">Une sauce est une préparation culinaire, froide, tiède ou chaude, destinée à être servie avec un mets salé ou sucré. Composée d'un simple jus ou d'un apprêt très élaboré, la sauce peut servir d'accompagnement, comme la mayonnaise, la béarnaise ou le coulis de fruits, mais aussi d'élément de cuisson, comme pour une daube ou un ragoût. D'une grande diversité, les sauces sont d'une consistance plus ou moins liquide que l'on peut détendre ou épaissir ; elles sont faites à partir de mélange à froid comme la vinaigrette, tiède comme l'émulsion au beurre d'une béarnaise, ou à chaud comme les déglaçages au vin, ou toutes sortes de fonds. Chacune d'elles peut être déclinée et agrémentée d'herbes, aromates, épices, colorants, alcools, mais aussi tomates, jus de fruits, de fromage ou autre foie gras.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
 <?php if(empty($_POST)) :?> 
         <form action='verifyP.php' method='POST'>
          <h1 class='h3 mb-3 fw-normal text-white'>Connectez vous !</h1>

          <div class='form-floating'>
            <input type='email' class='form-control' id='floatingInput' name='email'  placeholder='name@example.com'>
            <label for='floatingInput'>Adresse mail</label>
          </div>
          <div class='form-floating'>
            <input type='password' class='form-control' id='floatingPassword' name='password'  placeholder='Password'>
            <label for='floatingPassword'>Mot de passe</label>
          </div>
          <button class='w-100 btn btn-lg btn-primary' name='login' type='submit'>Sign in</button>
          <div class='form-floating text-white'>
            <h6 class = 'mx-auto'>
              Pas encore <a href='../Inscription/index.php'>inscrit</a> ?
            </h6>
          </div>
        </form> 
         </div>
        </div>
      </div>
    </div>
    <div class='navbar navbar-dark bg-dark shadow-sm'>
      <div class='container'>
        <a href='#' class='navbar-brand d-flex align-items-center'>
          <img src='https://lipn.univ-paris13.fr/~guerif/images/guerif_small.png' width='20' height='20' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true' class='me-2' viewBox='0 0 24 24'>
          <path d='M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z' />
          <circle cx='12' cy='13' r='4' /></img>
          <strong>Sauce Site</strong>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarHeader' aria-controls='navbarHeader' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
      </div>
    </div>
  </header>
 <?php else : ?>
  </div>
  </div>
</div>
</div>
<div class='navbar navbar-dark bg-dark shadow-sm'>
<div class='container'>
  <a href='#' class='navbar-brand d-flex align-items-center'>
    <img src='https://lipn.univ-paris13.fr/~guerif/images/guerif_small.png' width='20' height='20' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true' class='me-2' viewBox='0 0 24 24'>
    <path d='M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z' />
    <circle cx='12' cy='13' r='4' /></img>
    <strong>Sauce Site</strong>
  </a>
  <a href='../config/deconnexion.php'>déconnection</a>
  </div>
  </div>
</header>
<?php endif; ?>
  
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
              <span>
                Trié par :
              </span>
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

            <li class="nav-item">
              <a id="force" class="nav-link" href="#">
                <span data-feather="file"></span>
                Piquant
                <svg id="piquant" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                </svg>
              </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span type="button" data-bs-toggle="collapse" data-bs-target="#PlusDeFiltres" aria-controls="PlusDeFiltres" aria-expanded="false" aria-label="Toggle navigation">Plus de filtres :</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <div id="PlusDeFiltres" class ="collapse">
              <li class="nav-item mt-3 ps-3">
                <div class="input-group">
                  <label for="PrixMin" class="form-label me-1 mt-auto mb-auto">Min : </label>
                  <input name="prixmin" type="number" class="form-control" aria-label="Prix minimum" min="0" id="PrixMin" value="0" oninput="ChangerMin()">
                  <div class="input-group-append">
                    <span class="input-group-text">€</span>
                  </div>
                </div>
              </li>
              <li class="nav-item mt-2 ps-3">
                <div class="input-group">
                  <label for="PrixMax" class="form-label me-1 mt-auto mb-auto">Max : </label>
                  <input name="prixmax" type="number" class="form-control" aria-label="Prix maximum" min="0" id="PrixMax" value="0">
                  <div class="input-group-append">
                    <span class="input-group-text">€</span>
                  </div>
                </div>
              </li>
              <li class="d-none" id="alertprix">
                <div class="text-danger ps-3">
                  Le minimum ne peut pas être inférieur au maximum.
                </div>
              </li>
              <li class="nav-item mt-2">
                <div class="input-group">
                  <label for="selecteurforce" class="form-label ps-3">Force :</label>
                  <input name="force" type="range" class="form-range mt-2" min="0" max="9" id="selecteurforce" oninput="ChangerValeurForce()" value="0" style="width:80%">
                  <div class="input-group-append ms-2">
                    <span class="input-group-text" id="forceaffichee">&nbsp;</span>
                  </div>
                </div>
              </li>
              <li class="nav-item mt-5">
                <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="Filtrer()">Valider la selection</button>
              </li>
            </div>
            <li class="nav-item mt-1 mx-auto">
              <a href="#" id="reset">Réinitialiser la selection</a>
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
          <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center" id="pagination">

            </ul>
          </nav>
        </div>
      </main>
    </div>
  </div>

  <footer class="text-muted py-5">
    <div class="container">
      <iframe src="https://open.spotify.com/embed/track/2ChNJTAMVSDEc8hsdiF1Vs" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      <p class="float-end mb-1">
        <a href="#" class="text-decoration-none">Retour en haut
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"></path>
            <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"></path>
          </svg>
        </a>
      </p>
      <p class="mb-0">Suivez-nous sur <a href="https://www.instagram.com/rawsauce_._/" target="_blank" class="text-decoration-none">Instagram
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Instagram.svg/1200px-Instagram.svg.png" width="17"></a></p>

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

    var unefoissurdeuxPiquant = false;
    document.getElementById("force").onclick = function() {
      if (unefoissurdeux) {
        document.getElementById("piquant").style = "transform: rotate(90deg);"
        unefoissurdeux = false;
        tri = 4;
      } else {
        document.getElementById("piquant").style = "transform: rotate(0deg);"
        unefoissurdeux = true;
        tri = 5;
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
        url: 'config/affichage.php',
        dataType: 'json',
        data: {
          tri: tri,
          page: page,
          force: document.getElementById("selecteurforce").value,
          prixmax: document.getElementById("PrixMax").value,
          prixmin: document.getElementById("PrixMin").value,
        },
        success: function(obj) {
          document.getElementById("produitsboite").innerHTML = obj.result;
          document.getElementById("pagination").innerHTML = obj.pagination;
        },
      });
      window.location.href = "#";
    }

    function ChangerValeurForce() {
      var force = document.getElementById("selecteurforce").value;

      if (force > 0)
        document.getElementById("forceaffichee").innerHTML = force;
      else
        document.getElementById("forceaffichee").innerHTML = "&nbsp;";

    }

    document.getElementById("reset").onclick = function() {
      page = 1;
      tri = 69;
      document.getElementById("selecteurforce").value = 0;
      document.getElementById("PrixMax").value = 0;
      document.getElementById("PrixMin").value = 0;
      document.getElementById("forceaffichee").innerHTML = "&nbsp;";
      Affichage();
    };

    function Filtrer() {
      var prixminfiltre = document.getElementById("PrixMin").value;
      var prixmaxfiltre = document.getElementById("PrixMax").value;


      if (parseInt(prixminfiltre) > parseInt(prixmaxfiltre))
        document.getElementById("alertprix").className = "d-block";
      else {
        document.getElementById("alertprix").className = "d-none";
        Affichage();
      }
    }

    function ChangerMin() {

      var min = document.getElementById("PrixMin").value;
      document.getElementById("PrixMax").min = min;
      if (parseInt(document.getElementById("PrixMax").value) < parseInt(min))
        document.getElementById("PrixMax").value = min;
    }
  </script>
</body>

</html>
