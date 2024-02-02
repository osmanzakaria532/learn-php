<?php 


// Magic Constant 

echo __DIR__;
echo "<br>";
echo __FILE__;

echo "<br>";

function userDefine(){
    echo __FUNCTION__;
};
userDefine();

// in oop part
// __CLASS__;
// __METHOD__;
// __NAMESPACE__;