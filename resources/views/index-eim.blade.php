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

						<li class="nav-item submenu active">
							<a class="nav-link" href="{{ url('/')}}">
								<i class="link-icon icon-home"></i>
								<span class="menu-title">หน้าแรก</span>
							</a>
						</li>
						<li class="nav-item submenu">
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
										<div class="card-title"><i class="fas fa-thumbtack"></i>&nbsp; ยินดีต้อนรับเข้าสู่ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</div>
									</div>
								</div>
								<div class="card-body">
									<h3><u><strong>จำนวนนักเรียนทั้งหมดของปีการศึกษา {{$school_year->study_year}} </strong></u></้>
									<div style="margin-top: 30px;">
										<table class="table table-bordered table-hover table-condesed">
											<thead class="bg-info">
												<th width="5%" class="saraban">
													<center>ระดับชั้น</center>
												</th>
												<th width="5%" class="saraban">
													<center>ชาย</center>
												</th>
												<th width="5%" class="saraban">
													<center>หญิง</center>
												</th>
												<th width="5%" class="saraban">
													<center>รวม</center>
												</th>
											</thead>
											<tbody>
												<tr>
													<td align="center" class="table-secondary">ม.1</td>
													@if ($m1_m_all != 0)
													<td align="center">{{$m1_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m1_fm_all != 0)
													<td align="center">{{$m1_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m1_all != 0)
													<td align="center" class="table-success">{{$m1_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-secondary">ม.2</td>
													@if ($m2_m_all != 0)
													<td align="center">{{$m2_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m2_fm_all != 0)
													<td align="center">{{$m2_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m2_all != 0)
													<td align="center" class="table-success">{{$m2_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-secondary">ม.3</td>
													@if ($m3_m_all != 0)
													<td align="center">{{$m3_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m3_fm_all != 0)
													<td align="center">{{$m3_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m3_all != 0)
													<td align="center" class="table-success">{{$m3_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-secondary">ม.4</td>
													@if ($m4_m_all != 0)
													<td align="center">{{$m4_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m4_fm_all != 0)
													<td align="center">{{$m4_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m4_all != 0)
													<td align="center" class="table-success">{{$m4_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-secondary">ม.5</td>
													@if ($m5_m_all != 0)
													<td align="center">{{$m5_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m5_fm_all != 0)
													<td align="center">{{$m5_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m5_all != 0)
													<td align="center" class="table-success">{{$m5_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-secondary">ม.6</td>
													@if ($m6_m_all != 0)
													<td align="center">{{$m6_m_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m6_fm_all != 0)
													<td align="center">{{$m6_fm_all}}</td>
													@else
													<td align="center">0</td>
													@endif
													@if ($m6_all != 0)
													<td align="center" class="table-success">{{$m6_all}}</td>
													@else
													<td align="center" class="table-success">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-warning">ม.ต้น</td>
													@if ($m123_m_all != 0)
													<td align="center" class="table-warning">{{$m123_m_all}}</td>
													@else
													<td align="center" class="table-warning">0</td>
													@endif
													@if ($m123_fm_all != 0)
													<td align="center" class="table-warning">{{$m123_fm_all}}</td>
													@else
													<td align="center" class="table-warning">0</td>
													@endif
													@if ($m123_all != 0)
													<td align="center" class="table-primary">{{$m123_all}}</td>
													@else
													<td align="center" class="table-primary">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-warning">ม.ปลาย</td>
													@if ($m456_m_all != 0)
													<td align="center" class="table-warning">{{$m456_m_all}}</td>
													@else
													<td align="center" class="table-warning">0</td>
													@endif
													@if ($m456_fm_all != 0)
													<td align="center" class="table-warning">{{$m456_fm_all}}</td>
													@else
													<td align="center" class="table-warning">0</td>
													@endif
													@if ($m456_all != 0)
													<td align="center" class="table-primary">{{$m456_all}}</td>
													@else
													<td align="center" class="table-primary">0</td>
													@endif
												</tr>
												<tr>
													<td align="center" class="table-danger">ม.ต้น + ม.ปลาย</td>
													@if ($m_m_all != 0)
													<td align="center" class="table-danger">{{$m_m_all}}</td>
													@else
													<td align="center" class="table-danger">0</td>
													@endif
													@if ($m_fm_all != 0)
													<td align="center" class="table-danger">{{$m_fm_all}}</td>
													@else
													<td align="center" class="table-danger">0</td>
													@endif
													@if ($m_all != 0)
													<td align="center" class="bg-danger">{{$m_all}}</td>
													@else
													<td align="center" class="bg-danger">0</td>
													@endif
												</tr>
											</tbody>
										</table>
									</div>
								</div>
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
	</script>



</body>

</html>