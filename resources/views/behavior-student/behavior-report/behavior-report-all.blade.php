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

	<!-- Datatable Report -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">


</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="{{ url('/affair')}}" class="logo">
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
						<label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับเจ้าหน้าที่ฝ่ายกิจการนักเรียน)</small></label>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fas fa-school"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" href="{{ route('affair.logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								<i class="fas fa-unlock"></i> ออกระบบ
							</a>

							<form id="logout-form" action="{{ route('affair.logout') }}" method="POST" style="display: none;">
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

							<label><b>ชื่อ-นามสกุล :</b>{{ Auth::guard('affair')->user()->prename}}{{ Auth::guard('affair')->user()->fname}} </br>{{ Auth::guard('affair')->user()->surname}}</label>
                            <label><b>ตำแหน่ง :</b> เจ้าหน้าที่ฝ่ายกิจการ</label>
                            <label><b>ภาคเรียนที่ :</b> {{$school_year->term}}/{{$school_year->study_year}}</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="{{ url('/affair')}}">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#agree">
								<i class="fas fa-medal"></i>
								<p>จัดการความประพฤติ</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="agree">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/behavior/index')}}">
											<span class="sub-item">บันทึกข้อมูลความประพฤติ</span>
										</a>
									</li>
									<li class="active">
										<a href="{{ url('/behavior/all')}}">
											<span class="sub-item">ตรวจสอบความประพฤตินักเรียน</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

					

						<li class="nav-item ">
                            <a href="/Manual/manual.pdf" target="_blank">
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
				<div class="panel-header " style="background-color: #F15152;">
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
										<div class="card-title"><i class="fas fa-medal fa-lg"></i> &nbsp;จัดการข้อมูลความประพฤติ <i class="flaticon-right-arrow"></i> ตรวจสอบความประพฤตินักเรียน<i class="flaticon-right-arrow"></i> Report</div>

									</div>
								</div>
								<div class="card-body" style="min-height: auto">
									<div class="form-group">
										<form role="form" method="post" action="{{ url('/search/reportbehaviorall')}}">
											{{csrf_field()}}
											<div class="row">
											<div class="col-sm-4 col-md-3">
													<div class="input-icon">
														<select class="form-control" id="formGroupDefaultSelect" name="search1" type="search">
															<option value="">เดือน</option>
															<option value="1">มกราคม</option>
															<option value="2">กุมภาพันธ์</option>
															<option value="3">มีนาคม</option>
															<option value="4">เมษายน</option>
															<option value="5">พฤษภาคม</option>
															<option value="6">มิถุนายน</option>
															<option value="7">กรกฎาคม</option>
															<option value="8">สิงหาคม</option>
															<option value="9">กันยายน</option>
															<option value="10">ตุลาคม</option>
															<option value="11">พฤษจิกายน</option>
															<option value="12">ธันวาคม</option>
														</select>
														<span class="input-icon-addon">
															<i class="fa fa-search"></i>
														</span>
													</div>
												</div>
												<div class="col-sm-4 col-md-2">
													<div class="input-icon">
														<select class="form-control" id="formGroupDefaultSelect" name="search2" type="search">
															<option value="">ภาคเรียน</option>
															<option value="1"> 1</option>
															<option value="2"> 2</option>
														</select>
														<span class="input-icon-addon">
															<i class="fa fa-search"></i>
														</span>
													</div>
												</div>
												<div class="col-sm-4 col-md-2">
													<div class="input-icon">
														<input name="search3" type="search" class="form-control" placeholder="ปีการศึกษา">
														<span class="input-icon-addon">
															<i class="fa fa-search"></i>
														</span>
													</div>
												</div>
												<div class="col-sm-4 col-md-2">
														<button type="submit" class="btn btn-primary "><i class="fas fa-search"></i> ค้นหา</button>
													
												</div>
											</div>
										</form>
									</div>
									<div class="table-responsive">

										<!-- ตารางแสดงข้อมูล-->
										<table id="basic-datatables" class="table table-bordered table-striped table-hover" style="width:100%">
											<thead>
												<tr>
													<th scope="col" width="5%">
														<center>เลขประจำตัวนักเรียน</center>
													</th>
													<th scope="col" width="5%">
														<center>วัน/เดือน/ปี</center>
													</th>
													<th scope="col" width="26">
														<center>ชื่อ-นามสกุล</center>
													</th>
													<th scope="col" width="10%">
														<center>ชั้นเรียน/ห้อง</center>
													</th>
													<th scope="col" width="15%">
														<center>ประวัติความประพฤติ</center>
													</th>
													<th scope="col" width="15%">
														<center>หมายเหตุ</center>
													</th>
													<th scope="col" width="15%">
														<center>หักคะแนน</center>
													</th>
													<th scope="col" width="15%">
														<center>เพิ่มคะแนน</center>
													</th>
													<th scope="col" width="15%">
														<center>คะแนนคงเหลือ</center>
													</th>
													<th scope="col" width="15%">
														<center>ภาคเรียน</center>
													</th>
													<th scope="col" width="15%">
														<center>ปีการศึกษา</center>
													</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($data as $key => $value)
												<tr>
													<td align="center">{{$value->student_id_behavior}}</td>
													<td align="center">{{$value->behavior_day}}/{{$value->behavior_mount}}/20{{$value->behavior_year}}</td>
													<td align="center">{{$value->fullname}}</td>
													<td align="center">{{$value->behavior_class}}/{{$value->behavior_room}}</td>
													<td align="center">{{$value->behavior_history}}</td>
													<td align="center">{{$value->etc}}</td>
													<td align="center">{{$value->minus_score}}</td>
													<td align="center">{{$value->plus_score}}</td>
													<td align="center">{{$value->total_score}}</td>
													<td align="center">{{$value->behavior_term}}</td>
													<td align="center">{{$value->behavior_study_year}}</td>
												</tr>
												@endforeach
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

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>

	<!-- data table script -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>


	<!-- Date time picker -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'excelHtml5',
				],
				"pageLength": 10,
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

	<script>
		$('#basic').select2({
			theme: "bootstrap"
		});

		$('#basic2').select2({
			theme: "bootstrap"
		});

		$('#multiple').select2({
			theme: "bootstrap"
		});
	</script>
</body>

</html>