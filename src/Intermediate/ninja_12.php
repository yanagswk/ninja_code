<?php 

$v = "abcdefghijklmnopqrstuvwxyz";

$a = str_split($v, 7);

foreach ($a as $s) {
    echo $s."<br>\n";
}

?>