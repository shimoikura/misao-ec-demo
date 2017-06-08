$(document).ready(function(){
  // Step1
  $("#btn-step1").click(function(){
    var name = $("#buy-name").val();
    var phone = $("#buy-phone").val();
    var address = $("#buy-address").val();
    var email = $("#buy-email").val();
    $.ajax({
      url:"buy-pass.php",
      type:"post",
      data:{name:name,phone:phone,address:address,email:email,type:1},
      success:function(){
        $("#step1").css("display","none");
        $("#step2").show();
      }
    });
  });

  // Step2
  $("#btn-step2").click(function(){
    var deli = $('input[name="deli"]:checked').val();
    var payment = $('input[name="payment"]:checked').val();
    $.ajax({
      url:"buy-pass.php",
      type:"post",
      data:{deli:deli,payment:payment,type:2},
      success:function(result){
        $("#step2").css("display","none");
        $("#step3").show();
      }
    });
  });

  // Step3
  // $("#btn-step2").click(function(){
  //   var gift = $('input[name="deli"]:checked').val();
  //   $.ajax({
  //     url:"buy-pass.php",
  //     type:"post",
  //     data:{deli:deli,payment:payment,type:2},
  //     success:function(result){
  //       $("#step2").css("display","none");
  //       $("#step3").show();
  //     }
  //   });
  // });
});
