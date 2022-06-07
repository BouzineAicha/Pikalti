<?php include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>
<?php include "nav.php"; ?>
<body>
  <section>
  <div class="container">
    <h1> welcome <?php echo $_SESSION['email'];?></h1>
  </div>
  </section>
</body>

</html>