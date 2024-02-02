<?php

/*
>> Data Types in PHP
1. string; ( "" , '' )
    1.. strlen() > to define character;
    2.. str_word_count() > to count words in a sentence;
    3.. strrev() > to reverse character or word
    4.. strpos($parameter,$parameter) > kono akta word ar index janar jonno ata use kore. jake khoje se second parameter bosbe;
    5..str_replace("", "", ""); ata boji nai

    string to integer
2. integer; (one digit, no decimal, negative ba positive)
    1.. PHP_INT_MAX()
    2.. PHP_INT_MIN()
    3.. PHP_INT_SIZE()
    4.. is_int()
    5.. is_integer() alias is_int()
    6.. is_log() is_int()
3. float (double);
    1.. float to integer (
        $price = 520036.58;
        $prc = (int)$price;
        echo $prc;
    )
4. boolean; ( true > ( value 1 ) ot false > ( value 0 ) to use conditional function )
5. array;
6. object;
7. null;
8. resource;


find out with "var_dump" data type of any dataType in php 
var_dump() is a building function to return data type and value
*/

// $arr_type = array("OsmanZakaria", "Chattagram");

// var_dump($arr_type);


$string = "520036.58";
var_dump($string);
$prc = (int)$string;
var_dump($prc);