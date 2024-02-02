<?php 

define("name", "osman");
echo name;
echo "<br>";

function getName(){
    echo name;
}
getName();
echo "<br>";

const name1 = "Muhammad";
echo name1;

echo "<br>";
echo "<br>";

define("info", [
    "osman ",
    "016869423290 ",
    "Dhaka-banasree"
]);

echo info[0];
echo info[1];
echo info[2];