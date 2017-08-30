<?php
$url = "http://www.w3resource.com/php-exercises/php-basic-exercises.php";
$url = parse_url($url);
echo "Scheme is : ". $url['scheme']."<br />";
echo "Host is : ". $url['host']."<br />";
echo "Path is : ". $url['path']."<br />";

$current = parse_url($_SERVER['PHP_SELF']);
print_r($current);