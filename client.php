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
<?php include'nav.php' ;?>
<body>
 <div class="container"> 
 <div >
  <span class="nav-text" >
  
  <a href="addClient.php" class="add"><i class="fa fa-user-plus fa-2x" style="width:0;height:0;"></i>Add New Client </a>
                        </span>
  </div>
<table style="overflow-y:scroll" >
  
<thead >
   
    <tr>
        <th >ID</th>
        <th >First Name</th>
        <th >Last Name</th>
        <th >Phone number</th>
        <th >adresse</th>
        <th >password</th>
        <th >email</th>
        <th >cin</th>
        <th >Delete</th>
        <th > Edit </th>
    </tr>
</thead>
 
    
      <tbody>
          <tr>
                <?php
                include "connection.php";
                $sql = "SELECT * FROM `client`";
                $id = $_REQUEST["ID_Client"];
                $result = $conn->query($sql);
                $delete = "DELETE FROM `client` WHERE ID_Client  ='$id'";
                $conn->query($delete);

                foreach ($result as $row) {
                ?>
                    <td> <i class='fa fa-user 2x btn'   style="font-size:20px ; color:#2f3449 ;" ></i>  <?php echo $row["ID_Client"] ?></td>
                  
                    <td><?php echo $row["Fname"] ?></td>
                    <td><?php echo $row["Lname"] ?></td>
                    <td><?php echo $row["Phone"] ?></td>
                    <td><?php echo $row["Adresse"] ?></td>
                    <td><?php echo $row["Password"] ?></td>
                    <td><?php echo $row["Email"] ?></td>
                    <td><?php echo $row["CIN"] ?></td>
                    <td>
                    <form action="select.php" method="post">
                            <input type="hidden" name="name" value="">

                            <a href="client.php?id=<?php echo $row["ID_Client"]; ?>" onClick="return confirm('Are you sure you want to delete?')"> <i class='bx bx-trash icon 2x btn' style="font-size:25px ; color:#2f3449; background-color: #E3E3E3 " ></i></a>
                            <?php
                            ?>
                        </form>
                    </td>
                    <td>
                        <a href="update.php? id=<?php echo $row["ID_Client"]; ?>"> <i class='fa fa-edit 2x btn' style="font-size:25px ; color:#2f3449;background-color: #E3E3E3;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
            text-decoration: none;" ></i></a>
                    </td>
            </tr>
        <?php
                }
                $conn->close();
                ?>
               
            </form>
           

   
    </tbody>
    </table>
 </div>
</body>
</html>