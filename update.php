<?php
include "connection.php";
if(isset($_REQUEST["ID_Client"])){
    $id = $_REQUEST["id"];
    $data = "SELECT Fname,Lname,Phone,Adresse ,Email,CINFROM `client`WHERE id='$id'";
    $get_data = $conn->query($data);
    $rw = mysqli_fetch_assoc( $get_data);
}  
    if (isset($_POST["submi"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone"];
        $adress = $_POST["Adress"];
        $email = $_POST["Email"];
        $cin = $_POST["cin"];
        $sql = "UPDATE `client` SET `Fname`=' $fname ',`Lname`='$lname',`Phone`='$phone ',`Adresse`='$adress',`Email`=' $email',`CIN`=' $cin' WHERE `ID_Client` = '".$_REQUEST["ID_Client"]."';";
        $conn->query($sql);
        echo "<script> alert'tetet tete '</script>";
        header("location:cilent.php");
        
    }


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
                <form class="update"  method="POST">
                    <div class="content">
                        <ul>
                            <li>
                                <input type="text" class="input" placeholder="first Name" name="fname" value="<?php echo $rw["Fname"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Last Name" name="lname" value="<?php echo $rw["Lname"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Phone Number" name="phone" value="<?php echo $rw["Phone"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="Adress" name="adress" value="<?php echo $rw["Adresse"]; ?>">
                            </li>
                            <li>
                                <input type="email" class="input" placeholder="Email" name="email" value="<?php echo $rw["Email"]; ?>">
                            </li>
                            <li>
                                <input type="text" class="input" placeholder="CIN" name="cin" value="<?php echo $rw["CIN"]; ?>">
                            </li>

                        </ul>
                        <button  href="client.php" type="submit" name="submit">UPDATE</button>

                </form>
                
                    </div>
            </div>
        </div>
    </div>
</body>

</html>