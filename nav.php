
<?php

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
  <input id="search-box" type="text" class="search-box" name="q" />
  <label for="search-box"><span class="glyphicon glyphicon-search search-icon" ></span></label>
  <input type="submit" id="search-submit" />
  <img  src="./images/user.jpg" style="
    width: 40px;
    height: 40px;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    border: 2px solid var(--theme-color);
    margin-left: -62px;
    margin-right: 37px; "
    >
      </div>
<script>document.addEventListener("touchstart", function(){}, true);</script>

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
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Client
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="Reservation.php">
                        <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Reservations
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
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
