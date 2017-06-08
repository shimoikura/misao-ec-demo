<?php include "header.php" ?>
<?php
  $timestamp = time() ;
  $day = date("d",$timestamp) + 7;

 ?>

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
