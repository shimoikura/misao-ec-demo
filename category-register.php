<?php
include "db_connect.php"
  $cate_name = $_POST['catename'];
  $query = "insert into category(id,cateName)values('','$cate_name')";
  $run = mysqli_query($conn,$query);
  if ($run) {
    echo "Created ". $cate_name ." category!";
  }
 ?>
