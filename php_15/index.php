<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else-cain</title>
</head>
<body>
    <!-- if-else-cain -->   
    <?php
        $currant_day = date("D");
        echo $currant_day;
        echo "<br>";
        
        if ($currant_day == "Fri") {
            echo "friday";
        }
        elseif($currant_day == "Sat"){
            echo "Saturday";
        }  
        else {
            echo "Sunday";
        };
        
    ?>
    
</body>
</html>