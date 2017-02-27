<!doctype html>
<html>
<head>
<title> Students CSV</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.table2excel.min.js"></script>
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
<script type="text/javascript">
    $(document).ready(function(e){
	    
		$("#myButton").click(function(e) {
		
		    $(".myTable").table2excel({
			     
				 name:"your  file name",
                 filename: "myfile"	,
                 fileext: ".xls" 				 
			
			});
		});
	});
</script>
<style>
.button {
  display: inline-block;
  padding: 5px 10px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#31babc;
  border:2px solid white;
  border-radius: 5px;
  box-shadow: 8px 8px 9px black;
}

.button:hover {background-color: #40E0D0; }

.button:active {
  background-color:#00CED1;
  box-shadow: 8px 8px 9px black;
  transform: translateY(4px);
}
</style>

</head>


<body >

<div style="padding-left:25px;padding-top:5px;padding-bottom:35px;padding-right:25px; margin-bottom:1px;margin-left:1px;border:2px solid black; border-radius:5px;background:lightseagreen">
<h1 style="color:white; font-weight:bold;font-size:40px;font-family:Arial;text-shadow: 2px 2px 4px #000000;" align="center">STUDENT'S BIO-DATA </h1>

<button class="button" id="myButton" style="">Click Here to Download it as CSV <i class="fa fa-file-excel-o" aria-hidden="true"></i> </button>

<div style="padding-top:0px">
<table class="myTable" border="1" bgcolor="darkgray"><br>
<tr bgcolor="#d4d7db">
   <th>Roll Number</th>
   <th>Name</th>
   <th>Email Address</th>
   <th>Phone Number</th>
   <th>Present Address</th>
   <th>Permanent Address</th>
   <th>Father's Name</th>
   <th>Date of Birth</th>
   <th>Gender</th>
   <th>IX year</th>
   <th>IX Board</th>
   <th>IX CGPA</th>
   <th>XII year</th>
   <th>XII Board</th>
   <th>XII Percentage</th>
   <th>Branch</th>
   <th>Degree</th>
   <th>College Name</th>
   <th>Start Year</th>
   <th>End Year</th>
   <th>SGPA 1</th>
   <th>SGPA 2</th>
   <th>SGPA 3</th>
   <th>SGPA 4</th>
   <th>SGPA 5</th>
   <th>SGPA 6</th>
   <th>SGPA 7</th>
   <th>SGPA 8</th>
   <th>CGPA</th>
   <th>Diploma</th>
   <th>Specialization</th>
   <th>Backlog</th>
   <th>Experience</th>   
</tr>


<?php

	$con=mysql_connect("localhost","root","");

	if(!$con){

	die("can not connect".mysql_error());

	}

	
        mysql_select_db("resumerjit2",$con);
    
    $sql="SELECT * FROM bio ";

	$myData = mysql_query($sql);


	while($record = mysql_fetch_array($myData))
	{
      
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
		     $ex = $record['ex'];  ?>
<tr bgcolor="white">
   <td><?php echo $roll ;?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $ph; ?></td>
   <td><?php echo $presentadd; ?></td>
   <td><?php echo $permanentadd; ?></td>
   <td><?php echo $fname; ?></td>
   <td><?php echo $dob; ?></td>
   <td><?php echo $gender; ?></td>
   <td><?php echo $yrofcomp; ?></td>
   <td><?php echo $bn; ?></td>
   <td><?php echo $cgpa; ?></td>
   <td><?php echo $yoc; ?></td>
   <td><?php echo $bn2; ?></td>
   <td><?php echo $prcnt; ?></td>
   <td><?php echo $branch; ?></td>
   <td><?php echo $degree; ?></td>
   <td><?php echo $cn; ?></td>
   <td><?php echo $sy; ?></td>
   <td><?php echo $ey; ?></td>
   <td><?php echo $sgpa1; ?></td>
   <td><?php echo $sgpa2; ?></td>
   <td><?php echo $sgpa3; ?></td>
   <td><?php echo $sgpa4; ?></td>
   <td><?php echo $sgpa5; ?></td>
   <td><?php echo $sgpa6; ?></td>
   <td><?php echo $sgpa7; ?></td>
   <td><?php echo $sgpa8; ?></td>
   <td><?php echo $cgpa3; ?></td>
   <td><?php echo $dp; ?></td>
   <td><?php echo $spcl; ?></td>
   <td><?php echo $bl; ?></td>
   <td><?php echo $ex; ?></td>
   
</tr>
	
	<?php } ?>
	</table>
	
	</div>
	</div>

</body>
</html>