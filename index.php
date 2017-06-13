<?php  include "header.php"; ?>
<?php
  $severname = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($severname,$username,$password);
  $db = mysqli_select_db($conn,"ec_demo");
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
  <?php
    $query3 = "select * from category";
    $run3 = mysqli_query($conn,$query3);
  ?>
  <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav nav-cate">
        <li class="active" id="0"><a>All</a></li>
        <?php
        while ($data3 = mysqli_fetch_array($run3)) {
          echo "<li id='".$data3['id']."'><a>".$data3['cateName']."</a></li>";
        }
         ?>
      </ul>
  </nav>
  <script>
    $(document).ready(function(){
      $(".nav-cate li").click(function(){
        var nav_cate = $(this).attr('id');
        $(".nav-cate li").removeClass("active");
        $(this).addClass("active");
        $.ajax({
          url:"category-sort.php",
          type:'post',
          data:{cate:nav_cate},
          success:function(a){
            location.reload();
          }
        });
      });
    });
  </script>


<!--    Product -->
<?php
  // Return cateName
  function category($a){
    global $conn;
    $query2 = "select * from category where id=$a";
    $run2 = mysqli_query($conn,$query2);
    $data2 = mysqli_fetch_array($run2);
    return $data2['cateName'];
  }
 ?>

  <div class="row bbb">
      <?php
      if (! isset($_SESSION['cate']) || ($_SESSION['cate'] == 0)) {
        $query1 = "select * from product";
      }
      else{
        $query1 = "select * from product where categoryId =" .$_SESSION['cate']."";
      }
      $run1 = mysqli_query($conn,$query1);
      while ($data1 = mysqli_fetch_array($run1)){
        $id = $data1['id'];
        $categoryId = $data1['categoryId'];

          echo "<div class='col-md-2 col-sm-3 col-xs-6 product-box'>
                <div class='img-product-box'>
                <img class='img-responsive' src='images/product-img/" .$data1['imgName']. "'>
                  <a href='page.php?id=$id'>
                  <div class='detail-product'>
                    <h4>" .$data1['proDiscription']. "</h4>
                    <span>nice!!</span>
                    <p>DITAIL</p>
                  </div>
                  </a>
                </div>
                <p>" .$data1['proName']. "</p>
                <p class='l'>Rs." .$data1['proPrice']. "</p>
                <p class='r'>#" .$proCategory = category($categoryId). "</p>
              </div>";
      }
       ?>

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
