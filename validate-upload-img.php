<?php
// validation  --------------------------------------------------------------------------------------------------
function checkImg($image){
  // initialization------------------------------
  global $imgname;
  $imgname = $image["name"];
  $size = $image["size"];
  $type = $image["type"];
  $tmp_name = $image["tmp_name"];
  $type_check = explode(".",$imgname);
  $type1 = end($type_check);
  $validtype = array('jpeg','jpg','gif','png');
  // -------------------------------------------------
  if (($type == " image/jpeg" || $type == " image/jpg" || $type == "image/gif" || $type == "image/jpeg" || $type == " image/png") || (in_array($type1,$validtype))) {
    // echo "Type is correct.<br>";
    if($size < 1000000){
      // echo "The size is also OK.<br>";
    //Check exist or not ---------------------------------------------------
      if (file_exists('productImg'.$imgname)) {
        $rand = rand(0,99999);  //make random
        //Upload
        $upload = move_uploaded_file($tmp_name,"images/product-img/".$rand."_".$imgname);
        return "true";
      }
    // --------------------------------------------------------------------------
      else {
        //Upload
        $upload = move_uploaded_file($tmp_name,"images/product-img/".$imgname);
        if ($upload) {
          return "true";
        }
        else{
          return "sorry. file is not uploaded.";
        }
      }
    }
    else {
      return "The image size is too large.";
    }
  }
  else {
    return "Type is wrong.";
  }
}
 ?>
