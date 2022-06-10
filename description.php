<?php session_start();
 include "connection.php";
 if(isset($_REQUEST['ID_Vehicle'])){
$id_V=$_REQUEST['ID_Vehicle'];
$sqlSelect = "SELECT * FROM `Vehicle`WHERE ID_Vehicle ='$id_V'";
$result = $conn->query($sqlSelect);
$row=$result->fetch_assoc();
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



    <?php
    // $vehicl = mysqli_fetch_assoc($row);
    ?>
      <div class="countainer">
        <p class="hh"><span>
                <?php if (isset($_SESSION['inmycart'])) {
                    echo "<a href='description.php'>" . count($_SESSION['inmycart']) . "</a>";
                } else {
                    echo 0;
                }
                $id_V=$_REQUEST['ID_Vehicle'];
                $sql = "SELECT * FROM `Vehicle`WHERE ID_Vehicle ='$id_V'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                
?>
     </span>Item Cart
        </p>
      </div>
    <form action="description.php?id=<?php echo $row['ID_Vehicle']?>" method="POST" enctype="multipart/form-data">
        

        <div class="decription">
            <div class="foto">
            <img class="img_profil" src="<?php echo "images/".$row["img"]?>" alt="">
            </div>
            <div class="des">
                <h1><?php echo $row["Name"] ?></h1>
                <p><?php echo $row["description"] ?></p>
                <h3>Price : <?php echo $row["daily_hour_Rate"] ?>£</h3>

            </div>
        </div>
    </form>
    <?php }} ?>
</body>

</html>