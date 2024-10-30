<?php
$pi=3.14;
$radius = 5;
$area=3;
$length=6;
$breadth=7;
$a=4;
$b=2;
$base=9;
$height=8;
$trapezium= 1/2*($a+$b)*$height;
echo"area of Circle is " .$pi*$radius*$radius;
echo"</br>";
echo"area of Rectangle is" .$length*$breadth;
echo"</br>";
echo"area of Trapezium is".$trapezium;
echo"</br>";
echo"area of Parallelogram is" .$base*$height;
echo"</br>";
?>

<?php
$a=4;
$b=2;
$c=2;
if($a+$b==$c||$a+$c==$b||$b+$c==$a){
    echo"triangle is isosceles";
}
else{
    echo"triangle is not isosceles";
    echo"</br>";
}
?>

<?php
$num= 8;
for($i=1;$i<=10;$i++){
    $product=$i*$num;
    echo"$num*$i=$product";
    echo"</br>";
}
?>