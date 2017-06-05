<?php include "header.php" ?>

<div class="container">
  <div class="row">
    <div class="col-md-5 left-box">
      <img src="images/1.gif" alt="">
    </div>
    <div class="col-md-7 right-box">
      <div class="clearfix">
        <h1>bed cover</h1>
        <p id="category"><span>#</span>Others</p>
      </div>
      <p>Rs <span id="totalprice">3000</span></p>
      <form id="cart_add_page" action="" method="post">
        <div class="amount col-md-6">
          <label for="">Quantity:</label>
          <select class="" name="item_amount">
            <option value="0">0</option>
          </select>
        </div>
        <div class="subtotal col-md-6">
          <p>Sub total: Rs <span id="subprice">600</span></p>
        </div>
        <input type="submit" name="addcart" value="Add to Cart">
      </form>
    </div>
  </div>
</div>
