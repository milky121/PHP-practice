<?php
$a= readfile("myfile.txt");  //read file with umber of characters
echo $a; 

?>



<?php
$q = fopen("myfile.txt","w");
$txt= "milky rani/n";
fwrite($q,$txt);
fclose($q);



?>


