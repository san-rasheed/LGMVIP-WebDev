<?php
if(isset($_POST['adminsubmit']))
 {
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("studentresult");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM `tbladmin` where `username`= '$username' and `password`='$password'; ";
$result=$mysqli->query($sql);
$rowcount=$result->num_rows;
if($rowcount==1){
       header("Location:dashboard.php?username=$username");
     }
     else{
         include('script.php');
    }
}
if(isset($_POST['stusubmit']))
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
$password=$_POST['password'];
$sql1="SELECT * FROM `tblstudent` where `sid`= '$sid' and `password`='$password' ";
$result1=$mysqli->query($sql1);
$rowcount1=$result1->num_rows;
if($rowcount1==1){
       header("location:results.php?sid=$sid");
     }
     else{
         include('script.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Login</title>
      <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <?php include 'styles.php' ?>
 <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </head>
  <body style="background: url('images/sample4.jpg')"  >
    <section id="admin">

      
    <div class="container">
      <h1>Admin Login </h1>
	<div class="d-flex justify-content-center h-100">
		<div class="card">

			<div class="card-body">
				<form action="login.php" method="post">
					<div class="input-group form-group">

						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>

					<div class="form-group">

            <input type="submit" name="adminsubmit" value="Login" class="btn float-right login_btn">
              <button type="reset" class="btn  logr" name="button">Reset</button>
          </div>
				</form>
			</div>

		</div>
	</div>
</div>


</section>
<section id="student">

<div class="container">
  <h1>Student  Login </h1>
<div class="d-flex justify-content-center h-100">
<div class="card">

  <div class="card-body">
    <form action="" method="post">
      <div class="input-group form-group">

        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" name="sid" class="form-control" placeholder="Enter Student Id">

      </div>
      <div class="input-group form-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" name="sname"class="form-control" placeholder="Enter Username">
      </div>
      <div class="input-group form-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input type="password" name="password"class="form-control" placeholder="Enter Password">
      </div>

      <div class="form-group">
        <input type="submit" value="Get Results" name="stusubmit"class="btn float-right login_btn">
            <button type="reset" class="btn  logr" name="button">Reset</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>

</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
