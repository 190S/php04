<?php

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した
結果を返す関数を作成してください。*/

function sum($a, $b){
  $result = 0;
  $result = $a + $b;
  return $result;
}

echo sum(100, 100);
?>
