<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<form method="post" action="">
  Email:<br>
  
  <input type="text" name="email" pattern="[^ @]*@[^ @]*" placeholder="Enter your email">
  <br>
  Password:<br>
  <input type="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form>
   

 <?php  
    
   
session_start();
$servername = "localhost";
$database = "loginapp";    
$username = "root";
$password1 = "root";

// Create connection

$conn = mysqli_connect($servername, $username, $password1, $database);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

 if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {     

    $email=$_POST['email'];
    $password=$_POST['password'];
     
     $sql = "SELECT * FROM Users WHERE Email='$email' and Password='$password'";
     
     //echo $sql;
    
     $result = mysqli_query($conn, $sql);
    

     $count = mysqli_num_rows($result);
    
   //  echo $count;
     
     
     if ($count > 0)
    {
    
         
         $_SESSION['login'] = 1;
          header('location: results.php');  
        exit();
      }
      else
      {
    echo "Error logging in";
    
    }
 }

        
    
    
    
    
    
    
?>         
            
               
                     
</body>
</html>