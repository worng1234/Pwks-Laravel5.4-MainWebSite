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
									<li class="active">
										<a href="{{ url('/behavior/index')}}">
											<span class="sub-item">ข้อมูลความประพฤติ</span>
										</a>
									</li>
									<li>
										<a href="{{ url('/behavior/all')}}">
											<span class="sub-item">ตรวจสอบความประพฤตินักเรียน</span>
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
				<div class="panel-header " style="background-color: #F15152;">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h3 class="text-white pb-2 fw-bold"></h3>
							</div>
						</div>
					</div>
				</div>

				<form action="{{ url('/minusinsert', $data->id)}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					{{ method_field('POST') }}
					<div class="page-inner mt--5">
						<div class="row mt--2">
							<div class="col-md-12">
								<div class="card full-height">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title"><i class="fas fa-medal fa-lg"></i> &nbsp;จัดการความประพฤติ <i class="flaticon-right-arrow"></i> บันทึกข้อมูลความประพฤติ <i class="flaticon-right-arrow"></i>หักคะแนน</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6 col-md-5">
												<div class="form-group ">
													<label>ชื่อ - นามสกุล</label>
													<input name="fullname" type="text" class="form-control" placeholder="" value="{{$data->prename}}{{$data->fname}} {{$data->surname}}" readonly>
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group ">
													<label>รหัสนักเรียน</label>
													<input name="student_id" type="text" class="form-control" placeholder="" value="{{$data->student_id}}" readonly>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-4">
												<div class="form-group ">
													<label>ระดับชั้น</label>
													<input name="behavior_class" type="text" class="form-control" placeholder="" value="{{$data->student_class}}" readonly>
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group ">
													<label>ห้อง</label>
													<input name="behavior_room" type="text" class="form-control" placeholder="" value="{{$data->student_room}}" readonly>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-4">
												<div class="form-group ">
													<label>ภาคเรียนที่</label>
													<input name="behavior_term" type="text" class="form-control" placeholder="" value="{{$data2->term}}" readonly>
												</div>
											</div>
											<div class="col-sm-6 col-md-2">
												<div class="form-group ">
													<label>ปีการศึกษา</label>
													<input name="behavior_study_year" type="text" class="form-control" placeholder="" value="{{$data2->study_year}}" readonly>
												</div>
											</div>
										</div>
										<input name="plus_score" value="" hidden>

										<div class="row">
											<div class=" col-6 col-md-5">
												<div class="form-group">
													<label>หัวข้อความประพฤติ</label>
													<div class="select2-input">
														<select id="basic" name="behavior_history"  class="form-control" onchange="populate(this.id,'slct2')" required>
															<option value="">&nbsp;</option>
															<optgroup label="หมวดที่ 1 พฤติกรรมการแต่งกาย">
																<option value="101 สวมเสื้อ นักเรียนไม่ปัก ชื่อโรงเรียน" >101 สวมเสื้อ นักเรียนไม่ปัก ชื่อโรงเรียน (-5)</option>
																<option value="102 สวมเสื้อนักเรียนของผู้อื่นมาโรงเรียน">102 สวมเสื้อนักเรียนของผู้อื่นมาโรงเรียน (-5)</option>
																<option value="103 สักตามร่างกาย">103 สักตามร่างกาย (-20)</option>
															</optgroup>
															<optgroup label="หมวดที่ 2 พฤติกรรมการมาสาย - ขาดเรียน">
																<option value="201 มาสายไม่ทันเคารพธงชาติ">201 มาสายไม่ทันเคารพธงชาติ (-5)</option>
																<option value="202 ขาดเรียนเกิน 3 วัน ติดต่อกัน โดยไม่ทราบสาเหตุ">202 ขาดเรียนเกิน 3 วัน ติดต่อกัน โดยไม่ทราบสาเหตุ (-10)</option>
															</optgroup>
															<optgroup label="หมวดที่ 3 พฤติกรรมการเรียน">
																<option value="301 หนีคาบเรียนอยู่ในโรงเรียน">301 หนีคาบเรียนอยู่ในโรงเรียน (-5)</option>
																<option value="302 ไม่เข้าร่วมกิจกรรมของโรงเรียน">302 ไม่เข้าร่วมกิจกรรมของโรงเรียน (-5)</option>
																<option value="303 หนีคาบเรียนอยู่นอกโรงเรียน (กิจการนักเรียน)">303 หนีคาบเรียนอยู่นอกโรงเรียน (กิจการนักเรียน) (-20)</option>
															</optgroup>
															<optgroup label="หมวดที่ 4 พฤติกรรมการกระทำความผิดทำนองชู้สาว">
																<option value="401 อยู่ในที่ลับสองต่อสองหรือสถานที่ไม่เหมาะสม">401 อยู่ในที่ลับสองต่อสองหรือสถานที่ไม่เหมาะสม (-5)</option>
																<option value="402 กระทำอนาจารในที่สาธารณะ">402 กระทำอนาจารในที่สาธารณะ (-20)</option>
																<option value="403 ไปด้วยกันบ่อยๆ ส่อไปในทางเป็นชู้สาวพยายามล่วงเกินทางเพศ">403 ไปด้วยกันบ่อยๆ ส่อไปในทางเป็นชู้สาวพยายามล่วงเกินทางเพศ (-80)</option>
																<option value="404 ชาย-หญิง อยู่กินเป็นสามีภรรยา (-100)">404 ชาย-หญิง อยู่กินเป็นสามีภรรยา (-100)</option>
																<option value="405 เป็นผู้จัดหาบริการทางเพศ (-100)">405 เป็นผู้จัดหาบริการทางเพศ (-100)</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class=" col-6 col-md-5">
												<div class="form-group">
													<label>หักคะแนน</label>
													<div class="select2-input">
														<select id="slct2" name="minus_score" class="form-control" required>
															<!-- <option value="">&nbsp;</option>
															<optgroup label="ลดคะแนน">
																<option id="inputBe" value="5">-5</option>
																<option value="10">-10</option>
																<option value="20">-20</option>
																<option value="30">-30</option>
																<option value="40">-40</option>
																<option value="50">-50</option>
																<option value="80">-80</option>
																<option value="100">-100</option>
															</optgroup> -->
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-6 col-md-5">
												<div class="form-group">
													<label for="exampleFormControlTextarea1">หมายเหตุ</label>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="etc"></textarea>
												</div>
											</div>
										</div>
									</div>

									<div class="card-footer" align="center"><br>
										<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> บันทึกข้อมูล</button>&nbsp;
										<a href="{{ url('/behavior/index')}}" class="btn btn-danger"><i class="fas fa-angle-left"></i> ย้อนกลับ</a>
									</div><br>
								</div>
				</form>
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
	
	<script>
		function populate(s1,s2) {
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);

			s2.innerHtml = "";

			if (s1.value == "101 สวมเสื้อ นักเรียนไม่ปัก ชื่อโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "102 สวมเสื้อนักเรียนของผู้อื่นมาโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "103 สักตามร่างกาย"){
				var optionArray = ["20|-20"];

			} else if (s1.value == "201 มาสายไม่ทันเคารพธงชาติ"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "202 ขาดเรียนเกิน 3 วัน ติดต่อกัน โดยไม่ทราบสาเหตุ"){
				var optionArray = ["10|-10"];

			} else if (s1.value == "301 หนีคาบเรียนอยู่ในโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "302 ไม่เข้าร่วมกิจกรรมของโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "303 หนีคาบเรียนอยู่นอกโรงเรียน (กิจการนักเรียน)"){
				var optionArray = ["20|-20"];

			} else if (s1.value == "401 อยู่ในที่ลับสองต่อสองหรือสถานที่ไม่เหมาะสม"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "402 กระทำอนาจารในที่สาธารณะ"){
				var optionArray = ["20|-20"];

			} else if (s1.value == "403 ไปด้วยกันบ่อยๆ ส่อไปในทางเป็นชู้สาวพยายามล่วงเกินทางเพศ"){
				var optionArray = ["80|-80"];

			} else if (s1.value == "404 ชาย-หญิง อยู่กินเป็นสามีภรรยา (-100)"){
				var optionArray = ["100|-100"];

			} else if (s1.value == "405 เป็นผู้จัดหาบริการทางเพศ (-100)"){
				var optionArray = ["100|-100"];

			} 

			for (var option in optionArray) {
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			};
		}
		$('#basic').select2({
			theme: "bootstrap"
		},function populate(s1,s2) {
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);

			s2.innerHtml = "";

			if (s1.value == "101 สวมเสื้อ นักเรียนไม่ปัก ชื่อโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "102 สวมเสื้อนักเรียนของผู้อื่นมาโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "103 สักตามร่างกาย"){
				var optionArray = ["|","20|-20"];

			} else if (s1.value == "201 มาสายไม่ทันเคารพธงชาติ"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "202 ขาดเรียนเกิน 3 วัน ติดต่อกัน โดยไม่ทราบสาเหตุ"){
				var optionArray = ["|","10|-10"];

			} else if (s1.value == "301 หนีคาบเรียนอยู่ในโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "302 ไม่เข้าร่วมกิจกรรมของโรงเรียน"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "303 หนีคาบเรียนอยู่นอกโรงเรียน (กิจการนักเรียน)"){
				var optionArray = ["|","20|-20"];

			} else if (s1.value == "401 อยู่ในที่ลับสองต่อสองหรือสถานที่ไม่เหมาะสม"){
				var optionArray = ["|","0|ตักเตือน","5|-5"];

			} else if (s1.value == "402 กระทำอนาจารในที่สาธารณะ"){
				var optionArray = ["|","20|-20"];

			} else if (s1.value == "403 ไปด้วยกันบ่อยๆ ส่อไปในทางเป็นชู้สาวพยายามล่วงเกินทางเพศ"){
				var optionArray = ["|","80|-80"];

			} else if (s1.value == "404 ชาย-หญิง อยู่กินเป็นสามีภรรยา (-100)"){
				var optionArray = ["|","100|-100"];

			} else if (s1.value == "405 เป็นผู้จัดหาบริการทางเพศ (-100)"){
				var optionArray = ["|","100|-100"];

			} 

			for (var option in optionArray) {
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			};
		}
		);
	</script>
	
	

</body>

</html>