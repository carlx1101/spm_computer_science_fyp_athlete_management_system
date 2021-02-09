<?php
    $con = mysqli_connect('127.0.0.1','root','');
    
    $id = $_GET['id'];
 
    
    mysqli_select_db($con,'sdms');

    $sql = "DELETE FROM athlete WHERE AthleteID =" .  $id;

    if(mysqli_query($con, $sql))
        header("refresh:1; url=display.php");
    else 
        echo"Not deleted";

?>