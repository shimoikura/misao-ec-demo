<?php include "header.php" ?>
<?php
include "db_connect.php"
if (isset($_POST["addcart"])) {
  if (! isset($_SESSION['price'])) {
    $_SESSION['price'] = 0;
  }
  else {
    $_SESSION['price'];
  }
  if (! isset($_SESSION['pro_num'])) {
    $_SESSION['pro_num'] = 0;
  }
  else {
    $_SESSION['pro_num'];
  }
  // cart.phpようにセッション作成
   // $_SESSION['']
   if (! isset($_POST['totalprice'])) {
     $_SESSION['price'] = 0;
   }
   else {
     $_SESSION['price'] += $_POST['totalprice'];
   }
   if (! isset($_POST['item_amount'])) {
     $_SESSION['pro_num'] = 0;
   }
   else {
     $_SESSION['pro_num'] += $_POST['item_amount'];
   }
}
else {
  echo "string";
}
// Get id of displaying
 $id = $_GET['id'];

 $query = "select * from product where id=$id";
 $run = mysqli_query($conn,$query);
 $data = mysqli_fetch_array($run);

// カートに商品を入れたら
// if ($data) {
//   $i = $_SESSION['cart_num'];
//   $_SESSION["incart_pro_".$i.""] = $data['proName'];
//   $_SESSION['cart_num'] = $i + 1;
//   $k = $_SESSION['cart_num'] - 1;
//   for ($j=$i; $j >= 0; $j--) {
//     echo $_SESSION["incart_pro_".$k.""];
//     echo $_SESSION['cart_num'];
//     $k--;
//   }
// }

// if ($data) {
//   $_SESSION["cart_num"] = $_SESSION["cart_num"] +1;
//   $i = $_SESSION["cart_num"];
//   $x = $_SESSION["incart_proid_".$i.""];
//
//   echo $_SESSION["incart_proid_".$_SESSION['cart_num'].""];
//
//   $k = $i;
//   for ($j=$i; $j > 0 ; $j--) {
    // echo $_SESSION["incart_pro_".$k.""];
//     array("" => ) = $data['id'];
//     $k--;
//   }
// }

 ?>

<div class="container" id="cart-add">
  <div class="row">
    <div class="col-md-4">
      <span class="dis_tc glyphicon glyphicon-ok"></span>
      <img src="images/product-img/<?php echo $data['imgName']; ?>" >
      <h2><?php echo $data['proName']; ?></h2>
    </div>

    <div class="col-md-5 cart-subtotal-box">
      <p id="cart-subtotal">Cart subtotal (<span style="font-weight:bold;"><?php echo $_SESSION['pro_num']; ?></span>items) : <span style="color:">Rs <?php echo $_SESSION['price']; ?></span></p>
    </div>
    <div class="col-md-3 cart-subtotal-box">
      <a href="cart.php"><input type="button" class="btn green" value="CART"></a>
      <a href="buy.php"><input type="button" class="btn blue"  value="CHECKOUT"></a>
    </div>
  </div>
</div>
