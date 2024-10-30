<?php
for($i=1;$i<=4;$i++){
    for($j=1;$j<=4;$j++){
        echo"$i $j </br>";
    }
}
?>

<?php
$num = 2;
while($num<=20){
    echo"$num";
    echo"</br>";
    $num=$num+2;
}

?>


<?php
$num=3;
do{
    echo"current value is $num </br>";
    $num= $num+3;
}
while($num<=30);

?>