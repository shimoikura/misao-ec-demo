<?php
session_start();
  if (isset($_POST['data']) && $_POST['data'] == 1) {
    if (! isset($_SESSION["cartnum"])) {
      $_SESSION["cartnum"] = 1;
    }
    else {
      $_SESSION["cartnum"] += $_POST["subnum"];
    }
    $b = $_POST["ttlprice"];

    echo $_SESSION["cartnum"];
  }
  else {
    echo "error";
  }


 ?>
