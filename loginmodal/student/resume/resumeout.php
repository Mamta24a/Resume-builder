<?php


session_start();
if(!isset($_SESSION['email']))
{
 header("location:login.php");
}
else {
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Resume</title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">

    </head>
  <body>
  
  
  
  <?php
$msg = "";
if (isset($_POST['submit'])){

$target = "resume_img/".basename($_FILES['img']['name']);

$con=mysql_connect("localhost","root","");

if(!$con){
	die("can not connect".mysql_error());
}

$img=$_FILES['img']['name'];

mysql_select_db("resumerjit2",$con);
$sql="INSERT INTO rsmtbl2(
name,
email,
phno,
address,
img,
qualities,
backlog,
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
eca

)    VALUES(
'$_POST[name]',
'$_POST[email]',
'$_POST[phno]',
'$_POST[address]',
'$img',
'$_POST[qualities]',
'$_POST[backlog]',
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
'$_POST[eca]'
)";


if(mysql_query($sql,$con)){
	echo"inserted";
}else echo "error".mysql_error();

if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
{
$msg = "success";
}
else { $msg = "error"; } 

mysql_close($con);

}
?>
  
  
  
  
  
  
    <style>
#outline {
	border:1px solid;
	border-color:darkgrey;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 120px;
	padding-top: 10px;
	padding-bottom: 100px;
	margin:250px;
	margin-top:50px;
	margin-bottom:50px;
	font-family: 'Titillium Web', sans-serif;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
label{color:lightseagreen}
</style>
      <div id="outline">
    <?php
        $con=mysql_connect("localhost","root","");
        if(!$con){
        	die("can not connect".mysql_error());
        }

        mysql_select_db("resumerjit2",$con);
        $sql="SELECT * FROM rsmtbl2 WHERE email='".$_SESSION['email']."'";
        $myData = mysql_query($sql,$con);
		 while($record = mysql_fetch_array($myData)){
             $name = $record['name'];
             $email = $record['email'];
			 $phno = $record['phno']; 
		     $address = $record['address'];
			 $objc = $record['objc']; 
		     $sculnm = $record['sculnm'];
			 $yrofcomp = $record['yrofcomp']; 
		     $bn = $record['bn'];
			 $cgpa = $record['cgpa']; 
			 $sn = $record['sn']; 
			 $yoc = $record['yoc'];
			 $bn2 = $record['bn2']; 
		     $stream = $record['stream'];
		     $prcnt = $record['prcnt'];
			 $cn = $record['cn']; 
		     $sy = $record['sy'];
			 $ey = $record['ey']; 
		     $branch = $record['branch']; 
		     $degree = $record['degree'];
	    	 $sgpa = $record['sgpa'];
			 $cgpa3 = $record['cgpa3'];
			 $skills = $record['skills']; 
		     $pn = $record['pn'];
			 $frm = $record['frm']; 
		     $too = $record['too'];
		     $disc = $record['disc'];
		     $eca = $record['eca'];
		     $img = $record['img'];
        ?>

       <h1 style="color:lightseagreen" align="center"><br>RESUME</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:</h3><br>
		
		
  <div class="row">
  <div class="col-sm-3"><label>Full Name:</label></div><div class="col-sm-9"><?php echo $name; ?></div>
  </div>
<div class="row">
  <div class="col-sm-3"><label>Email Address:</label></div><div class="col-sm-9"><?php echo $email; ?></div>
  </div><div class="row">
  <div class="col-sm-3"><label>Phone Number:</label></div><div class="col-sm-9"><?php echo $phno; ?></div>
  </div><div class="row">
  <div class="col-sm-3"><label>Address:</label></div><div class="col-sm-9"><?php echo $address; ?></div>
  </div><div class="row">
 <div class="col-sm-3"><label>Upload your Picture:</label></div><div class="col-sm-9"><?php echo $img; ?></div>
  </div>  
		
  <div class="row">
  <div class="col-sm-12"><label style="color:lightseagreen"><h3>OBJECTIVE:</h3></label></div>
  <div class="col-sm-12"><?php echo $objc; ?></div>
  </div>  	   
	
		 			
			<tr><td><label><h3 style="color:lightseagreen">EDUCATION:-</h3></label></td></tr>
		  <table border="2" > <col width="140"><col width="220"><col width="140"><col width="220">
		   <tr><td><h4>Xth CLASS</h4></td><td></td> <td><h4>XIIth CLASS</h4></td><td></td></tr>
		   <tr><td><label>School Name:</label></td><td><?php echo $sculnm; ?><br></td>  <td><label>School Name:</label></td><td><?php echo $sn; ?><br></td></tr>
		   <tr><td><label>Year of completion:</label></td><td><?php echo $yrofcomp;?></td>  <td><label>Year of completion:</label></td><td><?php echo $yoc; ?></td></tr>
        
           <tr><td><label>Board Name:</label></td><td><?php echo $bn; ?></td><td><label>Board Name:</label></td><td><?php echo $bn2; ?><br></td></tr>
            <tr><td><label>CGPA:</label></td><td><?php echo $cgpa; ?></td>
		   <td> <label>Percentage:</label></td><td><?php echo $prcnt; ?><br></td></tr>
		   <tr><td></td><td></td><td><label>Stream:</label></td><td><?php echo $stream; ?><br> </td></tr></table>
           
<h4>GRADUATION:-</h4>
<div class="row">
  <div class="col-sm-3"><label>College Name:</label></div><div class="col-sm-9"><?php echo $cn; ?></div>
  </div><div class="row">
  <div class="col-sm-3"><label>Start Year:&ensp;</label></div><div class="col-sm-9"><?php echo $sy; ?>&ensp;</div>
  </div><div class="row">
  <div class="col-sm-3"><label>End Year:</label></div><div class="col-sm-9"><?php echo $ey; ?></div>
  </div><div class="row">
  <div class="col-sm-3"><label>Branch:</label></div><div class="col-sm-9"><?php echo $branch; ?></div>
  </div>
  <div class="row">
  <div class="col-sm-3"><label>Degree: </label></div><div class="col-sm-9"><?php echo $degree; ?>&ensp;</div>
  </div><div class="row">
  <div class="col-sm-3"><label>SGPA:</label></div><div class="col-sm-9"><?php echo $sgpa; ?></div>
  </div><div class="row">
  <div class="col-sm-3"><label>CGPA:</label></div><div class="col-sm-9"><?php echo $cgpa; ?></div>
  </div>  
  

  <div class="row">
  <div class="col-sm-12"><label><h3 style="color:lightseagreen">SKILLS:</h3></label></div>
  <div class="col-sm-12"> <?php echo $skills; ?></div>
  </div>
  
  <div class="row">
  <div class="col-sm-12"><label><h3 style="color:lightseagreen">EXPERIENCES:</h3></label></div>
  </div>
  <div class="row">
  <div class="col-sm-3"><label>Project Name:</label></div><div class="col-sm-9"><?php echo $pn; ?></div>
  </div><div class="row">
  <div class="col-sm-12"><b>Duration:</b></div>
  </div>
  <div class="row">
  <div class="col-sm-1"><label>From:</label></div><div class="col-sm-2"><?php echo $frm; ?></div>
  <div class="col-sm-1"><label>To:</label></div><div class="col-sm-8"><?php echo $too; ?></div>
  </div>
  <div class="row">
  <div class="col-sm-12"><label>Discription:</label></div>
  <div class="col-sm-12"><?php echo $disc; ?></div>
  </div>
  <div class="row">
  <div class="col-sm-12"><label><h3 style="color:lightseagreen">EXTRA-CERICULAR ACTIVITIES:</h3></label></div>
  <div class="col-sm-12"><?php echo $eca; ?></div>
  </div>  
  		   

	<?php } ?>
	
	
	  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php } ?>