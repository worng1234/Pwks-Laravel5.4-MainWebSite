<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">

</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="index.html" class="logo">
					<img src="../assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<p class="card-title" style="font-size: 20px;"><b>
								<font color='#685DA7'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font>
							</b></p>
						<label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่</small></label>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fas fa-school"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->

		</div>
		<!-- // End main-header -->

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">

					<!-- เริ่มโปรไฟล์ -->
					<div class="user">
						<div class="info">

							<label><b>สถานะระบบ :</b> เปิดลงทะเบียน</label>
							<label><b>ภาคเรียนที่ :</b> 1/2565</label>
							<label><small>เริ่ม : 2 ส.ค. 2564 เวลา 08:30:00</small></label>
							<label><small>สิ้นสุด : 5 ส.ค. 2564 เวลา 16:30:00</small></label>

							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="/">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>


						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#formss">
								<i class="fas fa-id-card-alt"></i>
								<p>รับสมัครนักเรียนใหม่</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="formss">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="{{url('/AgreeMentNewstudentRegisterM1')}}">
											<span class="sub-item">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</span>
										</a>
									</li>
									<li>
										<a href="{{url('/AgreeMentNewstudentRegisterM4')}}">
											<span class="sub-item">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a href="#">
								<i class="fas fa-book-open"></i>
								<p>คู่มือการใช้งาน</p>
							</a>
						</li>
						<li class="nav-item ">
							<a href="#">
								<i class="fas fa-comments"></i>
								<p>ติดต่อเรา</p>
							</a>
						</li>



					</ul>
				</div>
			</div>
		</div>
		<!-- สิ้นสุดเมนู -->

		<!-- เริ่มเนื้อหา-->
		<div class="main-panel">
			<div class="content">
				<div class="panel-header " style="background-color: #8B469B;">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h3 class="text-white pb-2 fw-bold"></h3>
							</div>
						</div>
					</div>
				</div>
				<form method="post" action="{{ url('/insertnewstudentm1')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				{{ method_field('POST') }}
					<div class="page-inner mt--5">
						<div class="row mt--2">
							<div class="col-md-12">
								<div class="card full-height">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; รับสมัครนักเรียนใหม่ <i class="flaticon-right-arrow"></i> สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</div>
										</div>
									</div>

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
														<option >เลือก</option>
														<option value="เด็กชาย">เด็กชาย</option>
														<option value="เด็กหญิง">เด็กหญิง</option>
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
													<input name="nameCen" type="text" class="form-control" placeholder="(ถ้ามี)">
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
													<input name="idNumber" type="text" class="form-control" placeholder="">
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
														<option >เลือก</option>
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
														<option >เลือก</option>
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
														<option >เลือก</option>
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
														<option >เลือก</option>
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
													<input name="houseNumber" type="text" class="form-control" placeholder="">
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
													<input name="subDistrict" type="text" class="form-control" placeholder="">
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
														<option >เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="fatherName" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="fatherNamecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="fatherSurname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="fatherId" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="fatherJob" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="fatherTel" type="text" class="form-control" placeholder="">
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
														<option >เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="motherName" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="motherNamecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="motherSurname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="motherId" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="motherJob" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="motherTel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

												<div class="form-check">
													<label class="form-radio-label">
														<input class="form-radio-input" type="radio"  value="บิดา" name="parent">
														<span class="form-radio-sign">บิดา</span>
													</label>
													<label class="form-radio-label ml-1">
														<input class="form-radio-input" type="radio"  value="มารดา" name="parent">
														<span class="form-radio-sign">มารดา</span>
													</label>
													<label class="form-radio-label ml-1">
														<input class="form-radio-input" type="radio"  value="บุคคลอื่น" name="parent">
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
														<option >เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นาง">นาง</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="parentName" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="parentNamecen" type="text" class="form-control" placeholder="(ถ้ามี)">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="parentSurname" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="parentId" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ความสัมพันธ์ผู้ปกครอง</label>
													<select class="form-control" id="formGroupDefaultSelect" name="parent_status">
														<option >เลือก</option>
														<option value="พี่ชาย">พี่ชาย</option>
														<option value="พี่สาว">พี่สาว</option>
														<option value="ลุง">ลุง</option>
														<option value="ป้า">ป้า</option>
														<option value="น้า">น้า</option>
														<option value="อา">อา</option>
														<option value="ปู่">ปู่</option>
														<option value="ย่า">ย่า</option>
														<option value="ตา">ตา</option>
														<option value="ยาย">ยาย</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="parentJob" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="parentTel" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>

										<!-- ข้อมูลทางการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลทางการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>กำลังศึกษาอยู่/สำเร็จการศึกษา ชั้นประถมศึกษาปีที่ ๖ จากโรงเรียน</small></label>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>ชื่อโรงเรียนเดิม</label>
													<input name="finalSchool" type="text" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input name="finalSchoolSubDistrict" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input name="finalSchoolDistrict" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input name="finalSchoolProvince" type="text" class="form-control" placeholder="">
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
														<input class="form-radio-input" type="radio"  value="" name="poorPerson">
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

										<!-- อัพโหลดรูปภาพ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>อัพโหลดข้อมูลรูปภาพ &nbsp;&nbsp;( นามสกุลไฟล์ภาพ&nbsp;&nbsp;.jpg &nbsp;หรือ&nbsp; .png&nbsp;&nbsp;เท่านั้น )</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1.5 นิ้ว</label>
													<input type="file" class="form-control-file" id="pic" name="pic">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
													<input type="file" class="form-control-file" id="id_number_pic" name="id_number_pic">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
													<input type="file" class="form-control-file" id="house_pic" name="house_pic">
												</div>
											</div>
										</div><br><br>






									</div>
									<div class="card-footer" align="center">
										<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
											เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
										<button type="submit" class="btn btn-primary"><strong>ยืนยันข้อมูล</strong></button>
									</div><br>


								</div>
							</div>
				</form>


			</div>
		</div>
		<!-- สิ้นสุดเนื้อหา -->

		<!-- เริ่ม Footer -->
		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul class="nav">

						<li class="nav-item">
							<a class="nav-link" target="_blank">&copy; 2021 Phrao wittayakom School. | พัฒนาโดย PWK40 & CSMJU23</a>
						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					Theme by <a href="https://www.themekita.com" target="_blank">ThemeKita</a>
				</div>
			</div>
		</footer>
	</div>
	<!-- สิ้นสุด Footter -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script src="../assets/js/demo.js"></script>
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


</body>

</html>