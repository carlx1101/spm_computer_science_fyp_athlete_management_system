<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="home/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="home/css/styles.min.css">
</head>

<body>
    <!-- Start: Navigation with Search -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="home.php"><img src="home/img/logo.png" style="width: 100px;">Athlete&nbsp;Management System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <!-- Start: 1 Row 2 Columns -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h1>Welcome</h1>
                        <p>The Sport Management System is a Database Management System (DBMS) primarily developed to monitor data on the activities of school athletes and sports.</p>
                        <p><a class="btn btn-primary" role="button" href="functions.html">Functions</a></p>
                    </div>
                </div>
                <div class="col-md-6"><img src="home/img/smkpi.jpg" style="width: 320px;"></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 2 Columns -->
    <!-- Start: Features Boxed -->
    <div class="features-boxed">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Features </h2>
                <p class="text-center"></p>
            </div>
            <!-- End: Intro -->
            <!-- Start: Features -->
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-database icon"></i>
                        <h3 class="name">Powerful Databases</h3>
                        <p class="description">High effiency and powerful databases. Avoid any redundancy and duplication of data.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">No Restrictions</h3>
                        <p class="description">No constraints on demographics and time. Using 24/7 operations anywhere, wherever you like!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable </h3>
                        <p class="description">Highly customization, particularly for administrators, functions. Multiple choices are under your influence!</p>
                    </div>
                </div>
            </div>
            <!-- End: Features -->
        </div>
    </div>
    <!-- End: Features Boxed -->
    <!-- Start: Map Clean -->
    <div class="map-clean">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Location </h2>
                <p class="text-center"></p>
            </div>
            <!-- End: Intro -->
        </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB9mFphPB8JoW3uYTyQAXEFOAKKU9yZnxM&amp;q=Jalan+Pandan+Ilmu%2C+Pandan+Indah%2C+56100+Kuala+Lumpur%2C+Selangor&amp;zoom=15" width="100%" height="450"></iframe></div>
    <!-- End: Map Clean -->
    <!-- Start: Footer Basic -->
    <div class="footer-basic">
        <footer>
            <!-- Start: Social Icons -->
            <div class="social"><a href="https://www.instagram.com/carlx1101/"><i class="icon ion-social-instagram"></i></a><a href="https://www.linkedin.com/in/carl-yip-63640a204/"><i class="icon ion-social-linkedin"></i></a><a href="https://github.com/carlx1101"><i class="icon ion-social-github"></i></a></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="https://carlx1101.github.io/Personal_Portfolio/">Portfolio</a></li>
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