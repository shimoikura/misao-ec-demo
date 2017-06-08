<?php
include "header.php";
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");

if (! isset($_POST['buy-submit'])) {
  // common
  $type = $_POST["type"];
  // step1
    if ($type == 1) {
      $_SESSION['name'] = $_POST["name"];
      $_SESSION['phone'] = $_POST["phone"];
      $_SESSION['address'] = $_POST["address"];
      $_SESSION['email'] = $_POST["email"];
    }
  // step2
    elseif ($type == 2) {
      $_SESSION['deli'] = $_POST["deli"];
      $_SESSION['payment'] = $_POST["payment"];
    }
}
// step3
else{
  $gift = $_POST["gift"];
  $query = "insert into ship_address(id,name,phone,address,email,delivery,payment,gift)values('','".$_SESSION['name']."','".$_SESSION['phone']."','".$_SESSION['address']."','".$_SESSION['email']."','".$_SESSION['deli']."','".$_SESSION['payment']."','$gift')";

  //fetch
  $query2 = "select * from ship_address where name= '".$_SESSION['name']."' and phone= '".$_SESSION['phone']."' ";
  $run2 = mysqli_query($conn,$query2);
  $data2 = mysqli_fetch_array($run2);
}
 ?>

<div class="container" id="order-confirm">
  <div class="row">
    <div class="col-md-5">
      <table cellspacing="10">
        <tr>
          <th>Name</th>
          <td><?php echo $_SESSION['name'] ; ?></td>
        </tr>
        <tr>
          <th>Phone Number</th>
          <td><?php echo $_SESSION['phone'] ; ?></td>
        </tr>
        <tr>
          <th>Mail Address</th>
          <td><?php echo $_SESSION['email'] ; ?></td>
        </tr>
        <tr>
          <th>Delivery</th>
          <td><?php echo $_SESSION['deli'] ; ?></td>
        </tr>
        <tr>
          <th>Payment</th>
          <td><?php echo $_SESSION['payment'] ; ?></td>
        </tr>
        <tr>
          <th>Gift</th>
          <td><?php echo $gift ; ?></td>
        </tr>
      </table>
    </div>

    <div class="col-md-7" id="order-price">
      <table>
        <tr>
          <th>Item</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
        <tr>
          <td colspan="3">Sub Total ( 0items ) : Rs 0</td>
        </tr>
      </table>
    </div>
  </div>
</div>
