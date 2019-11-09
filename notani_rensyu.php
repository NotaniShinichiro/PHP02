<?php

$integer = 120;

echo $integer . "\n";



echo 3 + 7; 
echo "\n";

$a = 3;
$b = 7;

echo $a + $b;
echo "\n";

$array_month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

echo $array_month[7];
echo "\n";

$hello = "HELLO, ";
$name = "NOTANI";
$world = "'s World!";

echo $hello . $name . $world . "\n";

$tech_boost = "tech ";
$tech_boost = $tech_boost .= "boost";


echo $tech_boost;
echo "\n";


$a2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $a2018_calendar["December"];
echo "\n";

echo $a2018_calendar[1];
echo "\n";