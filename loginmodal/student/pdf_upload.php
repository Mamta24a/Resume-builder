<?php

if (isset($_POST['upload'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}
 $file = $_FILES['resm']['name'];
 $file_loc = $_FILES['resm']['tmp_name'];
 $folder="uploads/";

mysql_select_db("resumerjit2",$con);

move_uploaded_file($file_loc,$folder.$file);
$sql="INSERT INTO upload_resume(resm,name)    VALUES('$file','$_POST[name]')";

if(mysql_query($sql,$con)){         
	              
					    echo "Congratulations!! You have successfully
							     posted your resume!!";
                           }
    						   else echo "error".mysql_error();
mysql_close($con); }
?>
