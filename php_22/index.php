 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

        <?php
        include("lib.php");
        $FirstName = "osman";
        $lastName = "zakaria";

        echo getFullName($FirstName, $lastName);
        
        ?>
    
 </body>
 </html>