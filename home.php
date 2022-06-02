<?php include "connection.php"; 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
      <?php  include "NAV.html" ;?>
    </nav>
  <h1> welcome  <?php 
  
echo $_SESSION['email'];
    ?></h1>
    <form method="POST">
    <button name="logout">LOG OUT</button>
    </form>
    <?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("location:login.php");
    }
    ?>
</body>
</html>