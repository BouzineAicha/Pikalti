<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="reservation">

        <div class="table-app" id="product-table-app">
            <!-- /.table-handler -->
            <div class="table-wrapper">
                <h1>Reservations</h1>
                <table class="table" id="table">
                    <thead >
                        <tr class="table-head">
                            <th class="table-cell align-right" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">ID</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;"> Client ID</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;"> Client Name</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">vehicle ID</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;"> vehicle </th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">Start Time</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">Start Place</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">End Time</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">End Place</th>
                            <th class="table-cell align-right" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">Price</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">Edit</th>
                            <th class="table-cell align-left" style="text-align:center;vertical-align:-webkit-baseline-middle;width:160px;background-color:#2f3449;color:white;">delet</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php
 if(isset($_GET['ID_delete'])){
    $idt = $_GET["ID_delete"];        
    $delete =" DELETE FROM `reservation` WHERE  `ID_reservation`='$idt'";                
    $resultdelet = mysqli_query($conn,$delete);
 if ($resultdelet) {
  echo "
   $idt deleted";
 }  
}



$search = "";
                if(isset($_POST['search-btn'])){
                    $search = $_POST['search'];
                } 
                $sql = "SELECT *
                FROM `reservation` inner join vehicle on reservation.vehicle_id=vehicle.ID_Vehicle INNER join client on reservation.Cli_id=client.ID_Client WHERE `ID_reservation` LIKE '%$search%' OR `Cli_id` LIKE '%$search%' OR `vehicle_id` LIKE '%$search%' OR `Start_time` LIKE '%$search%' OR `id_agence` LIKE '%$search%' OR `end_time` LIKE '%$search%' OR `id_agence2` LIKE '%$search%'OR `Fname` LIKE '%$search%'";
                $result = mysqli_query($conn,$sql);
                 $test =mysqli_num_rows($result);
                

                   if( $test>0){
                            foreach ($result as $row) {
                            
                                
                                echo   '
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"> ' .  $row["ID_reservation"] . '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"> ' . $row["Cli_id"] .'  </td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;">' . $row["Fname"] . ' </td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;">' . $row["vehicle_id"] . ' </td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"><img src="images/' . $row["img"] . '"style="width:63px;"> </td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"> ' . $row["Start_time"] . '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"> ' . $row["id_agence"] . '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;">' . $row["end_time"] . '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;"> ' . $row["id_agence2"] . '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:160px;text-align:center;">' .$row["daily_hour_Rate"]. '</td>
                  <td style="vertical-align:-webkit-baseline-middle;width:124px;text-align:center;"> <a href="update.php? id=' . $row["ID_reservation"] . ' "<i class="fa fa-edit 2x btn " style="vertical-align:-webkit-baseline-middle;width:124px;text-align:center;font-size:20px;"></i></a>  </td>
                  <td style="vertical-align:-webkit-baseline-middle;width:127px;text-align:center;"> <form action="Bookings.php" method="post"> <a href="Bookings.php?ID_delete='.  $row["ID_reservation"].'"onClick="return confirm(`Are you sure you want to delete?`)"> <i class="bx bx-trash icon 2x btn" style="font-size:20px;"></i></a></form> </td>'
                
                            ?>
                        </tr>
                    <?php
                            }
                        }
                            $conn->close();
                    ?>

                    </form>

                    </tbody>
                </table>


                <div class="no-results hidden" id="no-results">
                    <p class="no-results-message">
                        No results found.
                    </p>
                </div>
               
            </div>
          
        </div>
        
    </div>
   
    <script>

    </script>

</body>

</html>