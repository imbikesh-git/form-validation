<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
	echo "Connection Okay ";
} else{
	die('connection failed because of'. mysqli_connect_error());
}

?>