<html>
<body>

<?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","RJIT_CV","rjit");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("rentride",$con);


mysql_query("ALTER TABLE `Form` ADD cat VARCHAR( 10 )") or die(mysql_error()); 




mysql_close($con);

}
?>

</body>
</html>



