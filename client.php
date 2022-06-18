<?php
session_start();
include "connection.php";
if (isset($_POST["done"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $phone = $_POST["phone"];
  $adress = $_POST["Adress"];
  $email = $_POST["Email"];
  $cin = $_POST["cin"];
  $sql ="INSERT INTO `client`(`Fname`, `Lname`, `Phone`, `Adresse`, `Email`, `CIN`) VALUES (' $fname','$lname','$phone','$adress','$email','$cin')";
  $conn->query($sql);
}
 
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
<?php include 'nav.php'; ?>
 
<body>
  <div class="client">
   
      <!-- <span class="nav-text" >
 
  <a href="addClient.php" class="add"><i class="fa fa-user-plus fa-2x" style="width:0;height:0;"></i>Add New Client </a>
  </span> -->
  <form action="client.php" method="post" >
      <div class="popup-container">
        <label class="button" for="login-popup">ADD Client</label>
        <input type="checkbox" id="login-popup">
       
        <div class="popup">
          <label for="login-popup"></label>
          <div class="inner">
            <div class="title">
              <h6>ADD Client</h6>
              <label for="login-popup">
                <i class="fa fa-times"></i>
              </label>
            </div>
            <div class="content">
              <ul>
                <li>
                  <input type="text" class="input" placeholder="First Name"name="fname">
 
                </li>
                <li>
                  <input type="text" class="input" placeholder="Last Name"name="lname">
 
                </li>
                <li>
                  <input type="text" class="input" placeholder="Phone Number" name="phone">
 
                </li>
                <li>
                  <input type="text" class="input" placeholder="Adress" name="Adress">
 
                </li>
                <li>
                  <input type="email" class="input" placeholder="Email" name="Email">
 
                </li>
                <li>
                  <input type="text" class="input" placeholder="CIN" name="cin">
 
                </li>
               
               
              </ul>
              <button type="submit"name="done">Submit</button>
            </div>
          </div>
        </div>
        </form>
          <table style="overflow-y:scroll">
 
            <thead>
 
              <tr>
                <th style="width: 80px;">ID</th>
                <th style="width: 150px;">First Name</th>
                <th style="width: 150px;">Last Name</th>
                <th style="width: 150px;">Phone number</th>
                <th style="width: 180px;">adresse</th>
                <!-- <th>password</th> -->
                <th style="width: 180px;">email</th>
                <th style="width: 100px;">cin</th>
                <th style="width: 140px;">Delete</th>
                <th> Edit </th>
              </tr>
            </thead>
 
 
            <tbody>
              <tr>
                <?php
                     if(isset($_GET['ID_delete'])){
                      $id = $_GET["ID_delete"];        
                      $delete = "DELETE FROM `client`WHERE `ID_Client`='$id'";                
                      $resultdelet = mysqli_query($conn,$delete);
                   if ($resultdelet) {
                    echo "
                     $id deleted";
                   }  
                }
                     $sql = "SELECT* FROM `client`";                
                     $result = mysqli_query($conn,$sql);
               
                while ( $row = mysqli_fetch_assoc($result)){
 
                  ?>
                  <td style="width: 80px;"> <i class='fa fa-user 2x btn' style="font-size:15px ; color:#2f3449 ;"><?php echo $row["ID_Client"] ?></i> </td>
                  <td style="width: 150px;"><?php echo $row["Fname"] ?></td>
                  <td style="width: 150px;"><?php echo $row["Lname"] ?></td>
                  <td style="width: 150px;"><?php echo $row["Phone"] ?></td>
                  <td style="width: 180px;"><?php echo $row["Adresse"] ?></td>
                  <td style="width: 180px;"><?php echo $row["Email"] ?></td>
                  <td style="width: 100px;"><?php echo $row["CIN"] ?></td>
                  <td style="width: 140px;">
                    <form action="client.php" method="post">
                      <input type="hidden" name="name" value="">
                      <a   href="client.php?ID_delete=<?php echo $row["ID_Client"]; ?>"onClick="return confirm('Are you sure you want to delete?')"> <i class='bx bx-trash icon 2x btn' style="font-size:25px ; color:#2f3449; background-color: #E3E3E3 "></i></a>
                     
                 
                    </form>
                  </td>
             
                  <td style="width: 140px;">
                   
                    <a href="update.php? id=<?php echo $row["ID_Client"]; ?>"> <i class='fa fa-edit 2x btn' style="font-size:25px ; color:#2f3449;background-color: #E3E3E3; display: table;border-collapse: collapse;border-spacing: 0;text-decoration: none;"></i></a>
                  </td>
              </tr>
                  <?php
                }
               
                   
         
   
               
                ?>
                 
                         
                   
           
            <?php
               
                $conn->close();
             ?>
 
            </form>
 
 
 
            </tbody>
          </table>
       <br>
       <br>
        </div>
      </div>
</body>
 
</html>
