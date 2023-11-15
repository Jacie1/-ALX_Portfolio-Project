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

$sql="SELECT * FROM contact";

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
<style>
  .contact-section{
    padding-top: 70px;
  }
  .contact-img{
    width: 100%;
    height: 300px;
  }
  .container{
    padding: 70px;
  }
  .contact-title{
  position: relative;
  font-size: 30px;
  font-family: 'Montserrat', sans-serif;
  line-height: 37px;
  color: #222;
  margin-bottom: 22px;
  color: white;
            background-color: midnightblue;
  }
  .contact-info .title{
  position: relative;
  font-size: 22px;
  line-height: 30px;
  font-family: 'Montserrat', sans-serif;
  color: #222;
  margin-bottom: 8px;
}
.single-info{
  position: relative;
  padding: 0px 0px 0px 57px;
  margin-bottom: 28px;
}
.contact-section .contact-info .single-info .icon-box{
  position: absolute;
  left: 0px;
  top: 10px;
}
.contact-section .contact-info .single-info .icon-box i:before{
  font-size: 38px;
  color:  green;
  margin: 0px;
}
.contact-section input{
  height: 45px;
  margin-bottom: 20px;
}
.contact-section textarea{
  height: 206px;
}
.contact-section .btn-one{
  padding: 12px 33px 12px 33px;
}
.contact-section .contact-info{
  position: relative;
  top: 59px;
}
.map-section .google-map-area {
  position: relative;
  margin-bottom: 0px;
}
#contact-google-map {
  height: 420px;
  width: 100%;
}
  
</style>
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

<!-- contact section -->
 <section class="contact-section">
   
 <div class="contact-img">
            <img width="100%" height="300px" src="images/download.jpg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 contact-column">
                    <div class="contact-form-area">
                        <div class="contact-title">Get in Touch</div>
                        <form id="form" name="contact_form" class="default-form"  method="post" action="contact.php">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="name" value="" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" value="" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" name="phone" value="" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="subject" value="" placeholder='Subject' required="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <textarea placeholder="Message" name="message" required=""></textarea>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success" data-loading-text="Please wait..." name="contact">Send Message</button>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
                      <div class="contact-info">
                        <div class="single-info">
                          <div class="icon-box"><i class="flaticon-signs"></i>
                        </div>
                        <div class="title">Address Info</div>
                        <div class="text"><p>Nairobi, Kenya</p>
                      </div>
                        </div>
         

               <div class="single-info">
                            <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                            <div class="title">Phone</div>
                            <div class="text"><p>(+020) 300 2720<br />(+020) 300 2720</p></div>
                        </div>
                        <div class="single-info">
                            <div class="icon-box"><i class="flaticon-note"></i></div>
                            <div class="title">Email</div>
                            <div class="text"><a href="#">info@w-school.ac.ke</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
    <footer>
        <h3 class="footer_text">All @copyright reserverd by web tech knowledge</h3>
    </footer>
</body>
</html>