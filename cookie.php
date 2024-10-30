<?php
$cookie_name = "user";
$cookie_value="milky rani";
setcookie($cookie_name,$cookie_value,time()+ (86400),"/");
?>

<html>
    <head>
        <body>
            <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo"cookie is not set";
            }
            else{
                echo  "cookie value : " .$_COOKIE[$cookie_name];

            }
            ?>