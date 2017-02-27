<html><head>
     <title >insert</title>
  </head>
<body>

<?php
//$msg = "";
if (isset($_POST['submit'])){
	
	//$target = "bio_img/".basename($_FILES['img']['name']);

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

//$img=$_FILES['img']['name'];

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO bio(
roll,
name,
email,
ph,
presentadd,
permanentadd,
fname,
dob,
gender,
yrofcomp,
bn,
cgpa,
yoc,
bn2,
prcnt,
branch,
degree,
cn,
sy,
ey,
sgpa1,
sgpa2,
sgpa3,
sgpa4,
sgpa5,
sgpa6,
sgpa7,
sgpa8,
cgpa3,
dp,
spcl,
bl,
ex
)    VALUES(
'$_POST[roll]',
'$_POST[name]',
'$_POST[email]',
'$_POST[ph]',
'$_POST[presentadd]',
'$_POST[permanentadd]',
'$_POST[fname]',
'$_POST[dob]',
'$_POST[gender]',
'$_POST[yrofcomp]',
'$_POST[bn]',
'$_POST[cgpa]',
'$_POST[yoc]',
'$_POST[bn2]',
'$_POST[prcnt]',
'$_POST[branch]',
'$_POST[degree]',
'$_POST[cn]',
'$_POST[sy]',
'$_POST[ey]',
'$_POST[sgpa1]',
'$_POST[sgpa2]',
'$_POST[sgpa3]',
'$_POST[sgpa4]',
'$_POST[sgpa5]',
'$_POST[sgpa6]',
'$_POST[sgpa7]',
'$_POST[sgpa8]',
'$_POST[cgpa3]',
'$_POST[dp]',
'$_POST[spcl]',
'$_POST[bl]',
'$_POST[ex]'

)";


if(mysql_query($sql,$con)){
	echo"inserted";
	echo "<script>window.open('bioout.php','_self')</script>";
                 
}else echo "error".mysql_error();

//if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
//{
//$msg = "success";
//}
//else { $msg = "error"; } 


mysql_close($con);

}
?>

</body>
</html>