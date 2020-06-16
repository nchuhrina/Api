<?php
function search_city($city_name , $data_file){
    $xml = simplexml_load_file($data_file);
    $json = json_encode($xml);
    $json = json_decode($json, TRUE);
    $sh = $json['item'];
    foreach ($sh as $s) {
        if ($s['point_latin_name']==$city_name){
            return $s['point_id'];
        }
    }
}

function search_routes($data_file){
$xml = simplexml_load_file($data_file);
$json = json_encode($xml);
$json = json_decode($json, TRUE);
$sh = $json['item'];

foreach ($sh as $s) {
    echo 'Shedule '.$s['date_from'].':<br>';

    echo $s['route_id'].' - '.$s['route_name'].'<br>';

    echo '<br>';
}}