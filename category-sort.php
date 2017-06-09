<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");
// Return cateName
function category($a){
  global $conn;
  $query2 = "select * from category where id=$a";
  $run2 = mysqli_query($conn,$query2);
  $data2 = mysqli_fetch_array($run2);
  return $data2['cateName'];
}

if(isset($_POST['cate'])){
  $cate = $_POST['cate'];
  if ($cate == 0) {
     $_SESSION['query1'] = "select * from product";
     $_SESSION['run1'] = mysqli_query($conn,$_SESSION['query1']);

     while ($data1 = mysqli_fetch_array($_SESSION['run1'])){
       $id = $data1['id'];
       $categoryId = $data1['categoryId'];

         echo "<div class='col-md-2 col-sm-3 col-xs-6 product-box'>";
         echo "<div class='img-product-box'>
               <img src='images/product-img/" .$data1['imgName']. "'>
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

  }
  else{
    $_SESSION['query1'] = "select * from product where categoryId=$cate";
    $_SESSION['run1'] = mysqli_query($conn,$_SESSION['query1']);

    if ($_SESSION['run1']) {
      while ($data1 = mysqli_fetch_array($_SESSION['run1'])){
        $id = $data1['id'];
        $categoryId = $data1['categoryId'];
          echo "<div class='col-md-2 col-sm-3 col-xs-6 product-box'>";
          echo "<div class='img-product-box'>
                <img src='images/product-img/" .$data1['imgName']. "'>
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
    }

  }
}
 ?>
