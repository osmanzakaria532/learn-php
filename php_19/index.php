<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // initial, condition, increment / decrement

        // $value = 20;
        // $init = 0;
        $info = array("osman zakaria", "01686942329", "leave in ctg");
        $count_array_value = count($info);
        for($init=0; $init  < $count_array_value; $init++){
            echo $info[$init]."<br>";
        };
    ?>
</body>
</html>