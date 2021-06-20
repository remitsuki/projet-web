
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="moi">
    <meta name="generator" content=" 0.83.1">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">  -->
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


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<?php
if (isset($_POST['button1']))
{
    session_start();
    $_SESSION[cart] = array();
}

?>


<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://lipn.univ-paris13.fr/~guerif/images/guerif_small.png" alt="" width="72" height="57">
                <h2>Checkout form</h2>
                <form method="POST" action=''>
                    <input type="submit" name="button1"  value="vider panier">
                </form>
                <?php

                session_start();
                require '../config/accesbdd.php';
                $req = $access->prepare("SELECT * FROM sauce WHERE quantite > 0");
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                $imgcasse = "'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/No_image_available_450_x_600.svg/450px-No_image_available_450_x_600.svg.png'";
                $sauce=$data;
                $ptot=0;
                //$sauce[$_SESSION[cart][$i]]->nom
                for ($i = 0; $i <= count( $_SESSION[cart])-1; $i++)
                    {
                    foreach ($data as $sauce) {
                        if($sauce->id==$_SESSION[cart][$i]){
                            $aux=$sauce;
                        }
                    }
                        ?>
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>

                              <h6 class="my-0">

                                  <?php
                                  session_start();

                                  echo $aux->nom;
                                  ?>
                                  <?php $obj=     '
                                  <form action="enlever_sauce.php?id='.$aux->id.'" method="post">
                                      <input type="submit" name="button3"
                                             class="button" value="retirer du panier" />
                                  </form>
                                  ';
                                  echo $obj;
                                  ?>
                              </h6>
                                <div class="a">
                              <small class="text-muted"><?php echo str_pad(mb_strimwidth($aux->description, 0, 200, "..."),198,'_',STR_PAD_BOTH); ?></small>
                                </div>
                            </div>
                            <span class="text-muted"><?php echo $aux->prix.'€'; $ptot=$ptot+$aux->prix; ?></span>
                          </li>
                <?php

                    }
                     ?>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0"><?php
                            session_start();

                            echo "Total";
                            ?></h6>


                    </div>
                    <span class="text-muted"><?php echo $ptot.'€'; ?></span>
                </li>




            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">


                    <form action="action.php" method="post">

                </div>

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-group has-feedback">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-group has-feedback">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-group has-feedback">Credit card number</label>
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


                <input type="submit" name="signup" value="Register" class="btn btn-info btn-block">

                        <a href="../Shop/index.php"> Home</a>
                </div>

            </div>


        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy;2021 Sauce Co</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">home</a></li>

            </ul>
        </footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
