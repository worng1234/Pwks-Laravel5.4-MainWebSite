<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/eim/public/assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/eim/public/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Prompt:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/eim/public/assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->

	<link rel="stylesheet" href="/eim/public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/eim/public/assets/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/eim/public/assets/css/demo.css">
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
						<li class="nav-item " >
							<a class="nav-link" href="{{ url('/Contact')}}">
								<i class="link-icon icon-bubbles"></i>
								<span class="menu-title">ติดต่อเรา</span>
							</a>
						</li>
						<li class="nav-item " >
							<a class="nav-link" href="https://www.pwks.ac.th/" target="_blank">
								<i class="link-icon icon-star"></i>
								<span class="menu-title">Go Pwks!</span>
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
										<div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i>&nbsp; ข้อมูลประจำตัวของ {{$newstudentm4Model->prename}}{{$newstudentm4Model->fname}} {{$newstudentm4Model->surname}}</div>
									</div>
								</div>
								<form action="{{ url('/updateNewstudentM4', $newstudentm4Model->id)}}" method="POST" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<!-- ข้อมูลส่วนตัว -->
									<div class="card-body">

										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->prename}}" name="prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->fname}}" name="fname">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->name_cen}}" name="name_cen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->surname}}" name="surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->id_number}}" name="id_number">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->year}}" name="year">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>เดือน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="mounth">
														<option value="01" <?php if ($newstudentm4Model->mounth == "01") { ?> selected="selected" <?php } ?>>มกราคม</option>
														<option value="02" <?php if ($newstudentm4Model->mounth == "02") { ?> selected="selected" <?php } ?>>กุมภาพันธ์</option>
														<option value="03" <?php if ($newstudentm4Model->mounth == "03") { ?> selected="selected" <?php } ?>>มีนาคม</option>
														<option value="04" <?php if ($newstudentm4Model->mounth == "04") { ?> selected="selected" <?php } ?>>เมษายน</option>
														<option value="05" <?php if ($newstudentm4Model->mounth == "05") { ?> selected="selected" <?php } ?>>พฤษภาคม</option>
														<option value="06" <?php if ($newstudentm4Model->mounth == "06") { ?> selected="selected" <?php } ?>>มิถุนายน</option>
														<option value="07" <?php if ($newstudentm4Model->mounth == "07") { ?> selected="selected" <?php } ?>>กรกฎาคม</option>
														<option value="08" <?php if ($newstudentm4Model->mounth == "08") { ?> selected="selected" <?php } ?>>สิงหาคม</option>
														<option value="09" <?php if ($newstudentm4Model->mounth == "09") { ?> selected="selected" <?php } ?>>กันยายน</option>
														<option value="10" <?php if ($newstudentm4Model->mounth == "10") { ?> selected="selected" <?php } ?>>ตุลาคม</option>
														<option value="11" <?php if ($newstudentm4Model->mounth == "11") { ?> selected="selected" <?php } ?>>พฤษจิกายน</option>
														<option value="12" <?php if ($newstudentm4Model->mounth == "12") { ?> selected="selected" <?php } ?>>ธันวาคม</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>วัน:</label>
													<select class="form-control" id="formGroupDefaultSelect" name="day">
														<option value="01" <?php if ($newstudentm4Model->day == "01") { ?> selected="selected" <?php } ?>>1</option>
														<option value="02" <?php if ($newstudentm4Model->day == "02") { ?> selected="selected" <?php } ?>>2</option>
														<option value="03" <?php if ($newstudentm4Model->day == "03") { ?> selected="selected" <?php } ?>>3</option>
														<option value="04" <?php if ($newstudentm4Model->day == "04") { ?> selected="selected" <?php } ?>>4</option>
														<option value="05" <?php if ($newstudentm4Model->day == "05") { ?> selected="selected" <?php } ?>>5</option>
														<option value="06" <?php if ($newstudentm4Model->day == "06") { ?> selected="selected" <?php } ?>>6</option>
														<option value="07" <?php if ($newstudentm4Model->day == "07") { ?> selected="selected" <?php } ?>>7</option>
														<option value="08" <?php if ($newstudentm4Model->day == "08") { ?> selected="selected" <?php } ?>>8</option>
														<option value="09" <?php if ($newstudentm4Model->day == "09") { ?> selected="selected" <?php } ?>>9</option>
														<option value="10" <?php if ($newstudentm4Model->day == "10") { ?> selected="selected" <?php } ?>>10</option>
														<option value="11" <?php if ($newstudentm4Model->day == "11") { ?> selected="selected" <?php } ?>>11</option>
														<option value="12" <?php if ($newstudentm4Model->day == "12") { ?> selected="selected" <?php } ?>>12</option>
														<option value="13" <?php if ($newstudentm4Model->day == "13") { ?> selected="selected" <?php } ?>>13</option>
														<option value="14" <?php if ($newstudentm4Model->day == "14") { ?> selected="selected" <?php } ?>>14</option>
														<option value="15" <?php if ($newstudentm4Model->day == "15") { ?> selected="selected" <?php } ?>>15</option>
														<option value="16" <?php if ($newstudentm4Model->day == "16") { ?> selected="selected" <?php } ?>>16</option>
														<option value="17" <?php if ($newstudentm4Model->day == "17") { ?> selected="selected" <?php } ?>>17</option>
														<option value="18" <?php if ($newstudentm4Model->day == "18") { ?> selected="selected" <?php } ?>>18</option>
														<option value="19" <?php if ($newstudentm4Model->day == "19") { ?> selected="selected" <?php } ?>>19</option>
														<option value="20" <?php if ($newstudentm4Model->day == "20") { ?> selected="selected" <?php } ?>>20</option>
														<option value="21" <?php if ($newstudentm4Model->day == "21") { ?> selected="selected" <?php } ?>>21</option>
														<option value="22" <?php if ($newstudentm4Model->day == "22") { ?> selected="selected" <?php } ?>>22</option>
														<option value="23" <?php if ($newstudentm4Model->day == "23") { ?> selected="selected" <?php } ?>>23</option>
														<option value="24" <?php if ($newstudentm4Model->day == "24") { ?> selected="selected" <?php } ?>>24</option>
														<option value="25" <?php if ($newstudentm4Model->day == "25") { ?> selected="selected" <?php } ?>>25</option>
														<option value="26" <?php if ($newstudentm4Model->day == "26") { ?> selected="selected" <?php } ?>>26</option>
														<option value="27" <?php if ($newstudentm4Model->day == "27") { ?> selected="selected" <?php } ?>>27</option>
														<option value="28" <?php if ($newstudentm4Model->day == "28") { ?> selected="selected" <?php } ?>>28</option>
														<option value="29" <?php if ($newstudentm4Model->day == "29") { ?> selected="selected" <?php } ?>>29</option>
														<option value="30" <?php if ($newstudentm4Model->day == "30") { ?> selected="selected" <?php } ?>>30</option>
														<option value="31" <?php if ($newstudentm4Model->day == "31") { ?> selected="selected" <?php } ?>>31</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เพศสภาพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->sex}}" name="sex">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ศาสนา</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->religion}}" name="religion">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เชื้อชาติ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->origin}}" name="origin">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>สัญชาติ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->nationality}}" name="nationality">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->tel}}" name="tel">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->house_number}}" name="house_number">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>หมู่</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->bloc}}" name="bloc">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ซอย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->street}}" name="street">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ถนน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->street}}" name="street">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->sub_district}}" name="sub_district">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->district}}" name="district">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->province}}" name="province">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>รหัสไปรษณีย์</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->post}}" name="post">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_prename}}" name="father_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_name}}" name="father_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->father_namecen}}" name="father_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_surname}}" name="father_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_id}}" name="father_id">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_job}}" name="father_job">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->father_tel}}" name="father_tel">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_prename}}" name="mother_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_name}}" name="mother_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->mother_namecen}}" name="mother_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_surname}}" name="mother_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_id}}" name="mother_id">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_job}}" name="mother_job">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->mother_tel}}" name="mother_tel">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

												<div class="form-group form-group-default">
													<label>ผู้ปกครอง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent}}" name="parent">

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_prename}}" name="parent_prename">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_name}}" name="parent_name">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm4Model->parent_namecen}}" name="parent_namecen">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_surname}}" name="parent_surname">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_id}}" name="parent_id">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ความสัมพันธ์ผู้ปกครอง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_status}}" name="parent_status">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_job}}" name="parent_job">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->parent_tel}}" name="parent_tel">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school}}" name="final_school">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_sub_district}}" name="final_school_sub_district">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_district}}" name="final_school_district">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->final_school_province}}" name="final_school_province">
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
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->student_id}}" name="student_id">
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
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>*ความพิการ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="disabled">
																<option value="ไม่มี" <?php if ($newstudentm4Model->disabled == "ไม่มี") { ?> selected="selected" <?php } ?>>ไม่มี</option>
																<option value="การมองเห็น" <?php if ($newstudentm4Model->disabled == "การมองเห็น") { ?> selected="selected" <?php } ?>>การมองเห็น</option>
																<option value="การได้ยิน" <?php if ($newstudentm4Model->disabled == "การได้ยิน") { ?> selected="selected" <?php } ?>>การได้ยิน</option>
																<option value="สติปัญญา" <?php if ($newstudentm4Model->disabled == "สติปัญญา") { ?> selected="selected" <?php } ?>>สติปัญญา</option>
																<option value="ร่างกาย/สุขภาพ" <?php if ($newstudentm4Model->disabled == "ร่างกาย/สุขภาพ") { ?> selected="selected" <?php } ?>>ร่างกาย/สุขภาพ</option>
																<option value="การเรียนรู้" <?php if ($newstudentm4Model->disabled == "การเรียนรู้") { ?> selected="selected" <?php } ?>>การเรียนรู้</option>
																<option value="การพูด/ภาษา" <?php if ($newstudentm4Model->disabled == "การพูด/ภาษา") { ?> selected="selected" <?php } ?>>การพูด/ภาษา</option>
																<option value="พฤติกรรม/อารมณ์" <?php if ($newstudentm4Model->disabled == "พฤติกรรม/อารมณ์") { ?> selected="selected" <?php } ?>>พฤติกรรม/อารมณ์</option>
																<option value="ออทิสติค" <?php if ($newstudentm4Model->disabled == "ออทิสติค") { ?> selected="selected" <?php } ?>>ออทิสติค</option>
																<option value="พิการซ้ำซ้อน" <?php if ($newstudentm4Model->disabled == "พิการซ้ำซ้อน") { ?> selected="selected" <?php } ?>>พิการซ้ำซ้อน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>*ความด้อยโอกาส</label>
															<select class="form-control" id="formGroupDefaultSelect" name="poor_person" required>
																<option value="ไม่มี" <?php if ($newstudentm4Model->disabled == "ไม่มี") { ?> selected="selected" <?php } ?>>ไม่มี</option>
																<option value="ถูกบังคับขายแรงงาน" <?php if ($newstudentm4Model->disabled == "ถูกบังคับขายแรงงาน") { ?> selected="selected" <?php } ?>>ถูกบังคับขายแรงงาน</option>
																<option value="อยู่ในธุรกิจทางเพศ" <?php if ($newstudentm4Model->disabled == "อยู่ในธุรกิจทางเพศ") { ?> selected="selected" <?php } ?>>อยู่ในธุรกิจทางเพศ</option>
																<option value="ถูกทอดทิ้ง" <?php if ($newstudentm4Model->disabled == "ถูกทอดทิ้ง") { ?> selected="selected" <?php } ?>>ถูกทอดทิ้ง</option>
																<option value="เด็กเร่ร่อน" <?php if ($newstudentm4Model->disabled == "เด็กเร่ร่อน") { ?> selected="selected" <?php } ?>>เด็กเร่ร่อน</option>
																<option value="ได้รับผลกระทบจากเอดส์" <?php if ($newstudentm4Model->disabled == "ได้รับผลกระทบจากเอดส์") { ?> selected="selected" <?php } ?>>ได้รับผลกระทบจากเอดส์</option>
																<option value="ชนกลุ่มน้อย" <?php if ($newstudentm4Model->disabled == "ชนกลุ่มน้อย") { ?> selected="selected" <?php } ?>>ชนกลุ่มน้อย</option>
																<option value="ถูกทำร้ายทารุณ" <?php if ($newstudentm4Model->disabled == "ถูกทำร้ายทารุณ") { ?> selected="selected" <?php } ?>>ถูกทำร้ายทารุณ</option>
																<option value="เด็กยากจน" <?php if ($newstudentm4Model->disabled == "เด็กยากจน") { ?> selected="selected" <?php } ?>>เด็กยากจน</option>
																<option value="เด็กที่มีปัญหาเกี่ยวกับยาเสพติด" <?php if ($newstudentm4Model->disabled == "เด็กที่มีปัญหาเกี่ยวกับยาเสพติด") { ?> selected="selected" <?php } ?>>เด็กที่มีปัญหาเกี่ยวกับยาเสพติด</option>
																<option value="เด็กกำพร้า" <?php if ($newstudentm4Model->disabled == "เด็กกำพร้า") { ?> selected="selected" <?php } ?>>เด็กกำพร้า</option>
																<option value="ทำงานรับผิดชอบตนเองและครอบครัว" <?php if ($newstudentm4Model->disabled == "ทำงานรับผิดชอบตนเองและครอบครัว") { ?> selected="selected" <?php } ?>>ทำงานรับผิดชอบตนเองและครอบครัว</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อื่นๆ</label>
															<input id="Name" type="text" class="form-control" placeholder="" value="{{$newstudentm4Model->etc}}" name="etc">
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- เลือกเรียนแผนการเรียนรู้ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>เลือกเรียนแผนการเรียนรู้ &nbsp;&nbsp;( เลือกอันดับ 1 - 7 ตามลำดับแผนการเรียนรู้ที่เลือก )</b></p>
										</div>
										<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 1</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major1->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 2</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major2->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 3</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major3->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 4</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major4->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 5</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major5->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 6</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major6->class_major_name}}" readonly>
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 7</label>
													<input id="Name" type="text" class="form-control" placeholder="" value="{{$m4major7->class_major_name}}" readonly>
												</div>
											</div>
										</div>

										<div class="card-footer" align="center">
											<p style="text-align:center">หากทำการแก้ไขข้อมูลเรียบร้อยแล้ว<br>
												ให้กดปุ่ม &nbsp;<b>&quot;ยืนยัน&quot;</b>&nbsp; ด้านล่าง</p>
											<button type="submit" class="btn btn-success"><strong>ยืนยัน</strong></button>
											<a href='{{ url("/ShowNewstudentM4/{$newstudentm4Model->id}" )}}' class="btn btn-danger" style="margin-left: 20px;"><strong>ย้อนกลับ</strong></a>
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
	<script src="/eim/public/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/eim/public/assets/js/core/popper.min.js"></script>
	<script src="/eim/public/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="/eim/public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/eim/public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/eim/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="/eim/public/assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->

	<script src="/eim/public/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/eim/public/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/eim/public/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/eim/public/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="/eim/public/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/eim/public/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/eim/public/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="/eim/public/assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="/eim/public/assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="/eim/public/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="/eim/public/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="/eim/public/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="/eim/public/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="/eim/public/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="/eim/public/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="/eim/public/assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="/eim/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/eim/public/assets/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/eim/public/assets/js/demo.js"></script>
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
						text: "ยืนยันการแก้ไขข้อมูล",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'ตกลง',
								className: 'btn btn-success',
								type: 'submit'
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
								text: 'สามารถตรวจสอบการแก้ไขข้อมูลได้ที่น้าตรวจสอบข้อมูล',
								type: 'success',
								buttons: {
									confirm: {
										className: 'btn btn-success'
									}
								}
							}).then(function() {
								window.location = '/check/statusM4';
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