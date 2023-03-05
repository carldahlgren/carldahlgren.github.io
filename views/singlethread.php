<?php
session_start();
if (isset($_SESSION['WB'])===FALSE){
    header("Location:../views/start.php");
}
if (isset($_SESSION['tid'])===FALSE){
    $_SESSION['tid'] = $_REQUEST['tid'];
}


date_default_timezone_set('Europe/Stockholm');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">

    <title>W & B</title>
</head>
<body>
<?php
    include './header.php';
    ?>

    <section class="chapter" >
        <div class="line" id="subline"></div>
        
            <?php 
            include '../process/posts_process.php';
            
            showsinglethread($_SESSION['tid']);
            
            
            ?>
            <!-- <div class="singleinlägg" id="forfade">    
        
            <p class="inlägg-title">'.$row['RUBRIK'].'</p>
            <p>❤: showlikes() </p>
            <ul class="meta-inlägg">
                <li class="meta">Publiserat av: '.$row['NAMN'].'</li>
                <li class="meta">'.$row['DATUM'].'</li>
            </ul>
            <p class="text">'.$row['MEDDELANDE'].'</p>
            <div class="line" id="linehead"></div>
            <button class="btn2" id="skrivbtn"> ↲ Svara  </button>
            <form action="../process/addcomment.php">
            
            <button type="submit" class="btn2" id="skrivbtn"> ❤ </button>
            </form> -->
            
                
    </div>
    <!-- <div class="commentbox" >    
     
                <ul class="meta-inlägg">
                    <li class="meta" style="font-weight: bold;">'.$row['NAMN'].'</li>
                    <li class="meta">'.$row['DATUM'].'</li>
                </ul>
                <p class="commenttext" >'.$row['MEDDELANDE'].'</p>
                
        </div>
         -->
            <input type="hidden" value="$_SESSION['tid']" name="tid">

                

            
               


    </section>
<br>
<br>

<script src="../js/myscript.js"></script>
</body>
</html>