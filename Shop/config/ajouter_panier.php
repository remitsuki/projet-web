<?php
echo $_GET['id'];
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION[cart])){
    $_SESSION[cart] = array();


}
array_push($_SESSION[cart],$_GET['id']);

header("Location: ../");
/*
for ($i = 0; $i <= count( $_SESSION[cart]); $i++)
{
    echo $_SESSION[cart][$i]. ' x ';
}
?>*/
exit;
?>




