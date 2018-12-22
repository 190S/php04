<?php
//1~10までを足した値を返す関数
function sum($max){

  //$resultは結果を返す変数
  $result = 0;

  //$iは1からはじまり$maxより大きくなるまでループする
  for($i = 1; $i <= $max; $i++){

    //$resultに$iを順番に足していく
    $result += $i;
  }

  //$resultを結果として返す
  return $result;
}

//関数の実行
echo sum(100)."\n";

//文字の長さを取得strlen
 $string = "ABCDEF";
 echo strlen($string)."\n";

 //文字列を置換するstr_replace
 $string ="I Love Ruby!";
 $new_string = str_replace("Ruby", "PHP", $string);
 echo $new_string."\n";

 //配列の要素の個数を取得するcount
 $array = [1,2,3,4,5,6,7,8,9,10];
 echo count($array)."\n";

//配列をソートするasort,arsort
$array = [2,5,3,6,1,4,9,8,7];
//小さい順
asort($array);
//print_rで表示
print_r($array);

//大きい順
arsort($array);
//print_rで表示
print_r($array);

 ?>
