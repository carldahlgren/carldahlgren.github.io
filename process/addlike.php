<?php 
include './posts_process.php';
$tid = $_REQUEST['tid'];
addlike($tid);

header("location:../views/singlethread.php");
?>