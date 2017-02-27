<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $image_value = $_GET['img'];
   $sql = 'SELECT * FROM rsmtbl2 WHERE img like "$image_value" ';
   mysql_select_db('resumerjit2');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "name:{$row['name']}  <br> ";
      echo "name:{$row['img']}  <br><br> ";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>