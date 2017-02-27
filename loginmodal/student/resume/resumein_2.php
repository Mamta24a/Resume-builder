<!doctype html>
<html>
  <head>
     <title >Resume</title>
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

textarea{
width:100%;
 border: 1px solid #ccc;
height:100px;
border-radius:4px;}

#fromto{
width:35%;
}

#addmore{width:30%;}

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
    padding: 100px;
	padding-top:20px;
	margin:250px;
	margin-top:50px;
	border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
</style>
      <div>
      <form action="resumeout.php" method="post" >
	     <h1 style="color:lightseagreen" align="center">RESUME</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:</h3><br>
           <label>Full Name:</label><br>
		   <input type="text" name="name" value="<?php echo $name; ?>" disabled ><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email"><br>
		   <label>Phone Number:</label><br>
		   <input type="text" name="phno"><br>
		   <label>Address:</label><br>
		   <input type="text" name="address"><br>
		   <label>Upload your Picture:</label><br>
		   <input type="file" name="pict"><br>
		   <p></p>
		   
		   <label style="color:lightseagreen"><h3>OBJECTIVE:</h3></label>
		   <textarea name="objc"></textarea><br>
		   <p></p>
		  
		   <label><h3 style="color:lightseagreen">EDUCATION:-</h3></label><br>
		   <h4>Xth CLASS</h4><br>
           <label>School Name:</label><input type="text"  name="sculnm"><br>
           	<label>Year of completion:</label><input type="text" name="yrofcomp"><br>
            <label>Board Name:</label><input type="text" name="bn"><br>		
            <label>CGPA:</label><input type="text" name="cgpa"><br>		
            <p></p>
			
           <h4>XIIth CLASS</h4><br>
           <label>School Name:</label><input type="text" name="sn"><br>
           	<label>Year of completion:</label><input type="text" name="yoc"><br>
            <label>Board Name:</label><input type="text" name="bn2"><br>
             <label>Stream:</label><input type="text" name="stream"><br> 			
            <label>Percentage:</label><input type="text" name="prcnt"><br>		
            <p></p>
			
           <h4>GRADUATION:-</h4><br><p></p>
		   <label>College Name:</label><input type="text" name="cn"><br>
           	<label>Start Year:&ensp;</label><input type="date" id="fromto" name="sy">&ensp;
            <label>End Year:&ensp;</label><input type="date" id="fromto" name="ey"><br>
             <label>Branch:</label>
			 <select id="branch" name="branch">
      <option value="it">Information Technology</option>
      <option value="ec">Electronics and communicationC</option>
      <option value="ee">EE</option>
	  <option value="cs">Computer Science</option>
	  <option value="au">automobile</option>
	  <option value="me">mechanical</option>
    </select><br>
                 <label>Degree:</label>
				 <select id="degree" name="degree">
      <option value="be">Bachelor of engineering</option>
      <option value="mca">M.C.A</option>
      <option value="mtch">M.Tech</option>
	  
    </select><br><br>
              <label>SGPA:</label><input type="text" name="sgpa"><br> 				 
            <label>CGPA:</label><input type="text" name="cgpa3"><br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">SKILLS:</h3></label>
		  <textarea name="skills"></textarea><br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">EXPERIENCES:</h3></label>
		   <label>Project Name:</label>
		   <input type="text" name="pn"><br>
		   <label><b>Duration:</b></label><br>
		   <label>From:&ensp;</label><input type="date" id="fromto" name="frm">&ensp;&ensp;&ensp;&ensp;
		   <label>To:&ensp;</label><input type="date" id="fromto" name="too"><br>
		   <label>Discription:</label><br>
		   <br>
		   <textarea name="disc"></textarea><br> <input type="submit" value="WANNA ADD MORE??" id="addmore" > <br>
		   <p></p>
		   
		   <label><h3 style="color:lightseagreen">EXTRA-CERICULAR ACTIVITIES:</h3></label>
		   <textarea name="eca"></textarea><br>
		   <p></p>
		   
		   <input type="submit" value="SUBMIT" name="submit">
		   
      </form>
	  </div>
  </body>
</html>