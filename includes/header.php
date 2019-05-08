<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BTC Flex Hub</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <header>
            <!-- Top Navigation Bar -->
            <div class="top-nav">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="https://blackhawk.edu">BTC Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://mybtc.blackhawk.edu">MyBTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blackhawk.blackboard.com">Blackboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://outlook.office.com/blackhawk.edu">Email</a>
                    </li>
                    <li>
                        <button type="button" class="btn navbar-btn" style="margin-right: 0.4em;">Student Login ></button>
                    </li>
                    <li>
                        <button type="button" class="btn navbar-btn">Staff Login ></button>
                    </li>
                </ul>
            </div>

            <!-- Banner -->
            <div id="banner">
                <div id="banner-text">
                    <h1>Blackhawk Technical College</h1>
                    <h2>Flex Hub</h2>
                </div>
                <div id="banner-search">
                    <form action="/#.php"><!--TO DO: Replace with actual php link once created -->
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Main Navigation -->
        <nav class="navbar navbar-expand-sm sticky-top">
            <a class="navbar-brand" href="#">
                <img src="images/btc-logo.png" alt="BTC Logo" width="45%";>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <span class="navbar-text">|</span>
                <li class="nav-item">
                    <a class="nav-link" href="programs.php">FLEX Programs & Classes</a>
                </li>
                <span class="navbar-text">|</span>
                <li class="nav-item">
                    <a class="nav-link" href="enrollment.php">Enrollment</a>
                </li>
                <span class="navbar-text">|</span>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About FLEX</a>
                </li>
            </ul>
        </nav>