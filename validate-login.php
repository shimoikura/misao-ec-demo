<?php
// session_start();
// setting to conect db and php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"ec_demo");

// 配列の中身を明示してくれる
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
//---------------------------
$errors = array('email1'=>"",'email2'=>"",'password1'=>"",'password2'=>"");
// isset関数は変数にNULL以外の値がセットされているかを調べる関数
if(isset($_POST['login']) && $_POST['login'] === "Login"){
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(empty($email)){
    $errors['email1'] = "Enter the email";
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['email2'] = "Enter a valid email";
  }
  if(empty($password)){
    $errors['password1'] = "Enter the password";
  }
  elseif (! preg_match("/^[a-z A-Z 0-9]+$/",$password)) {
    $errors['password2'] = "Enter a valid password";
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
        // header("location: welcome.php");
      }else {
        echo "Your Login Name or Password is invalid";
        //  $error = "Your Login Name or Password is invalid";
      }
    // 確認---------------------
        // if($run){
        //   echo "success";
        // }
        // else {
        //   echo "error.";
        // }
    // ------------------------------------
  }
}
?>
