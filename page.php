<?php
 include "header.php";

$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");

// Get id of displaying
 $id = $_GET['id'];

$query = "select * from product where id=$id";
$run = mysqli_query($conn,$query);
$data = mysqli_fetch_array($run);
// Return cateName
  function category($a){
    global $conn;
    $query2 = "select * from category where id=$a";
    $run2 = mysqli_query($conn,$query2);
    $data2 = mysqli_fetch_array($run2);
    return $data2['cateName'];
  }
?>

<!-- Top Page Slider Setting -------------------------------------------------------------------->
<script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
              auto: true,//自動切り替えの有無
             pause:6000,//停止時間※デフォルトは4000
             speed:1000,//動くスピード※デフォルトは500
             minSlides: 3,//一度に表示させる画像の最小値
             maxSlides: 4,//一度に表示させる画像の数
             slideWidth: 250,
             slideMargin: 10,
             pager: false,
             controls: false
            });
      });
 </script>

<div class="container" id="page-container">
  <div class="row">
    <div class="col-sm-5 col-md-5 left-box">
      <?php echo "<img src='images/product-img/".$data['imgName']."' >"; ?>
    </div>
    <div class="col-sm-7 col-md-7 right-box">
      <div class="clearfix">
        <h1>bed cover</h1>
        <p id="category"><span>#</span><?php echo $proCategory = category($data['categoryId']) ?></p>
      </div>
      <p>Rs <span
         id="subprice"><?php echo $data['proPrice']; ?></span></p>
      <form id="cart_page" <?php echo "action='cart-add.php?id=" .$data['id']. "'"; ?> method="post">
        <div class="amount col-md-6">
          <label for="">Quantity:</label>
          <select id="sub-num" name="item_amount">
            <?php
            for ($i=1; $i <= 10; $i++) {
              echo "<option value='" .$i. "'>" .$i. "</option>";
            }
             ?>
          </select>
        </div>
        <div class="subtotal col-md-6">
          <p>Sub total: Rs <span id="totalprice">0</span></p>
          <input type="hidden" id="vvv" name="totalprice" >
        </div>
        <input type="submit" name="addcart" value="Add to Cart">
      </form>
    </div>
  </div>
</div>

<!-- calcurate subprice -->
<script>
  $(document).ready(function(){
    var unit_price = $("#subprice").text();
    $("#vvv").val(unit_price);
    $("#totalprice").text(unit_price);
    $("#sub-num").change(function(){
      var pro_subnum = $("#sub-num").val();
      var sub_total = unit_price * pro_subnum;
      $("#vvv").val(sub_total);
      $("#totalprice").text(sub_total);
    });
  });
</script>
<?php include "footer.php" ?>
