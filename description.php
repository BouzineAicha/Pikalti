<?php
include "connection.php";
$id = $_GET["id"];
$Select = "SELECT * FROM `vehicle` inner join category on vehicle.cat_id=category.ID_Category INNER join size on vehicle.size_id=size.size_ID inner join type on vehicle.type_id=type.ID_type WHERE ID_Vehicle ='$id'";
$result = mysqli_query($conn, $Select);
if (isset($_POST['id'])) {
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "yanlslek var";
    }
}
foreach ($result as $row) {
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

        <div class="container">

            <form action="description.php?id=<?php echo $row['ID_Vehicle'] ?>" method="POST" enctype="multipart/form-data" class="form">


                <div class="decription">
                    <div class="foto">
                        <img class="img_profil" style="width:500px;height:500px
;" src="<?php echo "images/" . $row["img"] ?>" alt="">
                    </div>
                    <div class="des">
                        <h2><?php echo $row["Name"] ?></h2>
                        <p> <span>Category:</span> <?php echo $row["name"] ?></p>
                        <p> <span>Size :</span> <?php echo $row["size_name"] ?></p>
                        <p> <span>Type :</span> <?php echo $row["type"] ?></p>
                        <p><span>Price Per 1h :</span> <?php echo $row["daily_hour_Rate"] ?>dh</p>
                       <p> <?php  if ($row["availablity"]==1){ echo "<p d
                    style='color:green'>available</p>";}else{echo "<p style='color:red'>not available</p>";} ?></p>

                    </div>
                </div>
                <span>Description : </span>
                <p><?php echo $row["description"] ?></p>
            </form>
        </div>
    <?php
}
    ?>
    </body>

    </html>