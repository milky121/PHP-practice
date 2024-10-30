<?php
$dir = "."; //dot is for current directory
if(is_dir($dir)){
    if($d= opendir($dir)){
        while($file = readdir($d)){
            echo "filename : " .$file. "</br>";
        }
        closedir($d);
    }
}


?>


<?php
echo getcwd();
?>