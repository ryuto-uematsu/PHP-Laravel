<?php
//strip_tags 指定した文字列のHTMLタグやPHPタグを取り除く関数
$txt = "<h1>HTMLタグやPHPタグを</h1>". "<p>取り除く</p>";
echo strip_tags($txt)."\n";

//array_push 配列の最後に要素を追加する関数
$num = array(1,2,3,4,5);
array_push($num,6,7,8,9);
echo print_r($num)."\n";

//array_merge 配列の最後に複数の配列を結合する関数
$months1 = array("Jan.","Feb.","Mar.","Apr.");
$months2 = array("May","Jun.","Jul.","Aug.");
$months3 = array("Sep.","Oct.","Nov.","Dec.");

$months = array_merge($months1,$months2,$months3);
print_r($months)."\n";

//time関数は現在のUnixタイムスタンプを返す関数
//UnixタイムはUnixエポック(UTCでの1970年1月1日 00:00:00)からの経過時間を指す
//mktime 年月日と時間を指定することで、指定した日時のタイムスタンプを取得する関数
$time = mktime(10,5,38,8,19,2023);
echo $time."\n";  //タイムスタンプは1692439538

//指定された日時を返す関数
echo date('Y/m/d');