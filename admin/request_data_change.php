<?php 
  require "../connect.php";
  session_start();

  if(empty($_SESSION['email'])){
    echo "<script>alert('Session Expired!!!'); window.location.href = '../index.php';</script>"; 
  }else{
    
    $email = $_SESSION['email'];

    $sql = "SELECT dept FROM admin WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows <= 0) {
        echo "<script> alert('Sorry. You are not a admin.'); window.location.href='../index.php';</script>";
    }else{
      while ($row = $result->fetch_assoc()) {
          $_SESSION['dept'] = $row['dept']."";
      }
      $dept = $_SESSION['dept'];
    }
  }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Department Admin | PICT-Top Engineering College</title>
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
      width: 100%;
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
    .fadeIn {
      animation: fadeIn ease 1s;
      transform: translateY(100);
    }

    @keyframes fadeIn {
      0% {
        opacity:0;
      }
      100% {
        opacity:1;
      }
    }

    .menu_title {
      position: relative;
      display: inline-block;
    }

    .menu_title .badge {
      position: absolute;
      right: -30px;
      padding: 5px 10px;
      border-radius: 50%;
      background-color: green;
      color: white;
    }

  </style>
</head>

  <body>

    <!-- header -->
    <?php require('common_files/header_dept_Admin.php')?>

    <div class="main_container">
      <!-- Nav bar -->
      <div id="sidebar" >
        <ul class="sidebar-nav">
          <br>
          <li class="" style="color: white;"><span class="glyphicon glyphicon-user">
            </span>&nbsp Manage faculty
          </li>
          <ul class="inner">
            <li><a data-toggle="modal" href="#addFaculty">Add Faculty</a></li>
            <li><a data-toggle="modal" href="#removeFaculty">Remove Faculty</a></li>
            <li><a href="request_data_change.php">Requests</a></li>
          </ul>
        </ul>
      </div>

      <div class="table_data">
        <!-- tables HOD -->
        <?php require('table_data/requests/profile_update_requests.php'); ?>
        <!-- table Conferences -->
        <!-- <?php require('table_data/requests/conferences_update_request.php'); ?>

        <?php require('table_data/requests/books_update_request.php'); ?>

        <?php require('table_data/requests/consultancy_update_request.php'); ?>  

        <?php require('table_data/requests/fundpr_update_request.php'); ?> 

        <?php require('table_data/requests/journal_update_request.php'); ?> 

        <?php require('table_data/requests/patent_update_request.php'); ?> 

        <?php require('table_data/requests/quali_update_request.php'); ?> 

        <?php require('table_data/requests/content_upload_request.php'); ?>  -->

      </div>
    </div>

    <!-- add faculty model -->
    <?php require('models/faculty_models/add_faculty.php'); ?>
    <!-- remove faculty model -->
    <?php require('models/faculty_models/remove_faculty.php'); ?>

    <?php require('models/faculty_models/view_request_details_model.php'); ?>

    <!-- <?php require('models/faculty_models/conf_request_model.php'); ?>

    <?php require('models/faculty_models/books_request_model.php'); ?>

    <?php require('models/faculty_models/consultancy_request_model.php'); ?>

    <?php require('models/faculty_models/fundpr_request_model.php'); ?>

    <?php require('models/faculty_models/journal_request_model.php'); ?>

    <?php require('models/faculty_models/patent_request_model.php'); ?>

    <?php require('models/faculty_models/quali_request_model.php'); ?>

    <?php require('models/faculty_models/content_request_model.php'); ?> -->

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