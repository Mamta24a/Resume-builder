    <?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO signin(
FN,
LN,
email,
PW)   
 VALUES(
'$_POST[FN]',
'$_POST[LN]',
'$_POST[email]',
'$_POST[PW]'
)";


if(mysql_query($sql,$con)){
	echo"inserted";
}else echo "error".mysql_error();

mysql_close($con);

if (isset($_POST['login'])){
 $con = mysql_connect("localhost","root","");
 if(!$con){
	die("can not connect".mysql_error());
}
 mysql_select_db("resumerjit2",$con);
 

 $username=$_POST['user'];
 $password=$_POST['pass'];
 //First lets get the username and password from the user
 $result = mysql_query("SELECT * FROM signin");
 while($row=mysql_fetch_array($result))
 {
 $user=$row['email']; 
 $pass=$row['PW'];
 }
 $num=mysql_num_rows($result);
 for($i=1;$i<=$num; $i++){

 if($username == $user && $password==$pass)
 {
 echo "Authenticated!! wolla!!";
 }
 else 
 {
 echo("Please Enter Correct Username and Password ...");
 }}}

}
?>
<!doctype html>
<html>
  <head>
     <title>Student login</title>
  </head>
  <body>
  <style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: lightseagreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: darkturquoise;
}

div {
	border: solid grey 1px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
	padding-top:70px;
	padding-left:200px;
	padding-bottom:70px;
	height:300px;
	position:fixed;
	left:200px;
	right:250px;
	top:50px;
}
label{
color:lightseagreen;
}

submit{
font-weight:bold;
}
input[type=file], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

</style>
      <div>
      <form action="forgotpassword.php" method="post" name="myForm" >
	     <h1 style="color:lightseagreen">&nbsp;&nbsp;&nbsp;Create your Resume Now</h1>
         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;              &emsp;
		   <input type="submit" value="CREATE" name="submit">
         <h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;OR</h3>
	    <h3 style="color:lightseagreen">&emsp;&emsp;Already have resume?? Upload it now!!!:</h3>
	
           &emsp;&emsp;&emsp;
           <input type="file" accept="pdf" name="resm"><br>
		   <br>
		   <br>
		   
		   
      </form>
	  </div>
<?php
if (isset($_POST['submit'])){

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO fp(email)    VALUES('$_POST[email]')";


if(mysql_query($sql,$con)){
	echo"inserted";
}else echo "error".mysql_error();

mysql_close($con);

}
?>
  </body>
</html>