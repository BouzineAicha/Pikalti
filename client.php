<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8ad36ff707.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84697556e3.js" crossorigin="anonymous"></script>
    <style>
    
    html,
body {
  height: 100%;
}
body {

  margin: 0;
  background:  conic-gradient(from 180deg at 50% 50%, rgba(196, 196, 196, 0) -126.87deg, rgba(196, 196, 196, 0.51) 124.43deg, #E3E3E3 197.49deg, rgba(196, 196, 196, 0) 233.13deg, rgba(196, 196, 196, 0.51) 484.43deg), conic-gradient(from 180deg at 50% 50%, rgba(196, 196, 196, 0.51) -235.57deg, #E3E3E3 41.41deg, rgba(196, 196, 196, 0.51) 124.43deg, #E3E3E3 401.41deg);;
  font-family: sans-serif;

  font-weight: 100;
}
.container {
  
  margin-top: 65%;
  margin-left: 55%;
  transform: translate(-50%, -50%);
}
table {
  background-color:#B7BDCC;
  width:1280px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #212121;
}
th {
  text-align: left;
}
thead{
  position: sticky;
  top: 0px;
  z-index: 2;
}
thead th {

  background-color:#2f3449;
  color: #999999;

}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  /* position: absolute; */
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}
</style>
    <title>Document</title>

</head>
<body>
    <?php include "nav.php"?>
<div class="container">
  <div style="display:flex; justify-content: space-between; margin-top:50px">
  <p></p>
  <div style=" margin-top:50px;">
  <span class="nav-text" >
  
  <a href="addClient.php" style=" position: relative;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
            color: #999;
            font-family: arial;
            font-size: 14px;
            text-decoration: none;"><i class="fa fa-user-plus fa-2x" style="width:0;height:0;"></i>Add New Client </a>
                        </span>
  </div>
  </div>
    <table >
<thead>
   
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
           

    </div>
    </tbody>
    </table>
              </div>
</section>

</body>
</html>