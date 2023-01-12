<?php

include 'config.php';


$sql = "SELECT * FROM cars";

$result = mysqli_query($conn, $sql);

$cars = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Car Report</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="admin.css">
        
    <script src="https://kit.fontawesome.com/0a4991b62f.js"
    crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">

            <div class="side-bar-section">
                <h2>Admin</h2>
                <br><br>
                <img src="images\account-img.svg" alt="" class="account-img">
                <ul>
                    <li><i class="fa-solid fa-house"></i>&nbsp;Home</li>
                    <li><i class="fa-sharp fa-solid fa-box"></i>&nbsp;Dashboard</li>
                    <li><i class="fa-solid fa-truck"></i>&nbsp;Reports</li>
                    <li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=company_db"></a><i class="fa-solid fa-bookmark"></i>&nbsp;phpMyAdmin</li>
                    <li><i class="fa-solid fa-user"></i>&nbsp;Account Details</li>
                    <li><i class="fa-solid fa-gear"></i>&nbsp;Settings</li>
                </ul>
                <br><br><br>
                <a href="log_out.html"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Log Out</a>
                <br><br>
            </div>
            
            <div class="main-content">
                <br><br>
            <h1 style="padding-left: 10px;">Car Records</h1><br><br>
            
            <div class="table-display">
                

                <table align="center" border="1px solid" style="width: 800px; line-height: 40px; text-align: center;">
            
                        <th style="border-left: 1px solid #8D72E1;">Car_id</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th colspan="3">Plate Number</th>
                        <th colspan="3">Date of Arrival</th>
                        <th colspan="3">Due date</th>
                        <th>Issue</th>
                    </tr>

                    <?php
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['car_id'];?></td>
                        <td><?php echo $rows['make'];?></td>
                        <td><?php echo $rows['model'];?></td>
                        <td><?php echo $rows['color'];?></td>
                        <td colspan="3"><?php echo $rows['plate_no'];?></td>
                        <td colspan="3"><?php echo $rows['date_of_arrival'];?></td>
                        <td colspan="3"><?php echo $rows['due_date'];?></td>
                        <td><?php echo $rows['issue'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                </div>
            </div>

            <div class="statistics-side-bar">
            <div class="stat-img">
                <img src="images\statistics image.svg" alt="">
            </div>

            <div class="history">
                <h3>History</h3>
                <br>

                <div class="history-text">
                    <p><i class="fa-solid fa-check"></i>&nbsp;New User Added <span class="time-stamp">12:02pm</span></p>
                    <br>
                    <p><i class="fa-solid fa-check"></i>&nbsp;Car Removed <span class="time-stamp">9:32pm</span></p>
                    <br>
                    <p><i class="fa-solid fa-check"></i>&nbsp;New Mechanic Added <span class="time-stamp">7:12pm</span></p>
                    <br>
                    <p><i class="fa-solid fa-check"></i>&nbsp;New Car Added <span class="time-stamp">17:43pm</span></p>
                    <br>
                    <p><i class="fa-solid fa-check"></i>&nbsp;Mechanic Removed <span class="time-stamp">7:12pm</span></p>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>