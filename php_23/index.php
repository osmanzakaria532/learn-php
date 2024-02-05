<?php

// indexed
// associative 
// multiDimensional

// ver_dump(), print_r(), count()


// -------------------------------------------------------indexed
$person_info = array("osmanzakaria", "dhaka", "01686942329");
foreach ($person_info as $value) {
    echo $value."<br>";
};

// --------------------------------------------------------associative 
$person_infos = array(
    "name" => "osmanzakaria",
    "division" => "dhaka",
    "contact" => "01686942329",
);
// var_dump($person_infos);
echo $person_infos["name"];
echo "<br>";
echo "<br>";
foreach($person_infos as $key => $value){
    echo $value."<br>";
};
echo "<br>";
echo "<br>";
$person_information = array(
    "name" => "osmanzakaria",
    "division" => array(
        "road" => "dhaka",
        "house" => 2
    ),
    "contact" => "01686942329",
);
// var_dump($person_information);
echo $person_information["division"]["road"];

