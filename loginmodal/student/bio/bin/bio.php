<!doctype html>
<html>
  <head>
     <title >bio-data</title>
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
height:100px;
border-radius:4px;
 border: 1px solid #ccc;
font-family: 'Titillium Web', sans-serif;
}

#fromto{
width:34%;
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
    padding: 120px;
	padding-top: 10px;
	padding-bottom: 80px;
	margin:300px;
	margin-top:50px;
	margin-bottom:50px;
	border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
</style>
      <div>
      <form action="bioin.php" method="post" name="myForm" enctype="multipart/form-data" >
	     <h1 style="color:lightseagreen" align="center">BIO-DATA</h1>
	    <h3 style="color:lightseagreen" align="center">BASIC INFORMATION:-</h3><br>
           <label>Roll No:</label><br>
		   <input type="text" name="roll"><br>
		   <label>Name of Candidate:</label><br>
		   <input type="text" name="name"><br>
		   <label>Email Address:</label><br>
		   <input type="text" name="email"><br>
		   <label>Phone Number:</label><br>
		   <input type="text" name="ph"><br>
		   <label>Present Address:</label><br>
		   <textarea name="presentadd"></textarea><br>
		   <label>Permanent Address:</label><br>
		    <textarea name="permanentadd"></textarea><br>
		   <label>Father's Name:</label><br>
		   <input type="text" name="fname"><br>
		   <label>Date of Birth:</label><br>
		   <input type="date" id="" name="dob"><br>
		   <label>Gender:</label><br>
		   <select id="gender" name="gender">
      <option value="Female">Female</option>
      <option value="Male">Male</option>
      </select>
		   		   
		   <label><h3 style="color:lightseagreen">EDUCATION:-</h3></label><br>
		   <h4>Xth CLASS</h4><br>
		   	<label>Year of completion:</label><input type="text" name="yrofcomp"><br>
            <label>Board Name:</label><input type="text" name="bn"><br>		
            <label>CGPA:</label><input type="text" name="cgpa"><br>		
            <p></p>
			
           <h4>XIIth CLASS</h4><br>
           	<label>Year of completion:</label><input type="text" name="yoc"><br>
            <label>Board Name:</label><input type="text" name="bn2"><br>
            <label>Percentage:</label><input type="text" name="prcnt"><br>		
            <p></p>
			
           <h4>GRADUATION:-</h4><br><p></p>
             <label>Branch:</label>
			 <select id="branch" name="branch">
      <option value="Information Technology">Information Technology</option>
      <option value="Electronics and Communication">Electronics and communication</option>
      <option value="EE">EE</option>
	  <option value="Computer Science">Computer Science</option>
	  <option value="Automobile">automobile</option>
	  <option value="Mechanical">mechanical</option>
    </select><br>
                 <label>Degree:</label>
				 <select id="degree" name="degree">
      <option value="Bachelor of Engineering">Bachelor of engineering</option>
      <option value="M.C.A.">M.C.A</option>
      <option value="M.Tech">M.Tech</option>
	  
    </select><br><br>
	
		   <label>College Name:</label><input type="text" name="cn"><br>
           	<label>Start Year:</label><input type="date" id="fromto" name="sy">
            <label>End Year:</label><input type="date" id="fromto" name="ey"><br>
              
			  <label>I SGPA:</label><input type="text" name="sgpa1"><br> 
			  <label>II SGPA:</label><input type="text" name="sgpa2"><br> 
			  <label>III SGPA:</label><input type="text" name="sgpa3"><br> 
			  <label>IV SGPA:</label><input type="text" name="sgpa4"><br> 
			  <label>V SGPA:</label><input type="text" name="sgpa5"><br> 
			  <label>VI SGPA:</label><input type="text" name="sgpa6"><br> 
			  <label>VII SGPA:</label><input type="text" name="sgpa7"><br>
              <label>VIII SGPA:</label><input type="text" name="sgpa8"><br> 			  
            
		   <label>CGPA:</label><input type="text" name="cgpa3"><br>
		   <p></p>
		   
		   
		   <label>Diploma Percentage:</label><br>
		   <input type="text" name="dp"><br>
		   <label>Specialization:</label><br>
		   <input type="text" name="spcl"><br>
		   <label>Backlogs(number of backlogs):</label><br>
		   <input type="text" name="bl"><br>
		   <label>Prior Experience:</label><br>
		   <input type="text" name="ex"><br>
		   <label>Upload your Image:</label><br>
		   <input type="file" name="img"><br>
		   
		   
		   <input type="submit" value="SUBMIT" name="submit">
		   
      </form>
	  </div>
  </body>
</html>