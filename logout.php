<?php
session_start();
$data = $_POST['data'];
if ($data == 1) {
  $_SESSION = array();
  echo "logout!";
}
else {
  echo "error";
}
 ?>
