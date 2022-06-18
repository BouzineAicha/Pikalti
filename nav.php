 
<?php
// session_start();
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
      <form  method="POST">
        <div class="search-box-s">
            <input type="text" placeholder="search...."  name="search">
            <button name="search-btn" class="icon-s">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </from>
<!-- <script>document.addEventListener("touchstart", function(){}, true);</script> -->
 
        </div>
        <div class="area"></div>
        <div class="main-menu">
            <ul>
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
                    <a href="Reservation.php">
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
                    <a href="Locations.php">
                        <i class="fa fa-store fa-2x"></i>
                        <span class="nav-text">
                        Agencies
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                            Quotes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
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
 
                </button>
                </ul>
 
            </form>
        </nav>
 
 
 
</html>

