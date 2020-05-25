<?php
//1
$a = 3;
$b += 7;
echo $a + $b;

//2
$array_month = [
    "january",
    "february",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "Decemder"
];
echo $array_month[7];

//3
$hello = "Hello,";
$name .= "Takuya";
$world .= "'s World!";
echo $hello;
echo $name;
echo $world;

//4
$tech_boost = "tech";
$tech_boost.= "_boost";
echo $tech_boost;

//5
$calendar_2018 = [
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
echo $calendar_2018["December"];
