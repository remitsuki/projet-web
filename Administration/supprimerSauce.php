<?php

require 'config/accesbase.php';

$id =  $_GET['id'];

$chaine = "DELETE FROM sauce WHERE id='$id'";

$req = $access->prepare($chaine);

$req->execute();

header('location: index.php');


?>