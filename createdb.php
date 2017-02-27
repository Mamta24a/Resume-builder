<html>
<body>

<?php

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

if(mysql_query("CREATE DATABASE resumerjit2 ",$con)){
	echo"your db  created";
}else echo "error".mysql_error();
mysql_close($con);

?>

</body>
</html>