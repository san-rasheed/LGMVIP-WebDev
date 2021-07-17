
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <title>Student Result Management</title>
      <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php include 'styles.php' ?>
<script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </head>
  <body >
    <section id="top" style=" background: url('images/sample3.jpg') no-repeat center;
    background-size:cover;
    background-position: 0 0;">

    <nav class="navbar  dashnav navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="" >LGM SCHOOLS</a>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
            <a class="nav-link" href="#about">ABOUT US</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="#contact">CONTACT</a>
            </li>

        </ul>
      </div>
    </nav>

  </section>
  <section id="about">
    <div class="homediv">
      <h1 class="welcome">Welcome !!</h1>
      <h1>About us</h1>
      <p>We’ve been offering live online classes for over a decade (formerly HomeschoolWorks4U), and have collectively been involved in alternative education in the form of private schools, classical academies, yeshivas, co-ops, class days, classical charters, online academies, and more.

  We believe that Education is the Transmission of Culture. We are coming from a decidedly Judeo-Christian point of view. We are people of the Book.

  True North Homeschool Academy teachers are a group of passionate, qualified, creative educators providing carefully curated Core Courses and Clubs, delivered by utilizing cutting-edge technology, gamification, and solid academic pedagogy. We understand the unique challenges and opportunities of homeschooling.

  </p>


    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h1>Contact us</h1>
  <div class="d-flex justify-content-center h-100">
    <div class="card">

      <div class="card-body">
        <form action="mailto:sanoferrasheed29@gmail.com" method="post">
          <div class="input-group form-group">

            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Your Name">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="mail" class="form-control" placeholder="Your mail">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comments"></i></span>
            </div>
            <textarea name="message" placeholder="Your Message"class="form-control" rows="5" cols="80"></textarea>
          </div>

          <div class="form-group">

            <input type="submit"  value="Submit" class="btn float-right login_btn">
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
