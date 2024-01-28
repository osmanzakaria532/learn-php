<?php 

    $person_name = "Osman Zakaria"; //global scope
    $social_link = "facebook.com/osmanzakaria532"; //global scope

    // echo $person_name." <br> ".$social_link;


    function getName(){
        $person_name = "Osman Zakaria"; //local scope
        echo $person_name;
    }
    getName();
?>