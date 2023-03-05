<?php 
include './posts_process.php';

//Ej gjort med bind param. Osäkert....
$name = $_REQUEST["namn"];
$kommentar = $_REQUEST['kommentar'];
$datum = $_REQUEST['datum'];
$tid = $_REQUEST['tid'];

addcommenttodb($name,$kommentar,$datum,$tid);

?>