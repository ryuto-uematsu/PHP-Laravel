<?php
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if($max_number < $a){  //$max_numberが配列の要素より少ない場合
        $max_number = $a;  //$max_numberに配列の要素を代入
    }
  }

  return $max_number;
}

echo max_array([0,1,2,3,4,5,6,7,8,9,10]);