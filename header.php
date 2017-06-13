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
    <!-- <link href="css/jquery.bxslider.css" rel="stylesheet" /> -->
    <link href="css/jquery.bxslider.min.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Top Page Slider Setting -------------------------------------------------------------------->
     <script src="js/jquery.bxslider.min.js"></script>
     <!-- modal-login.js -->
     <script src="js/modal-login.js"></script>
     <!-- modal-registration.js -->
     <script src="js/modal-registration.js"></script>
     <!-- logout.js -->
     <script src="js/logout.js"></script>
     <!-- buy.js -->
     <script src="js/buy.js"></script>
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
        <ul class="nav navbar-nav navbar-right">
          <li>
            <p id="mes">
              <?php if ( isset($_SESSION['login_user'])) {
                echo "Hello!".$_SESSION['login_user']. "!";
              }
              ?>
            </p>
          </li>
          <?php
            if (! isset($_SESSION['login_user'])) {
              echo "<li id='modal-login-open'>
              <i class='glyphicon glyphicon-user' aria-hidden='true'></i>
              <p>LOGIN</p>";
            }
            else{
              echo "<li id='modal-logout'>
              <i class='glyphicon glyphicon-log-out' aria-hidden='true'></i>
              <p>LOGOUT</p>";
            }
           ?>
          </li>
          <li id="modal-registration-open">
            <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>
            <p>REGISTER</p>
          </li>
          <li>
            <a href="cart.php" style="color:#333; text-decoration:none">
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
        <label for="email">Email</label><br>
        <input id="log-email" type="text" class="input-block-level" placeholder="Email address" name="email">
        <p id="false1"></p>
        <p id="false2"></p>
        <label for="email">Password</label><br>
        <input type="password" id="log-pass" class="input-block-level" placeholder="Password" name="password">
        <p id="false3"></p>
        <p id="false4"></p>
        <p id="false"></p>
        <input class="btn btn-large btn-success" id="btn-login" type="button" name="login" value="Login" style="background-color: #e4007b; background-image: none;"></input>
        <p id="login-or">or</p>
        <input class="btn btn-large btn-primary" type="submit" name="login-f" value="Facebook">
      </form>
      <table>
        <tr>
          <td><hr></td>
          <td>Not member?</td>
          <td><hr></td>
        </tr>
      </table>
      <button id="modal-registration-open2" class="btn btn-large btn-primary" type="button" name="button">Create your Acount</button>
    </div> <!-- /container -->
    <!-- <div id="modal-login-overlay"></div> -->


<?php include "validate-registration.php" ?>

<!-- modal-registration -->
<div class="container" id="modal-registration-content">
  <form class="form-registration" action="" method="post" enctype="multipart/form-data">
    <h2 class="form-registration-heading">REGISTER</h2>
    <table>
      <tr>
        <td colspan="2"><label for="name">User Name</label></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" name="name" class="input-block-level" placeholder="Name"></td>
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
        <td colspan="2"><label for="email">Mail Adress</label></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" name="email" value="" class="input-block-level" placeholder="Email"></td>
      </tr>
      <tr>
        <td><label for="gender">Gender</label></td>
        <td><label for="dob">Date of Birth</label></td>
      </tr>
      <tr>
        <td><input type="radio" name="gender" value="1">Male
        <input type="radio" name="gender" value="2">Female
      </td>
      <td>
        <select class="" name="day">
          <?php for ($i=1; $i <= 31; $i++) {
            echo "<option value='".$i."'>".$i."</option>";
          }
         ?>
        </select>
        <select class="" name="month">
          <?php for ($i=1; $i <= 12; $i++) {
            echo "<option value='".$i."'>".$i."</option>";
          }
         ?>
        </select>
        <select class="" name="year">
          <?php for ($i=1900; $i <= 2017; $i++) {
            echo "<option value='".$i."'>".$i."</option>";
          }
         ?>
        </select>
      </td>
      </tr>
      <tr>
        <td colspan="2"><label for="user-img">Image</label></td>
      </tr>
      <tr>
        <td colspan="2"><input type="file" name="userimg" value=""></td>
      </tr>
      <tr>
        <td colspan="2"><input id="registration-button" class="btn btn-large btn-success" type="submit" name="register" value="Submit"></input></td>
      </tr>
      <tr>
        <td colspan="2"  style="text-align:center;"><span>or</span></td>
      </tr>
      <tr>
        <td colspan="2"><input id="facebok-registration-button" class="btn btn-large btn-primary" type="submit" name="facebok-register" value="Facebook"></input></td>
      </tr>
    </table>
  </form>
</div>
