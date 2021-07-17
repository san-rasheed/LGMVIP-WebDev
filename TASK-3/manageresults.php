<?php
if(isset($_POST['resultssubmit']))
 {
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("studentresult");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
$sid=$_POST['sid'];
$language=$_POST['language'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$sql="UPDATE `tblstudent` SET `language`='$language',`english`='$english',`maths`='$maths',`science`='$science',`social`='$social' WHERE `sid`='$sid' ;";
$mysqli->query($sql);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Manage Results</title>
      <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  <?php include 'styles.php' ?>
  </head>
  <body style="background: url('images/sample4.jpg')">

  <section id="manage">

    <div class="container">
      <h1>Manage Results </h1>
    <div class="d-flex justify-content-center h-100">
    <div class="card" style="height:55vh">

      <div class="card-body ">
        <form action="" method="post">
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="sid" class="form-control" placeholder="Enter Student Id">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-language"></i></span>
            </div>
            <input type="text" name="language" class="form-control" placeholder="Enter Language marks">
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-language "></i></span>
            </div>
            <input type="text" name="english" class="form-control" placeholder="Enter English marks">
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calculator"></i></span>
            </div>
            <input type="text" name="maths" class="form-control" placeholder="Enter Maths marks">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-microscope"></i></span>
            </div>
            <input type="text" name="science" class="form-control" placeholder="Enter Science marks">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-globe"></i></span>
            </div>
            <input type="text" name="social" class="form-control" placeholder="Enter Social marks">
          </div>
          <div class="form-group">
            <input type="submit" value="Add" name="resultssubmit"class="btn float-right login_btn">
                <button type="reset" class="btn  logr" name="button">Reset</button>
          </div>
        </form>
      </div>

    </div>
    </div>
    </div>

  </section>
  </body>
  </html>
