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
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">

				<a href="{{ url('/student')}}" class="logo">
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
						<label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับนักเรียน)</small></label>
					</div>

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fas fa-school"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" href="{{ route('student.logout') }}" aria-expanded="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-unlock"></i> ออกระบบ
                            </a>

                            <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
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

						<label><b>ชื่อ-นามสกุล :</b>{{ Auth::guard('student')->user()->prename}}{{ Auth::guard('student')->user()->fname}} </br>{{ Auth::guard('student')->user()->surname}}</label>
                            <label><b>เลขประจำตัวนักเรียน :</b> {{ Auth::guard('student')->user()->student_id}}</label>
                            <label><b>ชั้นมัธยมศึกษาปีที่ :</b> {{ Auth::guard('student')->user()->student_class}} <b>ห้อง:</b> {{ Auth::guard('student')->user()->student_room}}</label>
                            <label><b>ภาคเรียนที่ :</b> {{$school_year->term}}/{{$school_year->study_year}}</label>


							<div class="clearfix"></div>
						</div>
					</div>
					<!-- สิ้นสุดโปรไฟล์ -->

					<!-- เริ่มเมนู -->
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="{{ url('/student')}}">
								<i class="fas fa-home"></i>
								<p>หน้าหลัก</p>
							</a>
						</li>

						<li class="nav-item ">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-file-alt"></i>
								<p>ข้อมูลพื้นฐานนักเรียน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse " id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href='{{ url("/editStudentByID", Auth::guard('student')->user()->id )}}'>
											<span class="sub-item">แก้ไขข้อมูล</span>
										</a>
									</li>
									<li >
										<a href='{{ url("/showStudentByID", Auth::guard('student')->user()->id )}}'>
											<span class="sub-item">ตรวจสอบข้อมูล</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item ">
                            <a href='{{ url("/increaseStudent", Auth::guard('student')->user()->id )}}'>
                                <i class="fas fa-pencil-alt"></i>
                                <p>กรอกข้อมูลเพิ่มเติมเฉพาะ</br> ม.1 และ ม.4</p>
                            </a>
                        </li>

						<li class="nav-item ">
                            <a href='{{ url("/BehaviorStudent", Auth::guard('student')->user()->id )}}'>
                                <i class="fas fa-medal"></i>
                                <p>ข้อมูลความประพฤติ</p>
                            </a>
                        </li>

						
						<li class="nav-item active">
                            <a href='{{ url("/DocumentStudentAll", Auth::guard('student')->user()->id )}}'>
                                <i class="fas fa-file-alt"></i>
                                <p>เอกสารประจำตัว</p>
                            </a>
                        </li>
						
						<li class="nav-item ">
                            <a href="{{ url('Manual/manual.pdf')}}" target="_blank">
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
				<div class="panel-header " style="background-color: #4C3F54;">
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
                                        <div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i> &nbsp;&nbsp; เอกสารประจำตัวของ {{$data->prename}}{{$data->fname}} {{$data->surname}}</div>
                                    </div>
                                </div>
                                <div class="card-body" style="min-height: 400px">
								<form action="{{ url('/EditDocumentStudent', $data->id)}}" method="POST" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<!-- ข้อมูลส่วนตัว -->
									<div class="card-body">
										<!-- อัพโหลดรูปภาพ -->
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>อัพโหลดข้อมูลรูปภาพ &nbsp;&nbsp;( นามสกุลไฟล์ภาพ&nbsp;&nbsp;.jpg &nbsp;หรือ&nbsp; .png&nbsp;&nbsp;)</b></p>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">รูปถ่ายหน้าตรงชุดนักเรียน ขนาด 1.5 นิ้ว</label>
													<input type="file" class="form-control-file" id="profile_img" name="profile_img">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชน</label>
													<input type="file" class="form-control-file" id="id_card_student" name="id_card_student">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้าน</label>
													<input type="file" class="form-control-file" id="house_student" name="house_student">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label for="exampleFormControlFile1">ใบ ปพ. หรือหนังสือรับรองการเป็นนักเรียน</label>
													<input type="file" class="form-control-file" id="student_submit" name="student_submit">
												</div>
											</div>
										</div>
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาทะเบียนบ้านและสำเนาบัตรประชาชนของบิดา </b></p>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชนบิดา</label>
													<input type="file" class="form-control-file" id="id_card_father" name="id_card_father">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้านบิดา</label>
													<input type="file" class="form-control-file" id="house_father" name="house_father">
												</div>
											</div>
										</div>
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาทะเบียนบ้านและสำเนาบัตรประชาชนของบิดา </b></p>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชนมารดา</label>
													<input type="file" class="form-control-file" id="id_card_mother" name="id_card_mother">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้านมารดา</label>
													<input type="file" class="form-control-file" id="house_mother" name="house_mother">
												</div>
											</div>
										</div>

										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาทะเบียนบ้านและสำเนาบัตรประชาชนของผู้ปกครอง (ในกรณีไม่ได้อยู่กับบิดา มารดา)</b></p>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาทะเบียนบ้านผู้ปกครอง</label>
													<input type="file" class="form-control-file" id="house_parent" name="house_parent">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สำเนาบัตรประชาชนผู้ปกครอง</label>
													<input type="file" class="form-control-file" id="id_card_parent" name="id_card_parent">
												</div>
											</div>
										</div>

										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>ใบ ปพ.1 และใบสูติบัตร</b></p>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">ใบ ปพ. (ด้านหน้า)</label>
													<input type="file" class="form-control-file" id="front_grade" name="front_grade">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">ใบ ปพ. (ด้านหลัง)</label>
													<input type="file" class="form-control-file" id="back_grade" name="back_grade">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">สูติบัตร</label>
													<input type="file" class="form-control-file" id="birth_certificate" name="birth_certificate">
												</div>
											</div>
										</div>
										<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>หนังสือรับรองความพิการ (ในกรณีที่แพทย์รับรองว่าพิการจริง)</b></p>
										</div>
										<div class="row">
											<div class="col-sm-4 col-md-4">
												<div class="form-group">
													<label for="exampleFormControlFile1">หนังสือรับรองความพิการ</label>
													<input type="file" class="form-control-file" id="disability_certificate" name="disability_certificate">
												</div>
											</div>
										</div>

										<div hidden>
											<input type="text" name="username" value="{{$data->username}}">
										</div>

										<div class="card-footer" align="center">
										<button type="submit" class="btn btn-success" ><strong>ยืนยัน</strong></button>
									</div><br>

                                    
                                </div>
								
							</form>
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
	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>
	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>
	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>

	<script>
		var $validator = $('.wizard-container form').validate({
			validClass: "success",
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			}
		})

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