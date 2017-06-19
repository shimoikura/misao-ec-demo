$(document).ready(function(){
  $("#btn-add-cart").click(function(){
    var sub_num = $("#sub-num").val();
    var total_price = $("#vvv").val();
    var cart_id = $("#cartid").val();
    $.ajax({
      url:"cart-num.php",
      type:"post",
      data:{subnum:sub_num,ttlprice:total_price,cartid:cart_id,data:1},
      success:function(val){
        alert(val);
        location.reload();
      }
    });
  });
});
