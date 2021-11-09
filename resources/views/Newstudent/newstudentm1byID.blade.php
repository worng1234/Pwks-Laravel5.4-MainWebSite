<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
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
						<p class="card-title" style="font-size: 20px;"><b><font color='#685DA7'>ระบบบริหารจัดการข้อมูลทางการศึกษา</font></b></p>
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
					<ul class="nav nav-primary" >

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
									<li >
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


				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; จัดการข้อมูลนักเรียนใหม่ <i class="flaticon-right-arrow"></i> ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</div>
									</div>
								</div>

								<!-- ข้อมูลส่วนตัว -->
								<div class="card-body">
									<div class="alert alert-info" role="alert" align="center"><h5><i class="fas fa-info-circle"></i>
										กรุณากรอกข้อมูลตามความเป็นจริงก่อนบันทึกข้อมูลเพื่อผลประโยชน์ของนักเรียนเอง หรือตรวจสอบปัจจัยต่างๆที่จะได้รับ</h5></div>

									<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลส่วนตัว</b></p>
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
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
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
                                        <p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัว</b></p>
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
										<p  style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลทางการศึกษา</b></p>
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
										<p  style="margin-left: 25px;  font-size: 15px;"><b>ความต้องการความช่วยเหลือด้านการจัดการศึกษา</b></p>
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
                                <a href="{{ route('SortNewstudentM1.edit', $data->id)}}" class="btn btn-warning "><strong>แก้ไขข้อมูล</strong></a>
									<a href="{{ route('SortNewstudentM1.index')}}" class="btn btn-danger "><strong>ย้อนกลับ</strong></a>
								</div><br>


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
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
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
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
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
