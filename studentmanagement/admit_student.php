<?php

    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];

        echo"<script type='text/javascript'>
        
        alert('$message');
        
        </script>";
    }

    $host="localhost";
    $user="root";
    $password="JaciAlic123";
    $db="schoolproject";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM teacher";

    $result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="admit_student.php">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">We Are Open For Admission</label>
        <img class="main_img" src="images/background.jpg">
    </div>
    <center>
        <h1 class="adm">Admission Form</h1>
     </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST" >
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
            </div>
        </form>
    </div>
    <footer>
        <h3 class="footer_text">All @copyright reserverd by web tech knowledge</h3>
    </footer>
</body>
</html>