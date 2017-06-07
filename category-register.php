<?php
  $severname = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($severname,$username,$password);
  $db = mysqli_select_db($conn,"ec_demo");

  $cate_name = $_POST['catename'];
  $query = "insert into category(id,cateName)values('','$cate_name')";
  $run = mysqli_query($conn,$query);
  if ($run) {
    echo "Created ". $cate_name ." category!";
  }
 ?>
