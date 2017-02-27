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
	ph='$_POST[ph]',
	presentadd='$_POST[presentadd]',
	email='$_POST[email]',
	permanentadd='$_POST[permanentadd]',
	fname='$_POST[fname]',
	dob='$_POST[dob]',
	gender='$_POST[gender]',
	yrofcomp='$_POST[yrofcomp]',
bn='$_POST[bn]',
cgpa='$_POST[cgpa]',
yoc='$_POST[yoc]',
bn2='$_POST[bn2]',
prcnt='$_POST[prcnt]',
branch='$_POST[branch]',
degree='$_POST[degree]',
cn='$_POST[cn]',
sy='$_POST[sy]',
ey='$_POST[ey]',
sgpa1='$_POST[sgpa1]',
sgpa2='$_POST[sgpa2]',
sgpa3='$_POST[sgpa3]',
sgpa4='$_POST[sgpa4]',
sgpa5='$_POST[sgpa5]',
sgpa6='$_POST[sgpa6]',
sgpa7='$_POST[sgpa7]',
sgpa8='$_POST[sgpa8]',
cgpa3='$_POST[cgpa3]',
dp='$_POST[dp]',
spcl='$_POST[spcl]',
bl='$_POST[bl]',
ex='$_POST[ex]' 


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
             $presentadd = $record['presentadd'];
             $permanentadd = $record['permanentadd'];
			 $fname = $record['fname'];
			 $dob = $record['dob'];
			 $gender = $record['gender'];
			 $yrofcomp = $record['yrofcomp']; 
		     $bn = $record['bn'];
			 $cgpa = $record['cgpa']; 
		     $yoc = $record['yoc'];
			 $bn2 = $record['bn2']; 
		     $prcnt = $record['prcnt'];
			  $branch = $record['branch']; 
		     $degree = $record['degree'];
	    	 $cn = $record['cn']; 
		     $sy = $record['sy'];
			 $ey = $record['ey']; 
		     $sgpa1 = $record['sgpa1'];
			 $sgpa2 = $record['sgpa2']; 
		     $sgpa3 = $record['sgpa3'];
			 $sgpa4 = $record['sgpa4']; 
		     $sgpa5 = $record['sgpa5'];
			 $sgpa6 = $record['sgpa6']; 
		     $sgpa7 = $record['sgpa7'];
			 $sgpa8 = $record['sgpa8']; 
		     $cgpa3 = $record['cgpa3'];
			 $dp = $record['dp']; 
		     $spcl = $record['spcl'];
			 $bl = $record['bl']; 
		     $ex = $record['ex'];
			 
	
	
?>	
<form method="post" action="success_update2.php" >
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
<label>Present Address:</label><br>
<input type="text" value="<?php echo $presentadd;?>" name="presentadd" ><br>
		   <label>Permanent Address:</label><br>
		    <textarea name="permanentadd"><?php echo $permanentadd; ?></textarea><br>
			 <label>Father's Name:</label><br>
		   <input type="text" name="fname" value="<?php echo $fname; ?>"><br>
		   <label>Date of Birth:</label><br>
		   <input type="date" id="" name="dob" value="<?php echo $dob; ?>"><br>
		    <label>Gender:</label><br>
		   <select id="gender" name="gender" value="<?php echo $gender; ?>">
      <option value="Female" >Female</option>
      <option value="Male">Male</option>
      </select>
	  <label><h3 style="color:lightseagreen">EDUCATION:-</h3></label><br>
		   <h4>Xth CLASS</h4><br>
		   	<label>Year of completion:</label><input type="text" name="yrofcomp" value="<?php echo $yrofcomp; ?>"><br>
            <label>Board Name:</label><input type="text" name="bn" value="<?php echo $bn; ?>"><br>		
            <label>CGPA:</label><input type="text" name="cgpa" value="<?php echo $cgpa; ?>"><br>		
            <p></p>
			
           <h4>XIIth CLASS</h4><br>
           	<label>Year of completion:</label><input type="text" name="yoc" value="<?php echo $yoc; ?>"><br>
            <label>Board Name:</label><input type="text" name="bn2" value="<?php echo $bn2; ?>"><br>
            <label>Percentage:</label><input type="text" name="prcnt" value="<?php echo $prcnt; ?>"><br>		
            <p></p>
	  <h4>GRADUATION:-</h4><br><p></p>
             <label>Branch:</label>
			 <select id="branch" name="branch" value="<?php echo $branch; ?>">
      <option value="Information Technology">Information Technology</option>
      <option value="Electronics and Communication">Electronics and communication</option>
      <option value="Electrical engineering">Electrical Engineering</option>
	  <option value="Computer Science">Computer Science</option>
	  <option value="Automobile">automobile</option>
	  <option value="Mechanical">mechanical</option>
    </select><br>
                 <label>Degree:</label>
				 <select id="degree" name="degree" value="<?php echo $degree; ?>">
      <option value="Bachelor of Engineering">Bachelor of engineering</option>
      <option value="M.C.A.">M.C.A</option>
      <option value="M.Tech">M.Tech</option>
	  
    </select><br><br>
	
		   <label>College Name:</label><input type="text" name="cn" value="<?php echo $cn; ?>"><br>
           	<label>Start Year:</label><input type="text" id="fromto" name="sy" value="<?php echo $sy; ?>">
            <label>End Year:</label><input type="text" id="fromto" name="ey" value="<?php echo $ey; ?>"><br>
              
			  <label>I SGPA:</label><input type="text" name="sgpa1" value="<?php echo $sgpa1; ?>"><br> 
			  <label>II SGPA:</label><input type="text" name="sgpa2" value="<?php echo $sgpa2; ?>"><br> 
			  <label>III SGPA:</label><input type="text" name="sgpa3" value="<?php echo $sgpa3; ?>"><br> 
			  <label>IV SGPA:</label><input type="text" name="sgpa4" value="<?php echo $sgpa4; ?>"><br> 
			  <label>V SGPA:</label><input type="text" name="sgpa5" value="<?php echo $sgpa5; ?>"><br> 
			  <label>VI SGPA:</label><input type="text" name="sgpa6" value="<?php echo $sgpa6; ?>"><br> 
			  <label>VII SGPA:</label><input type="text" name="sgpa7" value="<?php echo $sgpa7; ?>"><br>
              <label>VIII SGPA:</label><input type="text" name="sgpa8" value="<?php echo $sgpa8; ?>"><br> 			  
            
		   <label>CGPA:</label><input type="text" name="cgpa3" value="<?php echo $cgpa3; ?>"><br>
		   <p></p>
		   
		   
		   <label>Diploma Percentage:</label><br>
		   <input type="text" name="dp" value="<?php echo $dp; ?>"><br>
		   <label>Specialization:</label><br>
		   <input type="text" name="spcl" value="<?php echo $spcl; ?>"><br>
		   <label>Backlogs(number of backlogs):</label><br>
		   <input type="text" name="bl" value="<?php echo $bl; ?>"><br>
		   <label>Prior Experience:</label><br>
		   <input type="text" name="ex" value="<?php echo $ex; ?>"><br>
	  
	  
		   

<input type="text" value="<?php echo $roll;?>" name="hidden"><br>
<input type="submit" value="update" name="update" ><br><br><br><br>
</form>	
	

<?php
}
echo "</table>";
mysql_close($con);
?>

</body>
</html>


<?php// } ?>