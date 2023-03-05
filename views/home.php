<?php
session_start();
if (isset($_SESSION['WB'])===FALSE){
    header("Location:../views/start.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/fadein.css">
    <title>W & B</title>
</head>
<body>
<?php
    include './header.php'
    ?>
    <section class="chapter">
        
    <div class="pagetitle">
    <p style="margin: 2%;">
        Aaaaaoooooh!
    </p>
    </div>
    <div class="line" id="subline"></div>
    <p class="pagedesc">
            Välkommen hit! Här samlar VI lite tankar och idéer kring vad som kommer bli den festaste 
            resan sommaren 2022.
        </p>
    
     <div class="img_div">
        <img id="karta" src="../images/malarbaden2.jpeg" alt="malarbaden" >
    </div>
    
    <p style="font-style: italic;text-align:center;">Hittade ingen bild på alla boysen. Skicka om ni har! </p>
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7kHA2vGehn6aw8SUPvy0vT?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
       
    </section>
<br>
<br>


</body>
</html>