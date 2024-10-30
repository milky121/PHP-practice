<?php
function test(){
    echo"function  test";
}

test();
test();
test();
test();

?>

<?php
function dummy(){
    echo"<h1>User Details</h1>";
}

function UserDetails(){
    dummy();
    echo"user name is milky";
    echo"</br>";
    echo"user age is 21";
    echo"</br>";
    echo"user email id is milky@gmail.com";
    echo"</br>";
}

UserDetails();
UserDetails();
UserDetails();
UserDetails();

?>


<!-- parametarized function -->
<?php

function sum($a,$b){
    echo$a+$b;
    echo"</br>";
}

sum(23,30);
sum(200,300);

function UserData($name,$color){
    echo"<h1 style='color:$color'>$name</h1>";

}

UserData("ankuu","red");
UserData("milky","yellow");
UserData("namrata","black");

?>

<!-- function with return statement -->
<?php
function userName(){
     return"milky rani";
}

echo"<h1>Hii Current user is".userName(). "</h1>";
echo"<h3>Hii Current user is".userName(). "</h3>";

?>

<!--function with default parameters  -->
<?php
  function displayUser($name,$color="red"){
    echo"<h1 style='color:$color'>$name</h1>";
  }
  displayUser("Ankit Mehta");
?>

<!-- nested function -->

<?php
function test1(){
    echo"test function called </br>";
    function apple(){
        echo"apple function called </br>";
    }
}

test1();
apple();
?>

<!-- variable function -->

<?php
function test2(){
    echo"test function called";
}

$test="test2";
$test();

function main($test){
    $test();
    
}
main($test);

?>