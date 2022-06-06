<?php

if (isset($_POST["logout"])) {
    session_destroy();
      header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

        .fa-2x {
            font-size: 2em;
        }

        .fa {
            position: relative;
            display: table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
        }


        .main-menu:hover,
        nav.main-menu.expanded {
            width: 250px;
            overflow: visible;
        }

        .main-menu {
            background: #2f3449;

            /* position:absolute; */
            position: fixed;
            top: 50px;
            bottom: 0;
            height: 100%;
            left: 0;
            width: 60px;
            overflow: hidden;
            -webkit-transition: width .5s linear;
            transition: width .5s linear;
            -webkit-transform: translateZ(0) scale(1, 1);
            z-index: 1000;
        }

        .main-menu>ul {
            margin: 7px 0;
        }

        .main-menu li {
            position: relative;
            display: block;
            width: 250px;
        }

        .main-menu li>a {
            position: relative;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
            color: #999;
            font-family: arial;
            font-size: 14px;
            text-decoration: none;
            -webkit-transform: translateZ(0) scale(1, 1);
            -webkit-transition: all .1s linear;
            transition: all .1s linear;

        }

        .main-menu .nav-icon {
            position: relative;
            display: table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
        }

        .main-menu .nav-text {
            position: relative;
            display: table-cell;
            vertical-align: middle;
            transition: width .8s linear;
            width: 190px;
            font-family: 'Titillium Web', sans-serif;
        }

        /* .main-menu>button.logout { */
        /* position:absolute; */
        /* left:0;

top: 80%;

} */
        .logout {
            position: absolute;
            left: 0;
            width: 250px;
            top: 80%;
        }


        .no-touch .scrollable.hover {
            overflow-y: hidden;
        }

        .no-touch .scrollable.hover:hover {
            overflow-y: auto;
            overflow: visible;
        }

        a:hover,
        a:focus {
            text-decoration: none;
        }

        nav {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        nav ul,
        nav li {
            outline: 0;
            margin: 0;
            padding: 0;
        }

        .main-menu li:hover>a,
        nav.main-menu li.active>a,
        .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus,
        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:hover,
        .dropdown-menu>.active>a:focus,
        .no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
        .dashboard-page nav.dashboard-menu ul li.active a {
            color: #fff;
            /* position: absolute; */
            left: 0;
            background-color: #5fa2db;
        }

        .area {
            float: left;
            background: #e2e2e2;
            width: 100%;
            height: 100%;
        }

        @font-face {
            font-family: 'Titillium Web';
            font-style: normal;
            font-weight: 300;
            src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
        }

        .test {
            background-color: #2f3449;
            height: 50px;
            width: 100%;
            /* position: absolute; */
            top: 0;
            left: 0;
            position: fixed;
            filter: drop-shadow(17px 4px 4px rgba(0, 0, 0, 0.25));
        }
    </style>
</head>

<body>



    <nav>
        <div class="test">
            <img src="images/Pikalti_free-file (1).png" style="width: 60px;
            height: 36px;">
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
                            <a>
                                <span class="nav-text">
                                    Logout
                                </span>
                            </a>
                        </li>

                </button>
                </ul>

            </form>
        </nav>
       



</body>

</html>