<html>
<head>
</head>
<body>

<?php 
$con = mysql_connect("localhost","root","");
if (!$con){
die("can not connect:".mysql_error());
}

mysql_select_db("snippets",$con);

if(isset($_POST['update'])){
	
	$UpdateQuery="UPDATE lectures SET Topic='$_POST[topic]',Name='$_POST[name]',Attendance='$_POST[attendance]' WHERE Topic='$_POST[hidden]'";
   mysql_query($UpdateQuery, $con);	
	
};



$sql="SELECT * FROM lectures";
$myData = mysql_query($sql,$con);?>

<table border=1>
<tr>
<th>Topic</th>
<th>Name</th>
<th>Attendance</th>
<th></th>
<th></th>
</tr>

<?php 
while($record = mysql_fetch_array($myData)){
?>	
<form method="post" action="success_update.php" >
<tr>
<td><input type="text" value="<?php echo $record['Topic'];?>" name="topic"></td>
<td><input type="text" value="<?php echo $record['Name'];?>" name="name"></td>
<td><input type="text" value="<?php echo $record['Attendance'];?>" name="attendance" ></td>
<td><input type="text" value="<?php echo $record['Topic'];?>" name="hidden"></td>
<td><input type="submit" value="update" name="update" ></td>
</tr>
</form>	
	

<?php
}
echo "</table>";
mysql_close($con);
?>

</body>
</html>