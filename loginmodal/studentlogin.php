<?php
session_start();

$email=$_POST['email'];
$PW=$_POST['PW'];
 //$_SESSION["email"] =$_POST['email'];

if($email&&$PW)
 {
      $connect = mysql_connect("localhost","root","") or die("couldn't connect to the database!");
      mysql_select_db("resumerjit2") or die ("couldn't find database");

      $query = mysql_query("SELECT * FROM signin WHERE email='$email'");

      $numrows = mysql_num_rows($query);

  if($numrows!==0)
      {
          while($row= mysql_fetch_assoc($query))
             {
                  $dbemail=$row['email'];
                  $dbPW=$row['PW'];
             }
       if($email==$dbemail&&$PW==$dbPW)
           {
                 echo "you are logged in!";
                 echo "<script>window.open('student/menu/index.php','_self')</script>";
                 @$_SESSION['email'] = $email;
           }
       else
              echo "your password is incorrect!";
              echo "<script>window.open('studentlogin.php','_self')</script>";
      }
  else
         die("that user doesn't exists!");
 }
else
       die("please enter a Email and password!");
?>