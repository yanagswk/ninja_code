<?php 

$list[] = ['name' => 'A', 'test' => [10, 3, 5]];
$list[] = ['name' => 'B', 'test' => [7, 9]];
$list[] = ['name' => 'C', 'test' => []];
$list[] = ['name' => 'D', 'test' => ""];
$list[] = ['name' => 'E', 'test' => [7]];
$list[] = ['name' => 'F', 'hoge' => []];



$avg_array = [];

$array_sort = array_column($list, 'test');

$array_sort[] = 0;
foreach ($array_sort as $index=>$value) {
    if (!empty($value)) {
        $avg = array_sum($value) / count($value);
        $array_sort[$index] = $avg;
    } else {
        $array_sort[$index] = 0;
    }
}

array_multisort($array_sort , SORT_DESC, $list);

foreach ($list as $index=>$value) {
    $list[$index]['test'] = $array_sort[$index];
    echo $list[$index]['name'] . ':' . $list[$index]['test'] . '<br>';
}



?>




<?php 

// $array = array(
//     array(
//         'id'        => 0,
//         'track_num' => 7,
//         'title'     => 'ベィスドロップ・フリークス',
//         'artist'    => 'かめりあ feat. ななひら'
//     ),
//     array(
//         'id'        => 1,
//         'track_num' => 1,
//         'title'     => 'CHRONO DIVER -NORNIR-',
//         'artist'    =>  'L.E.D.'
//     ),
//     array(
//         'id'        => 2,
//         'track_num' => 3,
//         'title'     => 'illuminate',
//         'artist'    => 'Sota Fujimori'
//     ),
// );

// foreach ((array) $array as $key => $value) {
//     $sort[$key] = $value['track_num'];
// }

// array_multisort($sort, SORT_ASC, $array);
// print_r($array);



?>