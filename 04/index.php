<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double_return($number){
    $number *= 2;
    return $number;
}
echo double_return(2);       //結果確認
echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a, $b){
    $total = $a + $b;
    return $total;
}
echo sum(4, 6);              //結果確認
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$arr = array(1, 3, 5 ,7, 9);
function multiplication($arr){
    $total = 1;
    foreach($arr as $ar){
        $total = $total *= $ar;
    }
    return $total;
}
echo multiplication($arr);   //結果確認
echo "\n";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 echo max_array($arr);      //結果確認
echo "\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
// strip_tags：文字列から HTML および PHP タグを取り除。また、2番目に残したいタグを指定できる。また、コメント部分は削除される。
$text = '<p>Hello. PHP</p><!-- コメント --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, "<p>");  // <p>残し
// array_push：配列の最後に要素を追加できる。
$members = array("一太郎", "二太郎", "三太郎");
var_dump($members);
array_push($members, "四太郎", "五太郎");
var_dump($members);
// array_merge：２つ以上の配列をマージする。
$fruits1 = [
    0 => "イチゴ",
    1 => "ぶどう",
    2 => "メロン",
    ];
$fruits2 = [
    0 => "パイナップル",
    1 => "みかん",
    2 => "スイカ",
    ];
$fruits_merge = array_merge($fruits1, $fruits2);
var_dump($fruits_merge);
// time, mktime：引数で指定された時間を UNIX時間 (1970年1月1日0時からの経過秒数) で返します
//mktime (時, 分, 秒, 月, 日, 年, サマータイム);
// date：指定された引数 timestamp を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返します。 タイムスタンプが与えられない場合は、現在の時刻が使われます。
  $yesterday = mktime(14, 32, 38, 7, 18, 2020);
    echo date("Y年m月d日h時i分s秒", $yesterday);

echo "\n";
?>
