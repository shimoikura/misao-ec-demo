<?php
  $severname = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($severname,$username,$password);
  $db = mysqli_select_db($conn,"ec_demo");

  $query = "select * from category";
  $run = mysqli_query($conn,$query);
  $row = mysqli_num_rows($run);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
  </head>
  <body>
    <script>
      $(document).ready(function(){
        $("#cate-btn").click(function(){
          var cate_name = $("#cate-name").val();
          $.ajax({
            url:'category-register.php',
            type:'post',
            data:{catename:cate_name},
            success:function(success){
            alert(success);
            }
          });
        });
      });
    </script>
    <form class="" action="product-register.php" method="post" enctype="multipart/form-data">
      <label for="proname">Product Name</label>
      <input type="text" name="proname">
      <label for="price">Price</label>
      <input type="text" name="proprice">
      <label for="discript">Discription</label>
      <input type="text" name="discript">
      <input type="file" name="proimg">
      <select name="category">
        <?php
          while ($data = mysqli_fetch_array($run)) {
            echo "<option value='".$data['id']."'>" .$data['cateName']. "</option>";
          }
         ?>
      </select>
      <input id="pro-btn" type="submit" name="submit" value="Register product">
    </form>


    <label for="catename">New Category</label>
    <input id="cate-name" type="text" name="catename">
    <input id="cate-btn" type="button"  value="Register">
    <!-- <a herf="category-register.php">Create New Category</a> -->
  </body>
</html>
