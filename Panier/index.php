<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Panier - Sauce Site</title>



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

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        div.a {
            text-align: center !important;
        }
    </style>


</head>
<?php
if (isset($_POST['button1'])) {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['cart'] = array();
}

?>


<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../IconeSauce.png" alt="" width="72" height="57">
                <h2>Panier</h2>


                <form method="POST" action=''>
                    <input type="submit" name="button1" value="vider panier">
                </form>
                <?php

                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                require '../config/accesbdd.php';
                $req = $access->prepare("SELECT * FROM sauce WHERE quantite > 0");
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                $imgcasse = "'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/No_image_available_450_x_600.svg/450px-No_image_available_450_x_600.svg.png'";
                $sauce = $data;
                $ptot = 0;
                //$sauce[$_SESSION[cart][$i]]->nom
                for ($i = 0; $i <= count($_SESSION['cart']) - 1; $i++) {
                    foreach ($data as $sauce) {
                        if ($sauce->id == $_SESSION['cart'][$i]) {
                            $aux = $sauce;
                        }
                    }
                ?>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>

                            <h6 class="my-0">

                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }

                                echo $aux->nom;
                                ?>
                                <?php $obj =     '
                                  <form action="enlever_sauce.php?id=' . $aux->id . '" method="post">
                                      <input type="submit" name="button3"
                                             class="button" value="retirer du panier" />
                                  </form>
                                  ';
                                echo $obj;
                                ?>
                            </h6>
                            <div class="a">
                                <small class="text-muted"><?php echo str_pad(mb_strimwidth($aux->description, 0, 200, "..."), 198, '_', STR_PAD_BOTH); ?></small>
                            </div>
                        </div>
                        <span class="text-muted"><?php echo $aux->prix . '€';
                                                    $ptot = $ptot + $aux->prix; ?></span>
                    </li>
                <?php

                }
                ?>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0"><?php
                                            if (session_status() === PHP_SESSION_NONE) {
                                                session_start();
                                            }

                                            echo "Total";
                                            ?></h6>


                    </div>
                    <span class="text-muted"><?php echo $ptot . '€'; ?></span>
                </li>




            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">


                    <form action="action.php" method="post">

                </div>

                <h4 class="mb-3">Payement</h4>
                <?php
                if (isset($_SESSION['user'])) {

                ?>
                    <div class="my-3">
                        <div class="form-group has-feedback">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                            <label class="form-check-label" for="credit">Carte de crédit</label>
                        </div>
                        <div class="form-group has-feedback">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="debit">Carte de débit</label>
                        </div>
                    </div>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nom sur la carte</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>

                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="cc-number" class="form-group has-feedback">numéro de carte</label>
                            <input type="number" min="0" max="9999999999999999" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-group has-feedback">Expiration</label>
                            <input type="month" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-group has-feedback">code de sécurité</label>
                            <input type="number" min="0" max="999" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


                <input type="submit" name="signup" value="payer" <?php
                                                                    if (!isset($_SESSION['user'])) {
                                                                        echo "disabled";
                                                                    } ?> class="btn btn-info btn-block">

                <?php
                if (!isset($_SESSION['user'])) {
                    echo '         <div class="text-danger ps-3">Vous devez être connecté pour payer </div>';
                }
                ?>
            </div>

    </div>


    <footer class="text-muted py-5">
        <div class="container">
            <iframe src="https://open.spotify.com/embed/track/2ChNJTAMVSDEc8hsdiF1Vs" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <p class="float-end mb-1">
                <a href="../Shop" class="text-decoration-none">Retour à l'accueil
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                </a>
            </p>
            <p class="mb-0">Suivez-nous sur <a href="https://www.instagram.com/rawsauce_._/" target="_blank" class="text-decoration-none">Instagram
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Instagram.svg/1200px-Instagram.svg.png" width="17"></a></p>

        </div>
    </footer>
</body>


</html>