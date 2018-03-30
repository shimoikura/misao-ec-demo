<?php
  include "db_connect.php"

  $pro_name = $_POST['proname'];
  $pro_price = $_POST['proprice'];
  $discription = $_POST['discript'];
  $category = $_POST['category'];
  $image = $_FILES['proimg'];
  //配列の中身確認
   print_r($image);

  // -----------Validate of image-------------
  include "validate-upload-img.php";
  $img_val = checkImg($image);
  if ($img_val == "true") {
    $query = "insert into product(id,proName,proPrice,proDiscription,imgName,categoryId)values('','$pro_name','$pro_price','$discription','$imgname','$category')";
    $run = mysqli_query($conn,$query);
  }
  else {
    echo $img_val;
  }

   ?>
