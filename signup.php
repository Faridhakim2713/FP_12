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
            <a href="login.php" class="col-auto btn btn-outline-dark" style="margin-top: 60px; margin-left: 10px;">LOGIN</a>
        </div>
    </div>


<!-- //Content// -->
<h2 align="center">DAFTAR MEMBER</h2><br>
<form class="container" style="min-height: 400px; border: none; width: 500px;" ng-app="myApp" ng-controller="validasi" name="myForm" novalidate>
    <div style="align-items: center;">
        <h6>NAMA LENGKAP
            <span style="color: red" ng-show="myForm.nama.$dirty && myForm.nama.$invalid">
                <span ng-show="myForm.nama.$error.required"> NAMA WAJIB DI ISI</span>
             </span>
        </h6>
        <input type="text" name="nama" ng-model="nama" required style="border-radius: 5px; width: 400px;"></input>

        <h6>NOMOR TELEPON
            <span style="color: red" ng-show="myForm.tlp.$dirty && myForm.tlp.$invalid">
                <span ng-show="myForm.tlp.$error.required"> NOMOR WAJIB DI ISI</span>
             </span>
        </h6>
        <input type="text" name="tlp" ng-model="tlp" required style="border-radius: 5px; width: 400px;"></input>

        <h6>EMAIL
         <span style="color: red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                <span ng-show="myForm.email.$error.required"> EMAIL WAJIB DI ISI</span>
                <span ng-show="myForm.email.$error.email"> EMAIL SALAH</span>  
        </span> 
        </h6>           
        <input type="email" name="email" ng-model="email" required style="border-radius: 5px; width: 400px;">
            
        <h6>ALAMAT LENGKAP
            <span style="color: red" ng-show="myForm.alamat.$dirty && myForm.alamat.$invalid">
                <span ng-show="myForm.alamat.$error.required"> ALAMAT WAJIB DI ISI</span>
             </span>
        </h6>
        <input type="text" name="alamat" ng-model="alamat" required style="border-radius: 5px; width: 400px;"></input><br><br>
    </div>

        <button type="button" class="btn btn-primary" ng-click="Alert()">DAFTAR</button>
</form>
  <script>
        var app = angular.module('myApp',[]);
        app.controller('validasi', function ($scope, $window) {
            $scope.Alert = function () {
               if (typeof ($scope.nama) == "undefined" || $scope.nama == "") {
                  $window.alert("PERIKSA KEMBALI DATA ANDA !!");
                    return;
               }
                $window.alert("TERIMAKASIH" + "\n\Nama : " + $scope.nama +  "\n\Telp : " + $scope.tlp + "\n\Email : " + $scope.email + "\n\Alamat : " + $scope.alamat + "\n\Input anda success !!");
              
            }
        });
    </script>  
     <div class="container row" style="margin-left: 100px">

    <a class="col-1" href="https://web.whatsapp.com/send?phone=628156862254&text="><img src="assets/img/wa.png" style="height: 50px"></a>

    <iframe class="col-2" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ffaridhakim2713.github.io%2FFP_12%2F&layout=box_count&size=small&mobile_iframe=true&appId=575909929528140&width=71&height=40" width="71" height="40" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
    
<br>


<div style="background:#333; padding:10px; color:#ccc;">
    <div class="container">  &copy; 2018. Designed by Kelompok 12 </div>
</div>
</body>
</html>


