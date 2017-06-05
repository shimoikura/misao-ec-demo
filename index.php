<?php  include "header.php"; ?>

<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
    controls: false,
    auto: true,
    speed: 1000,
  });
// Top Page Slider Setting -------------------------------------------------------------------
 $('.item-box').click(function(){
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
        <div class="detail-product">
          <h4>BRAKET</h4>
          <span>nice!!</span>
          <p>DITAIL</p>
        </div>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>


    <div class="col-md-2 col-sm-6 product-box">
      <div class="img-product-box">
      </div>
      <div class="detail-product">
        <h4>BRAKET</h4>
        <span>nice!!</span>
        <p>DITAIL</p>
      </div>
      <p>dddddddd</p>
      <p class="l">Rs.600</p>
      <p class="r">#Accessories</p>
    </div>
    <div class="col-md-2 product-box">
          ddddd
    </div>
    <div class="col-md-2 product-box">
          ddddd
    </div>
    <div class="col-md-2 product-box">
                  ddddd
    </div>
    <div class="col-md-2 product-box">
                      ddddd
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
