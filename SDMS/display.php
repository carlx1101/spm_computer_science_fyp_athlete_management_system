

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/styles.min.css">
</head>

<body class="text-danger">
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
    </nav>
    <!-- End: Navigation Clean -->
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Athelete Management System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="update.php">Previous</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navigation Clean -->
    <div class="container">
        <h3 class="text-center">All Athlete</h3>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Athlete IC</th>
                    <th>Athlete Name</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <tr>
                </tr>
                <tr>
                </tr>
            </tbody>
            


            <?php

    // create connecttion with mysql database 
    $con = mysqli_connect('127.0.0.1','root','');

    // select database 
    if(!mysqli_select_db($con,'sdms'))
    {
        echo "database not selected";
    }

    $sql = "SELECT * FROM athlete";  
    // execute the sql query 
    $records = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['ICNumber']."</td>";
        echo "<td>".$row['AthleteName']."</td>";
        echo "<td><button><a href=editathlete.php?id=".$row['AthleteID'].">Edit</button></td>";
        echo "<td><button><a href=deleteathlete.php?id=".$row['AthleteID'].">Delete</button></td>";
    
        
    }

?>
        </table>
    </div>


    <br><br>
    <div class="container">
        <h3 class="text-center">All Activities</h3>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Acvitivity Code</th>
                    <th>Activity Name</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <tr>
                </tr>
            </tbody>


            <?php

    // create connecttion with mysql database 
    $con = mysqli_connect('127.0.0.1','root','');

    // select database 
    if(!mysqli_select_db($con,'sdms'))
    {
        echo "database not selected";
    }

    $sql = "SELECT * FROM activity";  
    // execute the sql query 
    $records = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['ActivityCode']."</td>";
        echo "<td>".$row['ActivityName']."</td>";
        echo "<td><button><a href=deleteactivity.php?id=".$row['ActivityID'].">Delete</button></td>";   
    }
   ?>

        </table>
    </div>



    <br><br>
    <div class="container">
        <h3 class="text-center">All Data</h3>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Athlete IC</th>
                    <th>Athlete Name</th>
                    <th>Activity Code</th>
                    <th>Activity Name</th>
                    <th>Accomplishment</th>
                    <th>Engagement Date</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <tr>
                </tr>
            </tbody>
            
            <?php

    // create connecttion with mysql database 
    $con = mysqli_connect('127.0.0.1','root','');

    // select database 
    if(!mysqli_select_db($con,'sdms'))
    {
        echo "database not selected";
    }

    $sqli = "SELECT * FROM accomplishment INNER JOIN athlete ON athlete.AthleteID = accomplishment.AthleteID INNER JOIN activity ON activity.ActivityID = accomplishment.ActivityID ";
      
    // execute the sql query 
    $records = mysqli_query($con, $sqli);

    while($row = mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['ICNumber']."</td>";
        echo "<td>".$row['AthleteName']."</td>";
        echo "<td>".$row['ActivityCode']."</td>";
        echo "<td>".$row['ActivityName']."</td>";
        echo "<td>".$row['Achievement']."</td>";
        echo "<td>".$row['Engagement']."</td>";
        
    }
   ?>

        </table>
        <br><br><br>

  

        <div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-primary" value="Print Data" onClick="window.print()">Print All</button>
    </div>
  </div>
</div>
    
        <br>

        <script type="text/javascript">
        function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>


