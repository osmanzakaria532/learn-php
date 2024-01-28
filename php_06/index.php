<?php 

function getStatic(){
    static $qty = 1;
    echo $qty."<br>" ;
    $qty+=1;
}

getStatic();
getStatic();
getStatic();
getStatic();