<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon2.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
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

	<style>
		/* Ensure that the demo table scrolls */
		th,
		td {
			white-space: nowrap;
		}

		div.dataTables_wrapper {
			margin: 0 auto;
		}

		div.container {
			width: 80%;
		}

		.bgimgheader {

			background-repeat: repeat;
			background-position: center;
			position: relative;
		}
	</style>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">

</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="{{ url('/academic')}}" class="logo">
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
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" href="{{ route('academic.logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<i class="fas fa-unlock"></i> ออกระบบ
							</a>

							<form id="logout-form" action="{{ route('academic.logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
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

							<label><b>ชื่อ-นามสกุล :</b>{{ Auth::guard('academic')->user()->prename}}{{ Auth::guard('academic')->user()->fname}} </br>{{ Auth::guard('academic')->user()->surname}}</label>
							<label><b>ตำแหน่ง :</b> เจ้าหน้าที่ผ่ายวิชาการ</label>
							<label><b>ภาคเรียนที่ :</b> {{$school_year->term}}/{{$school_year->study_year}}</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

					<li class="nav-item">
							<a href="{{ url('/academic')}}">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<li class="nav-item ">
							<a href='{{ url("/RegisterYear/1")}}'>
								<i class="fas fa-calendar-alt"></i>
								<p>กำหนดปีการศึกษา</br>สำหรับสมัครเข้าเรียน</p>
							</a>
						</li>

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#agree">
								<i class="fas fa-id-card-alt"></i>
								<p>หลักฐานและข้อมูล</br>การสมัครเข้าเรียน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="agree">
								<ul class="nav nav-collapse">
									<li >
										<a data-toggle="collapse" href="#formob1">
											<span class="sub-item">ยังไม่ได้ตรวจสอบ</span>
											<span class="caret"></span>
										</a>
										<div class="collapse show" id="formob1">
											<ul class="nav nav-collapse subnav">
												<li >
													<a href="{{ url('/UnsubmitObject/M1')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 1</span>
													</a>
												</li>
												<li class="active">
													<a href="{{ url('/UnsubmitObject/M4')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#formob2">
											<span class="sub-item">ตรวจสอบแล้ว</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="formob2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/SubmitObject/M1')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 1</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/SubmitObject/M4')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item ">
							<a data-toggle="collapse" href="#move">
								<i class="fas fa-file-alt"></i>
								<p>หลักฐานรายงานตัวและ</br>โอนย้ายข้อมูล</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="move">
								<ul class="nav nav-collapse">
								<li>
										<a data-toggle="collapse" href="#formob3">
											<span class="sub-item">ยังไม่ได้ตรวจสอบ</span>
											<span class="caret"></span>
										</a>
										<div class="collapse " id="formob3">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/documentUnsubmit/M1')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 1</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/documentUnsubmit/M4')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#formob4">
											<span class="sub-item">ตรวจสอบแล้วแต่ยังไม่ได้โอนย้าย</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="formob4">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/submitNotTranfer/M1')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 1</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/submitNotTranfer/M4')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#formob5">
											<span class="sub-item">โอนย้ายแล้ว</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="formob5">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/tranferAllM1')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 1</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/tranferAllM4')}}">
														<span class="sub-item">มัธยมศึกษาปีที่ 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-graduate"></i>
								<p>จัดการข้อมูลนักเรียน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#forms2">
											<span class="sub-item">เลื่อนชั้นเรียน</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/academic/class')}}">
														<span class="sub-item">แสดงข้อมูลเลื่อนชั้นเรียน</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/academic/classChange')}}">
														<span class="sub-item">เลื่อนชั้นเรียน</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#forms3">
											<span class="sub-item">จบการศึกษา</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms3">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/academic/final')}}">
														<span class="sub-item">แสดงข้อมูลจบการศึกษา</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/academic/finalChange')}}">
														<span class="sub-item">เพิ่มนักเรียนจบการศึกษา</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#forms4">
											<span class="sub-item">ย้ายสถานศึกษา</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms4">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/academic/move')}}">
														<span class="sub-item">แสดงข้อมูลย้ายสถานศึกษา</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/academic/moveChange')}}">
														<span class="sub-item">เพิ่มนักเรียนย้ายสถานศึกษา</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#forms5">
											<span class="sub-item">ออกกลางคัน</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms5">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/academic/out')}}">
														<span class="sub-item">แสดงข้อมูลออกกลางคัน</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/academic/outChange')}}">
														<span class="sub-item">เพิ่มนักเรียนออกกลางคัน</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>



						<li class="nav-item">
							<a data-toggle="collapse" href="#basic">
								<i class="fas fa-sliders-h"></i>
								<p>จัดการข้อมูลพื้นฐาน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="basic">
								<ul class="nav nav-collapse">

									<li>
										<a data-toggle="collapse" href="#forms6">
											<span class="sub-item">กำหนดชั้นเรียน</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms6">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="{{ url('/academic/classRoom')}}">
														<span class="sub-item">กำหนดจำนวนห้องเรียน</span>
													</a>
												</li>
												<li>
													<a href="{{ url('/academic/classMajor')}}">
														<span class="sub-item">กำหนดสายการเรียน</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item ">
							<a data-toggle="collapse" href="#files">
								<i class="fas fa-folder-open"></i>
								<p>ออกเอกสารทั้งหมด</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="files">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/export/newstudentm1')}}" target="_blank">
											<span class="sub-item">สรุปสถิติรายวันการรับสมัครนักเรียนใหม่ประจำชั้นมัธยมศึกษาปีที่ 1</span>
										</a>
									</li>
									<li>
										<a href="{{ url('/export/newstudentm4')}}" target="_blank">
											<span class="sub-item">สรุปสถิติรายวันการรับสมัครนักเรียนใหม่ประจำชั้นมัธยมศึกษาปีที่ 4</span>
										</a>
									</li>
									<li>
										<a href="{{ url('/AcademicReport/StudentAll')}}">
											<span class="sub-item">รายชื่อนักเรียนทั้งหมด </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/AcademicReport/StatStudent')}}" target="_blank">
											<span class="sub-item">จำนวนนักเรียนทั้งหมด </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/AcademicReport/ReportStudyM4')}}" target="_blank">
											<span class="sub-item">เอกสารประกอบการคัดนักเรียน ม.4 </span>
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
				<div class="panel-header " style="background-color: #33658A;">
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
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; จัดการข้อมูลนักเรียนใหม่ <i class="flaticon-right-arrow"></i> ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</div>
										<a href="{{url('/SortNewstudentM4')}}" class="btn btn-danger" style="margin-left: auto;">ย้อนกลับ</a>
									</div>
								</div>

								<div class="card-body" style="min-height: 400px">
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>คำนำหน้าชื่อ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->prename}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->name_cen}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->id_number}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mounth}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->house_number}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>หมู่</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->bloc}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>ซอย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->street}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->sub_district}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_name}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->father_namecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_surname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_id}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>อาชีพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_job}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->father_tel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_name}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->mother_namecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_surname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_id}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-3">
											<div class="form-group form-group-default">
												<label>อาชีพ</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_job}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->mother_tel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_name}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-2">
											<div class="form-group form-group-default">
												<label>ชื่อกลาง</label>
												<input id="Name" type="text" class="form-control" placeholder="(ถ้ามี)" value="{{$data->parent_namecen}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>นามสกุลภาษาไทย</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_surname}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-12">
											<div class="form-group form-group-default">
												<label>เลขประจำตัวประชาชน</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_id}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_job}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->parent_tel}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->final_school}}" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>ตำบล/แขวง</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->final_school_sub_district}}" readonly>
											</div>
										</div>
										<div class="col-6 col-md-4">
											<div class="form-group form-group-default">
												<label>อำเภอ/เขต</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->final_school_district}}" readonly>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group form-group-default">
												<label>จังหวัด</label>
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->final_school_province}}" readonly>
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
												<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->student_id}}" readonly>
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
														<input id="Name" type="text" class="form-control" placeholder="" value="{{$data->poor_person}}" readonly>
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

									<!-- เลือกเรียนแผนการเรียนรู้ -->
									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
										<p style="margin-left: 25px;  font-size: 15px;"><b>เลือกเรียนแผนการเรียนรู้ &nbsp;&nbsp;( เลือกอันดับ 1 - 10 ตามลำดับแผนการเรียนรู้ที่เลือก )</b></p>
									</div>
									<div class="row">
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 1</label>
													@if ($data->major_name1 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name1 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name1 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name1 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name1 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name1 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name1 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name1 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name1 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 2</label>
													@if ($data->major_name2 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name2 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name2 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name2 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name2 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name2 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name2 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name2 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name2 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 3</label>
													@if ($data->major_name3 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name3 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name3 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name3 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name3 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name3 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name3 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name3 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name3 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 4</label>
													@if ($data->major_name4 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name4 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name4 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name4 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name4 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name4 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name4 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name4 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name4 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 5</label>
													@if ($data->major_name5 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name5 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name5 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name5 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name5 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name5 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name5 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name5 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name5 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 6</label>
													@if ($data->major_name6 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name6 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name6 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name6 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name6 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name6 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name6 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name6 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name6 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 7</label>
													@if ($data->major_name7 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name7 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name7 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name7 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name7 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name7 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name7 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name7 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name7 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 8</label>
													@if ($data->major_name8 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name8 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name8 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name8 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name8 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name8 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name8 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name8 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name8 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
											<div class="col-6 col-md-6">
												<div class="form-group form-group-default">
													<label>อันดับที่ 9</label>
													@if ($data->major_name9 == '01')
													<input id="Name" type="text" class="form-control" placeholder="" value="วิทยาศาสตร์-คณิตศาสตร์"  readonly>
													@elseif ($data->major_name9 == '02')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาอังกฤษ"  readonly>
													@elseif ($data->major_name9 == '03')
													<input id="Name" type="text" class="form-control" placeholder="" value="ภาษาอังกฤษ-ภาษาจีน"  readonly>
													@elseif ($data->major_name9 == '04')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พาณิชยกรรม)"  readonly>
													@elseif ($data->major_name9 == '05')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(ศิลปะ)"  readonly>
													@elseif ($data->major_name9 == '06')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(เกษตร)"  readonly>
													@elseif ($data->major_name9 == '07')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(คหกรรม)"  readonly>
													@elseif ($data->major_name9 == '08')
													<input id="Name" type="text" class="form-control" placeholder="" value="ศิลป์ทั่วไป(พลศึกษา)"  readonly>
													@elseif ($data->major_name9 == '09')
													<input id="Name" type="text" class="form-control" placeholder="" value="ปวช.(ช่างเชื่อมโลหะ)"  readonly>
													@endif
												</div>
											</div>
										</div>
									<div align="center">
										<a href='{{ url("/FixNewstudentM4/{$data->id}" ) }}' class="btn btn-warning">แก้ไขข้อมูล</a>
									</div>
								</div>
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

	<!-- Date time picker -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
				"pageLength": 25,
				"language": {
					"search": "ค้นหาข้อมูล :"
				},
				"ordering": false,
				"searching": false
			});
		});
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