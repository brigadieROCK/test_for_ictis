<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://example.com');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$out = curl_exec($curl);
curl_close($curl);

echo $out;
?>