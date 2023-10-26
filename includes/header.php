<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Recipe Page</title>
    <script src="https://kit.fontawesome.com/61a869ab1a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body id="page-<?php echo $page; ?>">
<header>
    <div class="page-header-top container text-center text-md-start">
      <a href="index.php"><img src="./images/logo.jpg" alt="StudentEat" /></a>
    </div>
    <nav class="navbar navbar-expand-lg mb-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-
          controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=home"><i class="fa-solid fa-house"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=categories"><i class="fa-solid fa-utensils"></i>categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=login"><i class="fas fa-sign-in-alt"></i> Login / Register</a>
          </li>
        </ul>
        <form action="search.php" method="get" class="d-flex">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark ms-2" type="submit">Search</button>
        </form>
      </div>
      </div>
    </nav>
  </header>