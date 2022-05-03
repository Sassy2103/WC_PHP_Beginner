<?php
// 配列の作成
$array = [
    "key1" => "Hello",
    0 => '1st',
    1 => '2nd',
    "key2" => 3.14,
];

foreach($array as $k => $V) {
    echo "{$k} -> {$V} \n"; 
}

echo "\n";
foreach($array as $value) {
    echo "{$value} \n";
}
