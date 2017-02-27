<html>
<body>

<?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO signin(
FN,
email,
PW)    VALUES(
'$_POST[FN]',
'$_POST[email]',
'$_POST[PW]')";


if(mysql_query($sql,$con)){
	echo"Successfully Signed up!!!!..Now please go To Login... ";
}else echo "error".mysql_error();

mysql_close($con);

}
?>

</body>
</html>