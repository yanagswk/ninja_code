<?php 

$list = [-1, 0, 1, "2", "3A", 4.1, [5], "1,000", 1001];

foreach ($list as $value) {
    // if (is_int($value)) {
    if (is_numeric($value)) {
        echo $value . '<br>';
    }
}


?>