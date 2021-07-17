<?php
if(isset($_GET['sid'])){
  $server="localhost";
  $username="root";
  $password="";
  $mysqli = new mysqli($server, $username, $password);
  $mysqli->select_db("studentresult");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  }
$sid=$_GET['sid'];
$sql="SELECT `sid`,`sname`,`cname`,`language`,`english`,`maths`,`science`,`social` FROM `tblstudent` WHERE `sid`=$sid";
$result=$mysqli->query($sql);
$row=$result->fetch_array(MYSQLI_NUM);
//

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
      <link rel="icon" href="images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  <?php include 'styles.php' ?>
  </head>
  <body style="background: darkolivegreen">
    <section id="top">

  <div class="tablediv">
    <nav class="navbar  navbar-expand-lg navbar-dark ">

          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
            <a class="nav-link" href="logout.php">LOG OUT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="changepassword.php">CHANGE PASSWORD</a>
            </li>

        </ul>
      </div>
    </nav>

    <table class="table">
      <tr>
        <th scope="col">Student Id:</th>
        <td scope="col"><?php echo $row[0]; ?></td>
      </tr>
        <tr>
          <th scope="col">Name:</th>
          <td scope="col"><?php echo $row[1]; ?></td>
        </tr>
        <tr>
          <th scope="col">Class:</th>
          <td scope="col"><?php echo $row[2]; ?></td>
        </tr>


    </table>



  </div>
    <div class="tablediv">

    <table class="table table-hover table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">SUBJECT</th>
      <th scope="col">MARKS</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Language</td>
      <td><?php echo $row[3] ;?></td>
    </tr>
    <tr>
      <td scope="row">English</td>
      <td><?php echo $row[4] ;?></td>
    </tr>
    <tr>
      <td scope="row">Maths</td>
      <td><?php echo $row[5] ;?></td>
    </tr>
    <tr>
      <td scope="row">Science</td>
      <td><?php echo $row[6] ;?></td>
    </tr>
    <tr>
      <td scope="row">Social</td>
      <td><?php echo $row[7] ;}?></td>
    </tr>
  </tbody>
</table>

    </div>
    <input type="button" class="print buttons"value="Print the Result" onClick="window.print()">

  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  </html>
