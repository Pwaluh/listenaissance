<?php include 'includes/connect.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Liste naissance</title>
  </head>
  <body>
    <div class="container-fluid">
      <header class="row">
          <div class="col-md-4">
              <img src="http://lorempixel.com/output/cats-q-c-100-100-5.jpg" alt="logo du site" />
          </div>
          <div class="col-md-4">
              <h1>Give me a gift</h1>
          </div>
      </header>
      <div class="row">
        <nav class="col-md-2">
          <?php if (!$_COOKIE['loginOK']): ?>
            <ul class="nav nav-pills nav-stacked">
              <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php'): ?>
                <li class="active"><a href="index.php">Acceuil</a></li>
                <li><a href="login.php">Login</a></li>
              <?php else: ?>
                <li><a href="index.php">Acceuil</a></li>
                <li class="active"><a href="login.php">Login</a></li>
              <?php endif; ?>
            </ul>
          <?php else: ?>
            <ul class="nav nav-pills nav-stacked">
              <?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php'): ?>
                <li class="active"><a href="index.php">Acceuil</a></li>
                <li><a href="liste.php">Liste</a></li>
              <?php else: ?>
                <li><a href="index.php">Acceuil</a></li>
                <li class="active"><a href="liste.php">Liste</a></li>
              <?php endif; ?>
            </ul>
          <?php endif; ?>

        </nav>
