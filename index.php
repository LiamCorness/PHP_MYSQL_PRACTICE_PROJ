<?php

session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con); // Checks if the user is logged in

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="indexstyle.css" >
    <title>Website</title>
</head>
<body>

<!-- navbar -->
<a href = "logout.php" class="navbar-brand">Log Out</a>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a href="#" class="navbar-brand">Branding</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Compare Utility Prices
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">#</a>
            <a class="dropdown-item" href="#">#</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="compare.php">Estimated Energy Consumption</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Random</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Showcase -->
<section class="bg-dark text-light p-5 text-center">
<div class="container">
    <div>
        <div>
            <h1>Get the best deal on your energy prices</h1>
        </div>
        <img src="#" alt="" class="img-fluid"/>
    </div>
</div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>