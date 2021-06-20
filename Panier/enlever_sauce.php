<?php
echo $_GET['id'];
session_start();
for($i=0;$i < count( $_SESSION[cart]); $i++){
    echo $i.' x ';
    echo $_SESSION[cart][$i].' x ';
    if($_SESSION[cart][$i]==$_GET['id']){

        echo $i;

        $_SESSION[cart][$i]= $_SESSION[cart][count( $_SESSION[cart])-1];
        array_pop($_SESSION[cart]);
        exit;

    }
}
?>