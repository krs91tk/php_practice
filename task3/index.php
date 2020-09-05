<?php
//1
$name = "Takuya";
if ($name == "Takeya") {
    echo '私は あなたの名前 です';
} else {
    echo 'あなたの名前ではありません';
    echo "\n";
}

//2
$total = 0;
for($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";


//3
$fruits = array("apple", "orange", "melon", "lemon", "banana");
foreach ($fruits as $value){
  echo "要素は" . $value;
  echo "\n";
}
//4
$start = 1;
$end = 100;
for ($i = $start;$i < $end; $i++) {
 if($i % 5 == 0) {
  echo $i;
  echo "\n";
 }
}
