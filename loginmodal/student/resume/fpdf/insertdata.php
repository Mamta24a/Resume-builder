<html><head>
     <title >insert</title>
  </head>
<body>

<?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO rsmtbl2(
name,
email,
phno,
address,
objc,
sculnm,
yrofcomp,
bn,
cgpa,
sn,
yoc,
bn2,
stream,
prcnt,
cn,
sy,
ey,
branch,
degree,
sgpa,
cgpa3,
skills,
pn,
frm,
too,
disc,
eca,
pict)    VALUES(
'$_POST[name]',
'$_POST[email]',
'$_POST[phno]',
'$_POST[address]',
'$_POST[objc]',
'$_POST[sculnm]',
'$_POST[yrofcomp]',
'$_POST[bn]',
'$_POST[cgpa]',
'$_POST[sn]',
'$_POST[yoc]',
'$_POST[bn2]',
'$_POST[stream]',
'$_POST[prcnt]',
'$_POST[cn]',
'$_POST[sy]',
'$_POST[ey]',
'$_POST[branch]',
'$_POST[degree]',
'$_POST[sgpa]',
'$_POST[cgpa3]',
'$_POST[skills]',
'$_POST[pn]',
'$_POST[frm]',
'$_POST[too]',
'$_POST[disc]',
'$_POST[eca]',
'$_POST[pict]'

)";


if(mysql_query($sql,$con)){
	echo"inserted";
}else echo "error".mysql_error();

mysql_close($con);

}
?>

</body>
</html>