<?php
header("Content-Type: application/json");
$url = "http://localhost/wp-json/wp/v2/openings/";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response; // Output the content of the URL
}

curl_close($ch);
?>
