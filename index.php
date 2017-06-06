<?php  include "header.php"; ?>
<?php
  $severname = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($severname,$username,$password);
  $db = mysqli_select_db($conn,"misao_ec_demo");

  $query1 = "select * from product";
  $run1 = mysqli_query($conn,$query1);
  $data1 = mysqli_fetch_array($run1);
  $categoryId = $data1['categoryId'];

  // print_r($data2);

  function category($a){
    global $conn;
    $query2 = "select * from category where id=$a";
    $run2 = mysqli_query($conn,$query2);
    $data2 = mysqli_fetch_array($run2);
    return $data2['cateName'];
  }
 ?>
<!-- Top Page Slider Setting -->
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
    controls: false,
    auto: true,
    speed: 1000,
  });
});
</script>

<div class="container" style="z-index:0;">
  <!-- top-img-box -->
  <div class="row top-img-box">
    <ul class="bxslider" style="z-index:0;">
      <li><img src="images/mv_1.jpg"></li>
      <li><img src="images/mv_2.jpg"></li>
    </ul>
  </div>

  <!-- nav-bar -->
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
  </nav>
  <!--   Product      -->
  <div class="row">
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">

      <?php
      while ($data1 = mysqli_fetch_array($run1)) {
          echo "<img src='images/'".$data1. "['imgName']>";
      }

       ?>

      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4><?php echo $data1['proName'] ?></h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p><?php echo $data1['proDiscription'] ?></p>
      <p class="l">Rs.<?php echo $data1['proPrice'] ?></p>
      <p class="r">#<?php echo $proCategory = category($categoryId); ?></p>


    </div>





    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 col-sm-3 col-xs-6 product-box">
      <div class="img-product-box">
        <a href="page.php">
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
        </a>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
  </div>
</div>




<script>
  $(document).ready(function(){
    $(".img-product-box").mouseover(function(){
      $(".detail-product",this).fadeTo("slow",1);
    }).mouseout(function(){
      $(".detail-product").hide();
    });
  });
</script>

<?php include "footer.php" ?>
