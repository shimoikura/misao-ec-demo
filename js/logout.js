$(document).ready(function(){
  $('#modal-logout').click(function(){
    $.ajax({
      url:'logout.php',
      type:'post',
      data:{data:1},
      success:function(result){
        location.reload();
      }
    });
  });
});
