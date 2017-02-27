<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("can not connect".mysql_error());
}
mysql_select_db("resumerjit2",$con);
$sql="SELECT * FROM brswcmp";
$myData = mysql_query($sql,$con);
$record = mysql_fetch_array($myData);
mysql_close($con);
?>
<!doctype html>
<html>
  <head>
     <title>browse for company</title>
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
    width: 40%;
    background-color: lightseagreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:#0BC4C7;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 25px;
	padding-top:15px;
	padding-bottom:10px;
}
#box{border: 1px solid lightseagreen ;
   border-radius:5px;
   background-color:white;
   height:auto;}
   
   #pic{width:100px;
   display:inline;
   background-color:white;
   }
   #info{width:700px;
   display:inline;
   float:right;
   padding-bottom:10px;
   padding-top:10px;
   
   }
   img{ border: 2px solid lightseagreen;
   padding:2px;}
   
</style>
      <div>
      <form action="browsecmp.php" method="post" name="myForm" >
	     <h1 style="color:lightseagreen">PLACEMENT CELL</h1>
	
	<div id="box"><div id="pic"><img src='img/images.png'></div>
	<div id="info"><label class="lbl">Company Name:</label>
           <label><?php  echo($record[3]);   ?></label>  
           <label class="lbl">Date:</label>
           <label><?php  echo($record[11]);   ?></label><br>
           <label class="lbl">About company:</label>
           <label><?php  echo($record[5]);   ?></label><br>
           <label class="lbl">Job discription:</label>
           <label><?php  echo($record[8]);   ?></label><br>
           <label class="lbl">Eligibility Criterion:</label>
           <label><?php  echo($record[7]);   ?></label><br>
             <label class="lbl">Skills Required:</label>
           <label><?php  echo($record[9]);   ?></label><br>
		  <input type="submit" value="Send Resume">
	</div>
	</div>  
      </form>
	  </div>
  </body>
</html>