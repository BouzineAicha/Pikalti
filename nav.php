
<?php
include "connection.php";
session_start();
if (isset($_POST["logout"])) {
    session_destroy();
      header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">


    <nav>
        <div class="test">
            <img src="images/bike.png" style="margin-top:7px;
            height: 36px;">
      <div>    
          <div class="khat"></div>
  <!-- <input id="search-box" type="text" class="search-box" name="q" />
  <label for="search-box"><span class="glyphicon glyphicon-search search-icon" ></span></label>
  <input type="submit" id="search-submit" /> -->
  <form  method="POST">
        <div class="search-box-s">
            <input type="text" placeholder="search...."  name="search">
            <button name="search-btn" class="icon-s">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </from>

  <img  src="./images/user.jpg" style="
    width: 40px;
    height: 40px;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    margin-top:4px;
    border: 2px solid var(--theme-color);"
    >
      </div>
<script>document.addEventListener("touchstart", function(){}, true);</script>

        </div>
        <div class="area"></div>
        <div class="main-menu">
            <ul>
                <li>
                    <a href="home.php">
                        <i class="fa fa-user fa-2x"></i>
                        <span class="nav-text">
                        <?php echo $_SESSION["fnam"]; ?>
                        </span>
                    </a>
                <li>
                    <a href="home.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="Client.php">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Client
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="bookings.php">
                        <i class="fa fa-calendar-check fa-2x"></i>
                        <span class="nav-text">
                            Reservations
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                <a href="vehicl.php">
                    <i class="fa fa-bicycle fa-2x"></i>
                    <span class="nav-text">
                    Vehicles
                    </span>
                </a>


                </li>
                <li>
                    <a href="Agencies.php">
                        <i class="fa fa-store fa-2x"></i>
                        <span class="nav-text">
                        Agencies
                        </span>
                    </a>
                </li>
            </ul>
            <form method="POST" action="nav.php">
                <button name="logout" class="logout">
                    <ul>
                        <li>
                            <i class="fa fa-power-off fa-2x"></i>
                                <span class="nav-text">
                                    Logout
                                </span>
                        </li>

                    </ul>
                </button>

            </form>
        </nav>



</html>