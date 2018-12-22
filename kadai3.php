<?php

/*
$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください
*/

//配列を入力
$arr = [1, 3, 5, 7, 9,11];

//関数の作成
function mul($arr) {
  //初期値を配列0番目
  $result = $arr[0];
  //変数の初期値$iを1;条件は変数が$arr配列の要素数になるまで;変数を1ずつ増加
  for ($i = 1; $i < count($arr); $i++){
    //結果 は結果に要素から取り出した数字の乗算をする
    $result *= $arr[$i];
   }
     return $result;
  }
  echo mul($arr)."\n";

//↓でも結果はでるかと思いますがどちらがよろしいでしょうか。
function mul2($arr) {
  $result = $arr[0];
  foreach ($arr as $i){
    $result *= $i;
   }
     return $result;
  }
  echo mul2($arr);
 ?>
