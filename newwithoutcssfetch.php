<html><head>
     <title >myData</title>
  </head>
<body style="
background-color:lightseagreen;
padding:200px;
padding-top:20px">

<style>

lable{
color:lightseagreen;}

</style>


<h1 style="color:lightgrey; " >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RESUMES</h1>

<div style="
color:lightseagreen;
background-color:lightgrey;
padding:100px;
padding-top:100px">
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("can not connect".mysql_error());
}

mysql_select_db("resumerjit2",$con);
$sql="SELECT * FROM rsmtbl2";
$myData = mysql_query($sql,$con);
while($record = mysql_fetch_array($myData)){
    echo $record['pict'];
	echo "Name:".$record['name'];
	echo "<br/>";
	echo "OBJECTIVE: "."<br/>";
	echo $record['objc'];
	echo "<br/>";
	echo "Branch: ".$record['branch'];
	echo "<br/>";
	echo "SKILLS: ".$record['skills'];
	echo "<br/>";
	echo "EXPERIENCES: "."<br/>";
	echo "Project Name: ".$record['pn'];
	echo "<br/>";
	echo "Discription: ".$record['disc'];
	echo "<br/>";echo "<br/>";echo "<br/>";
}

mysql_close($con);
?>
</div>
</body>
</html>