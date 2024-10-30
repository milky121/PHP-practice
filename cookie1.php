<?php
setcookie("user","MILKY RANI");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE["user"])){
            echo"sorry, cookie is not found!";
        }else{
            echo"</br>Cookie Value : " .$_COOKIE["user"];
        }
        ?>
    </body>
</html>