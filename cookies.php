<?php 

$name="somecookie";
$value=100;
$expiration= time() + (60*60*24*7);

setcookie($name,$value,$expiration);


if(isset($_COOKIE['somecookie'])){
	$somecookie=$_COOKIE['somecookie'];
	echo $somecookie;
}


?>