<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone =  $_REQUEST["phone"];
$message =  $_REQUEST["message"];
require'connect.php';
$query = mysql_query("INSERT INTO feedback (name,email,phone,message) VALUES('$name','$email','$phone','$message')");
if($query==true){
	echo 'Successfully Submitted';
}else{
	return 'Failed To Submit Request';
}
?>