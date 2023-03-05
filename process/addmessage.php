<?php 
include './posts_process.php';

//Ej gjort med bind param. Osäkert....
$name = $_REQUEST["namn"];
$rubrik = $_REQUEST['rubrik'];
$meddelande = $_REQUEST['meddelande'];
$datum = $_REQUEST['datum'];

addmessagetodb($name,$rubrik,$meddelande,$datum);
?>