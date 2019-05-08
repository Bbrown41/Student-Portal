<?php
    // Header
    include("./includes/header.php");
?>
        <!-- Main Content -->
        <main>
            <h2><b>Announcements & Upcoming Events</b></h2>
            <div class="row">

                <!-- Announcements -->
                <div class="col-sm-9">
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
                                // Need to add in name of instructor who posted announcement

                                if($end_date>date("Y-m-d H:i:s")){
                                    echo "
                                        <div class='card'>
                                            <div class='container'>
                                                <h3><b>$title</b></h3> 
                                                <p>$content</p> 
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
                </div>
                <!-- End of Announcement Section -->

                <!-- Calendar -->
                <div class="col-sm-3">
                    <div id="events">
                        <h1>Events</h1>

                        <!-- Everything below this line should be coded in php and pulled from
                            the database.  I have it coded like this temporarily just so we can
                            see what it will look like.

                            TO-DO: Database needs new calendar table with month in text format, day in number format, and
                            name of event as the fields.  Write query to pull the 3-5 events happening soonest from database
                            and display below -->
                        <div class="row calendar">
                            <div class="col calendar-date">
                                <div class="calendar-month">May</div>
                                <div class="calendar-day">10</div>
                            </div>
                            <div class="col calendar-details">
                                End of Semester
                            </div>
                        </div>
                        <hr>
                        <div class="row calendar">
                            <div class="col calendar-date">
                                <div class="calendar-month">May</div>
                                <div class="calendar-day">11</div>
                            </div>
                            <div class="col calendar-details">
                                Backyard Bash
                            </div>
                        </div>
                        <hr>
                        <div class="row calendar">
                            <div class="col calendar-date">
                                <div class="calendar-month">May</div>
                                <div class="calendar-day">18</div>
                            </div>
                            <div class="col calendar-details">
                                Graduation
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Calendar Section -->

            </div> <!-- End of Row -->
        </main>

<?php
    // Footer
    include("./includes/footer.php");
?>