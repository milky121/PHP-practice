<?php
$x=20;
echo"before condition";
echo"</br>";


if($x==20){
    goto jump;
}
$name="milky";
echo $name;



jump:
echo"statement is jumpped on line 15";
echo"</br>";
?>

<?php
$num=0;
while($num<=10){
    echo $num;
    echo"</br>";
    $num++;

if($num==8){
    goto outside;
}
}

outside:
echo"you moved out";
echo"</br>";
echo"your loop is break";
?>