<?php


session_start();
if(!isset($_SESSION['email']))
{
 header("location:login.php");
}
else {
?>

<!doctype html>
<html>
  <head>
     <title >bio-data</title>
  </head>
  <body>
  <style>
div {
	border:1px solid;
	border-color:darkgrey;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 120px;
	padding-top: 10px;
	padding-bottom: 80px;
	margin:200px;
	margin-top:50px;
	margin-bottom:50px;
	font-family: 'Titillium Web', sans-serif;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
label{color:lightseagreen}
</style>
      <div>
    <?php
        $con=mysql_connect("localhost","root","");
        if(!$con){
        	die("can not connect".mysql_error());
        }

        mysql_select_db("resumerjit2",$con);
        $sql="SELECT * FROM bio WHERE email='".$_SESSION['email']."'  ";
        $myData = mysql_query($sql,$con);
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
		     $img = $record['img'];
        ?>

      <h1 style="color:lightseagreen" align="center"><br>BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
          <table><tr><td><label>Roll No:</label></td><td><?php echo $roll; ?></td></tr>
   <tr><td><label>Name:</label></td><td><?php echo $name; ?></td></tr>
     <tr><td><label>Email:</label></td><td> <?php echo $email; ?></td></tr> 
     <tr><td>	 <label>Phone Number:</label></td> <td><?php echo $ph; ?></td></tr>
      <tr><td><label>Present Address:</label></td><td><?php echo $presentadd; ?></td></tr>
	  <tr><td><label>Permanent Address:</label></td><td><?php echo $permanentadd; ?></td></tr>
      <tr><td><label>Father's Name:</label></td><td><?php echo $fname; ?></td></tr>
	  <tr><td><label>Date of Birthday:</label></td><td><?php echo $dob; ?></td></tr>
	  <tr><td><label>Gender:</label></td><td><?php echo $gender; ?></td><//tr>
 		   
		   <tr><td><label><h3 style="color:lightseagreen">EDUCATION:-</h3></label></td></tr>
		  <table > <col width="140">
  <col width="200">
		   <tr><td><h4>Xth CLASS</h4></td><td></td>   <td><h4>XIIth CLASS</h4></td><td></td></tr>
		   <tr><td><label>Year of completion:</label></td><td><?php echo $yrofcomp;?></td>  <td><label>Year of completion:</label></td><td><?php echo $yoc; ?></td></tr>
        
           <tr><td><label>Board Name:</label></td><td><?php echo $bn; ?></td><td><label>Board Name:</label></td><td><?php echo $bn2; ?><br></td></tr>
            <tr><td><label>CGPA:</label></td><td><?php echo $cgpa; ?></td>
		   <td> <label>Percentage:</label></td><td><?php echo $prcnt; ?><br></td></tr></table>
            
			
           <table><col width="140">
  <col width="1000">
		   <tr><td><h4>GRADUATION:-</h4></td></tr>
             <tr><td><label>Branch:</label></td><td><?php echo $branch; ?><br></td></tr>
			 <tr><td><label>Degree:</label></td><td><?php echo $degree; ?><br></td></tr>
	        <tr><td><label>College Name:</label></td><td><?php echo $cn; ?><br></td></tr>
           	<tr><td><label>Start Year:</label></td><td><?php echo $sy; ?><br></td></tr>
            <tr><td><label>End Year:</label></td><td><?php echo $ey; ?><br></td></tr></table><br>
              
			 <table  border='1' align='' cellspacing="1" cellpadding="5">  <col width="140">
  <col width="100">
			  <tr><td><label>I SGPA:</label></td><td><?php echo $sgpa1; ?></td>
			      <td><label>II SGPA:</label></td><td><?php echo $sgpa2; ?></td></tr> <col width="130">
  <col width="100">
			  <tr><td><label>III SGPA:</label></td><td><?php echo $sgpa3; ?></td>
	             <td><label>IV SGPA:</label></td><td><?php echo $sgpa4; ?></td></tr>
			  <tr><td><label>V SGPA:</label></td><td><?php echo $sgpa5; ?></td>
			     <td><label>VI SGPA:</label></td><td><?php echo $sgpa6; ?></td></tr>
			  <tr><td><label>VII SGPA:</label></td><td><?php echo $sgpa7; ?></td>
                 <td><label>VIII SGPA:</label></td><td><?php echo $sgpa8; ?></td></tr> 
			 </table>	  <br>
            
		 <table> <col width="140">
  

		 <tr><td><label>CGPA:</label></td><td><?php echo $cgpa3; ?></td></tr>
		   
		   
		  <tr><td> <label>Diploma Percentage:</label></td><td>
		   <?php echo $dp; ?></td></tr>
		  <tr><td> <label>Specialization:</label></td><td>
		   <?php echo $spcl; ?></td></tr>
		   <tr><td><label>Backlogs(number of backlogs):</label></td><td>
		   <?php echo $bl; ?></td></tr>
		  <tr><td> <label>Prior Experience:</label></td><td>
		  <?php echo $ex; ?></td></tr>	 </table>

	<?php } ?>
	
	
	  </div>
  </body>
</html>

<?php } ?>
