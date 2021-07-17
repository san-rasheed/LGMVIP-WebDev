<?php
if(isset($_POST['changesubmit']))
{
  $server="localhost";
  $username="root";
  $password="";
  $mysqli = new mysqli($server, $username, $password);
  $mysqli->select_db("studentresult");

  $sid=$_POST['sid'];
  $cpassword=$_POST['cpassword'];
  $npassword=$_POST['npassword'];
  $sql="SELECT `password` FROM `tblstudent` WHERE `sid`='$sid';";
  $result=$mysqli->query($sql);
  $row=$result->fetch_array(MYSQLI_NUM);
  if($cpassword==$row[0])
  {
    $sql2="UPDATE `tblstudent` SET `password`='$npassword' WHERE `sid`='$sid';";
    $mysqli->query($sql2);
    }

  else  {
    echo '<script type="text/JavaScript">
       window.alert("Please Check Your Old Password");
       </script>';
  }
  if($cpassword==$npassword)
      {
        echo '<script type="text/JavaScript">
           window.alert("Your Old and New password should not be same");
           </script>';
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change Password </title>
      <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <?php include 'styles.php' ?>
 <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </head>
  <body style="background: url('images/sample4.jpg')">
      <a href="logout.php">  <input class="print" type="button" style="" value="Log Out"></a>
    <div class="container">
      <h1>Change Password </h1>
  <div class="d-flex justify-content-center h-100">
    <div class="card">

      <div class="card-body">
        <form action="changepassword.php" method="post">
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="sid" class="form-control" placeholder="Enter Student Id">

          </div>
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="cpassword" class="form-control" placeholder="Enter Old Password">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="npassword" class="form-control" placeholder="Enter New Password">
          </div>

          <div class="form-group">
            <input type="submit" name="changesubmit" value="Confirm" class="btn float-right login_btn">
              <button type="reset" class="btn  logr" name="button">Reset</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

  </body>
</html>
