<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/logo3.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/assets/css/fonts.min.css']
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
					<img src="/assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
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


						<!-- <li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-id-card-alt"></i>
								<p>รับสมัครนักเรียนใหม่</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="agreement-form-m1.html">
											<span class="sub-item">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</span>
										</a>
									</li>
									<li>
										<a href="agreement-form-m4.html">
											<span class="sub-item">สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->
						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#agree">
								<i class="fas fa-id-card-alt"></i>
								<p>จัดการข้อมูลนักเรียนใหม่</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="agree">
								<ul class="nav nav-collapse">
									<li>
									<li class="active">
										<a href="{{ route('SortNewstudentM1.index')}}">
											<span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</span>
										</a>
									</li>
									<li>
										<a href="{{ route('SortNewstudentM4.index')}}">
											<span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</span>
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


				<form action="{{ url('/updateNewstudentM1', $newstudentm1Model->id)}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					{{ method_field('POST') }}
					<div class="page-inner mt--5">
						<div class="row mt--2">
							<div class="col-md-12">
								<div class="card full-height">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title">ข้อมูลประจำตัวของ {{$newstudentm1Model->prename}}{{$newstudentm1Model->fname}} {{$newstudentm1Model->surname}}</div>
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
															<input type="file" class="form-control-file" id="pic" name="pic" value="{{$newstudentm1Model->pic}}">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
															<input type="file" class="form-control-file" id="id_number_pic" name="id_number_pic" value="{{$newstudentm1Model->id_number_pic}}">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
															<input type="file" class="form-control-file" id="house_pic" name="house_pic" value="{{$newstudentm1Model->house_pic}}">
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group">
															<label for="exampleFormControlFile1">ใบ ปพ.</label>
															<input type="file" class="form-control-file" id="grade_pic" name="grade_pic" value="{{$newstudentm1Model->grade_pic}}">
														</div>
													</div>

													<!-- สถานะการสมัคร -->
													<div hidden>
														<input type="text" name="status_rigis" value="รอยืนยันการสมัคร">
													</div>
													<div hidden>
														<input type="text" name="status_picall" value="รอตรวจสอบ">
													</div>
													<div hidden>
														<input type="text" name="status_pic" value="รอตรวจสอบ">
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
											</div>
										</div>


										<div class="card-footer" align="center">
											<button type="submit" class="btn btn-success"><strong>ยืนยัน</strong></button>
											<a href='{{ url("/ShowNewstudentM1/{$newstudentm1Model->id}" )}}' class="btn btn-danger" style="margin-left: 20px;"><strong>ย้อนกลับ</strong></a>
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
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/assets/js/setting-demo.js"></script>
	<script src="/assets/js/demo.js"></script>
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