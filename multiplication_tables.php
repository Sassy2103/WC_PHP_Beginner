<?php
// continue の確認

for($i = 0; $i < 10; ++$i) {
    echo "{$i}  \n";
    //
    for($j = 1; $j <= 9; ++$j) {
        $k = $i * $j;
        echo "{$i} * {$j} = {$k} \n";
    }
    // 
    echo "\n";
}