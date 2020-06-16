<?php
const URL = "https://test-api.bussystem.eu/server/curl";
const LOGIN = "login=pinkangelssugar&password=AmdUN5sIT4pl";
function request($file_request, $f_safe, $extra_data){
$fh = fopen($f_safe, 'w');
$ch = curl_init(URL.$file_request );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_MAXREDIRS,10);
curl_setopt($ch, CURLOPT_URL,URL.$file_request );
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, LOGIN.$extra_data);
curl_setopt($ch, CURLOPT_FILE, $fh);
$data = curl_exec($ch);
if ($data === FALSE) {
    echo "cURL Error: " . curl_error($ch);
}}