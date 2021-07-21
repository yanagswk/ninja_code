<?php 

$list = ["a", "b", "a", "a", "A", "1", "b", 1];
// $unique_list = array_unique($list);
// print_r($unique_list);

$new_list = [];

foreach ($list as $value) {
    $count = 1;
    if (!array_key_exists($value, $new_list)) {
        $new_list[$value] = $count;
    } else {
        $new_list[$value] += $count;
    }
}

foreach($new_list as $key=>$value) {
    echo $key . ':' . $value . '<br>';
}

?>