<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   

   
<?php
    
session_start();
    
    
    if ($_SESSION['login'] == 1){
        
        echo "logged in";
    
$servername = "localhost";
$database = "loginapp";    
$username = "root";
$password1 = "root";



$conn = mysqli_connect($servername, $username, $password1, $database);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }
       
       
          
    
       $test = $_POST['search'];
            
       $result = mysqli_query($conn, "SELECT * FROM Users WHERE Email OR Name LIKE '%$test%'");
       
        while ($row = mysqli_fetch_array($result))
{
        echo $row['Email'] . " " . $row['Name'];
        echo "<br>";
}
          
    mysqli_close($con);
        
    } 
    else (header("Location:LoginScreen.php"));
    exit;  

      
?>

    
    
 
</body>
</html>