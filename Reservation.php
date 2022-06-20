<?php

use LDAP\Result;

include "connection.php";
session_start();





if (isset($_POST["submit"])){
    $stime =$_POST["stime"];
      $etime = $_POST["etime"];
      $v_id = $_POST["v_id"];     
      $adress1 = $_POST["adress1"];
      $adress2 = $_POST["adress2"];
      $cli_id = $_POST["cli_id"];
    $insert="INSERT INTO `reservation`(`Start_time`, `end_time`, `vehicle_id`, `id_agence`, `id_agence2`, `Cli_id`) VALUES ('$stime','$etime',$v_id,'$adress1','$adress2', $cli_id)";
    $conn->query($insert);
header("location:Bookings.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "nav.php";

    ?>
    <div class="reservation">
        <form action="" method="post">
    
        <div class="form-row">
        
                <div class="form-group col-md-6">
              
                    <?php  

                   
                    $select ="SELECT * FROM `vehicle`WHERE ID_Vehicle =$_GET[idv]";
                    $result=mysqli_query($conn,$select);
                  
                    foreach ($result as $row) {
                        ?>
                        <img src="images/<?php echo $row['img'] ?>"style=" height: 455px;width: 460px;background-size: cover;" >
                        <?php
                    }
                
                    ?>
                 
                </div>
       
                <div class="form-group col-md-6"style="margin-top:45px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputtimestart">start Time</label>
                    <input type="time" class="form-control" id="inputEmail4"  name="stime">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTimeend">End Time</label>
                    <input type="time" class="form-control" id="inputPassword4" name="etime">
                </div>
            </div>
           
            <div class="form-group">
                <label for="inputAddress2">vehicle_id</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $_GET["idv"]; ?>" name="v_id">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Address 1</label>
                    <select id="inputState" class="form-control" name="adress1">
        <option selected>Choose Address 1</option>
        <option>A001</option>
        <option>A002</option>
        <option>A003</option>
        <option>A004</option>
      </select>
                </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Address 2</label>
                        <select id="inputState" class="form-control" name="adress2">
                        <option selected>Choose Address 2</option>
        <option>A001</option>
        <option>A002</option>
        <option>A003</option>
        <option>A004</option>
      </select>
                    </div>
               
            </div>
                <div class="form-group">
                    
                        <label for="inputCity">Client ID</label>
                        <input type="text" class="form-control" id="inputCity" name="cli_id" value="<?php echo $_SESSION["test"];?>">
                    </div>
               
                   
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
        
           
                
      
        </form>
    </div>
</body>

</html>