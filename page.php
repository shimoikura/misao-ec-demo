<?php include "header.php" ?>

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
      <img src="images/1.gif" alt="">
    </div>
    <div class="col-sm-7 col-md-7 right-box">
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
