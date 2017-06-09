<?php include "header.php" ?>
<?php
  $timestamp = time() ;
  $day = date("d",$timestamp) + 7;

 ?>


 <div class="container" id="buy-box">
   <div class="row">
     <div class="col-md-2 col-sm-2">
     </div>
     <div class="buy col-md-8 col-sm-8">
       <ul class="step">
         <li class="step1 active">
           <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
           <p>Adress</p>
         </li>
         <li class="step1">
           <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
           <p>	Deliverty & Payment	</p>
         </li>
         <li class="step1">
           <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
           <p>Gift</p>
         </li>
         <li class="step1">
           <span class="glyphicon glyphicon-shopping-cart cart-icon"></span>
           <p>Check</p>
         </li>
         <li class="step1">
           <span class="glyphicon glyphicon-shopping-cart cart-icon cart-active" ></span>
           <p>Complete Payment</p>
         </li>
       </ul>
    </div>
  </div>


 <div class="container">
   <div class="row">
     <p style="font-size:20px;">Thank you for shopping!!<br>
       Your order is compleated!!<br>
       we will deliver until <span style="font-weight:bold"><?php echo date( "Y/m/" , $timestamp ). $day ; ?> <?php echo date(" l",$timestamp); ?></span></p>
       <table>
         <tr>
           <td>Name : </td>
           <td><?php echo $_SESSION['name'] ; ?></td>
         </tr>
         <tr>
           <td>Address : </td>
           <td><?php echo $_SESSION['address']; ?></td>
         </tr>
         <tr>
           <td>Phone : </td>
           <td><?php echo $_SESSION['phone']; ?></td>
         </tr>
         <tr>
           <td>Payment : </td>
           <td><?php echo $_SESSION['payment']; ?></td>
         </tr>
         <tr>
           <td>Gift : </td>
           <td><?php echo $_SESSION['gift']; ?></td>
         </tr>
         <tr>
           <td>Sub Total : </td>
           <td><?php echo $_SESSION['price']; ?></td>
         </tr>
       </table>
   </div>

 </div>
