<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="..../assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="..../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Prompt:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['..../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="..../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="..../assets/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="..../assets/css/demo.css">
</head>

<body>
	<div class="wrapper horizontal-layout-2">

		<div class="main-header" style="background-color: #8B469B;">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="{{ url('/')}}" class="logo d-flex align-items-center">
						<img src="..../assets/img/logo2.png" alt="navbar brand" class="navbar-brand">
					</a>
					<!-- End Logo Header -->

					<!-- Navbar Header -->
					<nav class="navbar navbar-header navbar-expand-lg p-0">

						<div class="container-fluid p-0">
							<div class="collapse" id="search-nav">
								<p class="card-title" style="font-size: 17px;"><b>
										<font color='#ffffff'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font>
									</b></p>
								<label><small>
										<font color='#ffffff'>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่</font>
									</small></label>
							</div>
							<!-- <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
								<li class="nav-item toggle-nav-search hidden-caret">
									<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
										<i class="fas fa-school"></i>
									</a>
								</li>					
							</ul> -->
						</div>
					</nav>
					<!-- End Navbar -->
				</div>
			</div>
			<div class="nav-bottom">
				<div class="container">
					<h3 class="title-menu d-flex d-lg-none">
						เมนู
						<div class="close-menu"> <i class="flaticon-cross"></i></div>
					</h3>
					<ul class="nav page-navigation page-navigation-info bg-white">

						<li class="nav-item">
							<a class="nav-link" href="{{ url('/')}}">
								<i class="link-icon icon-home"></i>
								<span class="menu-title">หน้าแรก</span>
							</a>
						</li>
						<li class="nav-item submenu active">
							<a class="nav-link" href="#">
								<i class="link-icon icon-user-follow"></i>
								<span class="menu-title">รับสมัครนักเรียนใหม่</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{ url('/AgreeMentNewstudentRegisterM1')}}">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</a>
									</li>
									<li>
										<a href="{{ url('/AgreeMentNewstudentRegisterM4')}}">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</a>
									</li>
									<li>
										<a href="{{ url('/check/status')}}">ตรวจสอบสถานะการสมัครเข้าเรียน</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="#">
								<i class="link-icon icon-lock"></i>
								<span class="menu-title">เข้าระบบ</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{ url('/student/login')}}">นักเรียน</a>
									</li>
									<li>
										<a href="{{ url('/academic/login')}}">ฝ่ายวิชาการ</a>
									</li>
									<li>
										<a href="{{ url('/affair/login')}}">ฝ่ายกิจการนักเรียน</a>
									</li>
									<li>
										<a href="{{ url('/admin/login')}}">ผู้ดูแลระบบ</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="link-icon icon-book-open"></i>
								<span class="menu-title">คู่มือการใช้งาน</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="link-icon icon-bubbles"></i>
								<span class="menu-title">ติดต่อเรา</span>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="main-panel">
			<div class="container">
				<div class="page-inner">

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt"></i>&nbsp; แบบฟอร์มการรับสมัครเข้าเรียน ชั้นมัธยมศึกษาปีที่ 4</div>
									</div>
								</div>
								<form method="post" action="{{ url('/insertnewstudentm4')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<!-- ข้อมูลส่วนตัว -->
									<div class="card-body">
										<div class="alert alert-info" role="alert" align="center">
											<h5><i class="fas fa-info-circle"></i>
												กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนเอง หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5>
										</div>

										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="prename">
														<option>เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="fname" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="name_cen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="surname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="id_number" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>วัน/เดือน/ปีเกิด ที่ปรากฏในบัตรประชาชน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ปี พุทธศักราช:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="year">
														<option>เลือก</option>
														<option value="2540">2540</option>
														<option value="2541">2541</option>
														<option value="2542">2542</option>
														<option value="2543">2543</option>
														<option value="2544">2544</option>
														<option value="2545">2545</option>
														<option value="2546">2546</option>
														<option value="2547">2547</option>
														<option value="2548">2548</option>
														<option value="2549">2549</option>
														<option value="2550">2550</option>
														<option value="2551">2551</option>
														<option value="2552">2552</option>
														<option value="2553">2553</option>
														<option value="2554">2554</option>
														<option value="2555">2555</option>
														<option value="2556">2556</option>
														<option value="2557">2557</option>
														<option value="2558">2558</option>
														<option value="2559">2559</option>
														<option value="2560">2560</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>เดือน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="mounth">
														<option>เลือก</option>
														<option value="มกราคม">มกราคม</option>
														<option value="กุมภาพันธ์">กุมภาพันธ์</option>
														<option value="มีนาคม">มีนาคม</option>
														<option value="เมษายน">เมษายน</option>
														<option value="พฤษภาคม">พฤษภาคม</option>
														<option value="มิถุนายน">มิถุนายน</option>
														<option value="กรกฎาคม">กรกฎาคม</option>
														<option value="สิงหาคม">สิงหาคม</option>
														<option value="กันยายน">กันยายน</option>
														<option value="ตุลาคม">ตุลาคม</option>
														<option value="พฤษจิกายน">พฤษจิกายน</option>
														<option value="ธันวาคม">ธันวาคม</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>วัน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="day">
														<option>เลือก</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เพศสภาพ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="sex">
														<option>เลือก</option>
														<option value="ชาย">ชาย</option>
														<option value="หญิง">หญิง</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ศาสนา</label>
													<input name="religion" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เชื้อชาติ</label>
													<input name="origin" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>สัญชาติ</label>
													<input name="nationality" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="tel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>

										<!-- ข้อมูลที่อยู่ตามทะเบียนบ้าน -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>บ้านเลขที่</label>
													<input name="house_number" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>หมู่</label>
													<input name="bloc" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ซอย</label>
													<input name="street" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ถนน</label>
													<input name="road" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input name="sub_district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input name="district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input name="province" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>รหัสไปรษณีย์</label>
													<input name="post" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>

										<!-- ข้อมูลครอบครัว -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล บิดา</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="father_prename">
														<option>เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="father_name" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="father_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="father_surname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="father_id" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="father_job" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="father_tel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล มารดา</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="mother_prename">
														<option>เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="mother_name" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="mother_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="mother_surname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="mother_id" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="mother_job" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="mother_tel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

												<div class="form-check">
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" value="บิดา" name="parent">
														<span class="form-radio-sign">บิดา</span>
													</label>
													<label class="form-radio-label ml-1">
														<input class="form-radio-input" type="radio" value="มารดา" name="parent">
														<span class="form-radio-sign">มารดา</span>
													</label>
													<label class="form-radio-label ml-1">
														<input class="form-radio-input" type="radio" value="บุคคลอื่น" name="parent">
														<span class="form-radio-sign">บุคคลอื่น</span>
													</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="parent_prename">
														<option>เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="parent_name" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="parent_namecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="parent_surname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="parent_id" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ความสัมพันธ์ผู้ปกครอง</label>
													<input name="parent_status" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="parent_job" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="parent_tel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>

										<!-- ข้อมูลทางการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลทางการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>กำลังศึกษาอยู่/สำเร็จการศึกษา ชั้นมัธยมศึกษาปีที่ 3 จากโรงเรียน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>ชื่อโรงเรียนเดิม</label>
													<input name="final_school" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input name="final_school_sub_district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input name="final_school_district" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input name="final_school_province" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>เลขประจำตัวนักเรียน (เฉพาะนักเรียนชั้น ม.3 โรงเรียนพร้าววิทยาคม)</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวนักเรียน</label>
													<input name="student_id" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>

										<!-- ความต้องการความช่วยเหลือด้านการจัดการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ความต้องการความช่วยเหลือด้านการจัดการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-check">
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" name="optionsRadios" value="">
														<span class="form-radio-sign">ไม่มี</span>
													</label><br><br>
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" name="optionsRadios" value="ผู้ด้อยโอกาส/ฐานะยากจน" name="poor_person">
														<span class="form-radio-sign">ผู้ด้อยโอกาส/ฐานะยากจน</span>
													</label><br><br>
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" name="optionsRadios" value="">
														<span class="form-radio-sign">ผู้พิการ/เด็กพิเศษ</span>
													</label>
													<div class="form-group form-group-default">
														<label>โปรดระบุประเภทความพิเศษ</label>
														<input name="disabled" type="text" class="form-control" placeholder="">
													</div>
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio" name="optionsRadios" value="">
														<span class="form-radio-sign">อื่นๆ</span>
													</label>
													<div class="form-group form-group-default">
														<label>โปรดระบุ</label>
														<input name="etc" type="text" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>

										<!-- เลือกเรียนแผนการเรียนรู้ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>เลือกเรียนแผนการเรียนรู้ &nbsp;&nbsp;( เลือกอันดับ 1 - 9 ตามลำดับแผนการเรียนรู้ที่เลือก )</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 1</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name1">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 2</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name2">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 3</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name3">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 4</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name4">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 5</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name5">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 6</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name6">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 7</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name7">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 8</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name8">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 9</label>
													<select class="form-control" id="formGroupDefaultSelect" name="major_name9">
														<option>เลือก</option>
														<option value="วิทยาศาสตร์-คณิตศาสตร์">วิทยาศาสตร์-คณิตศาสตร์</option>
														<option value="อังกฤษ-อังกฤษ">อังกฤษ-อังกฤษ</option>
														<option value="อังกฤษ-จีน">อังกฤษ-จีน</option>
														<option value="ศิลป์ทั่วไป(พาณิชยกรรม)">ศิลป์ทั่วไป(พาณิชยกรรม)</option>
														<option value="ศิลป์ทั่วไป(ศิลปะ)">ศิลป์ทั่วไป(ศิลปะ)</option>
														<option value="ศิลป์ทั่วไป(เกษตร)">ศิลป์ทั่วไป(เกษตร)</option>
														<option value="ศิลป์ทั่วไป(คหกรรม)">ศิลป์ทั่วไป(คหกรรม)</option>
														<option value="ศิลป์ทั่วไป(พลศึกษา)">ศิลป์ทั่วไป(พลศึกษา)</option>
														<option value="ปวช.(ช่างเชื่อมโลหะ)">ปวช.(ช่างเชื่อมโลหะ)</option>
													</select>
												</div>
											</div>
										</div>

										<!-- อัพโหลดรูปภาพ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>อัพโหลดข้อมูลรูปภาพ &nbsp;&nbsp;( นามสกุลไฟล์ภาพ&nbsp;&nbsp;.jpg &nbsp;หรือ&nbsp; .png&nbsp;&nbsp;เท่านั้น )</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1.5 นิ้ว</label>
													<input type="file" class="form-control-file" id="pic" name="pic">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
													<input type="file" class="form-control-file" id="id_number_pic" name="id_number_pic">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
													<input type="file" class="form-control-file" id="house_pic" name="house_pic">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">ใบ ปพ.</label>
													<input type="file" class="form-control-file" id="grade_pic" name="grade_pic">
												</div>
											</div>
										</div><br><br>

										<!-- สถานะการสมัคร -->
										<div hidden>
											<input type="text" name="status_rigis" value="รอยืนยันการสมัคร">
										</div>
										<div hidden>
											<input type="text" name="status_pic" value="รอตรวจสอบ">
										</div>
										<div hidden>
											<input type="text" name="status_picall" value="รอตรวจสอบ">
										</div>
										<div hidden>
											<input type="text" name="status_idnumber_pic" value="รอตรวจสอบ">
										</div>
										<div hidden>
											<input type="text" name="status_house_pic" value="รอตรวจสอบ">
										</div>
										<div hidden>
											<input type="text" name="status_grade_pic" value="รอตรวจสอบ">
										</div>

									</div>
									<div class="card-footer" align="center">
										<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
											เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
										<button type="button" class="btn btn-primary" id="alert_demo_7"><strong>ยืนยันข้อมูล</strong></button>
									</div><br>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" target="_blank">&copy; 2021 Phrao wittayakom School.</a>
					</li>
				</ul>
			</nav>
			<div class="copyright ml-auto">
				พัฒนาโดย PWK40 & CSMJU23
			</div>
		</div>
	</footer>
	</div>
	<!--   Core JS Files   -->
	<script src="..../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="..../assets/js/core/popper.min.js"></script>
	<script src="..../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="..../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="..../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="..../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="..../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="..../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="..../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="..../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="..../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="..../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="..../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="..../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="..../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="..../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="..../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="..../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="..../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="..../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="..../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="..../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="..../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="..../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="..../assets/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="..../assets/js/demo.js"></script>
	<script>
		Circles.create({
			id: 'circles-1',
			radius: 45,
			value: 60,
			maxValue: 100,
			width: 7,
			text: 5,
			colors: ['#f1f1f1', '#FF9E27'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-2',
			radius: 45,
			value: 70,
			maxValue: 100,
			width: 7,
			text: 36,
			colors: ['#f1f1f1', '#2BB930'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		Circles.create({
			id: 'circles-3',
			radius: 45,
			value: 40,
			maxValue: 100,
			width: 7,
			text: 12,
			colors: ['#f1f1f1', '#F25961'],
			duration: 400,
			wrpClass: 'circles-wrp',
			textClass: 'circles-text',
			styleWrapper: true,
			styleText: true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets: [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines: {
							drawBorder: false,
							display: false
						}
					}],
					xAxes: [{
						gridLines: {
							drawBorder: false,
							display: false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
	<script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {

				$('#alert_demo_7').click(function(e) {
					swal({
						title: 'ยืนยันข้อมูล ?',
						text: "ข้อมูลพื้นฐานนักเรียนที่กรอกถูกต้อง",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'ตกลง',
								className: 'btn btn-success'
							},
							cancel: {
								text: 'ย้อนกลับ',
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							swal({
								title: 'บันทึกข้อมูลเรียบร้อย!',
								text: 'สามารถติดตามสถานะการสมัครเข้าเรียน ได้ภายใน 1-3 วัน',
								type: 'success',
								buttons: {
									confirm: {
										className: 'btn btn-success'
									}
								}
							}).then(function() {
							window.location = '/';
						});
						} else {
							swal.close();
						}
					});
				})

			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script>
</body>

</html>