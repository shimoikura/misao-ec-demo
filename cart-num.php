<?php
session_start();
  if (isset($_POST['data']) && $_POST['data'] == 1) {
    $_SESSION["price"] = $_POST["ttlprice"];
    if (! isset($_SESSION["cartnum"]) || ! isset($_SESSION["i"])) {
      $_SESSION["cartnum"] = $_POST["subnum"];
      $_SESSION["i"] = 1;
    }
    else {
      $_SESSION["cartnum"] += $_POST["subnum"];
      $_SESSION["i"] = $_SESSION["i"] + 1;
      echo "a";
    }
    $i = $_SESSION["i"];
    $_SESSION["cartid_$i"] = $_POST['cartid'];
    for ($j = 1; $j <= $i; $j++) {
      //初めて商品を入れる場合
      if ($_SESSION["cartid_$i"] == $_POST['cartid'] && $j == $i) {
        echo "difference";
      }
      //同じ商品を既にカートに入れている場合
      elseif (! isset($_SESSION["cartid_$j"])) {
        echo "same2";
      }
      elseif ($_SESSION["cartid_$j"] == $_POST['cartid']) {
          echo "same<br>";
          unset($_SESSION["cartid_$j"]);
      }
      // カート内に同一商品がなかった場合
      else {
        echo "difference<br>";
      }
    }
    // echo $d;
    // echo $_SESSION["cartnum"];
  }
  else {
    echo "error";
  }


 ?>
