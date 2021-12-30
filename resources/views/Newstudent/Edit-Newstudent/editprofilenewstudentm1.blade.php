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
										<a href="{{url('/Addstudentcore')}}">เพิ่มข้อมูลนักเรียนพื้นฐาน</a>
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
										<div class="card-title"><i class="fas fa-id-card-alt"></i>&nbsp; ข้อมูลประจำตัวของ {{$newstudentm1Model->prename}}{{$newstudentm1Model->fname}} {{$newstudentm1Model->surname}}</div>
									</div>
								</div>
								<form action="{{ url('/updateNewstudentM1', $newstudentm1Model->id)}}" method="POST" enctype="multipart/form-data">
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
													<input name="prename" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->prename}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="fname" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fname}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="nameCen" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm1Model->nameCen}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="surname" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->surname}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="idNumber" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->idNumber}}">
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
													<input name="year" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->year}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>เดือน:</label>
													<input name="mounth" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->mounth}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>วัน:</label>
													<input name="day" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->day}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เพศสภาพ</label>
													<input name="sex" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->sex}}">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ศาสนา</label>
													<input name="religion" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->religion}}">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>เชื้อชาติ</label>
													<input name="origin" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->origin}}">
												</div>
											</div>
											<div class="col-6 col-md-2">
												<div class="form-group form-group-default">
													<label>สัญชาติ</label>
													<input name="nationality" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->nationality}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="tel" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->tel}}">
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
													<input name="houseNumber" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->houseNumber}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>หมู่</label>
													<input name="street" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->street}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ซอย</label>
													<input name="bloc" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->bloc}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ถนน</label>
													<input name="road" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->road}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input name="subDistrict" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->subDistrict}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input name="district" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->district}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input name="province" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->province}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>รหัสไปรษณีย์</label>
													<input name="post" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->post}}">
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
													<input name="father_prename" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->father_prename}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="fatherName" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fatherName}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="fatherNamecen" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm1Model->fatherNamecen}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="fatherSurname" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fatherSurname}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="fatherId" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fatherId}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="fatherJob" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fatherJob}}">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="fatherTel" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->fatherTel}}">
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
													<input name="mother_prename" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->mother_prename}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="motherName" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->motherName}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="motherNamecen" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm1Model->motherNamecen}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="motherSurname" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->motherSurname}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="motherId" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->motherId}}">
												</div>
											</div>
											<div class="col-6 col-md-3">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="motherJob" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->motherJob}}">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="motherTel" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->motherTel}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<label style="margin-bottom: 5px;"><small>ชื่อ/นามสกุล ผู้ปกครอง</small></label>

												<div class="form-group form-group-default">
													<label>ผู้ปกครอง</label>
													<input name="parent" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parent}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>คำนำหน้าชื่อ</label>
													<input name="parent_prename" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parent_prename}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ชื่อภาษาไทย</label>
													<input name="parentName" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parentName}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group form-group-default">
													<label>ชื่อกลาง</label>
													<input name="parentNamecen" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$newstudentm1Model->parentNamecen}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>นามสกุลภาษาไทย</label>
													<input name="parentSurname" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parentSurname}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-12">
												<div class="form-group form-group-default">
													<label>เลขประจำตัวประชาชน</label>
													<input name="parentId" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parentId}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ความสัมพันธ์ผู้ปกครอง</label>
													<input name="parent_status" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parent_status}}">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อาชีพ</label>
													<input name="parentJob" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parentJob}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
													<input name="parentTel" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->parentTel}}">
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
													<input name="finalSchool" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->finalSchool}}">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>ตำบล/แขวง</label>
													<input name="finalSchoolSubDistrict" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->finalSchoolSubDistrict}}">
												</div>
											</div>
											<div class="col-6 col-md-4">
												<div class="form-group form-group-default">
													<label>อำเภอ/เขต</label>
													<input name="finalSchoolDistrict" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->finalSchoolDistrict}}">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group form-group-default">
													<label>จังหวัด</label>
													<input name="finalSchoolProvince" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->finalSchoolProvince}}">
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
															<input name="poorPerson" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->poorPerson}}">
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ผู้พิการ/เด็กพิเศษ</label>
															<input name="disabled" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->disabled}}">
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อื่นๆ</label>
															<input name="etc" type="text" class="form-control" placeholder="" value="{{$newstudentm1Model->etc}}">
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
															<input type="file" class="form-control-file" id="profile_img" name="profile_img" >
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
															<input type="file" class="form-control-file" id="id_card_student" name="id_card_student" >
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
															<input type="file" class="form-control-file" id="house_student" name="house_student" >
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">ใบ ปพ. หรือหนังสือรับรองการเป็นนักเรียน</label>
															<input type="file" class="form-control-file" id="student_submit" name="student_submit">
														</div>
													</div>

													<!-- สถานะการสมัคร -->
													<div hidden>
														<input type="text" name="status_rigis" value="02">
													</div>
													<div hidden>
														<input type="text" name="status_picall" value="02">
													</div>
													<div hidden>
														<input type="text" name="status_pic" value="02">
													</div>
													<div hidden>
														<input type="text" name="status_idnumber_pic" value="02">
													</div>
													<div hidden>
														<input type="text" name="status_house_pic" value="02">
													</div>
													<div hidden>
														<input type="text" name="status_grade_pic" value="02">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer" align="center">
										<button type="submit" class="btn btn-success" id="alert_demo_7"><strong>ยืนยัน</strong></button>
										<a href='{{ url("/ShowNewstudentM1/{$newstudentm1Model->id}" )}}' class="btn btn-danger" style="margin-left: 20px;"><strong>ย้อนกลับ</strong></a>
									</div><br>
							</div>
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
							window.location = '/check/statusM1';
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