<?php

include "connection.php";
$id =$_GET['id'];
$select = mysqli_query($conn,"SELECT * FROM `client`WHERE ID_Client=$id");
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    $email = $_POST["email"];
    $cin = $_POST["cin"];
    $update ="UPDATE `client` SET `ID_Client`='$id ',`Fname`='$fname',`Lname`='$lname',`Phone`='$phone',`Adresse`='$adress',`Email`='$email',`CIN`='$cin ' WHERE ID_Client=$id";
    $result = mysqli_query($conn,$update);
    if ($result) {
        header("location:client.php");
    }
    else{
        echo "yanlslek var";
    }
}
foreach ($select  as $row) {
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
    <script src="validation.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="container">
        <h1>UPDATE</h1>
        <div class="cont">
            <div class="part1">

            </div>
            <div class="part2">
                <form class="update" method="post" id="form">
                    <div class="content">
                        <ul>
                            <li>
                                <input type="text" class="input" id="title" placeholder="first Name" name="fname" value="<?php echo $row["Fname"]; ?>">
                                <h6 id="error1" ></h6>
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Last Name" name="lname" value="<?php echo $row["Lname"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Phone Number" name="phone" value="<?php echo $row["Phone"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Adress" name="adress" value="<?php echo $row["Adresse"]; ?>">
                            </li>
                            <li>
                                <input type="email" class="input" placeholder="Email" name="email" value="<?php echo $row["Email"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="CIN" name="cin" value="<?php echo $row["CIN"]; ?>">
                            </li>

                        </ul>
                        <button type="submit" name="submit"id="Done" onkeydown="validation()">UPDATE</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
  <?php   }?>
</body>

</html>