<?php
session_start();

$email1=$_POST['email1'];
$PW1=$_POST['PW1'];
 //$_SESSION["username"] =$_POST['user_name'];

if($email1&&$PW1)
 {
      $connect = mysql_connect("localhost","root","") or die("couldn't connect to the database!");
      mysql_select_db("resumerjit2") or die ("couldn't find database");

      $query = mysql_query("SELECT * FROM signin WHERE email1='$email1'");

      $numrows = mysql_num_rows($query);

  if($numrows!==0)
      {
          while($row= mysql_fetch_assoc($query))
             {
                  $dbemail1=$row['email1'];
                  $dbPW1=$row['PW1'];
             }
       if($email1==$dbemail1&&$PW1==$dbPW1)
           {
                 echo "you are logged in!";
                 echo "<script>window.open('xyz.php','_self')</script>";
                 @$_SESSION['email1'] = $email1;
           }
       else
              echo "your password is incorrect!";
              echo "<script>window.open('studentlogin.php','_self')</script>";
      }
  else
         die("that user doesn't exists!");
 }
else
       die("please enter a username and password!");
?>