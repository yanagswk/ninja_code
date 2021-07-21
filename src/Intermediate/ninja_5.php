<?php 

$list = [1, 2, [3, [4, 5], 6, 7], 8, [9]];

$result = "";
$result = [];

function is_numric_re($list) {
    foreach($list as $index=>$value) {
        if (!is_array($value)) {
            $result[] = $value . '<br>';
        } else {
            foreach($value as $val) {
                if (!is_array($val)) {
                    $result[] = $val . '<br>';
                } else {
                    foreach($val as $v) {
                        $result[] = $v . '<br>';
                    }
                }
            }
        }
    }
    // print_r($result);
    echo join('', $result);
}

is_numric_re($list);



// 答え  (再起処理関数で記述する)
function is_numeric_re($list) {
    foreach ($list as $item) {
        if (is_array($item)) {
            is_numeric_re($item);
        } else {
            echo $item."<br>\n";
        }
    }
}
is_numeric_re($list); 




?>