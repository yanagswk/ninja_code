<?php 

$html = '<img src="a.jpg" /><img src="b.jpg" /><img src="c.jpg" />';

// preg_match_all('\/w.jpg', $html, $match_html);

// 答え
preg_match_all('/<img src=\"(.+?)\" \/>/', $html, $match_html);

print_r($match_html);

?>