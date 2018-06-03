<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN MEMBER</title>
<link rel="stylesheet" type="text/css" href="../FP_12/assets/css/bootstrap.min.css">
<script type="text/javascript" src="../FP_12/assets/angular/angular.min.js"></script>

</head>
<body style="background-color: #ddd">

<div class="container-fluid">

    <div style="width: 100%; height: 100px; background-color: lightblue">
        <div class="row container">
            
            <a href="index.html" class="col-auto btn btn-dark" style="margin-top: 60px; margin-left: 100px;">MENU</a>
            <a href="maps.html" class="col-auto btn btn-dark" style="margin-top: 60px; margin-left: 10px;">LOKASI</a>
            <a href="artikel.html" class="col-auto btn btn-dark" style="margin-top: 60px; margin-left: 10px;">ARTIKEL</a>
            <a href="about.html" class="col-auto btn btn-dark" style="margin-top: 60px; margin-left: 10px;">ABOUT</a>
            <a href="contactus.html" class="col-auto btn btn-dark" style="margin-top: 60px; margin-left: 10px;">CONTACT US</a>
            <a href="login.php" class="col-auto btn btn-outline-dark" style="margin-top: 60px; margin-left: 10px;">LOGIN</a>
        </div>
    </div>


<!-- //Content// -->
<h2 align="center">LOGIN MEMBER</h2>
<?php
session_start();
$email = 'admin@gmail.com';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['email'] == $email && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["email"] = $email; 
       
        header("Location: index.html");
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo "<script>alert('PERIKASA KEMBALI EMAIL DAN PASSWORD ANDA !');</script>";
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' class="container" ng-app="login" ng-controller="validasi" 
   name="formlogin" style="text-align: center; width: 300px; min-height: 400px;">
    <h4 for="email" style="text-align: left;">EMAIL</h4>
    <span style="color: red" ng-show="formlogin.email.$error.$dirty && formlogin.email.$invalid">
        <span ng-show="formlogin.email$error.email"></span>
    </span>
    <input type="email" name="email" id="email" style="width: 300px; border-radius: 10px;  padding: 2px; font-size: 20px; align-content: left"><br><br>
    <h4 for="password" style="text-align: left;">PASSWORD</h4>
    <input type="password" name="password" id="password" style=" width: 300px; border-radius: 10px; padding: 2px; font-size: 20px;"><br><br>
    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary" ><br><br>
    <a  type="button" name="signup" class="btn btn-primary" href="signup.php">SIGN UP</a>
    </form> 
    <script>
        var app = angular.module('login',[]);
        app.controller('validasi', function($scope){
            $scope.email="";
        });
    </script>   
<?php } ?>
  
     
<br>
 <div class="container row" style=" margin-left: 100px">

    <a class="col-1" href="https://web.whatsapp.com/send?phone=628156862254&text="><img src="assets/img/wa.png" style="height: 50px"></a>

    <iframe class="col-2" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ffaridhakim2713.github.io%2FFP_12%2F&layout=box_count&size=small&mobile_iframe=true&appId=575909929528140&width=71&height=40" width="71" height="40" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
 
 <br>
 
<div style="background:#333; padding:10px; color:#ccc;">
    <div class="container">  &copy; 2018. Designed by Kelompok 12 </div>
</div>
</body>
</html>


