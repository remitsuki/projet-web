<?php
echo $_GET['idproduit'];
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();


}
array_push($_SESSION['cart'],$_GET['idproduit']);


exit;
?>