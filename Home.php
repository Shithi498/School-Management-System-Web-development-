<?php

session_start();



	if(isset($_POST['logout']))
{
	session_destroy();
	header('location: Login.php');

}
else if(isset($_POST['post']))
{
	
	header('location: Post.php');

}
else if(isset($_POST['grade']))
{
	
	header('location: Grade.php');

}
else if(isset($_POST['notice']))
{
	
	header('location: Notice.php');

}

else if(isset($_POST['4thSub']))
{
	
	header('location: FourthSub.php');

}
else if(isset($_POST['classmate']))
{
	
	header('location: classmate.php');

}




?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 	<form method="post">
      <button name="logout">Logout</button><br><br>
      
      <button name="post">Post</button><br><br>
      <button name="grade">Grade</button><br><br>
      <button name="classmate">Class Mates</button><br><br>
      <button name="notice">Notice</button><br><br>
      <button name="4thSub">Fourth Subject</button>
    </form> 
 </body>
 </html>