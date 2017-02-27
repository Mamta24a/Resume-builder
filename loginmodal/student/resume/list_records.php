<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>List data from mysql </strong> </td>
</tr>

<tr>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Update</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><? echo $rows['name']; ?></td>
<td><? echo $rows['lastname']; ?></td>
<td><? echo $rows['email']; ?></td>

// link to update.php and send value of id 
<td align="center"><a href="update.php?id=<? echo $rows['id']; ?>">update</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>