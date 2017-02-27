<?php
/*

session_start();
if(!isset($_SESSION['email']))
{
 header("location:login.php");
}
else { */
?>


<html>
<head>

</head>
<body>


	   <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
font-family: 'Titillium Web', sans-serif;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
font-family: 'Titillium Web', sans-serif;
    border-radius: 4px;
    box-sizing: border-box;
}

input{font-family: 'Titillium Web', sans-serif;}


input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea{
width:100%;
height:100px;
border-radius:4px;
 border: 1px solid #ccc;
font-family: 'Titillium Web', sans-serif;
}

#fromto{
width:34%;
}

#addmore{width:30%;}

input[type=submit] {
    width: 100%;
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

#bio-box {
	border:1px solid;
	border-color:darkgrey;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 120px;
	padding-top: 10px;
	padding-bottom: 80px;
	margin:150px;
	margin-top:50px;
	margin-bottom:50px;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  opacity:0.9;
}
</style>


<?php 
$con = mysql_connect("localhost","root","");
if (!$con){
die("can not connect:".mysql_error());
}

mysql_select_db("resumerjit2",$con);

if(isset($_POST['update'])){
	
	$UpdateQuery="UPDATE bio SET 
	roll='$_POST[roll]',
	name='$_POST[name]',
	ph='$_POST[ph]'

	WHERE roll='$_POST[hidden]'";
   mysql_query($UpdateQuery, $con);	
	
};



$sql="SELECT * FROM bio";
$myData = mysql_query($sql,$con);?>


<?php 
while($record = mysql_fetch_array($myData)){
	         $roll = $record['roll'];
			 $name = $record['name'];
             $email = $record['email'];
             $ph = $record['ph'];
             
?>	
<form method="post" action="update1.php" >
<div id="menu1" class="tab-pane fade">
      <h3 style="color:lightseagreen" align="left">Edit about yourself here....</h3>
	  
	  
	  <div id="bio-box">
	     <h1 style="color:lightseagreen" align="center">BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
<label>Roll No:</label><br>
<input type="text" value="<?php echo $roll;?>" name="roll"><br>
<label>Name of Candidate:</label><br>
<input type="text" value="<?php echo $name;?>" name="name"><br>
<label>Email Address:</label><br>
<input type="text" value="<?php echo $email;?>" name="email" ><br>
<label>Phone Number:</label><br>
<input type="text" value="<?php echo $ph;?>" name="ph" ><br>

<input type="text" value="<?php echo $roll;?>" name="hidden"><br>
<input type="submit" value="update" name="update" ><br><br><br><br>
</form>	
	</div>

<?php
}
mysql_close($con);
?>

</body>
</html>


<?php// } ?>