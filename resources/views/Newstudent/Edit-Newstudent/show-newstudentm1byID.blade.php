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
										<div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i>&nbsp; ข้อมูลประจำตัวของ {{$data->prename}}{{$data->fname}} {{$data->surname}}</div>
										<a href='{{ url("/EditNewstudentM1/{$data->id}" )}}' class="btn btn-warning " style="margin-left:auto;"><strong>แก้ไขข้อมูล</strong></a>
									</div>
								</div>
								<!-- ข้อมูลส่วนตัว -->
								<div class="card-body">


									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<input id="prename" type="text" class="form-control" placeholder="" value="{{$data->prename}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ชื่อภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fname}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->nameCen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->surname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-12">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->idNumber}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->year}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>เดือน:</label>
												@if ($data->mounth == '01')
												<input id="Name" type="text" class="form-control" placeholder="" value="มกราคม" readonly>
												@elseif ($data->mounth == '02')
												<input id="Name" type="text" class="form-control" placeholder="" value="กุมภาพันธ์" readonly>
												@elseif ($data->mounth == '03')
												<input id="Name" type="text" class="form-control" placeholder="" value="มีนาคม" readonly>
												@elseif ($data->mounth == '04')
												<input id="Name" type="text" class="form-control" placeholder="" value="เมษายน" readonly>
												@elseif ($data->mounth == '05')
												<input id="Name" type="text" class="form-control" placeholder="" value="พฤษภาคม" readonly>
												@elseif ($data->mounth == '06')
												<input id="Name" type="text" class="form-control" placeholder="" value="มิถุนายน" readonly>
												@elseif ($data->mounth == '07')
												<input id="Name" type="text" class="form-control" placeholder="" value="กรกฎาคม" readonly>
												@elseif ($data->mounth == '08')
												<input id="Name" type="text" class="form-control" placeholder="" value="สิงหาคม" readonly>
												@elseif ($data->mounth == '09')
												<input id="Name" type="text" class="form-control" placeholder="" value="กันยายน" readonly>
												@elseif ($data->mounth == '10')
												<input id="Name" type="text" class="form-control" placeholder="" value="ตุลาคม" readonly>
												@elseif ($data->mounth == '11')
												<input id="Name" type="text" class="form-control" placeholder="" value="พฤษจิกายน" readonly>
												@elseif ($data->mounth == '12')
												<input id="Name" type="text" class="form-control" placeholder="" value="ธันวาคม" readonly>
												@endif
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>วัน:</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->day}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>เพศสภาพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->sex}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ศาสนา</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->religion}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>เชื้อชาติ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->origin}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-2">
											<div class="form-group form-group-default">
												<label>สัญชาติ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->nationality}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->tel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->houseNumber}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>หมู่</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->street}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>ซอย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->bloc}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>ถนน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->road}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>ตำบล/แขวง</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->subDistrict}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>อำเภอ/เขต</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->district}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>จังหวัด</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->province}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>รหัสไปรษณีย์</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->post}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_prename}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ชื่อภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fatherName}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->fatherNamecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fatherSurname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fatherId}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>อาชีพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fatherJob}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->fatherTel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_prename}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ชื่อภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->motherName}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->motherNamecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->motherSurname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->motherId}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>อาชีพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->motherJob}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->motherTel}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-12">
											<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

											<div class="form-group form-group-default">
												<label>ผู้ปกครอง</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_prename}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ชื่อภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parentName}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->parentNamecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parentSurname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-12">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parentId}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ความสัมพันธ์ผู้ปกครอง</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_status}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>อาชีพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parentJob}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parentTel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->finalSchool}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ตำบล/แขวง</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->finalSchoolSubDistrict}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>อำเภอ/เขต</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->finalSchoolDistrict}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>จังหวัด</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->finalSchoolProvince}}" readonly>
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
														<label>ผู้ด้อยโอกาส/ฐานะยากจน</label>
														<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->poorPerson}}" readonly>
													</div>
												</div>
												<div class="col-6 col-md-4">
													<div class="form-group form-group-default">
														<label>ผู้พิการ/เด็กพิเศษ</label>
														<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->disabled}}" readonly>
													</div>
												</div>
												<div class="col-6 col-md-4">
													<div class="form-group form-group-default">
														<label>อื่นๆ</label>
														<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->etc}}" readonly>
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div>
								<div class="card-footer" align="center">
									<a href='{{ url("/check/statusM1" )}}' class="btn btn-danger "><strong>ย้อนกลับ</strong></a>
								</div><br>
							</div>
						</div>
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