<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Danh sách thành viên - K53</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span><a style="color: #1643b5;" href="/">Văn Minh Giảng Đường!</a></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Mã sinh viên</th>
                                                    <th>Họ và tên</th>
                                                    <th>Giới tính</th>
                                                    <th>Ngày sinh</th>
                                                    <th>CMND</th>
                                                    <th>Quê quán</th>
                                                    <th>Điện thoại</th>
                                                    <th>Khoa</th>
                                                    <th>Lớp</th>
                                                    <th>Facebook</th>
                                                    <th>Ghi chú</th>
                                                    <th>Thời gian update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                    $link = mysqli_connect("localhost", "root", "root", "QUANLY_VMGD");

                                                    // Check connection
                                                    if($link === false){
                                                        die("ERROR: Could not connect. " . mysqli_connect_error());
                                                    }

                                                    // Attempt select query execution
                                                    $sql = "SELECT TenNganhTuyenSinh, MaSinhVien, HoTen, GioiTinh, NgaySinh, CMND, QueQuan, DienThoai, Lop, Facebook, Note, TimeInsert FROM THANHVIEN WHERE flagShow = 1 ORDER BY TimeInsert DESC   ";
                                                    if($result = mysqli_query($link, $sql)){
                                                        if(mysqli_num_rows($result) > 0){
                                                            while($row = mysqli_fetch_array($result)){
                                                                echo "<tr>";
                                                                echo "<td>" . $row['MaSinhVien'] . "</td>";
                                                                echo "<td>" . $row['HoTen'] . "</td>";
                                                                echo "<td>" . $row['GioiTinh'] . "</td>";
                                                                echo "<td>" . $row['NgaySinh'] . "</td>";
                                                                echo "<td>" . $row['CMND'] . "</td>";
                                                                echo "<td>" . $row['QueQuan'] . "</td>";
                                                                echo "<td>" . $row['DienThoai'] . "</td>";
                                                                echo "<td>" . $row['TenNganhTuyenSinh'] . "</td>";
                                                                echo "<td>" . $row['Lop'] . "</td>";
                                                                echo "<td>" . $row['Facebook'] . "</td>";
                                                                echo "<td>" . $row['Note'] . "</td>";
                                                                echo "<td>" . $row['TimeInsert'] . "</td>";
                                                                echo "</tr>";
                                                            }
                                                            mysqli_free_result($result);
                                                        } else{
                                                            echo "No records matching your query were found.";
                                                        }
                                                    } else{
                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">

                                <p><a href="/capnhat/">2019 </a> © Văn Minh Giảng Đường - <a href="https://www.facebook.com/doisvtnbvvmgd/">Đội SVTN BV Văn Minh Giảng Đường!</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


</body>

</html>