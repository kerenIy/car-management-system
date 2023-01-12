<?php

include "config.php";

$make = $_POST["make"];
$model = $_POST["model"];
$color = $_POST["color"];
$plate_no = $_POST["plate_no"];
$date_of_arrival = $_POST["date_of_arrival"];
$due_date = $_POST["due_date"];
$issue = $_POST["issue"];
$car_id = $_POST["car_id"];

$sql = "INSERT INTO cars(make, model, color, plate_no, date_of_arrival, due_date, issue, car_id)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
};


mysqli_stmt_bind_param($stmt, "ssssssss",
                       $make,
                       $model,
                       $color,
                       $plate_no,
                       $date_of_arrival,
                       $due_date,
                       $issue,
                    $car_id);

mysqli_stmt_execute($stmt);
//echo "Record saved";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted</title>
    <link rel="stylesheet" href="popu.css">
</head>
<body>
    
    <div class="container">
        
        <div class="popup">
            <img src="images/submitted.svg" alt="" class="popup-img">
            <h2>Done!</h2>
            <p>Form has been submitted successfully</p>
            <br><br>
            <a href="admin page.html" class="btn">Ok</a>
        </div>
    </div>
</body>
</html>