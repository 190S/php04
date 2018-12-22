<?php
//1.引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください

//関数の作成
function double($i) {
  //ここのresult0は値を初期化しているととらえればよろしいでしょうか？
  $result = 0;
  $result = $i *2;
  return $result;
  }

echo double(4);

echo "\n\n";
// 結果は必ずresuletなどに返した方が良いでしょうか？

//↓のような書き方でもOK?

function twice($i) {
  return $i * 2;
  }

echo twice(4);
//結果を再利用する場合は何か変数の格納した方が都合が良い等ケースバイケースでしょうか


?>
