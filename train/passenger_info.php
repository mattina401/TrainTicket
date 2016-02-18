<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 2016-02-17
 * Time: 오후 6:25
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Extras & Passenger Info</title>
    <link rel ="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel ="stylesheet" type="text/css" href="./css/styles.css">
    <script type="text/javascript" src="./js/jquery-2.2.0.js"></script>
</head>
<body>
<div class="container-fluid background-section">
    <div class="container passenger-section">
        <h2><strong><em>Travel Extras & Passenger Info</em></strong></h2><br>
        <h3>Number of Baggage &nbsp <select><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option></select></h3>

        <h3>Passenger Name <span style="padding-left: 45px"><input type="text" name="name"></span></h3><br>

        <h3><em><span style="padding-left: 150px"><a href="new_reservation_result.php">Back</a></span><span style="padding-left:4em"><input type="submit" name="submit" value="Next"></span></em></h3>
    </div>
</div>
</body>
</html>