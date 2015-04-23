<?php
require_once('Constants.php');
require_once('GoogleUrlApi.php');

$data_back = json_decode(file_get_contents('php://input'));
$inpLongUrl = $data_back->{"longUrl"};

$output = array();
$outId = "";

$googleHelper = new GoogleURLAPI(GOOGLE_API_KEY);
$outId = $googleHelper->shorten($inpLongUrl);

$output['id']=$outId;
echo json_encode($output, JSON_UNESCAPED_SLASHES);
?>