<?php


echo php_uname(); 
echo "<br>";
var_dump ( gethostbynamel('www.example.com') );
$host = @gethostbyaddr($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]); 
echo $host;	

?>