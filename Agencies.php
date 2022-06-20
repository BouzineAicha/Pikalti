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
    <?php include "nav.php";
    ?>
    <div class="agence">
        <h1 style="text-align:center;font-family:'Montserrat'; font-style: normal;font-weight: 800;">Locations</h1>
<div class="main">
        <?php 
       
        $search = "";
        if(isset($_POST['search-btn'])){
            $search = $_POST['search'];
        } 
        $sql = "SELECT * FROM `agence` WHERE `address` LIKE '%$search%' OR `ID_agence` LIKE '%$search%' ";
        $result = mysqli_query($conn,$sql);
         $test =mysqli_num_rows($result);
        

           if( $test>0){
        foreach ($result as $row) {
        ?>
            <div class="boxx">
                <div class="card">
                    <div class="imgBx">
                        <iframe src="<?php echo $row["link"]; ?>" width="200px" height="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="details">
                        <h2><?php echo $row["address"]; ?><br><span><?php echo $row["ID_agence"]; ?></span></h2>
                    </div>
                </div>
            </div>

            <?php }} ?>

            </div>
    </div>
</body>

</html>