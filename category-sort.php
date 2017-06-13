<?php
if(isset($_POST['cate'])){
session_start();
  $_SESSION['cate'] = $_POST['cate'];
    echo $_SESSION['cate'];
}
else{
  header("location:index.php");
}

 ?>
