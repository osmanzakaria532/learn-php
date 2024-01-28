<?php 

$phone_number = "01686942329";

// to define global variable first one
function getNumber(){
    global $phone_number;
    echo $phone_number." ";
}
getNumber();



// to define global variable second one
function getPhoneNumber(){
    echo $GLOBALS['phone_number'];
}
getPhoneNumber();