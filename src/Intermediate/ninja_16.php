<?php 

$years = [1900, 2000, 2020, 2022];

function is_leap_year($year) {
    foreach($year as $y) {
        $mk = mktime(0, 0, 0, 1, 1, $y);

        if (date('L', $mk)) echo $y . '<br>';
    }
}


is_leap_year($years);


?>