<!DOCTYPE html> <!-- get use krle akta worning disse. ata find out krte parchi na -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <input type="text" name="username">
            <input type="text" name="email">
            <button type="submit">Submit</button>
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $username = $_GET['username'];
                $email = $_GET['email'];
                if (!empty($username)) {
                    echo $username.$email;
                } else {
                    echo "input field is fake";
                }
            } else {
                ECHO "METHOD IS POST";
            }
        ?>
    </body>
</html>