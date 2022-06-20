<?php include "connection.php";
$sqlbooking = "SELECT  COUNT(*) AS 'L1' FROM reservation";
$resultbooking = mysqli_query($conn, $sqlbooking);
$resultCheck1 = mysqli_fetch_assoc($resultbooking);
$sqladmin = "SELECT  COUNT(*) AS 'L2' FROM manger";
$resultadmin = mysqli_query($conn, $sqladmin);
$resultCheck2 = mysqli_fetch_assoc($resultadmin);
$sqlbyc = "SELECT  COUNT(*) AS 'L3' FROM vehicle inner join category on vehicle.cat_id=category.ID_Category WHERE`category`.`type`='Bicycle'";
$resultbyc = mysqli_query($conn, $sqlbyc);
$resultCheck3 = mysqli_fetch_assoc($resultbyc);
$sqlcli = "SELECT  COUNT(*) AS 'L4' FROM client";
$resultcli = mysqli_query($conn, $sqlcli);
$resultCheck4 = mysqli_fetch_assoc($resultcli);
$sqlsco = "SELECT  COUNT(*) AS 'L5' FROM vehicle inner join category on vehicle.cat_id=category.ID_Category WHERE`category`.`type`='Scooter'";
$resultsco = mysqli_query($conn, $sqlsco);
$resultCheck5 = mysqli_fetch_assoc($resultsco);
$sqlag = "SELECT  COUNT(*) AS 'L6' FROM agence";
$resultag = mysqli_query($conn, $sqlag);
$resultCheck6 = mysqli_fetch_assoc($resultag);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>
<?php include "nav.php"; ?>

<body>

  <div class="container">
    <h2> welcome <?php echo $_SESSION["fnam"]; ?></h2>
    <div class="info">
      <div class="box">
        <div class="vlo"></div>
        <h2 style="background-color:#A6B9D6;">booking </h2>
        <p>total Booking</p>
        <h2><?php echo $resultCheck1['L1']; ?></h2>
        <a href="Bookings.php">View More -></a>
      </div>


      <div class="box">
        <div class="vlo3"></div>
        <h2 style="background-color:#ff6969;">Admins</h2>
        <p>total Admins</p>
        <h2><?php echo $resultCheck2['L2']; ?></h2>
        <a href="" style="color:#ff6969;">View More -></a>
      </div>
      <div class="box">
        <div class="vlo4"></div>
        <h2 style="background-color:#BEA6D6;">Bicycles</h2>
        <p>total Bicycles</p>
        <h2><?php echo $resultCheck3['L3']; ?></h2>
        <a href="vehicle.php" style="color:#BEA6D6;">View More -></a>
      </div>
    </div>
    <div class="info2">
      <div class="box">
        <div class="vlo2"></div>
        <h2 style="background-color:#7da259;">Customers</h2>
        <p>total Customers</p>
        <h2><?php echo $resultCheck4['L4']; ?></h2>
        <a href="client.php" style="color:#7da259;">View More -></a>
      </div>
      <div class="box">
        <div class="vlo6"></div>
        <h2 style="background-color:#ffc155;">Scooters</h2>
        <p>total Scooters</p>
        <h2><?php echo $resultCheck5['L5']; ?></h2>
        <a href="vehicle.php" style="color:#ffc155;">View More -></a>
      </div>
      <div class="box">
        <div class="vlo5"></div>
        <h2 style="background-color:#f0f460;">agencies</h2>
        <p>total agencies</p>
        <h2><?php echo $resultCheck6['L6']; ?></h2>
        <a href="Agencies.php" style="color:#f0f460;">View More -></a>
      </div>
    </div>
  </div>



</body>

</html>