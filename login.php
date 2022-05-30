<?php include "connection.php"; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>login</title>
</head>

<body>
  <div id="body">
    <div class="login">
      <h1>login</h1>
      <form method="POST" action="#" >
        <h2>Email</h2>
        <input type="email" class="input" name="managerEmail" style="color:#000000;">
        <h2>password</h2>
        <input type="password" class="input" name="managerPassword"style="color:#000000;">
        <button name="submit">done</button>
      </form>

    </div>
  </div>
</body>
<?php
if (isset($_POST['submit'])){
  $email = $_POST['managerEmail'];
  $password =$_POST['managerPassword'];

$sql ="SELECT * FROM `manager` WHERE email ='". $email."'AND  password ='".$password."'";
$result =mysqli_query($conn ,$sql);
if(mysqli_num_rows($result)==1){
  echo " you have Successfuly logged in ";
  
  exit();
}else{
  echo " you have  false false false";
  exit();
}
if(is_array($resul)){
  
}
}
 ?>
</html>