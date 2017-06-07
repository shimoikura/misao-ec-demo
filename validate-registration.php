<?php
// setting to conect db and php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname,$username,$password);
$db = mysqli_select_db($conn,"misao_ec_demo");
// 配列の中身を明示してくれる  (チェック用)
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
//---------------------------
$errors = array('name1'=>"",'gender1'=>"",'email1'=>"",'email2'=>"",'email3'=>"",'password1'=>"",'password2'=>"",'password3'=>"",'password4'=>"",'password5'=>"",'phone1'=>"",'phone2'=>"",'phone3'=>"");
// isset関数は変数にNULL以外の値がセットされているかを調べる関数
if(isset($_POST['register']) && $_POST['register'] == "Submit"){
  // Definition and Initialization

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $password1 = $_POST["check-password"];
  $day = $_POST["day"];
  $month = $_POST["month"];
  $year = $_POST["year"];
  $image = $_FILES["userimg"];
  $imgname = $image["name"];
  $error_num = 0;
  // -----------------------------------------------
  // email sent from form
    $array = "select id from user_information where email='".$email."'";
    $result = mysqli_query($conn,$array);
    $count = mysqli_num_rows($result);
    // echo $count; （チェック用）
  // ------------------------------------------------------
  // Validation ↓↓↓↓↓↓↓↓↓↓↓↓↓ ----------------------------
  if(!empty($_POST['gender'])) {
    $gender=$_POST['gender'];
  }
  else if(empty($_POST['gender'])) {
    $errors['gender1'] = "no gender ";
    $gender="";
    $error_num++;
  }
  if (empty($name)) {
    $errors['name1'] = "Enter the name";
    $error_num++;
  }
  if (empty($email)) {
   $errors['email1'] = "Enter the email";
   $error_num++;
  }
  else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email2'] = "Enter a valid email";
    $error_num++;
  }
  if ($count >= 1) {
    $errors['email3'] = "Your email address is already used.";
    $error_num++;
  }
  if (empty($password)) {
    $errors['password1'] = "Enter the password";
    $error_num++;
  }
  else if (! preg_match("/^[a-z A-Z 0-9]+$/",$password)) {
    $errors['password2'] = "Enter a valid password";
    $error_num++;
  }
  else if (strlen($password) < 6 || strlen($password) > 8) {
    $errors['password3'] = "Your passward number of characters is different";
    $error_num++;
  }
  if (empty($password1)) {
    $errors['password4'] = "Enter the confirm password";
  }
  else if ($password != $password1) {
    $errors['password5'] = "Passward is wrong";
    $error_num++;
  }
  else {
  // エラーが一つも無かったら　成功
    if ($error_num == 0) {
    //データベースへ情報を挿入 --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
      $query = "insert into user_information (id,userName,password,email,gender,day,month,year,userImg)values('','$name','$password','$email','$gender','$day','$month','$year','$imgname')";
    $run = mysqli_query($conn,$query);
    //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // リダイレクトを実行----------------
      // header("location: login.php");
    // -------------------------------
    //DATABASE close
      mysqli_close($conn);
    //--------------------------------------------------------------------------------------------------------------------------------------------------
    }
  }
}
?>
    <!-- <div class="container">
      <form class="form-registration" action="registration.php" method="post">
        <img src="img/logo1.png" alt="">
        <h2 class="form-registration-heading">Create account</h2>
        <input type="text" name="name" class="input-block-level" placeholder="Name">
        <p><?php echo $errors['name1']; ?></p>
        <input type="text" name="email" value="" class="input-block-level" placeholder="Email">
        <p><?php echo $errors['email1']; ?></p>
        <p><?php echo $errors['email2']; ?></p>
        <p><?php echo $errors['email3']; ?></p>
        <input type="password" name="password" value="" class="input-block-level" placeholder="Password (6-8)">
        <p><?php echo $errors['password1']; ?></p>
        <p><?php echo $errors['password2']; ?></p>
        <p><?php echo $errors['password3']; ?></p>
        <input type="password" name="check-password" value="" class="input-block-level" placeholder="Confirm password">
        <p><?php echo $errors['password4']; ?></p>
        <p><?php echo $errors['password5']; ?></p>
        <input type="text" name="phone" value="" class="input-block-level" placeholder="Phone Number (8-10)">
        <p><?php echo $errors['phone1']; ?></p>
        <p><?php echo $errors['phone2']; ?></p>
        <p><?php echo $errors['phone3']; ?></p>
        <input type="text" name="city" value="" class="input-block-level" placeholder="City">
        <input type="text" name="country" value="" class="input-block-level" placeholder="Country">
        <table>
          <tr>
            <td>
              <select class="" name="day">
                <option value="">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </td>
            <td>
              <select class="" name="month">
                <option value="">Month</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">Month</option>
                <option value="5">Month</option>
                <option value="6">Month</option>
                <option value="7">Month</option>
                <option value="8">Month</option>
                <option value="9">Month</option>
              </select>
            </td>
            <td>
              <select class="" name="year">
                <option value="">Month</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">Month</option>
                <option value="5">Month</option>
                <option value="">Month</option>
                <option value="">Month</option>
                <option value="">Month</option>
                <option value="">Month</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><input type="radio" name="gender" value="1">Male</td>
            <td><input type="radio" name="gender" value="2">Female</td>
          </tr>
        </table>
        <input id="registration-button" class="btn btn-large btn-primary" type="submit" name="register" value="Create your MISAO account"></input>
      </form>
      <p><a href="index.php">HOME </a></p>
      <p><a href="login.php">To Login page</a></p>
    </div>
  </body>
</html> -->
