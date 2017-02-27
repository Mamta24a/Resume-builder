<?php
    // mysql database connection details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bio";

    // open connection to mysql database
    $connection = mysql_connect($host, $username, $password, $dbname) or die("Connection Error " . mysql_error($connection));
    
    // fetch mysql table rows
    $sql = "select * from bio";
    $result = mysql_query( $sql, $connection);
	
    $fp = fopen('bio.csv', 'w');

    while($row = mysql_fetch_array($result))
	
    {
        fputcsv( $row, $fp);
    }
    
    fclose($fp);

    //close the db connection
    mysql_close($connection);
?>