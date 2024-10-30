<?php
echo"<pre>";
print_r($_GET);
echo"</pre>";

echo $_GET['firstname'];

echo"<pre>";
print_r($_SERVER);
echo"</pre>";


echo $_SERVER['PHP_SELF'];
echo $_SERVER['REQUEST_TIME'];




?>