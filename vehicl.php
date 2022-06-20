<?php 
include "connection.php";
session_start();
$_SESSION["test"]=$_GET['idc'];
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
<?php include"nav.php";?>
    <div class="vehicle">
      <h1 style="text-align:center;">Reservations</h1>
      <div class="table-app" id="product-table-app">
      <?php echo $_SESSION["test"];?>
        <!-- /.table-handler -->
        <div class="table-wrapper">
          <table class="table" id="table">
            <thead>
              <tr class="table-head">
                <th class="table-cell align-right"style="text-align:center;vertical-align: -webkit-baseline-middle;">ID</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;"> Image</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Name</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Description</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Price per1h </th>
                <th class="table-cell align-right"style="text-align:center;vertical-align: -webkit-baseline-middle;">Quantity</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Availablty</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Category</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Size</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">type</th>
                <th class="table-cell align-left"style="text-align:center;vertical-align: -webkit-baseline-middle;">Reserve</th>
                
              </tr>
            </thead>

            <tbody>
            <tr >
                <?php
                $search = "";
                if(isset($_POST['search-btn'])){
                    $search = $_POST['search'];
                } 
                $sql = "SELECT *FROM `vehicle` inner join category 
                on vehicle.cat_id=category.ID_Category
                 INNER join size on vehicle.size_id=size.size_ID 
                 inner join type on vehicle.type_id=type.ID_type
                  WHERE  vehicle.`ID_Vehicle` LIKE '%$search%' OR vehicle.`daily_hour_Rate` LIKE '%$search%' OR vehicle.`quantity_stock` LIKE '%$search%' OR vehicle.`availablity`
                 LIKE '%$search%' OR category.`type` LIKE '%$search%' OR size.`size_name` LIKE '%$search%'OR type.`name` LIKE '%$search%'";
                $result = mysqli_query($conn,$sql);
                 $test =mysqli_num_rows($result);
                

                   if( $test>0){ 
                foreach ($result as $row) {
                ?>
                  <td style="vertical-align: -webkit-baseline-middle;width:73px;text-align:center;"> <i class='fa fa-user 2x btn' style="font-size:15px ; color:#2f3449 ;"><?php echo $row["ID_Vehicle"] ?></i> </td>
               <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;" > <img src="images/<?php echo $row['img'] ?>"style="width:63px;" ></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 135px;text-align:center;"><?php echo $row["Name"] ?></td>
                  <td  style="vertical-align: -webkit-baseline-middle;width: 135px;text-align:center;"> <a href="description.php? id=<?php echo $row["ID_Vehicle"]; ?>">View Description</a></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 209px;text-align:center;"><?php echo $row["daily_hour_Rate"] ?>dh</td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 176px;text-align:center;"><?php echo $row["quantity_stock"] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width: 186px;text-align:center;"><?php  if ($row["availablity"]==1){ echo "<p d
                    style='color:green'>available</p>";}else{echo "<p style='color:red'>not available</p>";} ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;"><?php echo $row['type'] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;"><?php echo $row['size_name'] ?></td>
                  <td style="vertical-align: -webkit-baseline-middle;width:140px;text-align:center;"><?php echo $row['name'] ?></td>
                  <?php if ($row["availablity"]==1){ echo " 
                  <td style='vertical-align: -webkit-baseline-middle;width:140px;text-align:center;'><button class='btn1'><a href='Reservation.php?idv= $row[ID_Vehicle] '>Book Now</button></a></td>";
                  
                  }else{
                    echo " 
                    <td style='vertical-align: -webkit-baseline-middle;width:140px;text-align:center;'><button class='btn2'><a href=''></a>Book Now</button></td>";
                  }
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
          <!-- /#no-results -->
        </div>
        <!-- /.table-wrapper -->
      </div>
      <!-- /.table-app -->
    </div>
    <!-- /.container -->
  <script>

  </script>

</body>
</html>