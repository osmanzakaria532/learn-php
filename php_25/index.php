
<?php 


// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV

// $GLOBALS
$person_name = "osmanzakaria";
function getName(){
    // global $person_name;
    // echo $person_name;
    echo $GLOBALS['person_name'];
}
getName(); echo "<br>";

// $_SERVER

echo $_SERVER['SERVER_ADDR']; echo "<br>";
echo $_SERVER['SERVER_NAME']; echo "<br>";
echo $_SERVER['SERVER_SOFTWARE']; echo "<br>";
echo $_SERVER['SERVER_PROTOCOL']; echo "<br>";
echo $_SERVER['REMOTE_ADDR']; echo "<br>";
// echo $_SERVER['REMOTE_HOST']; echo "<br>";
echo $_SERVER['REMOTE_PORT']; echo "<br>";
echo $_SERVER['SCRIPT_NAME']; echo "<br>"; echo "<br>" ; echo "<br>";

// $_REQUEST 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="username" placeholder="User-Name">
            <button type="submit">Submit</button>
        </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_REQUEST['username'];

            // if (empty($username)) {
            //     echo "Why input field is empty";
            // }
            // else {
            //     echo $username;
            // }
            if (!empty($username)) {
                echo $username;
            }
            else {
                echo "Why input field is empty";
            }
        }
        else {
            echo "change your method";
        }
    ?>


    
</body>
</html>

