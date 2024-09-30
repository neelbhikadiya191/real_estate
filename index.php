<?php

session_start();

//if user id is not in session then they are not logged in

if (!isset($_SESSION['id']))  {

  header("location: login.php");
  exit();


}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram-Clone</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
  </head>

  <body>
    <!-- navigation -->
    <nav class="navbar">
      <div class="nav-wrapper">
        <img class="brand-img" src="assets/images/logo.png" />
        <form class="search-form">
          <input type="text" class="search-box" placeholder="search.." />
        </form>
        <div class="nav-items">
          <i class="icon fas fa-home"></i>
          <i class="icon fas fa-plus"></i>
          <i class="icon fas fa-heart"></i>
          <div class="icon user-profile">
            <i class="fas fa-user"></i>
          </div>
        </div>
      </div>
    </nav>

    <!-- section -->
    <section class="main">
    <div class="profile-card">
            <div class="profile-pic">
              <img src="assets/images/profile.jpg" alt="" />
            </div>
            <div>
              <p class="username">username</p>
              <p class="sub-text">sub-text</p>
            </div>
            <form action="logout.php" method="get">
              <button class="logout-btn">logout</button>
            </form>
          </div>
    </section>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
