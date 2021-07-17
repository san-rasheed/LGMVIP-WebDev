
<?php

session_start();
if(isset($_GET['username'])){
$server="localhost";
$username="root";
$password="";
$mysqli = new mysqli($server, $username, $password);
$mysqli->select_db("studentresult");
$_SESSION['username']=$_GET['username'];
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
  $sql="SELECT * FROM `tblclass`;";
  $result=$mysqli->query($sql);
  $numclass=$result->num_rows;

  $sql1="SELECT * FROM `tblstudent`;";
  $result1=$mysqli->query($sql1);
  $numstu=$result1->num_rows;


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
      <link rel="icon" href="images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <?php include 'styles.php' ?>
   <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </head>

  <body style="background:cadetblue"  >

<section id="dashtop">

    <nav class="dashnav navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="#">LGM SCHOOLS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             CLASS
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" id="addclass" href="addclass.php">ADD &nbsp CLASS</a>
            <a class="dropdown-item" id="" href="classdetails.php">VIEW &nbsp CLASSES</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            STUDENT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="addstudent.php">ADD &nbsp STUDENT</a>
              <a class="dropdown-item" href="addstudent.php">UPDATE  &nbsp &nbsp STUDENT &nbsp &nbsp DETAILS</a>
            <a class="dropdown-item" href="studentdetails.php">VIEW  &nbsp STUDENTS</a>
           </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             RESULTS
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="manageresults.php">MANAGE &nbsp RESULTS</a>
          </div>
           </li>
      </ul>
</div>

  </nav>

</section>
     <h1 class="welcome" style="color:bisque">Welcome <?php echo $_SESSION['username']; ?>    !!</h1>
     <div class="dashdiv">
       <div class="content">
           <i class="fas fa-school fa-4x"></i>
           <h3 class="no">No.Of Classes: <?php echo $numclass; ?></h3>
           <a href="classdetails.php">
                  <button class="btn" style="background:crimson;"> VIEW</button>
           </a>
       </div>
       <div class="content">
           <i class="fas fa-user fa-4x"></i>
           <h3 class="no">No.Of Students: <?php echo $numstu; }?></h3>
           <a href="studentdetails.php">
                  <button class="btn" style="background:crimson;"> VIEW</button>
           </a>
       </div>


     </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
