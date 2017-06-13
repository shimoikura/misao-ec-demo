$(document).ready(function(){
  $("#btn-login").click(function(){
    var email = $("#log-email").val();
    var password = $("#log-pass").val();

    $.ajax({
      url:"validate-login.php",
      type:"post",
      data:{email:email,password:password,data:1},
      dataType: 'json',
      cache: false,
      success:function(result){
        if (result['success'] == "true" ) {
          $("#modal-login-content,#modal-login-overlay").fadeOut("slow",function(){
            //[#modal-login-overlay]を削除する
            $('#modal-login-overlay').remove();
          });
        }
        else {
          $('#false1').html(result['email1']);
          $('#false2').html(result['email2']);
          $('#false3').html(result['password1']);
          $('#false4').html(result['password2']);
          $('#false').html(result['false']);
        }
      }
    });
  });


  $("#modal-login-open,#modal-login-open2").click(function(){
    //キーボード操作などにより、オーバーレイが多重起動するのを防止する
    $(this).blur() ; //ボタンからフォーカスを外す
    if($("#modal-login-overlay")[0]) return false ; //新しくモーダルウィンドウを起動しない
    //オーバーレイ用のHTMLコードを、[body]内の最後に生成する
    $("body").append('<div id="modal-login-overlay"></div>');
    $("#modal-login-overlay").fadeIn("slow");
    //コンテンツをセンタリングする
    centeringModalSyncer() ;
    $("#modal-login-content").fadeIn("slow");
     //[#modal-login-overlay]をクリックしたら…
     $("#modal-login-overlay").unbind().click(function(){
       //[#modal-login-content]と[#modal-login-overlay]をフェードアウトした後に…
       $("#modal-login-content,#modal-login-overlay").fadeOut("slow",function(){
         //[#modal-login-overlay]を削除する
         $('#modal-login-overlay').remove();
       });
      });
     });
    //センタリングをする関数
     function centeringModalSyncer(){
     //画面(ウィンドウ)の幅を取得し、変数[w]に格納
     var w = $(window).width();
     //画面(ウィンドウ)の高さを取得し、変数[h]に格納
     var h = $(window).height();
     //コンテンツ(#modal-login-content)の幅を取得し、変数[cw]に格納
     var cw = $("#modal-login-content").outerWidth();
     //コンテンツ(#modal-login-content)の高さを取得し、変数[ch]に格納
     var ch = $("#modal-login-content").outerHeight();
     //コンテンツ(#modal-login-content)を真ん中に配置するのに、左端から何ピクセル離せばいいか？を計算して、変数[pxleft]に格納
     var pxleft = ((w - cw)/2);
     //コンテンツ(#modal-login-content)を少し上に配置するのに、上部から何ピクセル離せばいいか？を計算して、変数[pxtop]に格納
     var pxtop = ((h - ch)/3);
     //[#modal-login-content]のCSSに[left]の値(pxleft)を設定
     $("#modal-login-content").css({"left": pxleft + "px"});
     //[#modal-login-content]のCSSに[top]の値(pxtop)を設定
     $("#modal-login-content").css({"top": pxtop + "px"});
   }
});
