<?php
$password = $_POST['password'];
$correctpassword = 'gräsklippare';

if ($correctpassword===$password){
    session_start();
    $_SESSION['WB']=TRUE;
    header('Location:../views/home.php');
}else{
    header('Location:../views/start.php?n_mtch');
}
?>