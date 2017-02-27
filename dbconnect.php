<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'resumerjit2';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
	echo "connect";
}

?>
