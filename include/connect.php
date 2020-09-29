<?php
function connectBD(){
	$con = mysqli_connect('localhost','root','','sms');
	return $con;
}


