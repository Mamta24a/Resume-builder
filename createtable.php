<html>
<body>

<?php

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("rentride",$con);

$sql="CREATE TABLE Form(
cat varchar(10),
name varchar(20),
email varchar(20),
pic longblob,
priceperday double,
refund double,
disc varchar(50) ,
address varchar(50),
phoneno int(12)
)";

if(!mysql_query($sql,$con)){
	die("can not connect".mysql_error());
}

mysql_close($con);

?>

</body>
</html>