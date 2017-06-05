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
    <link rel="stylesheet" href="css/login.css">  
    <script src="https://code.jquery.com/jquery-3.2.1.js"</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Top Page Slider Setting -------------------------------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="css/jquery.bxslider.min.css" rel="stylesheet" />
     <script src="js/jquery.bxslider.min.js"></script>
     <script type="text/javascript">
             $(document).ready(function(){
                 $('.bxslider').bxSlider({
                   auto: true,//自動切り替えの有無
                  pause:6000,//停止時間※デフォルトは4000
                  speed:1000,//動くスピード※デフォルトは500
                  minSlides: 3,//一度に表示させる画像の最小値
                  maxSlides: 4,//一度に表示させる画像の数
                  slideWidth: 300,
                  slideMargin: 10,
                  pager: false,
                  controls: false
                 });
           });
      </script>
<!-- Top Page Slider Setting -------------------------------------------------------------------->
  </head>
  <body>
    <!-- header -->
    <div class="container">
      <div class="row header">
        <div class="col-md-3 header-left" style="height:100%;">
          <div class="home-box">
            <a href="index.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
            <p>HOME</p>
            </a>
          </div>
          <div class="item-box">
            <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
            <p>ITEM</p>
          </div>
        </div>
        <div class="col-md-6 header-title-logobox">
          <a href="#"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="col-md-3 header-right">
          <div class="cart-box">
            <a href="cart.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
            <p>CART</p>
            </a>
          </div><div class="register-box">
            <a href="register.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>
            <p>REGISTER</p>
            </a>
          </div>
          <div class="login-box">
            <a href="login.php" style="color:#333; text-decoration:none">
            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            <p>LOGIN</p>
            </a>
          </div>
        </div>
      </div>
    </div>
