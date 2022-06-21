<?php


include "connection.php";
$id =$_GET['id'];
$select = mysqli_query($conn,"SELECT * FROM `reservation`inner join vehicle on reservation.vehicle_id=vehicle.ID_Vehicle WHERE ID_reservation=$id");
if (isset($_POST["submit"])){
    $stime =$_POST["stime"];
      $etime = $_POST["etime"];
      $v_id = $_POST["v_id"];     
      $adress1 = $_POST["adress1"];
      $adress2 = $_POST["adress2"];
      $cli_id = $_POST["cli_id"];
    $update="UPDATE `reservation` SET `Start_time`='$stime',`end_time`='$etime',`vehicle_id`='$v_id',`id_agence`='$adress1',`id_agence2`='$adress2',`Cli_id`='$cli_id' WHERE ID_reservation=$id ";
    $result = mysqli_query($conn,$update);
    if ($result) {
        header("location:addReservation.php");
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
    <div class="client">
        <form action="" method="post">
    
        <div class="form-row">
        
                <div class="form-group col-md-6">
              
              <img src="images/<?php  echo $row["img"]?>"style=" height: 455px;width: 460px;background-size: cover;">
                 
                </div>
       
                <div class="form-group col-md-6"style="margin-top:45px;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputtimestart">start Time</label>
                    <input type="time" class="form-control" id="inputEmail" name="stime" value="<?php echo $row["Start_time"]; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputTimeend">End Time</label>
                    <input type="time" class="form-control" id="inputPassword4" name="etime"value="<?php echo $row["end_time"]; ?>">
                </div>
            </div>
           
            <div class="form-group">
                <label for="inputAddress2">vehicle_id</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $row["vehicle_id"]; ?>" name="v_id">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Address 1</label>
                    <select id="inputState" class="form-control" name="adress1" >
        <option selected><?php echo $row["id_agence"] ;?></option>
        <option>A001</option>
        <option>A002</option>
        <option>A003</option>
        <option>A004</option>
      </select>
                </div>
                    <div class="form-group col-md-6">
                        <label for="inputCity">Address 2</label>
                        <select id="inputState" class="form-control" name="adress2">
                        <option selected ><?php echo $row["id_agence2"] ;?></option>
        <option>A001</option>
        <option>A002</option>
        <option>A003</option>
        <option>A004</option>
      </select>
                    </div>
               
            </div>
                <div class="form-group">
                    
                        <label for="inputCity">Client ID</label>
                        <input type="text" class="form-control" id="inputCity" name="cli_id" value="<?php echo  $row["Cli_id"] ;?>">
                    </div>
               
                   
                <button type="submit" class="btn btn-primary"  style="  font-family: 'Montserrat';
  background: #272643;
  border-radius: 7px;
  font-size: 20px;
  font-weight: 500;
  text-align: center;
  height:38px;
  color: #fff;"name="submit">Submit</button>
                </div>
        
           
                
      
        </form>
    </div>
    <?php }?>
</body>

</html>