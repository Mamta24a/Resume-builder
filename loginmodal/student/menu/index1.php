<?php
session_start();
if(!isset($_SESSION['email']))
{
 header("location:../../studentlog.html");
}
else {
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Student Window</title>
</head>
<body background="CV.png" no repeat style="background-size: cover">

<span  style="font-family:sans-serif;font-weight: bold; color: white;
           text-shadow: 2px 2px 4px black; font-size:15px;display:block;text-align:right;padding:20px;position:fixed;top:7px;right:120px">
	       <?php echo $_SESSION['email']?></span><span><a href="stu_logout.php" style="font-family:sans-serif;font-weight: bold; color: white;
                                                  text-shadow: 2px 2px 4px orange; font-size:25px;display:block;text-align:right;padding:20px ">
          <i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></span>


<!--<p  ><a href="stu_logout.php" style="font-family:sans-serif;font-weight: bold; color: white;text-shadow: 2px 2px 4px orange; font-size:25px;display:block;
text-align:right;padding:20px "><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></p>-->
<!--<style>#menu:hover{
	background:#2ec4cc;
	 padding: 0.5em 1em;
}</style>-->

<br><br><br><br><br><br><br><br><br><br><br>
<section class="cd-section">
	<a class="cd-bouncy-nav-trigger" href="#0" id="menu" style="background:lightseagreen;border-radius:5px;font-size:40px;padding:0.3em 0.5em;"><i class="fa fa-bars" ></i> Menu</a>
</section> <!-- .cd-section --><br><br>

<h1 style=" font-size:50px;color:orange;font-weight:bold;text-shadow: 2px 2px 4px white;text-align:center">Welcome Students !!!</h1>

<div class="cd-bouncy-nav-modal">
	<nav>
		<ul class="cd-bouncy-nav">
			<li ><span id="create"><br><i  class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i></span>
			    <a href="../resume/mainstu.php" >Create your Resume</a></li>
			<li><span id="upload"><br><i class="fa fa-list-alt fa-3x" aria-hidden="true"></i></span>
			<a href="../uploaded_resume.php">Upload Your Resume</a></li>
			<li><span id="bio"><br><i class="fa fa-id-card-o fa-3x" aria-hidden="true"></i></span>
			<a href="../bio/bio.php">Fill Bio-Data for T&P cell</a></li>
		</ul>
	</nav>
	
	<a href="#0" class="cd-close">Close modal</a>
</div> <!-- cd-bouncy-nav-modal -->
	
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>


<?php } ?>