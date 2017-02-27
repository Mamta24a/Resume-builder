<!doctype html>
<html>
<head>
<title>company list</title>
</head>
  <body>
  <style>
h1 {color:lightseagreen;
    font-size:40px;}
#outer1 { background:#f2f2f2;
         border-radius:5px; 
		 margin:10px;
		 padding:50px;}
#outer2 { background:white;
          border:1px solid lightseagreen;
          border-radius:5px;
		  margin:30px;
		 padding:25px;
    	}
img { border:2px solid lightseagreen;
      padding:5px; 
	 
    }		
#inner { background:#f2f2f2;
         border-radius:10px;
         margin:0px;
		 padding:30px;	
         	 
       }	
label {
         color:lightseagreen;
		 
      } 
input[type=submit] {
    width: 25%;
    background-color: lightseagreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}	  

</style>
 

<div id="outer1"> 
<h1 >PLACEMENT CELL</h1>

<div id="outer2"> 


  <?php

       $con=mysql_connect("localhost","root","");
        if(!$con){
        	die("can not connect".mysql_error());
        }

        mysql_select_db("resumerjit2",$con);
        $sql="SELECT * FROM brswcmp ";
        $myData = mysql_query($sql,$con);?>
		
	
 <?php while($record = mysql_fetch_array($myData)){
	         
            $cn = $record['cn'];
            $img = $record['img'];
           // $image_tmp = $record['image'];
            $dt = $record['dt'];
			$discc = $record['discc'];
			$phno = $record['phno'];
            $ec = $record['ec'];
            $discj = $record['discj'];
            $sr = $record['sr'];
            $ww = $record['ww'];
			
		?>	

			<table border="0"><col width="250"><col width="900">
			<tr><td><img src="db_img/<?php echo $img?>" width="250" height="250"></img></td>		
			<td><div id="inner">
 		
<label>Company Name: </label><?php echo $cn;?><br>
<label>Date: </label><?php echo $dt;?><br>
<label>About: </label><?php echo $discc; ?><br>
<label>Contact Number: </label><?php echo $phno; ?><br>
<label>Eligibility Criterion:</label><?php echo $ec; ?><br>
<label>Job Discription: </label><?php echo $discj; ?><br>
<label>Skills Required: </label><?php echo $sr; ?><br>
<label>Website URL: </label><?php echo $ww; ?><br>	
		
<input type="submit" value="Send Resume">		
		
		</div></td></tr>
		<br><br>
		</table>
		
		<?php } ?>
		</div>
	
</div>	
  </body>
</html>