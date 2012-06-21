$(document).ready(function() {
    /**
     * 初期処理
     */
    $("#send").click(function(){

        var form = $("#search");// パラメータを取り込むFormのID
        var param = {}; // 配列を初期化

        // フォーム内の情報を配列にまとめる
        rel = form.serializeArray();
        $(form.serializeArray()).each(function(i, v) {
            param[v.name] = v.value;
        });

        // 結果はプロパティで取得出来る
        $.post('search.php', param, function(returnValue){
            /**
             * PHPからレスポンスが帰ってくると実行される、引数はレスポンスの値
             */
            if (returnValue.url == undefined){
            }else{
                $('#res').append('<a href=' + returnValue.url + ' >' + returnValue.tag + '</a><br>');
            }
        },"json");
    });

});
