<?php
$age=22 ;
$name="welcome milky you are eligible for voting";
if($age<20){
    echo"You can vote";
    echo"<br/>";
    echo $name;
}
else{
    echo" You cannot vote";
}
echo"<br/>";
?>
 
<?php
$card= 6;
$vote = "yes";
if($card==5){
    echo"you can vote";
}
else if($card==6){
    echo" $vote you can apply for vote";

}
else if($card==7){
    echo"you are not an adult person";
    
}
else{
    echo"this is an error statement";
}

echo"<br/>";

?>


<?php
$fav_color = "";
switch($fav_color){
    case "black":
        echo"this is my favourite color";
        break;
    case "green":
         echo "this is second most favourite color";
         break;
    default:
        echo"no data entered";
}


?>