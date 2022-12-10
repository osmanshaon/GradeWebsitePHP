<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>Wlcome to Osman's dashboard!</p> <br><br>

        <p>Which section do you want to grade?</p>
        <p><button type="button"><a href="developing.php">Grade for Developing</a></button> </p>
        <p><button type="button"><a href="accomplished.php">Grade for Accomplished</a></button> </p>
        <br>
        <p> <button type="button"><a href="logout.php">Logout</a></button> </p>
    </div>
</body>
</html>
