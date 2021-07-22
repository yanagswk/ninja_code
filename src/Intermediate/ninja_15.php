<?php 

date_default_timezone_set("Asia/Tokyo");
echo date('Y/m/d H:i:s') . '<br>';
echo date('Y/m/d H:i:s', strtotime('now +40 seconds +30 min +2 hours '));



?>