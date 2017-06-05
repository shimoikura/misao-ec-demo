<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MISAO-EC.com</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/jquery.bxslider.min.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Top Page Slider Setting -------------------------------------------------------------------->
     <script src="js/jquery.bxslider.min.js"></script>
     <!-- modal-login.js -->
     <script src="js/modal-login.js"></script>
     <!-- modal-registration.js -->
     <script src="js/modal-registration.js"></script>
     <!-- <link href="css/jquery.bxslider.css" rel="stylesheet" /> -->
     <script type="text/javascript">
     $(document).ready(function(){
       $('.bxslider').bxSlider({
         controls: false,
         auto: true,
         speed: 1000,
       });
 // Top Page Slider Setting -------------------------------------------------------------------
      $('.item-box').click(function(){

      });
    });
    </script>

  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-default" id="header">
      <div class="container">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
            <p>HOME</p>
            </a>
          </li>
          <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                <p>Item</p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="">Foods</a></li>
                  <li><a href="">Clothes</a></li>
                  <li><a href="">Accessories</a></li>
                  <li><a href="">Sundries</a></li>
                </ul>
              </li>
        </ul>

        <div class="navbar-header" id="brand-box" style="position: fixed; left:550px;">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li id="modal-login-open">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            <p>LOGIN</p>
          </li>
          <li id="modal-registration-open">
            <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>
            <p>REGISTER</p>
          </li>
          <li>
            <a href="index.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
            <p>CART</p>
            </a>
          </li>
        </ul>
      </div>
    </nav>



<!-- modal-login -->
    <div class="container" id="modal-login-content">
      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">LOGIN</h2>
        <label for="email">User Name</label><br>
        <input type="text" class="input-block-level" placeholder="Email address" name="email">
        <p></p>
        <p></p>
        <label for="email">Password</label><br>
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <p></p>
        <p></p>
        <input class="btn btn-large btn-success" type="submit" name="submit" value="Submit" style="background-color: #e4007b; background-image: none;"></input>
        <span>or</span>
        <input class="btn btn-large btn-primary" type="submit" name="" value="Facebook">
      </form>
      <button id="modal-registration-open2" class="btn btn-large btn-primary" type="button" name="button">Create your Acount</button>
    </div> <!-- /container -->
    <!-- <div id="modal-login-overlay"></div> -->


<!-- modal-registration -->
<div class="container" id="modal-registration-content">
  <form class="form-registration" action="" method="post" enctype="multipart/form-data">
    <h2 class="form-registration-heading">REGISTER</h2>
    <table>
      <tr>
        <td><label for="name">User Name</label></td>
      </tr>
      <tr>
        <td><input type="text" name="name" class="input-block-level" placeholder="Name"></td>
      </tr>
      <tr>
        <td><label for="password">Password</label></td>
        <td><label for="check-password">Conform Password</label></td>
      </tr>
      <tr>
        <td><input type="password" name="password" value="" class="input-block-level" placeholder="Password (6-8)"></td>
        <td><input type="password" name="check-password" value="" class="input-block-level" placeholder="Confirm password"></td>
      </tr>
      <tr>
        <td><label for="email">Mail Adress</label></td>
      </tr>
      <tr>
        <td><input type="text" name="email" value="" class="input-block-level" placeholder="Email"></td>
      </tr>
      <tr>
        <td><label for="gender">Gender</label></td>
        <td><label for="dob">Date of Birth</label></td>
      </tr>
      <tr>
        <td><input type="radio" name="gender" value="1">Male
        <input type="radio" name="gender" value="2">Female
      </td>
      <td><input type="text" name="dob" value="" class="input-block-level" placeholder="ex.1938/01/04"></td>
      </tr>
      <tr>
        <td><label for="img">Image</label></td>
      </tr>
      <tr>
        <td><input type="file" name="img" value=""></td>
      </tr>
      <tr>
        <td><input id="registration-button" class="btn btn-large btn-success" type="submit" name="register" value="Submit"></input></td>
      </tr>
      <tr>
        <td><span>or</span></td>
      </tr>
      <tr>
        <td><input id="facebok-registration-button" class="btn btn-large btn-primary" type="submit" name="facebok-register" value="Facebook"></input></td>
      </tr>
    </table>
  </form>
</div>
