<?php include "header.php" ?>
<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");

// Get id of displaying
 $id = $_GET['id'];
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
 $query = "select * from product where id=$id";
 $run = mysqli_query($conn,$query);
 $data = mysqli_fetch_array($run);
 ?>

<div class="container" id="cart-add">
  <div class="row">
    <div class="col-md-4">
      <span class="dis_tc glyphicon glyphicon-ok"></span>
      <img src="images/product-img/<?php echo $data['imgName']; ?>" >
      <h2>Gold bracelet</h2>
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
