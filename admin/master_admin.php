<?php 

  require "../connect.php";
  session_start();

  if(empty($_SESSION['email'])){
    echo "<script> alert('Session Expired!!!'); window.location.href = '../index.php';</script>"; 
  }else{
    $email = $_SESSION['email'];

    if($email != $_SESSION['master_admin']){
      echo "<script> alert('You are not Master Admin.'); window.location.href = '../index.php';</script>"; 
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Master Admin | PICT-Top Engineering College</title>
  <link rel="icon" type="images/jpg" href="../images/logo.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-signin-client_id" content="950584802726-k1bd4kegkj9js648s63ngrsokutgrstk.apps.googleusercontent.com">
  
  <script src="../js/platform.js" async defer></script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/sidebar.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
    body, html { 
      height: 100%;
    }
    .main_container {
      height: 100%;
      width: 100%;
    }
    .table_data {
      height: 100%;
      display: inline-block;
      overflow: auto;
    } 
    #sidebar{
      position: absolute;
      width: 250px;
      background-color: #2d2a2a;
      height: 100%;
      display: inline-block;
      overflow: auto;
    }
    a:hover {
      color: #fff;
      text-decoration: none;
    }

  </style>

</head>

<body>

  <!-- header -->
  <?php require('common_files/header_master_Admin.php')?>

  <div class="main_container">
    <!-- Nav bar -->
    <div id="sidebar" >
      <ul class="sidebar-nav">
        <br>
        <li class="" style="color: white;"><span class="glyphicon glyphicon-user">
          </span>&nbsp Manage faculty
        </li>
        <ul class="inner">
          <li><a data-toggle="modal" href="#addAdmin_model">Add Admin</a></li>
          <li><a data-toggle="modal" href="#removeAdmin_model">Remove Admin</a></li>
        </ul>
      </ul>
    </div>

    <!-- Add Admin Model -->
    <?php require('models/admin_models/addAdmin_model.php'); ?>

    <!-- Remove Admin Model -->
    <?php require('models/admin_models/removeAdmin_model.php'); ?>

    <div class="table_data">

      <!-- Admins data -->
      <?php require('table_data/admins.php'); ?>
      
    </div>

  </div>

  <script>

    function init(){
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }

    init();

    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }

  </script>


</body>

</html>