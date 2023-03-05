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
    <title>Länkar</title>
</head>
<body>
    <?php
    include './header.php'
    ?>

    <div class="pagetitle">
    <p style="margin: 2%;"> 
        Länkar
    </p>
    <div class="line" id="subline"></div>
    <p class="pagedesc">Här har jag samlat lite länkar som kommer underlätta resan. </p>
    </div>
     
    <section class="chapter">
        <a href="https://grillplatser.nu/Karta" id="mainhead">
        <p class="title">Grillplatser.nu</p>
        </a>
        <p class="text">
            Här kommer en bra pekpinne på vart vi bör göra upp läger på kvällarna. Sidan har helt enkelt samlat många av sveriges
            almänna grillplatser. Dessutom går de att sortera på t.ex. vindskydd, vattenlinje, vacker vy etc. 
        </p>

        <a href="https://vindskyddskartan.se/" id="mainhead">
        <p class="title">Vindskyddskartan.se</p>
        </a>
        <p class="text">
            Liknar grillplatser.nu, men för enbart vindskydd.
            
        </p>
        <p style="font-style: italic;" class="text"> 
        "För alla som vill ut i naturen - vare sig det är till fots, med bil eller med MC - och övernatta i ett vindskydd, 
            så underlättar det såklart om man lätt kan hitta dem! Därför kan du på denna sidan se var olika vindskydd finns på en 
            karta, samt i många fall läsa en kort beskrivning av dem."</p>
       


        <a href="https://www.naturvardsverket.se/amnesomraden/allemansratten#E1503737683" id="mainhead">
        <p class="title">Allemansrätten</p>
        </a>
        <p class="text">
           Denna resa är ju möjlig att genomföra tack vare vår kära allemansrätt. Vi läser på här om vi är osäkra kring något.
        </p>

        <a href="https://www.krisinformation.se/detta-kan-handa/gras--och-skogsbrand/eldningsforbud" id="mainhead">
        <p class="title">Eldförbud</p>
        </a>
        <p class="text">
           Förhoppningsvis så blir det inte en så pass torr sommar att vi inte kan elda. Skulle det bli det så kan vi kontrollkolla här vad som rekommenderas.
        </p>


    </section>


</body>
</html>