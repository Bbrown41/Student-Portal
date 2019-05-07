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
                        <a class="nav-link" href="Programs.html">FLEX Programs & Classes</a>
                    </li>
                    <span class="navbar-text">|</span>
                    <li class="nav-item">
                        <a class="nav-link" href="Enrollment.html">Enrollment</a>
                    </li>
                    <span class="navbar-text">|</span>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About FLEX</a>
                    </li>
                </ul>   
            </nav>

        <!-- Main Content -->
        <main>
            <h2><b>Announcements & Upcoming Events</b></h2>

            <?php

                session_start();

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hub";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "
                SELECT * 
                FROM announcements
                ORDER BY date_created DESC";
                $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<div class='cards'>";
                        while($row = $result->fetch_assoc()) {  // Need to change this to only show 10-20 most recent announcements.
                            
                            $title=$row["title"];
                            $content=$row["content"];
                            $date_created=date("M d, Y",strtotime($row["date_created"]));
                            $start_date=$row["start_date"];
                            $end_date=$row["end_date"];

                            if($end_date>date("Y-m-d H:i:s")){
                                echo "
                                    <div class='card'>
                                        <div class='container'>
                                        <h3><b>$title</b></h3> 
                                        <p><h4>$content</h4></p> 
                                        <h5>Posted: $date_created</h5>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                        echo "</div>";
                    }
                $conn->close();

            ?>


        </main>


        <!-- Footer -->
        <footer>
            <div class="row">
                <!-- Name and Address -->
                <div class="col" id="footer-left">
                    <h1>Blackhawk Technical College</h1>
                    <h2>6004 S County Road G, Janesville, WI 53546</h2>
                </div>

                <!-- Social Media Links & Contact Info -->
                <div class="col" id="footer-middle">
                    <span class="socialmedia">
                        <a href="https://www.facebook.com/blackhawktech/">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="https://twitter.com/blackhawk_tech">
                            <i class="fa fa-twitter-square"></i>
                        </a>
                        <a href="https://www.instagram.com/blackhawktech/?hl=en">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/school/blackhawk-technical-college/">
                            <i class="fa fa-linkedin-square"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCA9LW5SgcsuW9p0nApelaZw">
                            <i class="fa fa-youtube-square"></i>
                        </a>
                    </span>
                    <p>
                        <span class="contact"><a href="tel:6087586900">(608) 758-6900</a></span>
                        <span class="contact"><a href="mailto:info@blackhawk.edu">info@blackhawk.edu</a></span>
                    </p>
                </div>

                <!-- Search -->
                <div class="col" id="footer-right">
                    <div id="footer-search">
                        <form action="/#.php"><!--TO DO: Replace with actual php link once created -->
                            <input type="text" placeholder="Search" name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>