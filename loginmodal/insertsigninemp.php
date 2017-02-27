<html>
<body>

<?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO signinemp(
FN,
email,
PW)    VALUES(
'$_POST[FN]',
'$_POST[email]',
'$_POST[PW]')";


if(mysql_query($sql,$con)){
	echo"You are Sucessfully Singned-Up.....Now please Login to continue..";
}else echo "error".mysql_error();

mysql_close($con);

}
?>

</body>
</html>