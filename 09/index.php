1.URLとControllerやActionを紐付ける機能を何といいますか？
　Routing

2.あなたが考える、group化をすることのメリットを考えてみてください。
　・同じControllerファイル内のActionを一つにまとめてかける為、コードがみやすい。
　・階層のミスを防げる。
　・後々メンテが楽になる。
　・他の人がみた時にみやすいし、状況を説明しやすいし、把握しやすい。
　
3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
<?php
Route::get('XXX', 'AAAController@bbb');

Route::groupe(['prefix' => '/'], function(){
    Route::get('XXX', 'AAAController@bbb');
})
?>

4.【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。
https://github.com/yutmtsm/Laravel/blob/master/routes/web.php