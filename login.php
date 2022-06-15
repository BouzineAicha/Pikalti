<?php include "connection.php";
?>
<?php


if (isset($_POST['submit'])) {
  $email = $_POST['managerEmail'];
  $password = $_POST['managerPassword'];
  $sql = "SELECT * FROM `manger` WHERE `email` ='" . $email . "' AND  `password` ='" . $password . "'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION["email"] = $_POST['managerEmail'];
    header("location:home.php");
  } else {
    echo "<script>alert('the password or email address is not correct') </script>";
  }
}


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

<body style="background-image:url('images/loginbackground.jpg');background-repeat: no-repeat;
background-size: cover;
width: 100%;
height: auto;">
  <!-- <img src="images/loginbackground.jpg> -->
  <div id="body">
    <div class="login">
      <h1>login</h1>
      <form method="POST" action="#">
        <h2>Email</h2>
        <input type="text" value="" id="email" class="input" name="managerEmail" style="color:#000000;">
        <h6 id=" errorEmail"></h6>
        <h2>password</h2>
        <input type="password" class="input" name="managerPassword" style="color:#000000;">
        <button type="submit" name="submit" onkeydown="validation()">done</button>
      </form>

    </div>
  </div>
</body>

</html>