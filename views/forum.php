<?php
session_start();
if (isset($_SESSION['WB'])===FALSE){
    header("Location:../views/start.php");
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
        <div class="pagetitle">
            <p style="margin: 2%;">
                Forum
            </p>
            
        </div>
        <div class="line" id="subline"></div>
        
            <p class="pagedesc">
                Här kan man skriva ett inlägg om man vill diskutera något kring resan.
                Man kan även kommentera (!!).
            </p>
            
            <button class="skriv" id="skrivbtn">Skapa inlägg</button>
           
   
        <div class="skapainlägg" id="skapainlägg">
            <form action="../process/addmessage.php" method="POST">
                <label for="namn">Ditt namn</label>
                <input type="text" class="inputinlägg" id="namn" name="namn" maxlength="12">
                <label for="rubrik">Rubrik</label>
                <input type="text" class="inputinlägg" id="rubrik" name="rubrik" maxlength="22">
                <label for="meddelande">Meddelande</label>
                <textarea cols="40" rows="6" class="inputinlägg" id="meddelande" name="meddelande" style="resize: none;"></textarea>
                <input type="hidden" name="datum" value="<?php echo date("d F Y H:i") ?>">
                
                <button type="submit" class="btn" ></button>
            
            </form>
            
        </div>
        
            <?php 
            include '../process/posts_process.php';
            unset($_SESSION['tid']);
            
            getmessagefromdb();
            ?>
            


       
    </section>
<br>
<br>

<script src="../js/myscript.js"></script>
</body>
</html>