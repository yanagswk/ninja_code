<?php 

$url = 'https://example.com/a/b/c.php?d=1&e=2#f';

// urlを分解して、パラメータのみにする。
$parm = parse_url($url, PHP_URL_QUERY);

// パラメータの文字列を配列で取得する。
parse_str($parm, $query);



// 答え  
$q = explode('&', $parm);
print_r($q);

foreach($q as $value) {
    $h = explode('=', $value);
    print_r($h);
}



?>