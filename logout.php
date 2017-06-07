<?php
session_start();
$data = $_POST['data'];
if ($data == 1) {
  // unset($_SESSION["login_user"]);
  $_SESSION = array();
  // header("location: index.php" );
  // exit();
  echo "logout!";
}
else {
  echo "error";
}
 ?>
