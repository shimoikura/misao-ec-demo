<?php include "header.php" ?>
<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");
 ?>
<script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
              auto: true,//自動切り替えの有無
             pause:6000,//停止時間※デフォルトは4000
             speed:1000,//動くスピード※デフォルトは500
             minSlides: 3,//一度に表示させる画像の最小値
             maxSlides: 4,//一度に表示させる画像の数
             slideWidth: 270,
             slideMargin: 10,
             pager: false,
             controls: false
            });
      });
 </script>
<!-- Top Page Slider Setting -------------------------------------------------------------------->


<?php
if (! isset($_SESSION['price'])) {
  $_SESSION['price'] = 0;
}
else {
  $_SESSION['price'];
}
if (! isset($_SESSION['cartnum'])) {
  $_SESSION['cartnum'] = 0;
}
else {
  $_SESSION['cartnum'];
}
 ?>
<div class="container">
  <div class="row">
    <!-- 小計 -->
    <div class="cart_total col-md-12 col-sm-12">
      <p>Subtotal( <?php echo $_SESSION['cartnum']; ?>items):Rs <span id="ttl-price"><?php echo $_SESSION['price']; ?></span></p>
      <a href="buy.php"><input type="button" class="btn green" value="Proceed to cheakout"></a>
    </div>



<?php
if (isset($_SESSION["i"])) {
  for ($i=1; $i <= $_SESSION["i"]; $i++) {
    if (isset($_SESSION["cartid_$i"])) {
      // echo $_SESSION["cartid_$i"]."<br>";
      $a = $_SESSION["cartid_$i"];
      $query = "select * from product where id=$a";
      $run = mysqli_query($conn,$query);
      $data = mysqli_fetch_array($run);
      // echo "<pre>";
      // print_r($data);
      echo "<div class='col-md-12 added-pro-box'>";
      echo "<img style='width:50px;' src='images/product-img/";
      echo $data['imgName'];
      echo "'>";
      echo "<h2>".$data['proName']."</h2>";
      echo "</div>";
    }
    else {
      // echo "nothing";
    }
  }
}
else {
  # code...
}

 ?>


    <!-- <h2>Check Other Items</h2>
    <ul class="bxslider">
      <li>
        <div class="col-md-12 col-sm-12 cart-product-box">
          <a href="page.php">
          <img src="images/1.gif" alt="" style="max-width:100%;">
          </a>
          <p>dddddddd</p>
          <p class="l">Rs.600</p>
          <p class="r">#Accessories</p>
        </div>
      </li>
      <li>
        <div class="col-md-12 col-sm-12 cart-product-box">
          <a href="page.php">
          <img src="images/1.gif" alt="" style="max-width:100%;">
          </a>
          <p>dddddddd</p>
          <p class="l">Rs.600</p>
          <p class="r">#Accessories</p>
        </div>
      </li><li>
        <div class="col-md-12 col-sm-12 cart-product-box">
          <a href="page.php">
          <img src="images/1.gif" alt="" style="max-width:100%;">
          </a>
          <p>dddddddd</p>
          <p class="l">Rs.600</p>
          <p class="r">#Accessories</p>
        </div>
      </li><li>
        <div class="col-md-12 col-sm-12 cart-product-box">
          <a href="page.php">
          <img src="images/1.gif" alt="" style="max-width:100%;">
          </a>
          <p>dddddddd</p>
          <p class="l">Rs.600</p>
          <p class="r">#Accessories</p>
        </div>
      </li>
    </ul>
  </div><! /#slide_space -->
</div>
