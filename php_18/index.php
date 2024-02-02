<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while-loop</title>
</head>
<body>
    <?php 
    $Starting = 0;
        do{
            echo "this is do while loop ".$Starting ."<br>";
            $Starting ++;
        } while($Starting <= 20);
    ?>
</body>
</html>