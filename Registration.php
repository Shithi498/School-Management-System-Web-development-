
<!DOCTYPE html>
    <html >
    <head>
     
        <title>Registration Form</title>
    </head>
    <body>
     
                <h1>Registration Form</h1>
                <form action="" method="post" >
                               
                                Name:
                                <input type="text" id="name" name="name" placeholder="Name"><br><br>
                               Phone Number:
                                <input type="text" id="phn" name="phn" placeholder="Phone Number"><br><br>
                               Email:
                                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                                Password:
                                <input type="password" id="pass" name="pass" placeholder="Password"><br><br>
                              Confirm Password:
                                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password"><br><br>
                               
                                <input type="radio" id="male" name="gender" value="Male"> Male
                              
                                <input type="radio" id="Female" name="gender" value="Female"> Female
                                
                                <input type="radio" id="other" name="gender" value="Other"> Other<br><br>
                               
                     
                           <input type="submit" name="btn1" value="Register">
                           
                    <input type="reset" value="Reset">
                    <input type="submit" value="Home" name="btn2">
                          
                </form>
                <?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web technology";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['btn1']))
{   
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $PhoneNum=$_POST['phn'];
    $Password=$_POST['pass'];
    $CPassword=$_POST['cpass'];
    $Gender=$_POST['gender'];
  
    $sql = "INSERT INTO registration(Name,Email,Password,Gender,PhoneNumber) VALUES ('$Name','$Email','$Password',' $Gender','$PhoneNum')";

    if (mysqli_query($conn, $sql)) {
        header("location: ../Login.php");
    } else {
        if(empty( $Name)){
            echo "Name not found" ;
          
         }
         else if(empty( $Email)){
             echo "Email not found" ;
           
          }
          else if(empty( $PhoneNum)){
             echo "Phone number not found" ;
           

          }
         
         else if(empty($Password)){
            echo "Password not found" ;
            }
         
         else if(empty($CPassword)){
             echo "Confirm Password not found" ;
             }
          else if( $Password!= $CPassword){
               echo "Confirm password and password are not matched" ;
                
             }
             else if(!isset($_POST['gender'])){
                 echo "Gender not found" ;
             }
        
    }
   


}else if(isset($_POST['btn2'])){
    header("location: ../Home.php");
}
  
  ?>
     
    </body>
</html>