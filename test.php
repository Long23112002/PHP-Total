<?php
   session_start();
   if(isset($_SESSION['username']) && isset($_SESSION['password'])){
       echo "Well come " . $_SESSION['username'] . "<br>";
       echo "<a href='./logout.php'>Logout</a>";
   }else{
       echo "well come guest <br>";
       echo "<a href='./session.php'>Login</a>";
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
  <h1>Dây là dassboard</h1>
</body>
</html>

