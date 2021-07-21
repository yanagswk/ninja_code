<?php 

$list = ['A1', 'C2', 'B4', 'D3'];

sort($list);


// 答え
$list = array_reverse($list);
foreach ($list as $key => $val) {
    echo "{$key}: {$val}<br>";
}

?>