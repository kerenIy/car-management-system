
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
            <div class="display-boxes">
                <div class="item">
                    <img src="images\add-new-car.svg" alt="" class="add-img" style="width: 100px; height: 150px;">
                    <br>
                    <a href="car_form.html">Add Car</a>
                    <br>
                </div>
                
                <div class="item">
                    <img src="images\add-new-user.svg" alt="" class="add-img" style="width: 100px; height: 150px;">
                    <br>
                    <a href="user_form.html">Add Customer</a>
                    <br>
                </div>

                <div class="item">
                    <img src="images\add-new-worker.svg" alt="" class="add-img" style="width: 100px; height: 150px;">
                    <br>
                    <a href="mechanic_form.html">Add Mechanic</a>
                </div>
                
            </div>

            <div class="display-box" style="width: 400px;">

                <div class="view-box">
                    <div class="display-text">
                        <p class="bigger-text">User:</p>
                        <br>
                        <div class="display-btn">
                            <a href="" class="remove-btn" style="width: 200px; font-size: 0.9em;"><i class="fa-solid fa-x"></i>&nbsp;Remove User</a>
                        <br>
                        <a href="user_report.php" class="view-btn" style="width: 200px; font-size: 0.9em"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;View Users</a>
                        </div>
                        
                    </div>
                </div>
                <br><br>
                <div class="view-box">
                    <div class="display-text">
                        <p class="bigger-text">Vehicles:</p>
                        <br>
                        <div class="display-btn">
                            <a href="" class="remove-btn" style="width: 200px; font-size: 0.9em"><i class="fa-solid fa-x"></i>&nbsp;Remove Vehicle</a>
                        <br>
                        <a href="car_report.php" class="view-btn" style="width: 200px; font-size: 0.9em"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;View Vehicles</a>
                        </div>
                        
                    </div>
                </div>
                <br><br>
                <div class="view-box">
                    <div class="display-text">
                        <p class="bigger-text">Mechanic:</p>
                        <br>
                        <div class="display-btn">
                            <a href="" class="remove-btn" style="width: 200px; font-size: 0.9em"><i class="fa-solid fa-x"></i>&nbsp;Remove Mechanic</a>
                        <br>
                        <a href="mec_report.php" class="view-btn" style="width: 200px; font-size: 0.9em"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;View Mechanics</a>
                        </div>
                        
                    </div>
                </div>
            
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
