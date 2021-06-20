<?php
echo $_GET['id'];
session_start();
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




