<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot About</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/hamburger.css">
    <script src = "../js/valid_forms.js"></script>
    <script src = "../js/mobileNav.js"></script>

</head>
<body>

    <div class="container">

    <nav class="menu">
        <ul class="active">
            <li class="current"><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Sign Ups</a></li>
        </ul>
        <button class="hamburger hamburger--squeeze" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
    </nav>

    <nav class="menubar">
        <ul class="active">
            <li class="current"><a ' . $classes[0] . 'href="' . $path_to_root . 'index.php">Home</a></li>
            <li><a ' . $classes[1] . 'href="' . $path_to_root . 'pages/about.php">Who We Are</a></li>
            <div id="whatwedo">
            <a ' . $classes[2] . 'href="#">What We Do</a>
                <div id="whatwedo-menu">
                    <a href="' . $path_to_root . 'pages/events.php">Parties and Events</a>
                    <br>
                    <a href="' . $path_to_root . 'pages/gifts.php">Personalized Gifts</a>
                    <br>
                    <a href="' . $path_to_root . 'pages/pottery.php">Pottery Painting</a>
                    <br>
                    <a href="' . $path_to_root . 'pages/workshops.php">Workshops and Classes</a>
                </div>
            </div>
            <a ' . $classes[3] . 'href="' . $path_to_root . 'pages/signup.php">Sign Up</a>
            <a ' . $classes[4] . 'href="' . $path_to_root . 'pages/contactus.php">Contact Us</a>
            ' . (empty($_SESSION['user']) ? "" : 
                    "<a href='{$path_to_root}pages/login.php'>Logout</a>"
            ) . '
        </ul>
    </nav>


         <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

        <!-- Display Workshop Sign Up Form --> 
        <div class="row">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <?php include "../components/sign_up_form.php" ?>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1 class="indexHeader">Available Workshop Times!</h1>
                <?php include "../components/calendar.php" ?>
            </div>
        </div> 

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->    

        <?php include "../components/footer.php" ?>

    </div><!-- container -->

    <!-- INCORRECT PATH TO ROOT -->
    <?php include '../components/globalscripts.php' ?>
    <!-- <script type="text/javascript" src="../js/whatwedomenu.js"></script> -->

</body>
</html>