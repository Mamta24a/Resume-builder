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
 // $msg = "";
$con = mysql_connect("localhost","root","");
if (!$con){
die("can not connect:".mysql_error());
}
//$target = "resume_img/".basename($_FILES['img']['name']);

mysql_select_db("resumerjit2",$con);
 //    $img=$_FILES['img']['name'];

	
if(isset($_POST['update'])){
	
	$UpdateQuery="UPDATE rsmtbl2 SET 
	email='$_POST[email]',
	name='$_POST[name]', phno = '$_POST[phno]', address = '$_POST[address]', objc = '$_POST[objc]', 
			 sculnm = '$_POST[sculnm]', yrofcomp = '$_POST[yrofcomp]', bn = '$_POST[bn]', cgpa = '$_POST[cgpa]', sn = '$_POST[sn]', yoc = '$_POST[yoc]', 
			 bn2 = '$_POST[bn2]', stream = '$_POST[stream]',  prcnt = '$_POST[prcnt]', cn = '$_POST[cn]', sy = '$_POST[sy]', ey = '$_POST[ey]' , 
			 branch = '$_POST[branch]', degree = '$_POST[degree]', sgpa = '$_POST[sgpa]', cgpa3 = '$_POST[cgpa3]', skills = '$_POST[skills]',
			 pn = '$_POST[pn]', frm = '$_POST[frm]', too = '$_POST[too]',  disc = '$_POST[disc]', eca = '$_POST[eca]', 
			 qualities='$_POST[qualities]', backlog='$_POST[backlog]'


	WHERE email='$_POST[hidden]'";
   mysql_query($UpdateQuery, $con);	
	
};
//if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
//{
//$msg = "success";
//}
//else { $msg = "error in img"; } 



$sql="SELECT * FROM rsmtbl2 WHERE email='mamta24a@gmail.com'";
$myData = mysql_query($sql,$con);?>


<?php 
while($record = mysql_fetch_array($myData)){
	         $email = $record['email'];
			 $name = $record['name'];
         	 $phno = $record['phno'];      $address = $record['address'];
			 $objc = $record['objc'];      $sculnm = $record['sculnm'];
			 $yrofcomp = $record['yrofcomp']; 
		     $bn = $record['bn'];  		 $cgpa = $record['cgpa']; 
			 $sn = $record['sn']; 		 $yoc = $record['yoc'];
			 $bn2 = $record['bn2'];      $stream = $record['stream'];
		     $prcnt = $record['prcnt'];	 $cn = $record['cn']; 
		     $sy = $record['sy'];		 $ey = $record['ey']; 
		     $branch = $record['branch'];   $degree = $record['degree'];
	    	 $sgpa = $record['sgpa'];   	 $cgpa3 = $record['cgpa3'];
			 $skills = $record['skills'];    $pn = $record['pn'];
			 $frm = $record['frm']; 	     $too = $record['too'];
		     $disc = $record['disc'];	     $eca = $record['eca'];
		     //$img = $record['img'];		
			 $qualities=$record['qualities'];
			 $backlog=$record['backlog'];
	
	
?>	
<form method="post" action="mainstu1.php" >
<div id="menu1" class="tab-pane fade">
      <h3 style="color:lightseagreen" align="left">Edit about yourself here....</h3>
	  
	  
	  <div id="bio-box">
	     <h1 style="color:lightseagreen" align="center">BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
           <label>Full Name:</label><br>
		   <input type="text" name="name" value="<?php echo $name; ?>"><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email" value="<?php echo $email; ?>" readonly><br>
		  
		   <label>Phone Number:</label><br>
		   <input type="text" name="phno" value="<?php echo $phno; ?>"><br>
		   <label>Address:</label><br>
		   <input type="text" name="address" value="<?php echo $address; ?>"><br>
		  <!-- <label>Upload your Picture:</label><br>
		   <input type="file" name="img" value="<?php //echo $img; ?>"><br>-->
		   <label>Special Qualities by which you will get searched:(will not be displayed in your resume)</label><br>
		   <input type="text" name="qualities" value="<?php echo $qualities; ?>"><br>
		   <label>Number of Backlogs:(will not be displayed in resume)</label><br>
		   <input type="text" name="backlog" value="<?php echo $backlog; ?>"><br>
		   
		   <p></p>
		   
		   <label style="color:lightseagreen"><h3>OBJECTIVE:</h3></label>
		   <textarea name="objc" ><?php echo $objc; ?></textarea><br>
		   <p></p>
		  
		   <label><h3 style="color:lightseagreen">EDUCATION:-</h3></label><br>
		   <h4>Xth CLASS</h4><br>
           <label>School Name:</label><input type="text"  name="sculnm" value="<?php echo $sculnm; ?>"><br>
           	<label>Year of completion:</label><input type="text" name="yrofcomp" value="<?php echo $yrofcomp; ?>"><br>
            <label>Board Name:</label><input type="text" name="bn" value="<?php echo $bn; ?>"><br>		
            <label>CGPA:</label><input type="text" name="cgpa" value="<?php echo $cgpa; ?>"><br>		
            <p></p>
			
           <h4>XIIth CLASS</h4><br>
           <label>School Name:</label><input type="text" name="sn" value="<?php echo $sn; ?>"><br>
           	<label>Year of completion:</label><input type="text" name="yoc" value="<?php echo $yoc; ?>"><br>
            <label>Board Name:</label><input type="text" name="bn2" value="<?php echo $bn2; ?>" ><br>
             <label>Stream:</label><input type="text" name="stream" value="<?php echo $stream; ?>"><br> 			
            <label>Percentage:</label><input type="text" name="prcnt" value="<?php echo $prcnt; ?>"><br>		
            <p></p>
			
           <h4>GRADUATION:-</h4><br><p></p>
		   <label>College Name:</label><input type="text" name="cn" value="<?php echo $cn; ?>"><br>
           	<label>Start Year:&ensp;</label><input type="date" id="fromto" name="sy" value="<?php echo $sy; ?>">&ensp;
            <label>End Year:&ensp;</label><input type="date" id="fromto" name="ey" value="<?php echo $ey; ?>"><br>
             <label>Branch:</label>
			 <select id="branch" name="branch" value="<?php echo $branch; ?>">
      <option value="Information Technology">Information Technology</option>
      <option value="Electronics and communication">Electronics and communication</option>
      <option value="Eelectrical Engineering">Eelectrical Engineering</option>
	  <option value="Computer Science">Computer Science</option>
	  <option value="Automobile Engineering">Automobile Engineering</option>
	  <option value="Mechanical Engineering">Mechanical Engineering</option>
    </select><br>
                 <label>Degree:</label>
				 <select id="degree" name="degree" value="<?php echo $degree; ?>">
      <option value="Bachelor of Engineering">Bachelor of Engineering</option>
      <option value="Master of Computer Applications">Master of Computer Applications</option>
      <option value="Master of Technology">Master of Technology</option>
	  
    </select><br><br>
              <label>SGPA:</label><input type="text" name="sgpa" value="<?php echo $sgpa; ?>"><br> 				 
            <label>CGPA:</label><input type="text" name="cgpa3" value="<?php echo $cgpa3; ?>"><br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">SKILLS:</h3></label>
		  <textarea name="skills" ><?php echo $skills; ?></textarea><br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">EXPERIENCES:</h3></label>
		   <label>Project Name:</label>
		   <input type="text" name="pn" value="<?php echo $pn; ?>"><br>
		   <label><b>Duration:</b></label><br>
		   <label>From:&ensp;</label><input type="date" id="fromto" name="frm" value="<?php echo $frm; ?>">&ensp;&ensp;&ensp;&ensp;
		   <label>To:&ensp;</label><input type="date" id="fromto" name="too" value="<?php echo $too; ?>"><br>
		   <label>Discription:</label><br>
		   <br>
		   <textarea name="disc" ><?php echo $disc; ?></textarea><br> 
		    <input type="submit" value="WANNA ADD MORE??" id="addmore" > <br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">EXTRA-CERICULAR ACTIVITIES:</h3></label>
		   <textarea name="eca" ><?php echo $eca; ?></textarea><br>
		   <p></p>


<input type="hidden" value="<?php echo $email;?>" name="hidden"><br>
<input type="submit" value="UPDATE" name="update" ><br><br><br><br>
</form>	
	</div>

<?php
}
mysql_close($con);
?>

</body>
</html>


<?php// } ?>