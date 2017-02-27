<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "resumerjit2";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
	$sql="SELECT * FROM upload_resume ";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
      <a href="uploads/<?php echo $row['resm'] ?>" target="_blank" ><?php echo $row['resm'] ?></a><br><br>
        <?php
	}
	?>
