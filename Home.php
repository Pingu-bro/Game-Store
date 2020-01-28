<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
 <meta name="viewport" content ="width=device-width,initial-scale=1">
 <head>
  <title> Home </title>
  <style>
   body {
     background-image: url("background.jpg");
	 background-color: #cccccc;
	 -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
    }
   
   ul {
     list-style-type: none;
     text-align: center;
     margin: 50;
     padding: 0;
     overflow: hidden;
     background-color: #333;
     position: -webkit-sticky;
     position: sticky;
     position: relative;
    }

   li {
	 width: 100px;
     margin: auto;
     display: inline;
     padding-right: 60px;
    }

   li a {
     display: inline-block;
     color: white;
     text-align: left;
     padding: 14px 30px;
     text-decoration: none;
    }

   li a:hover {
     background-color: #111;
    }

   .active {
     background-color: #4CAF50;
    }

   .box {
     background: rgba(255,255,255,0.6);
     border: 1px solid white;
     padding: 40px;
     margin: 40px;
     border-radius: 5px;
    }
	
   .htext {
	 -webkit-text-stroke-width: 0.8px;
     -webkit-text-stroke-color: black;
    }
   
   .text {
	 -webkit-text-stroke-width: 0.2px;
     -webkit-text-stroke-color: black;
    }

   .column {
     float: left;
     width: 50%;
    }

   .row:after {
     content: "";
     display: table;
     clear: both;
    }

   input[type=text] {
     width: 60%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
    }
	
   input[type=password] {
     width: 60%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
    }

   input[type=submit] {
     font-size: 1em;
	 font-face: Arial;
	 width: 50%;
     background-color: #4CAF50;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     border-radius: 4px;
     cursor: pointer;
    }

   input[type=submit]:hover {
     background-color: #45a049;
    }
	
   ::placeholder {
     color: lightgray;
     opacity: 1;
    }
  </style>
 </head>

 <body>
  <ul>
   <li><a class="active" href="index.php">Home</a></li>
   <li><a href="#categories">Categories</a></li>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="about.php">About</a></li>
  </ul>
  
  <div class="htext"><header><font color="white" size="6" face="Arial"><center><h1> Game Store </h1></center></font></div>
  
  <font color="white" face="Arial" size="5"><b><center><div class="box">
   <div class="text">
   <form>
    <div class="row">
     <div class="column">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="firstname" placeholder="Your first name..">
	 </div>
    
	 <div class="column"> 
	  <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
     </div>
    </div>
   
    <br><br>
   
    <div class="row">
     <div class="column">
      <label for="fname">Email:</label>
      <input type="text" id="em" name="email" placeholder="someone@email.com">
     </div>
	 
     <div class="column">	
	  <label for="lname">Password:</label>
      <input type="password" id="pword" name="password" placeholder="Password">
     </div>
    </div>
   </div>
   
   <br>
   <input type="submit" value="Submit">
  </form>
  </div></center></b></font>

  <hr>
  <footer><font face="Bookman Old Style" color="white" size="2"> &copy; Created by Pansheet_Naik </font></footer>
 </body>
</html>