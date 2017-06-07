$(document).ready(function(){
  // registraion  -----------------------------------------------------------------------
     $("#modal-registration-open,#modal-registration-open2").click(function(){
       $("#modal-login-content,#modal-login-overlay").fadeOut("slow",function(){
         //[#modal-registration-overlay]を削除する
         $('#modal-login-overlay').remove();
       });
       //キーボード操作などにより、オーバーレイが多重起動するのを防止する
       $(this).blur() ; //ボタンからフォーカスを外す
       if($("#modal-registration-overlay")[0]) return false ; //新しくモーダルウィンドウを起動しない
       //オーバーレイ用のHTMLコードを、[body]内の最後に生成する
       $("body").append('<div id="modal-registration-overlay"></div>');
       $("#modal-registration-overlay").fadeIn("slow");
       //コンテンツをセンタリングする
       centeringModalSyncer() ;
       $("#modal-registration-content").fadeIn("slow");
        //[#modal-registration-overlay]をクリックしたら…
        $("#modal-registration-overlay").unbind().click(function(){
          //[#modal-registration-content]と[#modal-registration-overlay]をフェードアウトした後に…
          $("#modal-registration-content,#modal-registration-overlay").fadeOut("slow",function(){
            //[#modal-registration-overlay]を削除する
            $('#modal-registration-overlay').remove();
          });
         });
        });
       //センタリングをする関数
        function centeringModalSyncer(){
        //画面(ウィンドウ)の幅を取得し、変数[w]に格納
        var w = $(window).width();
        //画面(ウィンドウ)の高さを取得し、変数[h]に格納
        var h = $(window).height();
        //コンテンツ(#modal-registration-content)の幅を取得し、変数[cw]に格納
        var cw = $("#modal-registration-content").outerWidth();
        //コンテンツ(#modal-registration-content)の高さを取得し、変数[ch]に格納
        var ch = $("#modal-registration-content").outerHeight();
        //コンテンツ(#modal-registration-content)を真ん中に配置するのに、左端から何ピクセル離せばいいか？を計算して、変数[pxleft]に格納
        var pxleft = ((w - cw)/2);
        //コンテンツ(#modal-registration-content)を少し上に配置するのに、上部から何ピクセル離せばいいか？を計算して、変数[pxtop]に格納
        var pxtop = ((h - ch)/3);
        //[#modal-registration-content]のCSSに[left]の値(pxleft)を設定
        $("#modal-registration-content").css({"left": pxleft + "px"});
        //[#modal-registration-content]のCSSに[top]の値(pxtop)を設定
        $("#modal-registration-content").css({"top": pxtop + "px"});
      }
});
