<?php
/*

session_start();
if(!isset($_SESSION['email']))
{
 header("location:login.php");
}
else {*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio-Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css" />
    <script src="jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!--<body background="008.gif" no repeat style="background-size:110% 110%;background-repeat:no repeat center fixed;background-attachment:fixed">-->
<body background="6867.jpg" style="background-size:100% 90%;background-repeat:no repeat center fixed;background-attachment:fixed;height:'300px'; width:'100'">

<div class="container">
 <br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-list-alt" aria-hidden="true"></i> Create Bio-Data</a></li>
    <li><a data-toggle="tab" href="#menu1"><i class="fa fa-edit" aria-hidden="true"></i> Edit Bio-Data</a></li>
	<p align="right">Welcome</p>
  </ul>
<!--<img src="6867.jpg" height="300px" width="100%"></img>-->
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	
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
      <div id="bio-box">
      <form action="bioin.php" method="post" name="myForm" enctype="multipart/form-data" >
	     <h1 style="color:lightseagreen" align="center">BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
           <label>Roll No:</label><br>
		   <input type="text" name="roll"><br>
		   <label>Name of Candidate:</label><br>
		   <input type="text" name="name"><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email"><br>
		   <label>Phone Number:</label><br>
		   <input type="text" name="ph"><br>
		   <label>Present Address:</label><br>
		   <textarea name="presentadd"></textarea><br>
		   <label>Permanent Address:</label><br>
		    <textarea name="permanentadd"></textarea><br>
		   <label>Father's Name:</label><br>
		   <input type="text" name="fname"><br>
		   <label>Date of Birth:</label><br>
		   <input type="date" id="" name="dob"><br>
		   <label>Gender:</label><br>
		   <select id="gender" name="gender">
      <option value="Female">Female</option>
      <option value="Male">Male</option>
      </select>
		   		   
		   <label><h3 style="color:lightseagreen">EDUCATION:-</h3></label><br>
		   <h4>Xth CLASS</h4><br>
		   	<label>Year of completion:</label><input type="text" name="yrofcomp"><br>
            <label>Board Name:</label><input type="text" name="bn"><br>		
            <label>CGPA:</label><input type="text" name="cgpa"><br>		
            <p></p>
			
           <h4>XIIth CLASS</h4><br>
           	<label>Year of completion:</label><input type="text" name="yoc"><br>
            <label>Board Name:</label><input type="text" name="bn2"><br>
            <label>Percentage:</label><input type="text" name="prcnt"><br>		
            <p></p>
			
           <h4>GRADUATION:-</h4><br><p></p>
             <label>Branch:</label>
			 <select id="branch" name="branch">
      <option value="Information Technology">Information Technology</option>
      <option value="Electronics and Communication">Electronics and communication</option>
      <option value="EE">EE</option>
	  <option value="Computer Science">Computer Science</option>
	  <option value="Automobile">automobile</option>
	  <option value="Mechanical">mechanical</option>
    </select><br>
                 <label>Degree:</label>
				 <select id="degree" name="degree">
      <option value="Bachelor of Engineering">Bachelor of engineering</option>
      <option value="M.C.A.">M.C.A</option>
      <option value="M.Tech">M.Tech</option>
	  
    </select><br><br>
	
		   <label>College Name:</label><input type="text" name="cn"><br>
           	<label>Start Year:</label><input type="date" id="fromto" name="sy">
            <label>End Year:</label><input type="date" id="fromto" name="ey"><br>
              
			  <label>I SGPA:</label><input type="text" name="sgpa1"><br> 
			  <label>II SGPA:</label><input type="text" name="sgpa2"><br> 
			  <label>III SGPA:</label><input type="text" name="sgpa3"><br> 
			  <label>IV SGPA:</label><input type="text" name="sgpa4"><br> 
			  <label>V SGPA:</label><input type="text" name="sgpa5"><br> 
			  <label>VI SGPA:</label><input type="text" name="sgpa6"><br> 
			  <label>VII SGPA:</label><input type="text" name="sgpa7"><br>
              <label>VIII SGPA:</label><input type="text" name="sgpa8"><br> 			  
            
		   <label>CGPA:</label><input type="text" name="cgpa3"><br>
		   <p></p>
		   
		   
		   <label>Diploma Percentage:</label><br>
		   <input type="text" name="dp"><br>
		   <label>Specialization:</label><br>
		   <input type="text" name="spcl"><br>
		   <label>Backlogs(number of backlogs):</label><br>
		   <input type="text" name="bl"><br>
		   <label>Prior Experience:</label><br>
		   <input type="text" name="ex"><br>
		 <!--  <label>Upload your Image:</label><br>
		   <input type="file" name="img"><br>
		  --> 
		   
		   <input type="submit" value="SUBMIT" name="submit">
		   
      </form>
	  </div>
	 
	 
	 </div>
   
   
   
   
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
<form method="post" action="update1.php" >
   
   <div id="menu1" class="tab-pane fade">
      <h3 style="color:lightseagreen" align="left">Edit about yourself here....</h3>
	  
	  
	  <div id="bio-box">
      
	     <h1 style="color:lightseagreen" align="center">BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
           <label>Roll No:</label><br>
		   <input type="text" name="roll" value="<?php echo $roll; ?>" ><br>
		   <label>Name of Candidate:</label><br>
		   <input type="text" name="name" value="<?php echo $name; ?>" ><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email" value="<?php echo $email; ?>" ><br>
		   <label>Phone Number:</label><br>
		   <input type="text" name="ph" value="<?php echo $ph; ?>" ><br>
		   <label>Present Address:</label><br>
		   <textarea name="presentadd" ><?php echo $presentadd; ?></textarea><br>
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
		  <!-- <label>Upload your Image:</label><br>
		   <input type="file" name="img" value="<?php echo $img; ?>"><br>
		   -->
		   
		   
<input type="text" value="<?php echo $roll;?>" name="hidden"><br>
<input type="submit" value="update" name="update" ><br><br><br><br>
</form>	
		   
      </form><?php } ?>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      </div>
   
    </div>
</div>

<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>


</body>
</html>

<?php //} ?>