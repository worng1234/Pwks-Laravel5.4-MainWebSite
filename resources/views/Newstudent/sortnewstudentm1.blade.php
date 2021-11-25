<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>ระบบบริหารจัดการข้อมูลทางการศึกษา โรงเรียนพร้าววิทยาคม</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/eim/public/assets/img/logo3.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/eim/public/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/eim/public/assets/css/fonts.min.css']},
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
	<link rel="stylesheet" href="/eim/public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/eim/public/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/eim/public/assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="academic-index.html" class="logo">
					<img src="/eim/public/assets/img/logo3.png" alt="navbar brand" class="navbar-brand" style="width: 100%; height: 75%;">
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

							<label><b>ชื่อ-นามสกุล :</b> ทำงานดี มีเมตตา</label>
							<label><b>ตำแหน่ง :</b> ลูกจ้างประจำ (พนักงานธุรการ)</label>
							<label><b>ภาคเรียนที่ :</b> 1/2565</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="/academic">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-graduate"></i>
								<p>จัดการข้อมูลนักเรียน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#forms1">
											<span class="sub-item">ข้อมูลนักเรียนพื้นฐาน</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="academic-info-all.html">
														<span class="sub-item">แสดงข้อมูลนักเรียน</span>
													</a>
												</li>
												<li>
													<a href="academic-info-add.html">
														<span class="sub-item">เพิ่มข้อมูลนักเรียน</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#forms2">
											<span class="sub-item">เลื่อนชั้นเรียน</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="forms2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">แสดงข้อมูลเลื่อนชั้นเรียน</span>
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
													<a href="academic-graduated-all.html">
														<span class="sub-item">แสดงข้อมูลจบการศึกษา</span>
													</a>
												</li>
												<li>
													<a href="academic-graduated-add.html">
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
													<a href="academic-move-all.html">
														<span class="sub-item">แสดงข้อมูลย้ายสถานศึกษา</span>
													</a>
												</li>
												<li>
													<a href="academic-move-add.html">
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
													<a href="academic-out-all.html">
														<span class="sub-item">แสดงข้อมูลออกกลางคัน</span>
													</a>
												</li>
												<li>
													<a href="academic-out-add.html">
														<span class="sub-item">เพิ่มนักเรียนออกกลางคัน</span>
													</a>
												</li>
											</ul>
										</div>
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
										<a href="{{ url('/SortNewstudentM1')}}">
											<span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</span>
										</a>
									</li>
									<li>
										<a href="{{ url('/SortNewstudentM4')}}">
											<span class="sub-item">ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- <li class="nav-item">
							<a data-toggle="collapse" href="#basic">
								<i class="fas fa-sliders-h"></i>
								<p>จัดการข้อมูลพื้นฐาน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="basic">
								<ul class="nav nav-collapse">
									<li>
										<a href="academic-basic-info-class-all.html">
											<span class="sub-item">กำหนดชั้นเรียน</span>
										</a>
									</li>
									<li>
										<a href="academic-basic-info-year-all.html">
											<span class="sub-item">กำหนดปีการศึกษา</span>
										</a>
									</li>
								</ul>
							</div>
						</li> -->

						

					</ul>
				</div>
			</div>
		</div>
		<!-- สิ้นสุดเมนู -->

		<!-- เริ่มเนื้อหา-->
		<div class="main-panel">
			<div class="content">
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
										<div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; จัดการข้อมูลนักเรียนใหม่ <i class="flaticon-right-arrow"></i> ตรวจสอบรายชื่อผู้สมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</div>
									</div>
								</div>

								<div class="card-body" style="min-height: 400px">
									<div class="form-group">
										<form role="form" method="post" action="{{ url('/searchM1')}}">
											{{csrf_field()}}
											<div class="row">
												<div class="col-6 col-md-4">
													<label>ชื่อ-นามสกุล, โรงเรียน, สถานะการสมัคร(ยืนยันการสมัคร, รอตรวจสอบ)</label>
													<input type="search" class="form-control" name="search" placeholder="">
												</div>
												<button type="submit" class="btn btn-primary btn-xs"><i class="fas fa-search"></i> แสดง</button>
											</div>
										</form>
									</div>

									<!-- ตารางแสดงข้อมูล-->
									<div class="table-responsive">
										<table id="basic-datatables" class="table table-bordered table-striped table-hover" style="width:100%">
											<thead>
												<tr>
													<th scope="col" width="35%">
														<center>ชื่อ-นามสกุล</center>
													</th>
													<th scope="col" width="20%">
														<center>โรงเรียน</center>
													</th>
													<th scope="col" width="13%">
														<center>สถานะการสมัคร</center>
													</th>
													<th scope="col" width="13%">
														<center>ข้อมูลส่วนตัว</center>
													</th>
													<th scope="col" width="20">
														<center>รูปภาพ</center>
													</th>
													<th scope="col" width="12%">
														<center>จัดการ</center>
													</th>

												</tr>
											</thead>

											<tbody>
												@foreach ($datas->all() as $data)
												<tr>
													<td>{{$data->prename}}{{$data->fname}} {{$data->nameCen}} {{$data->surname}}</td>
													<td align="center">{{$data->finalSchool}}</td>
													<td align="center">{{$data->status_rigis}}</td>
													<td align="center"><a href='{{ url("/SortNewstudentM1/{$data->id}" )}}' class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a></td>
													<td align="center"><a href='{{ url("/statusM1pic/{$data->id}" )}}' class="btn btn-warning btn-xs"><i class="fas fa-images"></i></a></td>
													<td align="center"><a href='{{ url("/deletem1/{$data->id}")}}' class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a></td>
												</tr>
												@endforeach

												<!-- Modal Show Club Detail -->
												<!-- อะไรไม่รู้ -->
												<div class="modal fade" id="ModalShowDetail1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-book"></i>...</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true"><i class="far fa-times-circle"></i></span>
																</button>
															</div>
														</div>
													</div>
													<!-- // Modal Show Club Detail -->

											</tbody>
										</table>
										<!-- //ตารางแสดงข้อมูล-->

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
	<script src="/eim/public/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/eim/public/assets/js/core/popper.min.js"></script>
	<script src="/eim/public/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="/eim/public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/eim/public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/eim/public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="/eim/public/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/eim/public/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/eim/public/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/eim/public/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/eim/public/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/eim/public/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/eim/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/eim/public/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/eim/public/assets/js/setting-demo.js"></script>
	<script src="/eim/public/assets/js/demo.js"></script>

	<!-- Date time picker -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
				"pageLength": 50,
				"language": {
					"search": "ค้นหาข้อมูล :"
				},
				"ordering": false
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