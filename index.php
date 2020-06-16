<?php
include_once('test.php');
include_once('request.php');
request('/get_points.php', 'getp.txt', '');
$city1 = search_city('Kiev','getp.txt');
$city2 =  search_city('Lviv','getp.txt');
request('/get_routes.php', 'getroutes.txt',
    '&id_from='.$city1.'&id_to='.$city2.'&date=2020-07-07');

search_routes('getroutes.txt');

request('/get_routes.php', 'getroutes.txt',
    '&id_from='.$city2.'&id_to='.$city1.'&date=2020-07-07');

search_routes('getroutes.txt');