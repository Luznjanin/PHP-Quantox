<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   

   
<?php
    
session_start();
$_SESSION['login'] = 0;


header("location:LoginScreen.php");
exit();
?>   
      
?>

    
    
 
</body>
</html>