<?php

/*
>> Data Types in PHP
1. string; ( "" , '' )
    1.. strlen() > to define character;
    2.. str_word_count() > to count words in a sentence;
    3.. strrev() > to reverse character or word
    4.. strpos($parameter,$parameter) > kono akta word ar index janar jonno ata use kore. jake khoje se second parameter bosbe;
    5..str_replace("", "", ""); ata boji nai
2. integer; (one digit, no decimal, negative ba positive)
3. float (double);
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


$user = "Muhammad";
$user_name = "osman zakaria is Muhammad a Web Developer  and Digital  Marketer";

echo str_replace($user_name,$user);