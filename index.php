<?php 
    $ketQua = $_REQUEST['user'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VMGD - Tìm kiếm thông tin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/rm/" method="post" role="form">
				<span class="contact100-form-title">
					THÔNG TIN SINH VIÊN<br>K53 - HCE
				</span>

				<p style="color: red; font-size: 13px; font-style: italic;" id="matchingResult" name="matchingResult"></p>
				<!-- Mã sinh viên -->
				<div class="wrap-input100 validate-input" data-validate="Không được để trống mã sinh viên">
					<label class="label-input100" for="maSV">Mã sinh viên</label>
					<input id="maSV" class="input100" type="text" name="maSV" placeholder="VD: 19K4021079 - 19K4021079LK">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<span class="glyphicon glyphicon-ok"></span> 
					<button type="submit" class="contact100-form-btn">
						Tìm kiếm	
					</button>
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="https://www.facebook.com/doisvtnbvvmgd/" class="contact100-form-social-item flex-c-m bg1 m-r-5" target="blank_">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>
				</div>

				<div class="contact100-form-title" style="margin-top: 30px">
					<br>
					<p style="color: #1643b5;">Đội SVTN Bảo vệ <a style="color: #1643b5;" href="/quanly/">Văn Minh</a> Giảng Đường</p>
					<p>Đội trưởng:<b> 0766.757.075</b></p>
				</div>

			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			var ssResult = <?php echo "'"+ $ketQua + "'";?>;
			if (ssResult != 0) {
				var someVar = "* Sinh viên đã là được đăng ký vào hệ thống!";
                document.getElementById('matchingResult').innerText = someVar;
			} else {
				var someVar = "";
                document.getElementById('matchingResult').innerText = someVar;
			}
		});
	</script>
	
</body>
</html>
