<?php

    include "connect.php";
    session_start();

    if(empty($_POST['email'])){
        echo "<script> window.location.href = 'index.php'; </script>";
    }else{
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    }

    $isFaculty = False;
    $isAdmin = False;

    // checking faculty
    $sql1 = "SELECT eid FROM faculty WHERE email = '$email'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
        $isFaculty = True;
    }

    // checking is admin
    $sql2 = "SELECT emp_id FROM admin WHERE email = '$email'";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        $isAdmin = True;
    }

    if($isAdmin == False and $isFaculty == False){
        echo "<script> alert('You are not Authorized Person. Please contact Department admin.'); window.location.href='index.php';</script>";
    }elseif($isAdmin and !$isFaculty){
        
        $_SESSION['master_admin'] = "demo@pict.edu";

        if($email == $_SESSION['master_admin']){
          echo "<script> window.location.href='admin/master_admin.php';</script>";
        }else{
            echo "<script> window.location.href='admin/dept_admin.php';</script>";
        }
    }elseif($isFaculty and !$isAdmin){
        echo "<script> window.location.href='facultyPage/index.php';</script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | PICT-Top Engineering College</title>
    <meta name="google-signin-client_id" content="950584802726-k1bd4kegkj9js648s63ngrsokutgrstk.apps.googleusercontent.com">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="css/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <script src="js/platform.js" async defer></script>

    <style type="text/css">
        body, html {
            font-size: 15px;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .card {
            height: 200px;
            width: 400px;
        }
        .card:hover{
            box-shadow: 2px 2px gray;    
            transform: scale(1.1);
        }
        .bg-image { 
            background-image: url("images/bg7.jpg");
            background-color: rgba(11, 60, 93, 0.5);
            background-blend-mode: color-burn;
            filter: blur(7px);
            -webkit-filter: blur(7px);
            height: 102%; 
            width:98%;
            z-index:-1;
            position:absolute;
            top:-15px;
            left:8px;
            transform:scale(1.03);
            background-attachment: fixed;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
    </style>

    
</head>
<body>

    <div class="container login-container">

        <div class="row mt-5 mb-3 pb-3" style="width:100%;">
          <div class="col-12">
              <center>
                <h1 class="mt-5" style="color:white;"><b>Select Redirection Account..</b></h1>
                <hr style="width:70%; background-color: white">
                <a href="index.php" onclick="signOut();">Sign out</a>
                <script>
                  function signOut() {
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function () {
                      console.log('User signed out.');
                    });
                  }
                </script>
              </center>
          </div>
        </div>

        <!-- background Image -->
        <div class="bg-image"></div>

        <div class="row login-container">
          <div class="col-sm-6 box">
            <center>
                <div class="card">
                  <div class="card-body">
                    <img src="images/admin.png" style="height: 100px; width: 100px;">
                    <br>
                    <a href="admin/dept_admin.php" class="btn btn-primary">Admin Panel</a>
                  </div>
                </div>
            </center>
          </div>

          <div class="col-sm-6 box">
            <center>
                <div class="card">
                  <div class="card-body">
                    <img src="images/teacher.png" style="height: 100px; width: 100px;">
                    <br>
                    <a href="facultyPage/index.php" class="btn btn-primary">Faculty Panel</a>
                  </div>
                </div>
            </center>
          </div>

        </div>
    </div>

    <!-- for posting data to admin -->
    <div id="formDiv"> </div>

    <script type="text/javascript">
        
        function init(){
          gapi.load('auth2', function() {
            gapi.auth2.init();
          });
        }
    </script>

</body>
</html>