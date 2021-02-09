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

    $AthleteID = $_POST['athleteid'];
    $ActivityID = $_POST['activityid'];
    $Achievement = $_POST['achievement'];
    $Engagement = $_POST['engagement'];
    
    $sql = "INSERT INTO accomplishment (Achievement,Engagement,AthleteID,ActivityID) VALUES ('$Achievement','$Engagement','$AthleteID','$ActivityID')";
    if (!mysqli_query($con,$sql))
    {
        echo $sql;
    }
    else
    {
        echo 'Data Inserted';
    }
    header("refresh:2; url=update.php");
?>