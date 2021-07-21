<?php 

$list = ['A1', 'A2', 'A3', 'A4'];

array_splice($list, 1, 1);

// print_r($list);

foreach ($list as $index=>$value) {
    echo $index . ':' . $value. '<br>';
}

?>