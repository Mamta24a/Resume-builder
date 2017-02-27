<html><head> <title >myData</title></head>
<body style="background-color:lightseagreen;padding:200px;padding-top:20px">
<style>
.lbl{
	color:lightseagreen;}
	.tbl{
position:10px;
}
</style>
<h1 style="color:lightgrey; " >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RESUMES</h1>
<div style="background-color:lightgrey;padding:100px;padding-top:100px">

<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("can not connect".mysql_error());
}
mysql_select_db("resumerjit2",$con);
$sql="SELECT * FROM rsmtbl2";
$myData = mysql_query($sql,$con);
while(mysql_fetch_array($myData)){
$record = mysql_fetch_array($myData);
<label class="lbl">Name:</label>
<label><?php  echo($record[0]); ?></label><br>
<label class="lbl">E-mail:</label>
<label><?php  echo($record[1]);   ?></label><br>
<label class="lbl">Phone Number:</label>
<label><?php  echo($record[2]);   ?></label><br>
<label class="lbl">Address:</label>
<label><?php  echo($record[3]);   ?></label><br>
<br>
<label class="lbl">OBJECTIVE:</label><br>
<label><?php  echo($record[4]);   ?></label><br>
<br>
<label class="lbl">EDUCATION:</label><br>
<label class="lbl">(Xth CLASS):</label><br>
<label class="lbl">School Name:</label>
<label><?php  echo($record[5]);   ?></label><br>
<label class="lbl">Year of complition:</label>
<label><?php  echo($record[6]);   ?></label><br>
<label class="lbl">Board Name:</label>
<label><?php  echo($record[7]);   ?></label><br>
<label class="lbl">CGPA:</label>
<label><?php  echo($record[8]);   ?></label><br>
<label class="lbl">(XIIth CLASS):</label><br>
<label class="lbl">School Name:</label>
<label><?php  echo($record[9]);   ?></label><br>
<label class="lbl">Year of complition:</label>
<label><?php  echo($record[10]);   ?></label><br>
<label class="lbl">Board Name:</label>
<label><?php  echo($record[11]);   ?></label><br>
<label class="lbl">Stream:</label>
<label><?php  echo($record[12]);   ?></label><br>
<label class="lbl">Percentage:</label>
<label><?php  echo($record[13]);   ?></label><br>
<label class="lbl">(COLLEGE DETAILS)</label><br>
<label class="lbl">College Name:</label>
<label><?php  echo($record[14]);   ?></label><br>
<label class="lbl">Start of year:</label>
<label><?php  echo($record[15]);   ?></label><br>
<label class="lbl">End of year:</label>
<label><?php  echo($record[16]);   ?></label><br>
<label class="lbl">Branch:</label>
<label><?php  echo($record[17]);   ?></label><br>
<label class="lbl">Degree:</label>
<label><?php  echo($record[18]);   ?></label><br>
<label class="lbl">SGPA:</label>
<label><?php  echo($record[19]);   ?></label><br>
<label class="lbl">CGPA:</label>
<label><?php  echo($record[20]);   ?></label><br>
<label class="lbl">Skills:</label>
<label><?php  echo($record[21]);   ?></label><br>
<br>
<label class="lbl">EXPERIENCES:</label><br>
<label class="lbl">Project Name:</label>
<label><?php  echo($record[22]);   ?></label><br>
<label class="lbl">From:</label>
<label><?php  echo($record[23]);   ?></label><br>
<label class="lbl">To:</label>
<label><?php  echo($record[24]);   ?></label><br>
<label class="lbl">Discription:</label>
<label><?php  echo($record[25]);   ?></label><br>
<br>
<label class="lbl">EXTRA-CERICULAR ACTIVITIES::</label>
<label><?php  echo($record[26]);   ?></label><br>


<br/>}
mysql_close($con);
?>
</div>
</body>
</html>