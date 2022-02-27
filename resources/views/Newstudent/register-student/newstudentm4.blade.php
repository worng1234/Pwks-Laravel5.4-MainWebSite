<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Prompt:300,400,700,900"]
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
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
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
						<img src="../assets/img/logo2.png" alt="navbar brand" class="navbar-brand">
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
									<li>
										<a href="{{ url('/Newstudent/documentIndex')}}">ส่งเอกสารรายงานตัว</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="#">
								<i class="link-icon icon-folder-alt"></i>
								<span class="menu-title">ข้อมูลนักเรียนพื้นฐาน</span>
							</a>
							<div class="navbar-dropdown animated fadeIn">
								<ul>
									<li>
										<a href="{{url('/agreement/student')}}">เพิ่มข้อมูลนักเรียนพื้นฐาน</a>
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
										<div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i>&nbsp; แบบฟอร์มการรับสมัครเข้าเรียน ชั้นมัธยมศึกษาปีที่ 4</div>
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
											<h5><i class="fas fa-info-circle" style="color:red;"></i>
												ช่องที่มีเครื่อง * จำเป็นต้องกรอกข้อมูลห้ามปล่อยว่างเด็ดขาด </h5>
											<h5><i class="fas fa-info-circle" style="color:red;"></i>
												หากช่องไหนไม่มีข้อมูลให้ปล่อยว่าง</h5>
										</div>


										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*ข้อมูลส่วนตัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>*คำนำหน้าชื่อ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="prename" required>
														<option>เลือก</option>
														<option value="นาย">นาย</option>
														<option value="นางสาว">นางสาว</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*ชื่อภาษาไทย</label>
													<input name="fname" type="text" class="form-control" placeholder="" required>
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
													<label>*นามสกุลภาษาไทย</label>
													<input name="surname" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>*เลขประจำตัวประชาชน</label>
													<input name="id_number" type="text" class="form-control" placeholder="" required>
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
													<label>*ปี พุทธศักราช:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="year" required>
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
													<label>*เดือน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="mounth" required>
														<option>เลือก</option>
														<option value="01">มกราคม</option>
														<option value="02">กุมภาพันธ์</option>
														<option value="03">มีนาคม</option>
														<option value="04">เมษายน</option>
														<option value="05">พฤษภาคม</option>
														<option value="06">มิถุนายน</option>
														<option value="07">กรกฎาคม</option>
														<option value="08">สิงหาคม</option>
														<option value="09">กันยายน</option>
														<option value="10">ตุลาคม</option>
														<option value="11">พฤษจิกายน</option>
														<option value="12">ธันวาคม</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*วัน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="day" required>
														<option>เลือก</option>
														<option value="01">1</option>
														<option value="02">2</option>
														<option value="03">3</option>
														<option value="04">4</option>
														<option value="05">5</option>
														<option value="06">6</option>
														<option value="07">7</option>
														<option value="08">8</option>
														<option value="09">9</option>
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
													<label>*เพศสภาพ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="sex" required>
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
													<label>*เชื้อชาติ</label>
													<input name="origin" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>*สัญชาติ</label>
													<input name="nationality" type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="tel" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>

										<!-- ข้อมูลที่อยู่ตามทะเบียนบ้าน -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>*บ้านเลขที่</label>
													<input name="house_number" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>*หมู่</label>
													<input name="bloc" type="text" class="form-control" placeholder="" required>
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
													<label>*ตำบล/แขวง</label>
													<input name="sub_district" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>*อำเภอ/เขต</label>
													<input name="district" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>*จังหวัด</label>
													<input name="province" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>*รหัสไปรษณีย์</label>
													<input name="post" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>

										<!-- ข้อมูลครอบครัว -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*ข้อมูลครอบครัว</b></p>
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
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" value="บิดา" name="parent">
														<span class="form-check-sign">บิดา</span>
													</label>
													<label class="form-check-label ml-1">
														<input class="form-check-input" type="checkbox" value="มารดา" name="parent">
														<span class="form-check-sign">มารดา</span>
													</label>
													<label class="form-check-label ml-1">
														<input class="form-check-input" type="checkbox" value="บุคคลอื่น" name="parent" id="chkparent">
														<span class="form-check-sign">บุคคลอื่น</span>
													</label>
												</div>
											</div>
										</div>
										<div id="dvparent" style="display: none">
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
										</div>

										<!-- ข้อมูลทางการศึกษา -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*ข้อมูลทางการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;">กำลังศึกษาอยู่/สำเร็จการศึกษา ชั้นประถมศึกษาปีที่ ๖ จากโรงเรียน</label> <br>
												<p style="color:red;"> <small>***ให้ใส่โรงเรียนไปด้วย เช่น โรงเรียนพร้าววิทยาคม โรงเรียนบ้านสันปง เป็นต้น </small></p>
												<p style="color:red;"> <small>***ให้ตรวจสอบชื่อโรงเรียนของตนเองให้ดีหากผิดพลาดจะเกิดข้อมูลขาดหาย</small></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>*ชื่อโรงเรียนเดิม</label>
													<input name="final_school" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*ตำบล/แขวง</label>
													<input name="final_school_sub_district" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*อำเภอ/เขต</label>
													<input name="final_school_district" type="text" class="form-control" placeholder="" required>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>*จังหวัด</label>
													<input name="final_school_province" type="text" class="form-control" placeholder="" required>
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
											<p style="margin-left: 25px;  font-size: 15px;"><b>*ความต้องการความช่วยเหลือด้านการจัดการศึกษา</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*ความพิการ</label>
													<select class="form-control" id="formGroupDefaultSelect" name="disabled" required>
														<option>เลือก</option>
														<option value="ไม่มี">ไม่มี</option>
														<option value="การมองเห็น">การมองเห็น</option>
														<option value="การได้ยิน">การได้ยิน</option>
														<option value="สติปัญญา">สติปัญญา</option>
														<option value="ร่างกาย/สุขภาพ">ร่างกาย/สุขภาพ</option>
														<option value="การเรียนรู้">การเรียนรู้</option>
														<option value="การพูด/ภาษา">การพูด/ภาษา</option>
														<option value="พฤติกรรม/อารมณ์">พฤติกรรม/อารมณ์</option>
														<option value="ออทิสติค">ออทิสติค</option>
														<option value="พิการซ้ำซ้อน">พิการซ้ำซ้อน</option>
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*ความด้อยโอกาส</label>
													<select class="form-control" id="formGroupDefaultSelect" name="poorPerson" required>
														<option>เลือก</option>
														<option value="ไม่มี">ไม่มี</option>
														<option value="ถูกบังคับขายแรงงาน">ถูกบังคับขายแรงงาน</option>
														<option value="อยู่ในธุรกิจทางเพศ">อยู่ในธุรกิจทางเพศ</option>
														<option value="ถูกทอดทิ้ง">ถูกทอดทิ้ง</option>
														<option value="เด็กเร่ร่อน">เด็กเร่ร่อน</option>
														<option value="ได้รับผลกระทบจากเอดส์">ได้รับผลกระทบจากเอดส์</option>
														<option value="ชนกลุ่มน้อย">ชนกลุ่มน้อย</option>
														<option value="ถูกทำร้ายทารุณ">ถูกทำร้ายทารุณ</option>
														<option value="เด็กยากจน">เด็กยากจน</option>
														<option value="เด็กที่มีปัญหาเกี่ยวกับยาเสพติด">เด็กที่มีปัญหาเกี่ยวกับยาเสพติด</option>
														<option value="เด็กกำพร้า">เด็กกำพร้า</option>
														<option value="ทำงานรับผิดชอบตนเองและครอบครัว">ทำงานรับผิดชอบตนเองและครอบครัว</option>
													</select>
												</div>
											</div>
										</div>

										<!-- เลือกเรียนแผนการเรียนรู้ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*เลือกแผนการเรียนรู้ &nbsp;&nbsp;( เลือกแผนการเรียนรู้อันดับ 1 - 9 ตามลำดับที่ต้องการจะเรียนมากสุดไปน้อยสุด )</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 1</label>
													<select class="form-control" id="slct1" name="major_name1" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 2</label>
													<select class="form-control" id="slct2" name="major_name2" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 3</label>
													<select class="form-control" id="slct3" name="major_name3" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 4</label>
													<select class="form-control" id="slct4" name="major_name4" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 5</label>
													<select class="form-control" id="slct5" name="major_name5" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 6</label>
													<select class="form-control" id="slct6" name="major_name6" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 7</label>
													<select class="form-control" id="slct7" name="major_name7" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 8</label>
													<select class="form-control" id="slct8" name="major_name8" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>*อันดับที่ 9</label>
													<select class="form-control" id="slct9" name="major_name9" onchange="getSelectValue(this.value);" required>
														<option>เลือก</option>
														@foreach ($data as $key => $value)
														<option value="{{$value->class_id}}">{{$value->class_major_name}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>

										<!-- อัพโหลดรูปภาพ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>*อัพโหลดข้อมูลหลักฐานที่ใช้ประกอบการสมัคร &nbsp;&nbsp;( นามสกุลไฟล์ .pdf หากไม่สะดวกให้ใช้เป็นไฟล์รูปภาพ&nbsp;&nbsp;.jpg &nbsp;หรือ&nbsp; .png&nbsp;&nbsp;)</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1.5 นิ้ว</label>
													<input type="file" class="form-control-file" id="profile_img" name="profile_img">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
													<input type="file" class="form-control-file" id="id_card_student" name="id_card_student">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
													<input type="file" class="form-control-file" id="house_student" name="house_student">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">ใบ ปพ. หรือหนังสือรับรองการเป็นนักเรียน</label>
													<input type="file" class="form-control-file" id="student_submit" name="student_submit">
												</div>
											</div>
										</div><br><br>

										<!-- สถานะการสมัคร -->
										<div hidden>
											<input type="text" name="status_rigis" value="02">
										</div>
										<div hidden>
											<input type="text" name="status_picall" value="02">
										</div>
										<div hidden>
											<input type="text" name="status_profile" value="02">
										</div>
										<div hidden>
											<input type="text" name="status_idcard_student" value="02">
										</div>
										<div hidden>
											<input type="text" name="status_house_student" value="02">
										</div>
										<div hidden>
											<input type="text" name="status_submit_student" value="02">
										</div>

									</div>
									<div class="card-footer" align="center">
										
										<div class="form-check">
										<p style="text-align:center">นักเรียนโปรดตรวจสอบข้อมูลพื้นฐานนักเรียนที่กรอกให้ถูกต้อง<br>
											เมื่อนักเรียนมั่นใจแล้วให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
											<label class="form-check-label ml-1">
												<input class="form-check-input" type="checkbox" id="chksubmit">
												<span class="form-check-sign">ข้าพเจ้าได้ตรวจสอบข้อมูลทุกอย่างเรียบร้อยแล้ว ข้อมูลที่ใช้ในการสมัครเป็นความจริงทุกประการ</span>
											</label>
										</div>
										<div id="dvsubmit" style="display: none">
											<button type="submit" class="btn btn-primary"><strong><i class="fas fa-save"></i> ยืนยันข้อมูล</strong></button>
										</div>
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
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
		$(function() {
			$("#chkparent").click(function() {
				if ($(this).is(":checked")) {
					$("#dvparent").show();
				} else {
					$("#dvparent").hide();
				}
			});
		});
	</script>

	<script type="text/javascript">
		$(function() {
			$("#chksubmit").click(function() {
				if ($(this).is(":checked")) {
					$("#dvsubmit").show();
				} else {
					$("#dvsubmit").hide();
				}
			});
		});
	</script>

	<script>
		function getSelectValue(slct1){ 
			if(slct1 != ''){
				$("#slct2 option[value='"+slct1+"']").hide();

			} if(slct1 != '' && slct2 != ''){ 
				$("#slct3 option[value='"+slct1+"'], option[value='"+slct2+"']").hide();

			} if(slct1 != '' && slct2 != '' && slct3 != ''){ 
				$("#slct4 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"']").hide();

			} if(slct1 != '' && slct2 != '' && slct3 != '' && slct4 != ''){ 
				$("#slct5 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"'], option[value='"+slct4+"']").hide();

			} if(slct1 != '' && slct2 != '' && slct3 != '' && slct4 != '' && slct5 != ''){ 
				$("#slct6 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"'], option[value='"+slct4+"'], option[value='"+slct5+"']").hide();
				
			} if(slct1 != '' && slct2 != '' && slct3 != '' && slct4 != '' && slct5 != '' && slct6 != ''){ 
				$("#slct7 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"'], option[value='"+slct4+"'], option[value='"+slct5+"'], option[value='"+slct6+"']").hide();
				
			} if(slct1 != '' && slct2 != '' && slct3 != '' && slct4 != '' && slct5 != '' && slct6 != '' && slct7 != ''){ 
				$("#slct8 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"'], option[value='"+slct4+"'], option[value='"+slct5+"'], option[value='"+slct6+"'], option[value='"+slct7+"']").hide();
				
			} if(slct1 != '' && slct2 != '' && slct3 != '' && slct4 != '' && slct5 != '' && slct6 != '' && slct7 != '' && slct8 != ''){ 
				$("#slct9 option[value='"+slct1+"'], option[value='"+slct2+"'], option[value='"+slct3+"'], option[value='"+slct4+"'], option[value='"+slct5+"'], option[value='"+slct6+"'], option[value='"+slct7+"'], option[value='"+slct8+"']").hide();
				
			}
		}
	</script>

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