<?php



header("Access-Control-Allow-Origin: http://sakthikanth.esy.es");

header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, *");



if($_SERVER['HTTP_ORIGIN'] != "http://sakthikanthj.esy.es")	
	echo "No the header is wrong ".$_SERVER['HTTP_ORIGIN'];
else
	echo $_SERVER['HTTP_ORIGIN'];



	
	$cookie_name = "user_id";
	$cookie_value = "48";



	//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

	session_start();


	//$_SESSION['roll_no']=56;
	
	
	if(empty($_COOKIE['user_id'])){

	}else{
	

		echo $_COOKIE['user_id']. ' is cookie userid<br>';
		echo $_SESSION['roll_no'].' is SESSION roll no <br>';
		 
	}
	echo "<br><br>";
	foreach ($_SERVER as $key => $value) {
		echo $key.' ==> '.$value.'<br>';
	}
	


?>