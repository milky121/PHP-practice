<!-- area of all -->


<?php
$pi=3.14;
$radius=5;
$area=3;
$length=6;
$breadth=7;
$a=4;
$b=2;
$base = 9;
$height=8;
$trapezium=1/2*($a+$b)*$height;
echo"area of circle is " .$pi*$radius*$radius;
echo"</br>";
echo"area of rectangle is " .$length*$breadth;
echo"</br>";
echo"area of trapezium is " .$trapezium;
echo"</br>";
echo"area of parallelogram is " .$base*$height;
echo"</br>";
?>




<!-- table -->
<?php
echo"</br>";
$num=4;
for($i=1;$i<=10;$i++){
    echo"the table of 4 is:" .$i*$num;
    echo"</br>";
    

}
?>

<!-- quadratic equation -->

<?php
function root($a,$b,$c){
    $d= $b*$b-4*$a*$c;
    if($d>=0){
        $x1=(-$b+sqrt($d)/2*$a);
        $x2=(-$b-sqrt($d)/2*$a); 



        echo"Roots are: $x1,$x2 \n";
        echo"</br>";
        echo"</br>";
    }
    else{
        $x1= -$b/(2*$a);
        $x2= sqrt(-$d)/(2*$a);
        echo"Roots are: $x1+ $x2 i \n";
        echo"Roots are: $x1-$x2 i \n";
    }
}

echo"Equation is x*x+5*x+4=0 \n";
root(1,5,4);
echo"\nEquation is x*x+4*x+5=0\n";
root(1,4,5);
echo"</br>";
?>

<!-- write a program to print fibonacci number upto n number
 LOGIC   -- intialize first number with zero and second with one
          --  print first and second number
          --  from next number, start ur loop.So third number will be the sum of first two numbers  -->

<?php
$num=0;
$n1=0;
$n2=1;
echo"fibonacci series for 12 numbers ";
echo $n1.' '.$n2.' ';
while($num<10){
$n3=$n2+$n1;
echo $n3.'';
$n1=$n2;
$n2=$n3;
$num=$num+1;

}
?>

<!-- changing datatype s -->
<?php
$a=43;
echo"</br>";
var_dump($a);
settype($a, "float");
var_dump($a);
echo"</br>";

?>

<!-- program for add sub mul and divide -->
<?php
$a = 56;
$b=78;
$c=9;
$d=2;
echo"Addition of given numbers is ".($a+$b);
echo"</br>";
echo"Subtraction of given numbers is ".($a-$b);
echo"</br>";
echo"Multiplication of given numbers is ".($a*$b);
echo"</br>";
echo"Division of given numbers is ".($a/$b);
echo"</br>";
echo"Exponent of given numbers is ".($c**$d);
echo"</br>";
?>

<!-- switch statements -->

<?php
$option = 1;
$var1 = 34;
$var2 =56;
echo" 1 for addition </br>";
echo" 2 for multiplication </br>";
echo" 3 for subtraction </br>";
echo "selected value" .$option. "</br>" ;
switch($option){
    case 1:
        echo "addition is" .($var1+$var2)."</br>";
        break;
    case 2:
        echo "subtraction is" .($var1-$var2)."</br>";
        break;
    case 3:
        echo "addition is" .($var1+$var2)."</br>";
        break;
    default:
        echo"option is not matched";
        

}

?>


<!-- while loop -->

<?php
$x = 1;
while($x>=5){
    echo"  The number is : $x </br>";
    $x++;
}


?>

<!-- do while -->

<?php
$x=1;
do{
    echo "The number is : $x </br>";
    $x++;
}
while($x<=5);
?>



<!-- for each loop -->

<?php
$colors = array("red", "green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";

}

?>

<!-- goto statement -->
<?php
$x=0;
start:
$x++;
echo"x=$x<br>";
if($x<5)
goto start;

?>

<?php
$a = 40;

settype($a, "string");
var_dump($a);
?>


<!-- dynamic variable -->
<?php
$ankit= 78;
$milky = "$ankit";
echo $milky ; 
?>

<!-- php array -->
<?php
 $colors = array("blue","red","yellow");
 var_dump($colors) 
 ?>

 <!-- operators -->
  <?php
  $x=100;
  $y=50;
  if($x==100 && $y==50){
    echo"hello world";
  }
  
  ?>


<!-- conditional assignment operator -->
 <?php
 $a=10;
 $b=$a>15?20:5;
 echo "number is :" .$b;
 ?>



<!-- returning values -->
 <?php
 function addition($x,$y){
    $res=$x+$y;
    return $res;
 }
 echo"sum is : " .addition(10,20);
 ?>

 <!-- if statement -->
  <?php
  $age=20;
  if($age>18){
    echo"</br>";
    echo"you are  eligible for vote";
  }
  ?>

  <!-- if else -->
  <?php
  $age=16;
  if($age>18){
    echo"</br>";
    echo"you are  eligible for vote";
  }
  else{
    echo"apply for card";
  }
  ?>

  <!--if elseif  -->
  <?php
  $option = 3;
  $var1 = 20;
  $var2=10;
  echo"</br>";
  echo"1 for addition </br>";
  echo"2 for subtraction </br>";
  echo"3 for multiplication </br>";
  if($option ==1){
    echo"addition of two numbers is: ".($var1+$var2). "</br>";

  }
  elseif($option==2){
    echo"subtraction of two numbers is: ".($var1-$var2)."</br>";

  }
  elseif($option==3){
    echo"multiplication of two numbers is: ".($var1*$var2)."</br>";

  }

  
  ?>

<!-- while statement -->
<?php
$x=1;
while($x<=5){
    echo"number is :" .$x. "</br>";
    $x++;
}
?>

<!-- do while -->
 <?php
 $y=1;
 do{
    echo"the number is:".$y."</br>";
    $y++;
 }
 while($y<=5);
 ?>

 <!--break statement  -->
 <?php
 for($x=0;$x<=10;$x++){
    if($x==6){
        break;
    }
    echo"the number is".$x;
 }
 
 ?>

 <!-- single quoted -->
  <?php
  $x=10;
  echo'x is $x';
  ?>


<!-- double quoted -->
<?php
  $x=10;
  echo"x is $x";
  ?>


<!-- heredoc -->

<?php
$input = <<<demodoc
text written here using heredocformat</br>
php programming </br>
demodoc;
echo $input;


?>

<!-- nowdoc -->
 <?php
 $input = <<<'nowdoc'
 hey there</br>
 this is milky rani</br>
 nowdoc;
 echo $input;
 ?>


<!-- formatted string -->
 <?php
 $number = 42;
 printf("binary : %b </br>" , $number);
 printf("decimal : %d </br>" , $number);
 printf("float : %f</br>" , $number);
 printf("ascii : %c</br>" , $number);
 printf("octal : %o </br>" , $number);
 printf("string : %s </br>" , $number);
 printf("hex(lower) : %x </br>" , $number);
 printf("hex(upper) : %X </br>" , $number);

 ?>

 <!-- sprintf -->

 <?php
 $num=20;
 echo $num;
 $text = sprintf("%f",$num);
 echo $text;
 
 ?>

 <!-- padding string -->

 <?php
 $number1 = 934;
 $number2  = 23;
 $n1= sprintf("%'04d",$number1);
 $n2= sprintf("%'04d",$number2);
 echo $n1. "</br>";
 echo $n2. "</br>";
 ?>



<!-- width specifier -->
 <?php
 $str = "books";
 $text = sprintf("<pre>%'20s <pre>", $str);
 echo $text;
 
 ?>

 <!-- floating specifier -->
  <?php
  $float = 23.6475;
  $text = sprintf("%.2f",$float);
  echo $text;
  ?>


<!-- string methods -->
 <?php
 $str= "string";
 print_r(str_split($str));

 
 ?>
  

<!-- indexed -->
 <?php
 $name = array("milky","ankit");
 echo "array are".$name[0]."," .$name[1];
 ?>

<!-- count function -->
<?php
 $name = array("milky","ankit");
 echo count($name);
 ?>

<!-- loop through indexed array -->
 <?php
 $values = array(10,20,30,40,50);
 $arrlength = count($values);
 for($x=0;$x<$arrlength;$x++){
  echo $values[$x];
 }
 
 
 ?>

 <!-- fibonacci number -->
  <?php
  $num =0;
  $n1= 0;
  $n2 =1;
  echo "fibonacci series for 12 numbers";
  
  echo $n1.' '.$n2. ' ';
  while($num <10){
    $n3 = $n2+$n1;
    echo $n3.'';
    $n1=$n2;
    $n2=$n3;
    $num = $num +1;
  
  }
  
  ?>


<!-- write a program for factorial -->
  <?php
  $ans = 1;
  $n=5;
  for($i=1; $i<=$n;$i++){
    $ans*=$i;

  }
  echo" factorial of $n number are" .$ans;
  ?>
  





 