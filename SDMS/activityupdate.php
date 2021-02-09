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
    $ActivityCode = $_POST['activitycode'];
    $ActivityName = $_POST['activityname'];

    $sql = "INSERT INTO activity (ActivityCode,ActivityName) VALUES ('$ActivityCode','$ActivityName')";

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