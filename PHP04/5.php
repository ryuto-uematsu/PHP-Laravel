<?php
$calendar_2018 = [       //変数の先頭が数字のため、calendarと2018を入れ替え
  "January" => "1月",
  "February" => "2月",   //、を,に修正
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",       //=を=>に修正
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",   //10月が数値になっているため、文字列に修正
  "November" => "11月",
  "December" => "12月"   //{}を[]に修正
  ];

// 12月を表示する
echo $calendar_2018["December"];
?>