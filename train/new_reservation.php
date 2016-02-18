<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 2016-02-17
 * Time: 오전 12:52
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Train</title>
    <link rel ="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel ="stylesheet" type="text/css" href="./css/styles.css">

    <script type="text/javascript" src="./js/jquery-2.2.0.js"></script>

    /* for date picker */
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="./js/helper.js"></script>


</head>
<body>
<div class="container-fluid background-section">
    <div class="container new-reservation-section">
        <h2><strong><em>Search Train</em></strong></h2><br>
        <h3>Departs From &nbsp <select><option>aaaaa</option><option>bbbbb</option></select></h3>
        <h3>Arrives At &nbsp <select><option>aaaaa</option><option>bbbbb</option></select></h3>
        <h3>Departure Date &nbsp <input type="date" id="datepicker"/></h3>
        <h3><em><span style="padding-left:300px"><input type="submit" name="submit" value="Find Trains"></span></em></h3>
    </div>
</div>
</body>
</html>