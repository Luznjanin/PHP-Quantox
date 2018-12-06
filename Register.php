<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   

<form method="post" action="">
email:<br>
<input type="text" name="email" value=""><br>
name:<br>
<input type="text" name="name" value=""><br><br>
password:<br>
<input type="password" name="password" value=""><br><br>
<br>
repeatPassword:<br>
<input type="password" name="repeatPassword" value=""><br>

<br>
<br>
<input type="submit" value="Submit">
</form>   
 
<?php    
       
    //print_r($_POST);
    
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    

    
$email = $_POST['email'];    
$name = $_POST['name'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeatPassword'];
 
  if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['password']) || empty($_POST['repeatPassword']))
{
    echo "Fill all fields!";
}
    
       
 
if ($password != $repeatPassword) {
    
echo "Passwords don't match";        
}
       
$servername = "localhost";
$database = "loginapp";
$username = "root";
$password1 = "root";

// 

$conn = mysqli_connect($servername, $username, $password1, $database);

// 

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO USERS (email, name, password) VALUES ('$email', '$name', '$password')";
       echo $sql;
       //die();
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   }
  
?>    
   
   
   
    
</body>
</html>