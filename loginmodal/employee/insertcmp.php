<html><head>
     <title >insert</title>
  </head>
<body background="20140109-caring-about-employees.jpg" no repeat style="background-size: cover">

<?php
$msg = "";
if (isset($_POST['submit'])){
	
$target = "db_img/".basename($_FILES['img']['name']);


$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}
//move_uploaded_file($image_tmp,"images/$post_image")
$img=$_FILES['img']['name'];


mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO brswcmp(
name,email,cn,img,discc,phno,ec,discj,sr,ww,dt)    VALUES(
'$_POST[name]',
'$_POST[email]',
'$_POST[cn]',
'$img',
'$_POST[discc]',
'$_POST[phno]',
'$_POST[ec]',
'$_POST[discj]',
'$_POST[sr]',
'$_POST[ww]',
'$_POST[dt]')";
if(mysql_query($sql,$con)){ ?>
	
	                 
	                   <br>  
	                   <br>  
	                   <br>  
	                   <br>  
	                   <br>  
	                   <br>  
	                 
	              
					   <h6 ><b><span style="color:lightseagreen; font-size:50px;
					   padding:200px;font-family:sans-serif;text-shadow:3px 3px 5px white;"> 
					        <?php echo"Congratulations!! You have successfully
							      posted your Job offer!!
	                              Now Please goto VIEW JOBS to view it... ";
                           }
    						   else echo "error".mysql_error();?></span></b></h6>
<?php

if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
{
$msg = "success";
}
else { $msg = "error"; } 

//move_uploaded_file($img,"db_img/$img");

mysql_close($con); }
?>
</body>
</html>