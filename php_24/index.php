<?php

$sort_rsort = array("bds","ad","kff","ysk","cb","b","d","n","j","u","y",);
// sort($sort_rsort); 
rsort($sort_rsort); 
foreach($sort_rsort as $value) { 
    echo $value."<br>";
};

echo "<br>";


$person_infos = array(
    "name" => "osmanzakaria",
    "division" => "dhaka",
    "contact" => "01686942329",
);
// ksort()
// krsort()
// asort()
// arsort()
foreach($person_infos as $key => $value){
    echo $value."<br>";
};
