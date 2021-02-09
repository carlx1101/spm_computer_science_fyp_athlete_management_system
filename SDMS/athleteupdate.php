<?php

    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo "Not connected to server"; 
    }
    if(!mysqli_select_db($con,'sdms'));
    {
        echo "database selected.<br>";
    }
    $AthleteName = $_POST['athletename'];
    $ICNumber = $_POST['icnumber'];
    

    $sql = "INSERT INTO athlete (AthleteName,ICNumber) VALUES ('$AthleteName','$ICNumber')";
    if (!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        echo 'Data Inserted';
    }

    header("refresh:2; url=update.php");

?>