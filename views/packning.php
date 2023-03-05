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
    <title>Packning</title>
</head>
<body>
<?php
    include './header.php'
    ?>
    <div class="pagetitle">
    <p style="margin: 2%;">
        Packning
    </p>
    
    <div class="line" id="subline"></div>
    
    </div>
   <form action="">


   </form>
    <section class="chapter">
        
        <p class="pagedesc">För att säkerställa att vi får med oss allt nödvändigt så har jag här sammanställt en packlista. </p>
        </div>
        
    <div class="img_div">
        <img id="karta" src="../images/tälta.jpeg" alt="tälta">
    </div>
        <p class="title">Personlig Packning:</p>
        <ul class="packning">
            <li>Sovsäck</li>
            <li>Liggunderlag</li>
            <li>Myggmedel</li>
            <li>Myggnät (eventuellt)</li>
            <li>Vandringståliga Kängor</li>
            <li>Brassestol</li>
        </ul>
    </section>
    <section class="chapter">
        <p class="title">Gemensam Packning:</p>

        <p class="text" style="font-weight:bold;font-size:20px;font-style:italic;"> Allmänt: </p>
        <ul class="packning">
            <li>Tält</li>
            <li>Vattendunk</li>
            <li>Grillkol</li>
            <li>Tändare</li>
            <li>Tändvätska</li>
            <li>Stormkök</li>
            <li>Toapapper</li>
        </ul>
        
        
        <p class="text" style="font-weight:bold;font-size:20px;font-style:italic;"> För Matlagning: </p>
        <ul class="packning">
            <li>Skärbräda</li>
            <li>Kniv x2</li>
            <li>Blandbunke (metal)</li>
            <li>Stekspade/sked</li>
            <li>Gjutjärnspanna</li>
            <li>Toastjärn</li>
            
        </ul>
       
        <p class="text" style="font-weight:bold;font-size:20px;font-style:italic;"> Servering: </p>
        <ul class="packning">
            <li>Tallrikar</li>
            <li>Bestick</li>
            <li>Glas/kopp</li>
        </ul>

        <p class="text" style="font-weight:bold;font-size:20px;font-style:italic;"> Disk: </p>
        <ul class="packning">
            <li>Såpa (naturvänlig)</li>
            <li>Diskborste</li>
        </ul>
       
        
    </section>
    
    


</body>
</html>