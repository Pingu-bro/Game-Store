<!DOCTYPE html>

<html>

 <head>
  <title> Image Gallery </title>
  <style>
   body {
     background-image: url("background.jpg");
     background-color: #cccccc;
     background-repeat: no-repeat;
     background-size: contain;
    }
	
   ul {
     list-style-type: none;
     text-align: center;
     margin: 50;
     padding: 0;
     overflow: hidden;
     background-color: #333;
     position: -webkit-sticky; /* Safari */
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
     width: 1000px;
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
  </style>
 </head>
 
  <body>
  <ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="#categories">Categories</a></li>
   <li><a class="active" href="gallery.php">Gallery</a></li>
   <li><a href="about.php">About</a></li>
  </ul>
  
  <br><br>
  <font size="10" face="Calibri" color="white">
   <center><u><b> Gallery </b></u></center>
  </font>
  <hr><br><br>

  <a>
   <img src="Image_01.jpg" width="700" height="400">
   <img src="Image_02.jpg" width="620" height="400">
   <img src="Image_03.jpg" width="600" height="400">
   <img src="Image_04.jpg" width="720" height="400">
   <img src="Image_05.jpg" width="700" height="400">
   <img src="Image_06.jpg" width="620" height="400">
   <img src="Image_07.jpg" width="620" height="400">
   <img src="Image_08.jpg" width="700" height="400">
   <img src="Image_09.jpg" width="700" height="400">
   <img src="Image_10.jpg" width="620" height="400">
  </a>

  <br><br><hr>
  
  <footer><b><font face="Bookman Old Style" color="white" size="2"> &copy; Created by Pansheet_Naik </font></b></footer>
 </body>

</html>