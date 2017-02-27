
    <?php

	$con=mysql_connect("localhost","root","");

	if(!$con){

	die("can not connect".mysql_error());

	}

	
        mysql_select_db("resumerjit2",$con);
    
    $sql="SELECT * FROM bio ";

	$myData = mysql_query($sql);

	//$myData = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());	
	
	$fp = fopen('bio.csv', 'w');
	
	
	while($record = mysql_fetch_array($myData))
	{
	  
	   fputcsv(  $fp, $record );
    }


    fclose($fp);	?>
