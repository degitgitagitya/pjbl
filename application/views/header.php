<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">

    <!-- Title -->
    <title>Project Based Learning</title>
  
    <!-- Icon -->
    <link rel="icon" href="https://images.vexels.com/media/users/3/131767/isolated/preview/9fe3dc9876d602cece9edc065427376f-pinterest-p-logo-by-vexels.png">

  </head>
  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }

    .main-background{
      background-color: whitesmoke;
    }
  </style>
  <body class="main-background">
    <nav class="navbar navbar-light bg-light shadow-sm mb-3  justify-content-between">
      <div class="d-flex align-items-center">
        <div class="navbar-brand mr-5">
          <img src="https://images.vexels.com/media/users/3/131767/isolated/preview/9fe3dc9876d602cece9edc065427376f-pinterest-p-logo-by-vexels.png" height="25" class="d-inline-block align-top mr-2" alt="">
          Project Based Learning
        </div>
        <?php 
          if (isset($_SESSION['logged_in'])){
            ?>
            <a class="font-weight-bold mr-5" href="<?php echo base_url('index.php/Proyek')?>">
              Daftar Proyek
            </a>
            <?php
          } 
        ?>
      </div>
      <div>
        <?php 
          if (isset($_SESSION['logged_in'])){
            ?>
            <a href="<?php echo base_url('index.php/Login/logoutSiswa')?>" class="btn btn-outline-primary font-weight-bold">
              Logout
            </a>
            <?php
          } else {
            ?>
            <a href="<?php echo base_url('index.php/Login')?>" class="btn btn-outline-success font-weight-bold">
              Login
            </a>
            <?php
          }
        ?>
      </div>
    </nav>
