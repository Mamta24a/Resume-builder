<!doctype html>
<html>
  <head>
     <title >Post job</title>
  </head>
  <body>
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

div {
	border:1px solid;
	border-color:darkgrey;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 120px;
	padding-top: 10px;
	padding-bottom: 80px;
	margin:220px;
	margin-top:50px;
	margin-bottom:50px;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
</style>
     
         
      <div>
      <form action="insertcmp.php" method="post" name="myForm" >
      <br><br>
	     <h1 style="color:lightseagreen" align="center">POST JOB</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION</h3><br>
           <label>Full Name:</label><br>
		   <input type="text" name="name"><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email"><br>
		   <label>Password:</label><br>
		   <input type="password" name="pw"><br>
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
		   <input type="text" name="ec"><br>
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
  </body>
</html>