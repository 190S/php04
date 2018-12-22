<?php

/*
【応用】次のプログラムは、配列の中で一番大きい値を返す max_array
という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }
    return $max_number;
 }
 */

// 配列の設定
$arr = [4, 1, 6, 9, 2, 3, 8, 7, 5, 100];

//関数の作成
 function max_array($arr){
//最大値の初期値を配列の0番目に設定
 $max_number = $arr[0];
 //配列を一つずつ取り出す
 foreach($arr as $a){

   //もし$max_numberが取り出した配列$aより小さい時は$max_numberを$aとする。
   if ($max_number < $a) {
     $max_number = $a;
   }

  }
    return $max_number;
 }

echo max_array($arr);

?>
