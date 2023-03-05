<?php
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

<body id="start">
    <div class="front">
        <div id="prologue_div">
            <p id="prologue">
                Det kommer en tid när vi alla måste ta ett steg tillbaka. En paus från stress och press. <br>
                En stund för reflektion och passion. Denna sommar ska vi skapa stunder att minnas. <br>
                Med ett enkelt recept, blir det inte svårt. <br>
                En <b>bil</b>, goda <b>vänner</b>, jakten på <b>äventyr</b> och en påse <b>grillkol</b>. 
                <br><br>
                Valet är vårt, friheten väntar, vägen leder oss bort. Vi lever!
            </p>

        </div>
    
        <div id="wab_title" style="margin-top: 50px;">
            <p id="maintitle">Wolves & Badgers</p>
            <p id="subtitle">Highway to Heaven 2022</p>
            <div class="line" id="introline"></div>
            
            <form action="../process/password_process.php" method="POST">
            <input type="password" name="password" id="password" placeholder="Lösenord" >
            
            <button type="submit" class="btn" ></button>
            
            </form>
            <p style="letter-spacing: 2px;"> 
            <?php 
            
            if(isset($_GET['n_mtch'])){
                echo "Fel Lösenord";
                
            }  
            
            ?>
            </p>
        </div>

        

        
  
    </div>
</body>

</html>