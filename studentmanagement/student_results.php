<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}


$host="localhost";
$user="root";
$password="JaciAlic123";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM course";

$result=mysqli_query($data,$sql);

if($_GET['course_id'])
{
    $t_id=$_GET['course_id'];

    $sql2="DELETE FROM course WHERE id='$t_id'";

    $result2=mysqli_query($data,$sql2);

    if($result2)
    {
        header('location:student_results.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student Dashboard</title>
    <?php
    include 'admin_css.php';
    ?>

    <style type="text/css">
        #main{
            height: 500px;
            width: 100%;
            background-position: center;
            background-size: cover;
            position: absolute;
        }
        #inputs{
            width: 24rem;
            height: 28rem;
            box-shadow: 10px 10px 15px coral;
            position: relative;
            margin: 6% auto;
            border-radius: 1rem;
            font-weight: bolder;
            padding: 8px;
            color: black;
            text-align: center;
        }
        input{
            font-weight: bolder;
            background-color: rgba(0,0,0,0.8);
            color: white;
            border: none;
            margin: 10px;
            padding: 10px;
            box-shadow: 4px 4px 10px white;
            border-radius: 9px;
        }
        p{
            margin-top: 15px;
        }
        .table_th
        {
            padding: 20px;
            font-size: 20px;
        }
        .table_td
        {
            padding: 20px;
            background-color: black;
        }
    </style>
    <script type="text/javascript" src="results.js"></script>
</head>
<body>
<?php
    include 'student_sidebar.php';
    ?>
    <div id="main">
<div id="inputs" align="center">
    <h2>Enter Your Name And Find Out Your Exam Results</h2>
    <input type="text" name="" id="studentname" placeholder="Student name">
    <br>
    <input type="button" name="" onclick="results()" value="Check Your Result!">
    <p id="output"></p>
</div>
    </div>
</body>