<?php 

$path = '/var/www/html/example.com/index.html';

$paths = explode('/', $path);

array_splice($paths, 3, 0, 'test');

$merge_path = join('/', $paths);

echo $merge_path;



// 答え  
$dir = dirname($path);
$arr = explode('/', $dir);
array_splice($arr, 3, 0, 'test');
$dir = implode('/', $arr);
$path = $dir . '/' . basename($path);
echo $path;


?>