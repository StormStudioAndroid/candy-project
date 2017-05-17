<?php
    
    session_start();
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>

</head>

<body>
    



    
    
   
    <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
      <div class="auth-form">
        <?php 
    if (isset($_SESSION['site_manager']) && $_SESSION['site_manager']->isAuthorized()) {
    include ("/blocks/navbar.php"); 
    } else {
        if (!isset($_GET['option']) || $_GET['option']<>"registration") {
                include ("/auth_form.php");
        } else {
            include ("/reg_form.php");
        }
    }
       ?>
          </div>
        </div>
  <div class="col-md-3"></div>
</div>
 
<main>
</main>

<footer>
</footer>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>