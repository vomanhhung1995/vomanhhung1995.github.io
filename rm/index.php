<?php
$maSV = $_POST['maSV'];

$link = mysqli_connect("localhost", "root", "root", "QUANLY_VMGD");

// Check connection
if($link === false){
    die("ERROR: Could not connect database, please call 0975-838-834. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "SELECT MaSinhVien from THANHVIEN WHERE MaSinhVien = '$maSV'";
if($result = mysqli_query($link, $sql)){
   if(mysqli_num_rows($result) > 0){
      header("Location: http://localhost:8888/?user=".$maSV);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

        // Close connection
mysqli_close($link);
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
                    <h2 class="title">Thông tin thành viên</h2>
                    <p style="color: red; margin-bottom: 20px; font-size: 13px; font-style: italic;" id="matchingResult" name="matchingResult"></p>
                    <form method="POST" action="/checkInsert.php/" role="form" onsubmit="return confirm('Bạn đã kiểm tra chính xác thông tin rồi chứ?');">
                        <div class="input-group" id="forMaSinhVien" name="forMaSinhVien" style="display: none;">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-grain"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Mã sinh viên" id="maSinhVien" name="maSinhVien">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-user"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Họ và tên" id="hoTenSV" name="hoTenSV" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-heart"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Giới tính" id="gioiTinhSV" name="gioiTinhSV" required>
                        </div>
                        
                         <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Ngày sinh" id="ngaySinhSV" name="ngaySinhSV" required>
                        </div>
                                              
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-globe"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Quê quán" name="queQuan" id="queQuan">
                        </div>

                        <div class="input-group" style="display: none;">
                            <input class="input--style-3" type="text" placeholder="CMND" name="cmndSV" id="cmndSV">
                        </div>
                       
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                           
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-tasks"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Khoa" id="khoa" name="khoa">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-hand-right"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Nhập lớp" name="classMate" id="classMate">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-hand-right"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Nhập facebook" name="facebook" id="facebook">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color: transparent; border-color: transparent;"><i class="glyphicon glyphicon-tag"></i></span>
                            <input style="margin-left: 5px;" class="input--style-3" type="text" placeholder="Ghi chú (không bắt buộc)" name="note" id="note">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Đăng ký thành viên</button>
                        </div>
                        <div class="p-t-10" style="margin-left: 0px">
                            <a href="/" class="btn btn--pill btn--red">Hủy</a>
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
    <script type="text/javascript">
      $(document).ready(function () {
          var TenNganhTuyenSinh = '';
          var MaSinhVien  = '';
          var HoTen = '';
          var GioiTinh = '';
          var NgaySinh = '';
          var CMND = '';
          var TenTinhThanhPho = '';
          var TenQuanHuyen = '';
          var DanToc = '';
          var DienThoai = '';
          var DiaChiLienLac = '';
          var matchingResult = 0;

          // Set data session from database
            <?php
            $maSinhVien = $_POST['maSV'];

            $link = mysqli_connect("localhost", "root", "root", "QUANLY_VMGD");

            // Check connection
            if($link === false){
              die("ERROR: Could not connect database, please call 0975-838-834. " . mysqli_connect_error());
            }

            // Attempt insert query execution
            $sql = "SELECT MaSinhVien, HoTen, TenNganhTuyenSinh, GioiTinh, NgaySinh, CMND, TenQuanHuyen, TenTinhThanhPho, DienThoai FROM SINHVIEN WHERE MaSinhVien = '$maSinhVien' LIMIT 1";
            if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                  echo "MaSinhVien = '" . $row['MaSinhVien'] . "';";
                  echo "TenNganhTuyenSinh = '" . $row['TenNganhTuyenSinh'] . "';";
                  echo "HoTen = '" . $row['HoTen'] . "';";
                  echo "GioiTinh = '" . $row['GioiTinh'] . "';";
                  echo "NgaySinh = '" . $row['NgaySinh'] . "';";
                  echo "CMND = '" . $row['CMND'] . "';";
                  echo "TenQuanHuyen = '" . $row['TenQuanHuyen'] . "';";
                  echo "TenTinhThanhPho = '" . $row['TenTinhThanhPho'] . "';";
                  echo "DienThoai = '" . $row['DienThoai'] . "';";
                }
                mysqli_free_result($result);
              } else{
                echo "matchingResult = 1;";
              }
            } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

            // Close connection
            mysqli_close($link);
            ?>  

            $("#maSinhVien").val(MaSinhVien);
            $("#hoTenSV").val(HoTen);
            $("#khoa").val(TenNganhTuyenSinh);
            $("#gioiTinhSV").val(GioiTinh);
            $("#ngaySinhSV").val(NgaySinh);
            $("#cmndSV").val(CMND);
            $("#phone").val(DienThoai);
            if (matchingResult == 1) {
                var someVar = "* Không tìm thấy thông tin, hãy thêm thủ công!";
                document.getElementById('matchingResult').innerText = someVar;
                document.getElementById('forMaSinhVien').setAttribute('style','');;
            } else {
                $("#queQuan").val(TenQuanHuyen + ", " + TenTinhThanhPho);
            }
          
            });    
    </script>

</body>

</html>
<!-- end document-->