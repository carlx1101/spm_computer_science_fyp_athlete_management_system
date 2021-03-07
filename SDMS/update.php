<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="update/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="update/css/styles.min.css">
</head>

<body>
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="home.php"><img src="update/img/logo.png" style="width: 100px;">Athlete&nbsp;Management System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="functions.html"><i class="fa fa-gear"></i>&nbsp;Functions</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label></div>
                </form><a class="btn btn-light action-button" role="button" href="logout.php" style="background-color: rgb(255,0,0);">Logout&nbsp;<i class="fas fa-door-open"></i></a></div>
        </div>
    </nav>
    <!-- End: Navigation with Search -->
    <!-- Start: Features Boxed -->
    <div class="features-boxed">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro"></div>
            <!-- End: Intro -->
        </div>
    </div>
    <!-- End: Features Boxed -->
    <!-- Start: 1 Row 3 Columns -->
    <div></div>
    <!-- End: 1 Row 3 Columns -->
    <!-- Start: Features Boxed -->
    <div class="features-boxed">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Update Data</h2>
            </div>
            <!-- End: Intro -->
            <!-- Start: Features -->
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-user icon"></i>
                        <h3 class="name">Athlete</h3>
                        <form action="athleteupdate.php" method="post" >
                            <br><br>
                            <p>Athelete Name</p><input class="form-control" type="text" placeholder="Username" required="" name="athletename">
                            <br><br>
                            <p>IC Number</p><input class="form-control" type="text" placeholder="IC Number" required="" name="icnumber">
                            <br>
                            <button class="btn btn-primary" type="submit">ADD</button>
                            <br><br><br><br>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-soccer-ball-o icon"></i>
                        <h3 class="name">Activities</h3>
                        <form action="activityupdate.php" method="post">
                        <br><br>
                            <p>Activity Code</p><input class="form-control" type="text" placeholder="Activity Code" required="" name="activitycode">
                            <br><br>
                            <p>Activity Name</p><input class="form-control" type="text" placeholder="Activity Name" required="" name="activityname">
                            <br>
                            <button class="btn btn-primary" type="submit">ADD</button></form>
                            <br><br><br>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="text-center box"><i class="fa fa-trophy icon"></i>
                
                        <h3 class="name">Accomplishment</h3>
                        <form action="accomplishmentupdate.php" method="post">
                        <p>Select Athlete</p>
                            <select class="custom-select" id="inputGroupSelect01" name= "athleteid">
                            <option selected>Choose...</option>

                            <?php
                            $con = mysqli_connect('127.0.0.1','root','');
                            // select database 
                            if(!mysqli_select_db($con,'sdms'))
                            {
                                echo "database not selected";
                            }
                            $sql = "SELECT * FROM athlete";  
                            // execute the sql query 
                            $records = mysqli_query($con, $sql);
                            foreach ($records as $records) {
                                echo '<option value="'.$records["AthleteID"].'">'.$records["AthleteName"].'</option>';
                            }
                             echo "</select>";
                           
                            ?>
                           

                            <p>Select Activity</p>
                            <select class="custom-select" id="inputGroupSelect01" name= "activityid">
                            <option selected>Choose...</option>
                            <?php
                            $con = mysqli_connect('127.0.0.1','root','');
                            // select database 
                            if(!mysqli_select_db($con,'sdms'))
                            {
                                echo "databse not selected";
                            }
                            $sql1 = "SELECT * FROM activity";  
                            // execute the sql query 
                            $records1 = mysqli_query($con, $sql1);
                            foreach ($records1 as $records1) {
                                echo '<option value="'.$records1["ActivityID"].'">'.$records1["ActivityName"].'</option>';
                                echo "$records1";
                            }
                            
                            ?>
                            </select>
                    


                            <p>Select Achievement</p>
                            <select class="custom-select" id="inputGroupSelect01" name= "achievement">
                            <option selected>Choose...</option>
                            <option value="1">Champion</option>
                            <option value="2">Silver Medal</option>
                            <option value="3">Third Winner</option>
                            </select>
                                <br>
                                <p>Select A Date </p>
                            <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label"></label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="engagement">
                                <br>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- End: Features -->
        </div>
    </div>
    <!-- End: Features Boxed -->
    <!-- Start: Footer Basic -->
    <div class="footer-basic">
        <footer>
            <!-- Start: Social Icons -->
            <div class="social"><a href="https://www.instagram.com/carlx1101/"><i class="icon ion-social-instagram"></i></a><a href="https://www.linkedin.com/in/carl-yip-63640a204/"><i class="icon ion-social-linkedin"></i></a><a href="https://github.com/carlx1101"><i class="icon ion-social-github"></i></a></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.html">Home</a></li>
                <li class="list-inline-item"><a href="#">Portfolio</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <!-- End: Links -->
            <!-- Start: Copyright -->
            <p class="copyright">YIP KAR FAI © 2021&nbsp;</p>
            <!-- End: Copyright -->
        </footer>
    </div>
    <!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>