<?php
if(isset($_POST['classubmit']))
 {
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("studentresult");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

$cid=$_POST['cid'];
$cname=$_POST['cname'];
$sql="INSERT INTO `tblclass`(`cid`,`cname`) VALUES ('$cid','$cname');";
$mysqli->query($sql);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Login</title>
      <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  <?php include 'styles.php' ?>
  </head>

  <body style="background: url('images/sample4.jpg')">
    <section id="addclass">

    <div class="container">
      <h1>Add Class </h1>
    <div class="d-flex justify-content-center h-100">
    <div class="card">

      <div class="card-body">
        <form action="addclass.php" method="post">
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="cid" class="form-control" placeholder="Class Id">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-school"></i></span>
            </div>
            <select name="cname"  class="form-control">
    <option value="First">1</option>
    <option value="Second">2</option>
    <option value="Third">3</option>
    <option value="Fourth">4</option>
      <option value="Fifth">5</option>
        <option value="Sixth">6</option>
          <option value="Seventh">7</option>
            <option value="Eighth">8</option>
              <option value="Ninth">9</option>
                <option value="Tenth">10</option>
  </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Add" name="classubmit"class="btn float-right login_btn">
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
