<!DOCTYPE html>
<html>
<head>
    <title>Student Communication</title>
</head>
<body>
    <form action="" method="post">
 
    Email:
        <input type="text" id="email" name="email" placeholder="Write your email"><br><br>
        <textarea name="post_content" placeholder="Write your post"></textarea><br>
        <input type="submit" name="submit" value="Submit">
        <input type="submit" value="Home" name="btn2">
       
       

    </form>
          
       
    <?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "web technology";
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   
 
   if (isset($_POST['submit'])) {
       $postContent = $_POST['post_content'];
    
   
       $Email=$_POST['email'];
       $sql = "INSERT INTO communication1(Email,Content) VALUES ('$Email', '$postContent')";
   
       if (mysqli_query($conn, $sql)) {
           echo "Submitted";
       }
   }else if(isset($_POST['btn2'])){
    header("location: /Home.php");
}

 
   

    ?>