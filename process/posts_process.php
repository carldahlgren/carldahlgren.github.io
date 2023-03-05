<?php

function showsinglethread($tid){
    
    $conn=connecttodb();
    $sql = "SELECT * FROM Posts WHERE tid= '$tid'";
    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_assoc($result))
    {
      
        echo'
        <div class="singleinlägg" id="forfade">    
        
            <p class="inlägg-title">'.$row['RUBRIK'].'</p>
        
                <ul class="meta-inlägg">
                <li class="meta">Av:<b> '.$row['NAMN'].'</b></li>
                    <li class="meta">'.$row['DATUM'].'</li>
                    
                </ul>
                <ul style="margin-bottom:20px;" class="meta-inlägg">
                    <li style="font-style:italic;" class="meta"> '.$row['GILLNINGAR'].' ❤</li>
                    <li style="font-style:italic;color:grey"class="meta">Kommentarer ('.$row['KOMMENTAR_ANTAL'].')</li>
                    
                </ul>
                
               
                <p class="text" id="post">'.$row['MEDDELANDE'].'</p>
                

                <ul style="list-style-type: none ; padding: 0; ">
                <li style="float: left;">
                <button class="btn2" id="skrivbtn"> ↲ Svara  </button>
                </li>
                <li style="float: left; margin-left: 10px">
                <form action="../process/addlike.php" method="POST">
                <input type="hidden" value="'.$_SESSION['tid'].'" name="tid">
                <button type="submit" class="btn2" id="skrivbtn"> ❤ </button>
                </form>
                </li>
                </ul>
                
                
                
                    
        </div>

        <div class="skapainlägg" id="writecomment">
        <form action="../process/addcomment.php" method="POST">
                <label for="namn">Ditt namn</label>
                <input type="text" class="inputinlägg" id="namn" name="namn" maxlength="12">
                <label for="meddelande">Kommentar</label>
                <textarea cols="40" rows="6" class="inputinlägg" id="kommentar" name="kommentar" style="resize: none;"></textarea>
                <input type="hidden" name="tid" value="'.$row['tid'].'">
                <input type="hidden" name="datum" value="'.date("d F Y H:i").'">
                <button type="submit" class="btn2" > Skicka</button>
                
            
            </form>
        </div>'
        ;
    
    }
    mysqli_close($conn);
    getcommentsfromdb($tid);
}
function getmessagefromdb(){
    $conn=connecttodb();
    $sql = "SELECT * FROM Posts ORDER BY DATUM DESC";
    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_assoc($result))
    {
      
        echo'
        <div class="inlägg" id="forfade">    
        <form action="./singlethread.php" method="POST">
        <input type="hidden" name="tid" value="'.$row['tid'].'">
        <input type="submit" value="KNAPP!" id="storknapp" >
        </form>
            <p class="inlägg-title">'.$row['RUBRIK'].'</p>
        
                <ul class="meta-inlägg">
                    <li class="meta">Av:<b> '.$row['NAMN'].'</b></li>
                    <li class="meta">'.$row['DATUM'].'</li>
                </ul>
                <ul style="margin-bottom:20px;" class="meta-inlägg">
                    <li style="font-style:italic;" class="meta">'.$row['GILLNINGAR'].' ❤</li>
                    <li style="font-style:italic;color:grey"class="meta">Kommentarer ('.$row['KOMMENTAR_ANTAL'].')</li>
                    
                </ul>
                <p class="text">'.$row['MEDDELANDE'].'</p>
                
        </div>'
        ;
    
    }
    mysqli_close($conn);
}

function addmessagetodb($name,$rubrik,$meddelande,$datum){

    $conn=connecttodb();
    $sql="INSERT INTO Posts (NAMN,RUBRIK,MEDDELANDE,DATUM) 
    VALUES ('$name','$rubrik','$meddelande','$datum')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
    mysqli_close($conn);
    
    header("location:../views/forum.php");
    
}

function connecttodb(){
    $servername = "mysql78.unoeuro.com";
    $username= "wolvesandbadgers_se";
    $password= "HF65Bbwhtdm4";
    $db = "wolvesandbadgers_se_db";
    $conn =  mysqli_connect($servername, $username, $password, $db);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    //   echo "Connected successfully";
      return $conn;
}

function addcommenttodb($name,$comment,$datum,$tid){

    $conn=connecttodb();
    $sql="INSERT INTO Comments (NAMN,KOMMENTAR,DATUM,tid) 
    VALUES ('$name','$comment','$datum','$tid')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
    mysqli_close($conn);
    countcomments($tid);
    // $_SESSION['tid'] = $tid;
    header("location:../views/singlethread.php");
    
}
function getcommentsfromdb($tid){
    
    $conn=connecttodb();
    
    $sql = "SELECT * FROM Comments WHERE `tid`= '$tid' ORDER BY 'DATUM' ASC ";
    $result = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_assoc($result))
    {
      
        echo'
        <div class="commentbox" >    
     
                <ul class="meta-inlägg">
                    <li class="meta" style="font-weight: bold; font-style: italic">'.$row['NAMN'].'</li>
                    <li class="meta" style = "font-style: italic">'.$row['DATUM'].'</li>
                </ul>
                <p class="commenttext" >'.$row['KOMMENTAR'].'</p>
                
        </div>'
        ;
    
    }
    mysqli_close($conn);
}
function addlike($tid){
    $conn=connecttodb();
    $sql="UPDATE Posts SET GILLNINGAR = GILLNINGAR + 1 WHERE `tid` = '$tid' ";
    

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
    mysqli_close($conn);
    
    
    
}
function showlikes($tid){
    $conn=connecttodb();
    $sql = "SELECT 'GILLNINGAR' FROM Posts WHERE tid= '$tid'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    return $row['GILLNINGAR'];

}
function showcommentcount($tid){
    $conn=connecttodb();
    $sql = "SELECT 'KOMMENTAR_ANTAL' FROM Posts WHERE tid= '$tid'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    return $row['KOMMENTAR_ANTAL'];
}
function countcomments($tid){
    $conn=connecttodb();
    $sql="UPDATE Posts SET KOMMENTAR_ANTAL = KOMMENTAR_ANTAL + 1 WHERE `tid` = '$tid' ";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
    mysqli_close($conn);
}
?>