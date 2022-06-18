<?php 
include "connection.php";


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
$id=$_GET["id"];
    ?>
  <div class="reservation">
<form >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">start Time</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="stime">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Reservation Place</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="plac1">
  </div>
  <div class="form-group">
    <label for="inputAddress2">vehicle_id</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?php echo $id ;?>" name="v_id">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Address 2</label>
      <input type="text" class="form-control" id="inputCity" name="place2">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Catégory</label>
      <select id="inputState" class="form-control">
        <option selected>Choose Catégory</option>
        <option></option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</body>

</html>