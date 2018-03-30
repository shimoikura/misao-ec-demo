<?php
// session_start();

// setting to conect db and php
include "db_connect.php"
$errors = array('email1'=>"",'email2'=>"",'password1'=>"",'password2'=>"",'success'=>"",'false'=>"");

// isset関数は変数にNULL以外の値がセットされているかを調べる関数
if(isset($_POST['data'])){
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(empty($email)){
    $errors['email1'] = "Enter the email";
    if(empty($password)){
      $errors['password1'] = "Enter the password";
      echo json_encode($errors);
    }
    elseif (! preg_match("/^[a-z A-Z 0-9]+$/",$password)) {
      $errors['password2'] = "Enter a valid password";
      echo json_encode($errors);
    }
    else {
      echo json_encode($errors);
    }
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['email2'] = "Enter a valid email";
    if(empty($password)){
      $errors['password1'] = "Enter the password";
      echo json_encode($errors);
    }
    elseif (! preg_match("/^[a-z A-Z 0-9]+$/",$password)) {
      $errors['password2'] = "Enter a valid password";
      echo json_encode($errors);
    }
    else {
      echo json_encode($errors);
    }
  }
  else {
    // email and password sent from form
      $array = "select * from user_information where email='".$email."' and password = '".$password."'";
      $result = mysqli_query($conn,$array);
      $count = mysqli_num_rows($result);
      $data = mysqli_fetch_array($result);
    // If result matched $email and $password, table row must be 1 row
      if($count >= 1) {
        $_SESSION['login_user'] = $data["userName"];
        $_SESSION['cart_num'] = 0; //cart内の商品数
        $errors['success'] = "true";
        echo json_encode($errors);
        header("Refresh:0");
      }else {
        $errors['false'] = "Your Login Name or Password is invalid";
        echo json_encode($errors);
      }
  }
}
else {
  header("location:index.php");
}

?>
