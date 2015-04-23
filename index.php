<?php
require_once('GoogleUrlApi.php');

// Create instance with key
$key = 'AIzaSyBsF1FGwBv7xy0kU1QgKE3EPzmZ50VI3FQ';
$googer = new GoogleURLAPI($key);

// Test: Shorten a URL
$shortDWName = $googer->shorten("http://asamahe.com/");
echo $shortDWName;
?>