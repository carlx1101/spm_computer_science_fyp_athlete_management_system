<?php
    $con = mysqli_connect('127.0.0.1','root','');
 
    mysqli_select_db($con,'sdms');

    $sql = "DELETE FROM activity WHERE ActivityID ='$_GET[id]'";

    if(mysqli_query($con, $sql))
        header("refresh:1; url=display.php");
    else 
        echo"Not deleted";

?>