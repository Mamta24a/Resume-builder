<?php
session_start();
if(!isset($_SESSION['email']))
{
 header("location:../employerlog.html");
}
else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employer Window</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css" />
    <script src="jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"><br>
    <ul class="nav nav-tabs">
    <li class=""><a data-toggle="tab" href="#home"><i class="fa fa-briefcase" aria-hidden="true"></i> Post Job</a></li>
    <li><a data-toggle="tab" href="#menu1"><i class="fa fa-filter" aria-hidden="true"></i> Filter Students</a></li>
    <p align="right" >
	<a style="text-decoration:none;" href="jquery-table2excel-master/csv.php"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download All as Excel Sheet &ensp;&ensp;&ensp;&ensp;</a>
	<a style="text-decoration:none; color:#bf035e; font-weight:bold" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></p>
	  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
	 <!--form for post job-->
	 
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
input[type=password], select {
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
border-radius:4px;}

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

#form{
	border:1px solid;
	border-color:darkgrey;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 100px;
	padding-top: 10px;
	padding-bottom: 80px;
	margin:100px;
	margin-top:10px;
	margin-bottom:50px;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
</style>
     
	 <img src="a.jpg" style="width:100%; height:230px;"></img>
         
      <div id="form">
      <form action="insertcmp.php" method="post" name="myForm" enctype="multipart/form-data">
      <br>
	     <h1 style="color:lightseagreen" align="center">POST JOB</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION</h3>
           <label>Full Name:</label><br>
		   <input type="text" name="name"><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email"><br>
		   <label>Company Name:</label><br>
		   <input type="text" name="cn"><br>
            <label>Date:</label><br>
		   <input type="date" name="dt"><br>
            <label>Image:</label><br>
		   <input type="file" name="img"><br>
           <label>About company:</label><br>
		   <br>
		   <textarea name="discc"></textarea><br> 
           
		   <label>Phone Number:</label><br>
		   <input type="text" name="phno"><br>
           <label>Eligibility Criterion:</label><br>
		   <textarea name="ec"></textarea><br> 
           <label>Job Discription:</label><br>
		   <br>
		   <textarea name="discj"></textarea><br> 
           <label>Skills Required:</label>
		   <input type="text" name="sr"><br>
           <label>Website URL:</label>
		   <input type="text" name="ww"><br>
		   
		   <input type="submit" value="POST JOB" name="submit">
		   
      </form>
	  </div>
	 
     <!--END OF form for post job-->
	 
	 </div>
    <div id="menu1" class="tab-pane fade">
	<style>
#search {
    width: 300px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 6px;
    font-size: 26px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 0px 0px 0px 20px;

}
#search:focus {
    width: 100%;
}
#search:hover {
	border:2px solid #70a1ef;
	box-shadow: 5px 5px 5px #888888;
}
h3{ color:lightseagreen;}
#stu_box{
 background:#f2f2f2;
 padding:10px;
 width:auto;
 
 display:inline-block;
 margin:10px;
 }
 #stu_img { padding:5px;
       margin:10px;
	   border:2px solid lightseagreen;
	   border-radius:4px;
	   width:200px;
       height:200px;
	   transition:width 2s;
	   transition:height 1s;
	   
	   }
 #stu_img:hover{
  border:3px solid lightseagreen;
  width:300px;
  height:300px;
 }	   
 </style>

<form align="right" action="mainemp.php" method="get" enctype="multipart/form-data">
  <input type="text" name="search" placeholder="Search.." id="search">
  <input type="submit" value="Go!!" name="go" class="go" style="width:7%; padding:8px; font-size:20px">
  <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
  
</form>
      <h3 >Select Top Students of RJIT according to your need!!!!</h3>
	  
	  <?php
	  //include(".php");
	  mysql_connect("localhost","root","");
	  mysql_select_db("resumerjit2");
	  
	  if(isset($_GET['go'])){
		  
		$search_value = $_GET['search'];
		$query = "select * from rsmtbl2 where qualities like '%$search_value%'";
	  
	  $run = mysql_query($query);
	
	  
	  while( $row = mysql_fetch_array($run)) {
		  
		  $name=$row['name'];
		  $skills=$row['qualities'];
		  $img=$row['img'];
 ?>
		  
		  <div id="stu_box" >
	    

<form align="right" action="" method="post" enctype="multipart/form-data">
	<a href="../student/img_click_resume.php" name="img">
		<img id="stu_img" src="../student/bio/bio_img/<?php echo $img?>" width="200" height="200" name="<?php echo $img?>"  ></img>
		</a>
		
		<h4 align="left" style="padding-left:9px;">Name: <?php echo $name; ?> </h4>
		<p style="word-wrap: break-word; width:200px;padding-left:9px;" align="left">Skills: <?php echo $skills ?></p>
</form>	    
		</div> 
		 
	
	<?php } ?>
	   
	 <?php } ?>	  
	
	
	  
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


<?php  }  ?>