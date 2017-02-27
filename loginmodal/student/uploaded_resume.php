<!doctype html>
<html>
  <head>
     <title>Student login</title>
  </head>
  <body>
  <style>
  h3{
	  color:white;
  }
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: auto;
    background-color: lightseagreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
}
#upload {
    width: 16%;
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

#div1 {
	border: solid grey 1px;
    border-radius: 5px;
    background-color: black;
    padding: 8%;
	margin:8%;
	position:auto;
	top:50px;
	opacity:0.7;
	box-shadow:0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

label{
color:lightseagreen;
}

submit{
font-weight:bold;
}
input[type=file], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	color:white
}
body{
	background-image: url(office-notes-notepad-entrepreneur-38556.jpg);
	 background-size:100% 110%;
	 background-repeat:no repeat'
}

</style>
      <div align="center" id="div1">
      <form action="pdf_upload.php" method="post" name="myForm" align="center" enctype="multipart/form-data">
	     
        <h3 style="color:lightseagreen" align="center">Already have resume?? Upload it now!!!:</h3>
           <input type="text" name="name" align="center" placeholder="Enter your name: " >
           <input type="file" accept="pdf" name="resm" align="center">
		   <input id="upload" type="submit" value="UPLOAD" name="upload" href="upload.php" align="cnter">
		   <br>
		   
		 
      </form>
	  
  </body>
</html>
