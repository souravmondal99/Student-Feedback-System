<?php
session_start();
require('dbconfig.php');

error_reporting(0);

extract($_POST);
if (isset($save)) {
  //check user alereay exists or not
  $sql = mysqli_query($conn, "select * from user where email='$e'");

  $r = mysqli_num_rows($sql);

  if ($r == true) {
    $err = "<font color='red'><h3 align='center'>This user already exists</h3></font>";
  } else if (strlen($mob) < 10 || strlen($mob) > 10) {
    $err = "<font color='red'><center>Mobile number must be 10 digit</center></font>";
  } else {

    //image
    $image = $_FILES['image']['name'];

    $target = "images/" . basename($image);

    //encrypt your password
    $pass = md5($p);


    $query = "insert into user values(NULL,'$n','$e','$pass','$mob','$pro','$sem','$gen','$image','$yy',now())";

    mysqli_query($conn, $query);

    //upload image

    mkdir("images/$e");

    move_uploaded_file($_FILES['image']['tmp_name'], "images/$e/" . $_FILES['image']['name']);


    $err = "<h3 align='center' style='color: lawngreen'>Registration successfull !!<h3>";
  }
}

?>

<!DOCTYPE HTML>

<html>

<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Student Feedback System</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/main_reg2.css">

  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">


  <style>
    body {
      width: 100%;
      color: #bfbfbf;
      background-size: cover;
      background: url("images/blur10.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    input[type="radio"] {
      -webkit-appearance: radio;
    }

    input::placeholder {

      font-size: 1.2em;
    }
  </style>
</head>



<body>
  <header id="header" class="alt">
    <div class="logo">
      <h4 style="color:white;">Welcome to Student Feedback System</h4>
    </div>
    <a href="index.php">Back to Homepage</a>
  </header>

  <!-- Nav -->


  <!-- One -->
  <div class="wrapper-style4">
    <header class="align-center">
      <h2 style="color:white; margin-top: 20px;margin-left: 48px">Student Registration Form</h2>
    </header>
  </div>

  <div class="signup-form">
    <div class="main-div">
      <div class="panel panel-default" style="padding: 30px 25px">
        <!-- <h2 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color:#ffffff">Student Signup</h2> -->
        <form id="signup" method="post" enctype="multipart/form-data">
          <div style="color: red "><?php

                                    echo @$err;

                                    ?>
          </div>
          <div class="form-group">
            <input type="Name" class="form-control" id="inputName" style="color:white; font-size: 1.2em" placeholder="Name" name="n" required>
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" style="color:white;font-size: 1.2em" placeholder="Email Address" name="e" required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" style="color:white;font-size: 1.2em" placeholder="Password" name="p" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="inputMob" style="color:white;font-size: 1.2em" placeholder="Mobile Number" maxlength="10" name="mob" required>
          </div>

          <div class="form-group">
            <select class="form-control" id="inputProgram" style="color:white;font-size: 1.2em;background-color: transparent" placeholder="Program" name="pro" required>

              <option value="" disabled selected>Stream</option>
              <option style="color:black">MCA</option>
              <option style="color:black">BCA</option>
              <option style="color:black">B.Tech</option>
              <option style="color:black">M.Tech</option>

            </select>

          </div>

          <div class="form-group">
            <select class="form-control" id="inputSemester" style="font-size: 1.2em;background-color: transparent; color:white" placeholder="Semester" name="sem" required>

              <option value="" disabled selected>Semester</option>
              <option style="color:black">i</option>
              <option style="color:black">ii</option>
              <option style="color:black">iii</option>
              <option style="color:black">iv</option>
              <option style="color:black">v</option>
              <option style="color:black">vi</option>
              <option style="color:black">vii</option>
              <option style="color:black">viii</option>

            </select>
          </div>

          <div class="form-group">

            <select class="form-control" id="inputGender" style="color:white;font-size: 1.2em;background-color: transparent" placeholder="Gender" name="gen" required>

              <option value="" disabled selected>Gender</option>
              <option style="color:black">Male</option>
              <option style="color:black">Female</option>

            </select>

          </div>

          <div class="form-group">

            <input type="hidden" name="size" value="1000000">

            <input type="text" onfocus="(this.type='file')" class="form-control" id="inputImage" style="color:white;font-size: 1.2em; padding-left: 5px; padding-top: 5px;" placeholder="Upload Image" name="image" required>

            <!--	<input type="file" class="form-control" id="inputImage" style="color:white;font-size: 1.2em; padding-left: 5px; padding-top: 5px;" placeholder="Image" name="img" required> -->


          </div>

          <div class="form-group">

            <input type="text" class="form-control" id="inputDate" style="color:white;font-size: 1.2em"  placeholder="Date of Birth"  onfocus="(this.type='date')" name="yy" required>
      
          </div>




          <input type="submit" value="Save" class="btn btn-info" name="save" />

          <button type="reset" style="background-color: #ff6600" value="Reset" class="btn btn-warning" /> Reset </button>

          <span>Existing Student?</span> <a href="Login1.php" style="color:#00ffe7;">Login here</a>

        </form>
      </div>

    </div>
  </div>




  <!-- Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.scrollex.min.js"></script>
  <script src="js/skel.min.js"></script>
  <script src="js/util.js"></script>
  <script src="js/main.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>


</body>

</html>