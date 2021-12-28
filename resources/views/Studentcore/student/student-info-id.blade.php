<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="..../assets/img/icon.ico" type="image/x-icon" />

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
	<link rel="stylesheet" href="..../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="..../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="student-index.html" class="logo">
					<img src="..../assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
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
						<label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับนักเรียน)</small></label>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fas fa-school"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" href="index.html" aria-expanded="false">
								<i class="fas fa-unlock"></i> ออกระบบ
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

							<label><b>ชื่อ-นามสกุล :</b> สวัสดี มีเมตตา</label>
							<label><b>เลขประจำตัวนักเรียน :</b> 50190</label>
							<label><b>ชั้นมัธยมศึกษาปีที่ :</b> 5 <b>ห้อง:</b> 2</label>
							<label><b>ภาคเรียนที่ :</b> 1/2565</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="student-index.html">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-file-alt"></i>
								<p>ระบบบันทึกข้อมูลพื้นฐาน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="student-info-add-1.html">
											<span class="sub-item">เพิ่มข้อมูล</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">แก้ไขข้อมูล</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">ตรวจสอบข้อมูล</span>
										</a>
									</li>
									<li class="active">
										<a href="student-info-add-v2.html">
											<span class="sub-item">ทดสอบ</span>
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
			<div class="container">
				<div class="panel-header " style="background-color: #4C3F54;">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h3 class="text-white pb-2 fw-bold"></h3>
							</div>
						</div>
					</div>
				</div>

				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="wizard-container wizard-round ">
								<div class="wizard-header">
									<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;ระบบบันทึกข้อมูลพื้นฐาน <i class="flaticon-right-arrow"></i> เพิ่มข้อมูล</div>
								</div>

								<form method="post" action="{{ url('/addstudentcore')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<div class="wizard-body">
										<div class="row">
											<ul class="wizard-menu nav nav-pills nav-primary">
												<li class="step">
													<a class="nav-link active" href="#info" data-toggle="tab" aria-expanded="true"><i class="fa fa-user mr-0"></i> ข้อมูลเบื้องต้น</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#address" data-toggle="tab"><i class="fa fa-home mr-2"></i> ที่อยู่</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#ability" data-toggle="tab"><i class="fa fa-award mr-2"></i> ความสามารถ</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#infostu" data-toggle="tab"><i class="fa fa-clipboard mr-2"></i> รายละเอียดนักเรียน</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#health" data-toggle="tab"><i class="fas fa-heart mr-2"></i> สุขภาพ</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#family" data-toggle="tab"><i class="fa fa-users mr-2"></i> ครอบครัว</a>
												</li>
											</ul>
										</div>

										<!-- Step 1 ข้อมูลเบื้องต้น -->
										<div class="tab-content">
											<div class="tab-pane active" id="info">
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวนักเรียน</label>
															<input id="Name" type="text" class="form-control" required name="student_id">
														</div>
													</div>
													<div class="col-6 col-md-5">
														<div class="form-group form-group-default">
															<label>แผนการเรียน (กรอกเฉพาะนักเรียนระดับชั้น ม.4 - ม.6)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_major" >
																<option>เลือก</option>
																<option value="วิทยาศาสตร์ - คณิตศาสตร์">วิทยาศาสตร์ - คณิตศาสตร์</option>
																<option value="ศิลป์ - คำนวณ">ศิลป์ - คำนวณ</option>
																<option value="ศิลป์ - จีน">ศิลป์ - จีน</option>
																<option value="พาณิชย์">พาณิชย์</option>
																<option value="ศิลป์ - อังกฤษ">ศิลป์ - อังกฤษ</option>
																<option value="ศิลปะ">ศิลปะ</option>
																<option value="เกษตร">เกษตร</option>
																<option value="ปวช.">ปวช.</option>
																<option value="คหกรรม">คหกรรม</option>
																<option value="วิทยาศาสตร์ - คอมพิวเตอร์">วิทยาศาสตร์ - คอมพิวเตอร์</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระดับชั้น</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_class" required>
																<option>เลือก</option>
																<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
																<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
																<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
																<option value="มัธยมศึกษาปีที่ 4">มัธยมศึกษาปีที่ 4</option>
																<option value="มัธยมศึกษาปีที่ 5">มัธยมศึกษาปีที่ 5</option>
																<option value="มัธยมศึกษาปีที่ 6">มัธยมศึกษาปีที่ 6</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ลำดับห้อง</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_room" required>
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
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เลขที่</label>
															<input id="Name" type="text" class="form-control" name="student_number" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input id="Name" type="text" class="form-control" name="student_id_card" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename" required>
																<option>เลือก</option>
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
															<input id="Name" type="text" class="form-control" name="fname" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input id="Name" type="text" class="form-control" name="surname" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_eng" required>
																<option>เลือก</option>
																<option value="mr">Mr.</option>
																<option value="mrs">Mrs.</option>
																<option value="miss">Miss</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อ(ภาษาอังกฤษ)</label>
															<input id="Name" type="text" class="form-control" name="name_eng" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง(ภาษาอังกฤษ)</label>
															<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_eng">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุล(ภาษาอังกฤษ)</label>
															<input id="Name" type="text" class="form-control" name="surname_eng" required>
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
															<select class="form-control" id="formGroupDefaultSelect" name="birth_year" required>
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
															<select class="form-control" id="formGroupDefaultSelect" name="birth_month" required>
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
															<select class="form-control" id="formGroupDefaultSelect" name="birth_day" required>
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
															<label>ชื่อเล่น</label>
															<input id="Name" type="text" class="form-control" name="nickname" required>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เพศสภาพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="gender" required>
																<option>เลือก</option>
																<option value="ชาย">ชาย</option>
																<option value="หญิง">หญิง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup" required>
																<option>เลือก</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="AB">AB</option>
																<option value="O">O</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ศาสนา</label>
															<input id="Name" type="text" class="form-control" name="religion" required>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เชื้อชาติ</label>
															<input id="Name" type="text" class="form-control" name="origin" required>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>สัญชาติ</label>
															<input id="Name" type="text" class="form-control" name="nationality" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
															<input id="Name" type="text" class="form-control" name="language" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input id="Name" type="text" class="form-control" name="tel_s" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อีเมล์ (name@example.com)</label>
															<input id="Name" type="text" class="form-control" name="email" required>
														</div>
													</div>
												</div>
											</div>
											<input name="score" value="100" hidden>
											<input name="status" value="กำลังศึกษาอยู่" hidden>

											<!-- Step 2 ที่อยู่ -->
											<div class="tab-pane" id="address">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ที่อยู่ตามทะเบียนบ้าน</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input id="Name" type="text" class="form-control" name="house_number" required>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input id="Name" type="text" class="form-control" name="group" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input id="Name" type="text" class="form-control" name="village" required>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input id="Name" type="text" class="form-control" name="alley" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input id="Name" type="text" class="form-control" name="street" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" name="subdistrict" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" name="district" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" name="province" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input id="Name" type="text" class="form-control" name="post" required>
														</div>
													</div>
												</div>

												<!-- ข้อมูลที่อยู่ปัจจุบัน -->
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ที่อยู่ปัจจุบัน</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-check">
															<label class="form-radio-label">
																<input class="form-radio-input" type="radio" name="optionsRadios" value="ที่อยู่ตามทะเบียนบ้าน" name="address_now" required>
																<span class="form-radio-sign">ที่อยู่ตามทะเบียนบ้าน</span>
															</label>
															<label class="form-radio-label ml-1">
																<input class="form-radio-input" type="radio" name="optionsRadios" value="ที่อยู่อื่น" name="address_now" required>
																<span class="form-radio-sign">ที่อยู่อื่น (โปรดระบุ)*</span>
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input id="Name" type="text" class="form-control" name="house_number_n">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input id="Name" type="text" class="form-control" name="group_n">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input id="Name" type="text" class="form-control" name="village_n">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input id="Name" type="text" class="form-control" name="alley_n">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input id="Name" type="text" class="form-control" name="street_n">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" name="subdistrict_n">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" name="district_n">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" name="province_n">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input id="Name" type="text" class="form-control" name="post_n">
														</div>
													</div>
												</div>
											</div>

											<!-- Step 3 ความสามารถ -->
											<div class="tab-pane" id="ability">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ด้านความสามารถ</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>สำเร็จการศึกษา จากโรงเรียน</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อโรงเรียนเดิม</label>
															<input id="Name" type="text" class="form-control" name="final_school" required>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จบชั้น</label>
															<select class="form-control" id="formGroupDefaultSelect" name="final_class" required>
																<option>เลือก</option>
																<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
																<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
																<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
																<option value="มัธยมศึกษาปีที่ 4">มัธยมศึกษาปีที่ 4</option>
																<option value="มัธยมศึกษาปีที่ 5">มัธยมศึกษาปีที่ 5</option>
																<option value="มัธยมศึกษาปีที่ 6">มัธยมศึกษาปีที่ 6</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ผลการเรียนเฉลี่ย</label>
															<input id="Name" type="text" class="form-control" name="avg_grade" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" name="f_subdistrict" required>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" name="f_district" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" name="f_province" required>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>วิชาที่ชอบ</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>1)</label>
															<input id="Name" type="text" class="form-control" name="like_subject1" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>2)</label>
															<input id="Name" type="text" class="form-control" name="like_subject2" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>3)</label>
															<input id="Name" type="text" class="form-control" name="like_subject3" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>4)</label>
															<input id="Name" type="text" class="form-control" name="like_subject4" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>วิชาที่ไม่ถนัด</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>1)</label>
															<input id="Name" type="text" class="form-control" name="unlike_subject1" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>2)</label>
															<input id="Name" type="text" class="form-control" name="unlike_subject2" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>3)</label>
															<input id="Name" type="text" class="form-control" name="unlike_subject3" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>4)</label>
															<input id="Name" type="text" class="form-control" name="unlike_subject4" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>เป้าหมายของชีวิตในอนาคต</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อยากประกอบอาชีพอะไร</label>
															<input id="Name" type="text" class="form-control" name="dream_job" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เพราะอะไร</label>
															<input id="Name" type="text" class="form-control" name="because" required>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ความสามารถพิเศษ</label>
															<input id="Name" type="text" class="form-control" name="talent" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<label style="margin-bottom: 5px;"><small>การอ่านเขียน (เลือก 1 หัวข้อ)</small></label>
														<div class="form-group" required>
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="read_write" value="อ่านเขียนคล่อง" class="selectgroup-input">
																	<span class="selectgroup-button">อ่านเขียนคล่อง</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="read_write" value="อ่านเขียนไม่คล่อง" class="selectgroup-input">
																	<span class="selectgroup-button">อ่านเขียนไม่คล่อง</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="read_write" value="อ่านเขียนพอได้" class="selectgroup-input">
																	<span class="selectgroup-button">อ่านเขียนพอได้</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="read_write" value="อ่านเขียนไม่ได้" class="selectgroup-input">
																	<span class="selectgroup-button">อ่านเขียนไม่ได้</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<label style="margin-bottom: 5px;"><small>นักเรียนไม่เข้าใจบทเรียนทุกวิชา (เลือก 1 หัวข้อ)</small></label>
														<div class="form-group" required>
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="understand" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="understand" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 4 รายละเอียด -->
											<div class="tab-pane" id="infostu">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default" required>
															<label>การเดินทางมาโรงเรียน</label>
															<select class="form-control" id="formGroupDefaultSelect" name="go_school">
																<option>เลือก</option>
																<option value="เดินเท้า">เดินเท้า</option>
																<option value="รถจักรยาน">รถจักรยาน</option>
																<option value="รถจักรยานยนต์">รถจักรยานยนต์</option>
																<option value="รถโดยสารประจำทาง">รถโดยสารประจำทาง</option>
																<option value="พ่อแม่หรือญาติมาส่ง">พ่อแม่หรือญาติมาส่ง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะเวลาเดินทาง (นาที)</label>
															<input id="Name" type="text" class="form-control" name="go_school_time" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
															<input id="Name" type="text" class="form-control" name="distance" required>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
															<input id="Name" type="text" class="form-control" name="long_distance" required>
														</div>
													</div>
												</div>
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<label style="margin-bottom: 5px;"><small>อุปกรณ์ที่มี (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
														<div class="form-group" required>
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="gadject" value="มือถือ/สมาร์ทโฟน" class="selectgroup-input">
																	<span class="selectgroup-button">มือถือ/สมาร์ทโฟน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="gadject" value="แท็บเล็ต" class="selectgroup-input">
																	<span class="selectgroup-button">แท็บเล็ต</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="gadject" value="โน๊ตบุ๊ค" class="selectgroup-input">
																	<span class="selectgroup-button">โน๊ตบุ๊ค</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="gadject" value="คอมพิวเตอร์แบบตั้งโต๊ะ" class="selectgroup-input">
																	<span class="selectgroup-button">คอมพิวเตอร์แบบตั้งโต๊ะ</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<label style="margin-bottom: 5px;"><small>อินเตอร์เน็ตที่ใช้ (เลือก 1 หัวข้อ)</small></label>
														<div class="form-group" required>
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="internet" value="อินเตอร์เน็ตไร้สาย" class="selectgroup-input">
																	<span class="selectgroup-button">อินเตอร์เน็ตไร้สาย</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="internet" value="อินเตอร์เน็ตสาย" class="selectgroup-input">
																	<span class="selectgroup-button">อินเตอร์เน็ตสาย</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลด้านอื่นๆ</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ความพิการ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="disabled">
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
															<label>ความด้อยโอกาส</label>
															<select class="form-control" id="formGroupDefaultSelect" name="unfortuned">
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
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>ความขาดแคลน (เลือกได้มากกว่า 1 หัวข้อ)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="lack" value="ขาดแคลนแบบเรียน" class="selectgroup-input">
																	<span class="selectgroup-button">ขาดแคลนแบบเรียน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="lack" value="ขาดแคลนเครื่องเขียน" class="selectgroup-input">
																	<span class="selectgroup-button">ขาดแคลนเครื่องเขียน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="lack" value="ขาดแคลนอาหารกลางวัน" class="selectgroup-input">
																	<span class="selectgroup-button">ขาดแคลนอาหารกลางวัน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="lack" value="ขาดแคลนเครื่องแบบ" class="selectgroup-input">
																	<span class="selectgroup-button">ขาดแคลนเครื่องแบบ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="lack" value="ไม่ขาดแคลน" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ขาดแคลน</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="friend_drug" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="friend_drug" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="sell_drug" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="sell_drug" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="sexual" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="sexual" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="not_parent" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="not_parent" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนชอบเที่ยวกลางคืน</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="dark_travel" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="dark_travel" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนเคยถูกล่วงละเมิดทางเพศ</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="sexual_harrasment" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="sexual_harrasment" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าโลกนี้ (เลือก 1 หัวข้อ)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="cute_world" value="น่าอยู่" class="selectgroup-input">
																	<span class="selectgroup-button">น่าอยู่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="cute_world" value="ไม่น่าอยู่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่น่าอยู่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<label style="margin-bottom: 5px;"><small>นักเรียนรู้สึกว่าตัวเอง (เลือก 1 หัวข้อ)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="rich_man" value="มีค่า" class="selectgroup-input">
																	<span class="selectgroup-button">มีค่า</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="rich_man" value="ไม่มีค่า" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่มีค่า</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
															<input id="Name" type="text" class="form-control" name="good_guy">
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
															<input id="Name" type="text" class="form-control" name="social_good">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้ (เลือกได้มากกว่า 1 อย่าง)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="ครอบครัว" class="selectgroup-input">
																	<span class="selectgroup-button">ครอบครัว</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การเรียน" class="selectgroup-input">
																	<span class="selectgroup-button">การเรียน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="สุขภาพ" class="selectgroup-input">
																	<span class="selectgroup-button">สุขภาพ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="เศรษฐกิจ" class="selectgroup-input">
																	<span class="selectgroup-button">เศรษฐกิจ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การคบเพื่อน" class="selectgroup-input">
																	<span class="selectgroup-button">การคบเพื่อน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การวางตัวในสังคม" class="selectgroup-input">
																	<span class="selectgroup-button">การวางตัวในสังคม</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การใช้เวลาว่าง" class="selectgroup-input">
																	<span class="selectgroup-button">การใช้เวลาว่าง</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การเลือกอาชีพ" class="selectgroup-input">
																	<span class="selectgroup-button">การเลือกอาชีพ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การเลือกศึกษาต่อ" class="selectgroup-input">
																	<span class="selectgroup-button">การเลือกศึกษาต่อ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="problem" value="การปรับตัวเข้ากับครู-อาจารย์ในโรงเรียน" class="selectgroup-input">
																	<span class="selectgroup-button">การปรับตัวเข้ากับครู-อาจารย์ในโรงเรียน</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร (เลือกได้มากกว่า 1 อย่าง)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="บิดา" class="selectgroup-input">
																	<span class="selectgroup-button">บิดา</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="มารดา" class="selectgroup-input">
																	<span class="selectgroup-button">มารดา</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="ครูแนะแนว" class="selectgroup-input">
																	<span class="selectgroup-button">ครูแนะแนว</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="ครูที่ปรึกษา" class="selectgroup-input">
																	<span class="selectgroup-button">ครูที่ปรึกษา</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="เพื่อน" class="selectgroup-input">
																	<span class="selectgroup-button">เพื่อน</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="help" value="อื่นๆ" class="selectgroup-input">
																	<span class="selectgroup-button">อื่นๆ</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 5 สุขภาพ -->
											<div class="tab-pane" id="health">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
												</div>

												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>น้ำหนัก</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="weight">
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ส่วนสูง</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="height">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>โรคประจำตัว</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="disease">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ยาที่แพ้</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="medicine_lose">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ยาที่ต้องรับประทานประจำ</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="medicine">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>วิธีแก้ไขเมื่อเกิดอาการ</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="remedy">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>นักเรียนมีภาวะทางสายตา (เลือกได้มากกว่า 1 อย่าง เช่น สายตาสั้น-เอียง)</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="ปกติ" class="selectgroup-input">
																	<span class="selectgroup-button">ปกติ</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="สายตาสั้น" class="selectgroup-input">
																	<span class="selectgroup-button">สายตาสั้น</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="สายตายาว" class="selectgroup-input">
																	<span class="selectgroup-button">สายตายาว</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="สายตาเอียง" class="selectgroup-input">
																	<span class="selectgroup-button">สายตาเอียง</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="ตาบอดสี" class="selectgroup-input">
																	<span class="selectgroup-button">ตาบอดสี</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="sight_eye" value="อื่นๆ" class="selectgroup-input">
																	<span class="selectgroup-button">อื่นๆ</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-3">
														<label style="margin-bottom: 5px;"><small>นักเรียนสวมแว่นตา</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="glasses" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="glasses" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<label style="margin-bottom: 5px;"><small>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="danger" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="danger" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางการได้ยิน</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="unsound" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="unsound" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<label style="margin-bottom: 5px;"><small>นักเรียนมีความบกพร่องทางร่างกาย</small></label>
														<div class="form-group">
															<div class="selectgroup selectgroup-secondary selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="radio" name="defective" value="ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ใช่</span>
																</label>
																<label class="selectgroup-item">
																	<input type="radio" name="defective" value="ไม่ใช่" class="selectgroup-input">
																	<span class="selectgroup-button">ไม่ใช่</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 6 ครอบครัว -->
											<div class="tab-pane" id="family">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_f">
																<option>เลือก</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="name_f">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_f">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="surname_f">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="id_father">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_f">
																<option>เลือก</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="age_f">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_f">
																<option>เลือก</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="O">O</option>
																<option value="AB">AB</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_f">
																<option>เลือก</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_f">
																<option>เลือก</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input id="Name" type="text" class="form-control" name="tel_f">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="house_number_f">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="group_f">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="village_f">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="alley_f">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="street_f">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="subdistrict_f">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="district_f">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="province_f">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="post_f">
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลมารดา</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_m">
																<option>เลือก</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="name_m">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_m">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="surname_m">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="id_mother">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_m">
																<option>เลือก</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="age_m">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_m">
																<option>เลือก</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="O">O</option>
																<option value="AB">AB</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_m">
																<option>เลือก</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_m">
																<option>เลือก</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input id="Name" type="text" class="form-control" name="tel_m">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="house_number_m">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="group_m">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="village_m">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="alley_m">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="street_m">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="subdistrict_m">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="district_m">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="province_m">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="post_m">
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-12">

														<div class="form-check">
															<label class="form-radio-label">
																<input class="form-radio-input" type="radio" name="optionsRadios" value="บิดา" name="parent">
																<span class="form-radio-sign">บิดา</span>
															</label>
															<label class="form-radio-label ml-1">
																<input class="form-radio-input" type="radio" name="optionsRadios" value="มารดา" name="parent">
																<span class="form-radio-sign">มารดา</span>
															</label>
															<label class="form-radio-label ml-1">
																<input class="form-radio-input" type="radio" name="optionsRadios" value="บุคคลอื่น" name="parent">
																<span class="form-radio-sign">บุคคลอื่น</span>
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_p">
																<option>เลือก</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="name_p">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_p">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="surname_p">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-5">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="id_parent">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_p">
																<option>เลือก</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="age_p">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ความสัมพันธ์ผู้ปกครอง</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="relationship_parent">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_p">
																<option>เลือก</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_p">
																<option>เลือก</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input id="Name" type="text" class="form-control" name="tel_p">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="house_number_p">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="group_p">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="village_p">
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="alley_p">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="street_p">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="subdistrict_p">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="district_p">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="province_p">
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input id="Name" type="text" class="form-control" placeholder="" name="post_p">
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัวเบื้องต้น</b></p>
												</div>

												<div class="row">
													<div class="col-6 col-md-8">
														<div class="form-group form-group-default">
															<label>สถานภาพสมรสของบิดามารดา</label>
															<select class="form-control" id="formGroupDefaultSelect" name="status_parent">
																<option>เลือก</option>
																<option value="สมรส">สมรส</option>
																<option value="หย่าร้าง">หย่าร้าง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>สถานะผู้ปกครองนักเรียน</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_parent">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_blood">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนพี่ชาย</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_brother">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนน้องชาย</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_son">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนพี่สาว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_sister">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนน้องสาว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_son2">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนเป็นบุตรคนที่</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_parent">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_study">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_job">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_house">
																<option>เลือก</option>
																<option value="0">0</option>
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
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-9">
														<div class="form-group form-group-default">
															<label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
															<input id="Name" type="text" class="form-control" name="student_job">
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_money">
																<option>เลือก</option>
																<option value="0 - 20">0 - 20</option>
																<option value="21 - 40">21 - 40</option>
																<option value="41 - 60">41 - 60</option>
																<option value="61 - 80">61 - 80</option>
																<option value="81 - 100">81 - 100</option>
																<option value="มากกว่า 100">มากกว่า 100</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="parent_money">
																<option>เลือก</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
															<input id="Name" type="text" class="form-control" name="parent_total">
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เกี่ยวข้องเป็น</label>
															<input id="Name" type="text" class="form-control" name="parent_house">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>การหารายได้ด้วยตนเอง</small></label>
														<div class="form-check">
															<label class="form-radio-label">
																<input class="form-radio-input" type="radio" name="job_study" value="ไม่มี">
																<span class="form-radio-sign">ไม่มี</span>
															</label><br><br>
															<label class="form-radio-label">
																<input class="form-radio-input" type="radio" name="job_study" value="มี">
																<span class="form-radio-sign">มี</span>
															</label>
															<div class="form-group form-group-default">
																<label>โปรดระบุ (หารายได้จากอะไร)</label>
																<input id="Name" type="text" class="form-control" name="job_detail">
															</div>
															<div class="form-group form-group-default">
																<label>รายได้เฉลี่ยวันละ (บาท)</label>
																<select class="form-control" id="formGroupDefaultSelect" name="total_study">
																	<option>เลือก</option>
																	<option value="0 - 100">0 - 100</option>
																	<option value="101 - 150">101 - 150</option>
																	<option value="151 - 200">151 - 200</option>
																	<option value="201 - 250">201 - 250</option>
																	<option value="251 - 300">251 - 300</option>
																	<option value="มากกว่า 300">มากกว่า 300</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>


										</div>
									</div>

									<div class="wizard-action">
										<div class="pull-left">
											<input type="button" class="btn btn-previous btn-fill btn-black" name="previous" value="ย้อนกลับ">
										</div>
										<div class="pull-right">
											<input type="button" class="btn btn-next btn-info" name="next" value="ถัดไป">
											<!-- <input type="submit" class="btn btn-finish btn-info" name="finish" value="ยืนยัน" style="display: none;"> -->
											<button type="submit" class="btn btn-finish btn-info" name="finish" value="ยืนยัน" style="display: none;">ยืนยัน</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
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
	<script src="..../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="..../assets/js/core/popper.min.js"></script>
	<script src="..../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="..../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="..../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Moment JS -->
	<script src="..../assets/js/plugin/moment/moment.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="..../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="..../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- DateTimePicker -->
	<script src="..../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 -->
	<script src="..../assets/js/plugin/select2/select2.full.min.js"></script>
	<!-- Bootstrap Wizard -->
	<script src="..../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>
	<!-- jQuery Validation -->
	<script src="..../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<!-- Atlantis JS -->
	<script src="..../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="..../assets/js/setting-demo2.js"></script>

	<script>
		var $validator = $('.wizard-container form').validate({
			validClass: "success",
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			}
		})

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