<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Grade for Developing</title>
    <link rel="stylesheet" href="style.css" />



</head>

<body>
    <div class="tableForm">
        <form action="developing.php" method="post">
            
                <table style="width:100%">
                    <tr>
                        <th colspan="4"><strong>SW Software Development Final Project by Osman Shaon</strong></th>
                    </tr>
                    <tr>
                        <td colspan="4">Group Members: <input type=text name="g1"></td>
                    </tr>

                    <tr>
                        <th>Criteria</th>
                        <th>Developing (0-10)</th>
                        <th>Accomplished (11-20)</th>
                    </tr>

                    <tr>
                        <td>Articulate requirements</td>
                        <td><input type = "number" name="t1"></td>
                    </tr>

                    <tr>
                        <td>Choose apprropriate methods and tools</td>
                        <td><input type = "number" name="t2"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Give clear and coherent presentation</td>
                        <td><input type = "number" name="t3"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Functioned well as a team</td>
                        <td><input type = "number" name="t4"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Complete report is submitted</td>
                        <td><input type = "number" name="t5"></td>
                        <td></td>
                    </tr>
                </table>

                <br><br>
                <p>Judge's Name: <input type=text name="j1"></p>
                <input type=submit name="s" value="Submit">
          
            <?php
            if (isset($_POST['s']))
            {
                $gm = $_POST['g1'];
                $jn = $_POST['j1'];
                $a1 = $_POST['t1'];
                $a2 = $_POST['t2'];
                $a3 = $_POST['t3'];
                $a4 = $_POST['t4'];
                $a5 = $_POST['t5'];

                $sum = $a1 + $a2 + $a3 + $a4 + $a5;

                $avg = $sum / 5;

                echo "<br>";
                echo "<font size=4><center>Group members: " . $gm . "</center><br>";
                echo "<font size=4><center>Judge's Name: " . $jn . "</center><br>";
                echo "<font size=4><center>Total Developing Grade is : " . $sum . "</center><br>";
                echo "<font size=4><center>Average Grade is : " . $avg . "</center>";
            }
            ?>
        </form>
    </div>

</body>

</html>