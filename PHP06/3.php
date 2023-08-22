<?php
$arr = array(1,3,5,7,9);

$times = times($arr);

echo $times;
echo "\n";

function times($array){
    //与えられた配列の要素をすべてかけた結果を返す関数
    // $ret = array_product($array);
    $ret = 1;// 計算結果として $ret を返す
    // for/foreach 配列 $array の要素を１つずつ取り出す
    for($i = 0;$i < count($array);$i++) {
        // echo $array[$i];// 要素を出力する
        // echo "\n";

        // 要素を掛け合わせる
        $ret *= $array[$i];
        // $ret = $ret * $array[$i];
        // echo $ret;// 結果を表示
        // echo "\n";
    }
    return $ret;
}
