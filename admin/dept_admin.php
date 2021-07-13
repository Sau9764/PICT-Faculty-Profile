<?php 
  require "../connect.php";
  session_start();

  if(empty($_SESSION['email'])){
    echo "<script>alert('Session Expired!!!'); window.location.href = '../index.php';</script>"; 
  }else{

    $_SESSION['master_admin'] = "demo@pict.edu";

     $email = $_SESSION['email'];

    if($email == $_SESSION['master_admin']){
      echo "<script> window.location.href='master_admin.php';</script>";
    }
    
   

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
        <?php require('table_data/hod.php'); ?>
        <!-- professor table -->
        <?php require('table_data/professor.php'); ?>
        <!-- Associate professor table -->
        <?php require('table_data/asso_professor.php'); ?>
        <!-- Assistant Professor -->
        <?php require('table_data/assis_professor.php'); ?>
        <!-- Adjunct Professor -->
        <?php require('table_data/adj_professor.php'); ?>
      </div>
    </div>

    <!-- add faculty model -->
    <?php require('models/faculty_models/add_faculty.php'); ?>
    <!-- remove faculty model -->
    <?php require('models/faculty_models/remove_faculty.php'); ?>

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