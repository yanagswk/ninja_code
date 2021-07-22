<?php 

$csv = '1,02,a,"b","c,d,e","f""g"';

$ex_csv = explode(',', $csv);

// print_r($ex_csv);

// print_r(explode('""', $ex_csv));

// foreach($ex_csv as $cs) {
    
//     echo gettype($cs) . ' ' . trim($cs, '"') . '<br>';
// }


// 答え
$list = str_getcsv($csv);

print_r($list);

?>