<?php 
if(isset($_POST['forgot']))
{
	$email =$_POST['email'];
	$connect = mysql_connect("localhost","root","");
	mysql_select_db("resumerjit2");
	$query = mysql_query("SELECT * FROM  signinemp WHERE email = '$email'");
	while($row = mysql_fetch_assoc($query))
	{
		$FN = $row['FN'];
		$email1 = $row['email'];
		$PW= $row['PW'];
		
	}
	
	if($email == $email1){
		$from = "FROM: minnie24a@gmail.com";
		$to = $email;
		$subject = "Lost Password or Username";
		$body = "Dear $FN \n> Your Email is: $email \n> Your Password is: $PW";
		mail($to,$subject,$body,$from);
		echo "Check your inbox....";
	}
	else {
		echo "Incorrect Email....";
	}
}
else {
	echo "please fill your email...";
}

?>