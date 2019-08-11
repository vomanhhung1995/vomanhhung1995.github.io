<?php 
    $ssHoTen = $_REQUEST['user'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta http-equiv="refresh" content="3;url=http://localhost:8888/quanly/">

    <!-- Title Page-->
    <title>VMGD - Đăng ký thành viên</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">CẬP NHẬT THÀNH CÔNG!</h2>
                    <form method="POST">
                        <div class="group" style="color: #ffffff">
                            Cập nhật thành công thành viên <span style="font-weight: bold;">"
                            <?php 
                            echo $ssHoTen;
                             ?>
                             "</span> vào hệ thống!
                            </br></br>
                            <i style="color: red;">Hệ thống sẽ tự động chuyển về trang quản lý trong 3s!</i>
                        </div>
                        <div class="p-t-10" style="padding: 40px 40px">
                            <button style="margin-left: 40px" class="btn btn--pill btn--green" type="">Trang chủ</button>
                        </div>
                        <div class="p-t-10" style="margin-left: 0px">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    

</body>

</html>
<!-- end document-->