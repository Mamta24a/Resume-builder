<html>
<head>
</head>
<body>

<?php 
$con = mysql_connect("localhost"."root","");
if(!$con){
die("can not connect: ".mysql_error());
}
mysql_select_db("snippets",$con);
$sql = "SELECT * FROM lectures";
$myData = mysql_query($sql,$con);
echo "<table border=1>
<tr>
<th>Topic</th>
<th>Name</th>
<th>Attendance</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<tr>";
echo "<td>".$record['Topic']."</td>";
echo "<td>".$record['Name']."</td>";
echo "<td>".$record['Attendance']."</td>";
}
echo "</table>";
?>

</body>
</html>