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
    <title>Info</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body>
    <?php
    include './header.php';
    ?>
    
    <div class="pagetitle">
    <p style="margin: 2%;">
        Info
    </p>
    <div class="line" id="subline"></div>
    </div>
    <section class="chapter">
        <p class="title">Vision</p>
        <p class="text">
            Det känns som att ingen utav oss varit helt främmande för idén att åka på en road trip de senaste åren.
            I samband med att jag själv är pank som en lus i tider av studier så tycker jag vi tar vara på den idén i
            år!
            Jag kommer att ha tillgång till bil under hela Juli vilket gör det till ett perfekt tillfälle att realisera
            denna plan.
            I resterande delar utav denna hemsida så följer mina tankar, förslag och funderingar.
            Men självklart så enas vi om ett bra upplägg tillsammans.
            <br>
            <br>
            Idén är enkel:<br>
            Vi reser i bil någonstans i Sverige.<br>
            Vi sover i vindskydd/ tält på kvällarna.<br>
            Vi lagar mat på allmänna grillar och tar med oss rätt utrustning för att kunna göra enkel men lagad och GOD
            mat!<br>
            På dagarna kör vi dit vägen leder oss. Badar, käkar glass, checkar in en och annan småstad. <br>
            Kanske vandrar en dag, gör upp ett camp i skogen och ljuger hela natten. <br>
            Vi gräver där vi står och gör det bästa utav stunden. Tillsammans!
        </p>
    </section>

    <section class="chapter">
        <p class="title">Premiss</p>

        <p class="text">

            Vi bokar alla in samma vecka i juli och åker t.ex. E4an norrut mot gävle och sedan in mot Dalarna.
            Under en vecka så glampar vi (glamorous camping) i vindskydd, tält eller väghotel.
            Med bil har vi alltid tillgång till närmsta biltema och affärer om vi behöver något,
            men samtidigt får vi chans att vistas utomhus på orter vi tidigare inte varit.
        </p>

    </section>

    <section class="chapter">
        <p class="title">Destination</p>

        <p class="text">

            Vi bokar alla in samma vecka i juli och åker t.ex. E4an norrut mot gävle och sedan in mot Dalarna.
            Under en vecka så glampar vi (glamorous camping) i vindskydd, tält eller väghotel.
            Med bil har vi alltid tillgång till närmsta biltema och affärer om vi behöver något,
            men samtidigt får vi chans att vistas utomhus på orter vi tidigare inte varit.
        </p>

        <a
            href="https://www.google.com/maps/d/u/0/viewer?mid=11N85EYWZGnL7lQrg1iA2XP1hQnrormK7&ll=59.990479557995876%2C17.09078342703018&z=8">
            <div class="img_div">
                <img src="../images/karta.jpg" alt="" id="karta">

            </div>
        </a>
        <br>
        <p class="text" style="font-style:italic">
            I Dalarna så hade jag gärna svängt förbi Falu koppargruva. Där erbjuder de b.la gruvturer under jorden! 
            1000 år av historia man bara måste ta del utav!
            
        </p>

        <a
            href="https://www.falugruva.se">
            <div class="img_div">
                <img src="../images/falu_koppargruva.jpeg" alt="" id="karta">

            </div>
        </a>

    </section>
    <br>



</body>

</html>