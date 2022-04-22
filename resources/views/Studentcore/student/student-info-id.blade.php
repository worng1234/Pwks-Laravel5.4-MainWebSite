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

						<li class="nav-item active submenu">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-file-alt"></i>
								<p>ข้อมูลพื้นฐานนักเรียน</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href='{{ url("/editStudentByID", Auth::guard('student')->user()->id )}}'>
											<span class="sub-item">แก้ไขข้อมูล</span>
										</a>
									</li>
									<li class="active">
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

						<li class="nav-item ">
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
							<div class="wizard-container wizard-round ">
								<div class="wizard-header">
									<div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i> &nbsp;ข้อมูลพื้นฐานนักเรียน <i class="flaticon-right-arrow"></i> ตรวจสอบข้อมูลพื้นฐานนักเรียน</div>
								</div>

								<form method="post" action="{{ url('/addstudentcore')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									{{ method_field('POST') }}
									<div class="wizard-body">
										<div class="row">
											<ul class="wizard-menu nav nav-pills nav-primary">
												<li class="step">
													<a class="nav-link active" href="#info" data-toggle="tab" aria-expanded="true"><i class="fa fa-user mr-0"></i> ข้อมูลเบื้องต้น</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#address" data-toggle="tab"><i class="fa fa-home mr-2"></i> ที่อยู่</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#ability" data-toggle="tab"><i class="fa fa-award mr-2"></i> ความสามารถ</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#infostu" data-toggle="tab"><i class="fa fa-clipboard mr-2"></i> รายละเอียดนักเรียน</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#health" data-toggle="tab"><i class="fas fa-heart mr-2"></i> สุขภาพ</a>
												</li>
												<li class="step">
													<a class="nav-link" href="#family" data-toggle="tab"><i class="fa fa-users mr-2"></i> ครอบครัว</a>
												</li>
											</ul>
										</div>

										<!-- Step 1 ข้อมูลเบื้องต้น -->
										<div class="tab-content">
											<div class="tab-pane active" id="info">
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวนักเรียน</label>
															<input readonly type="text" class="form-control" name="student_id" value="{{$data->student_id}}" readonly>
														</div>
													</div>
													<div class="col-6 col-md-5">
														<div class="form-group form-group-default">
															<label>แผนการเรียน (กรอกเฉพาะนักเรียนระดับชั้น ม.4 - ม.6)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_major" readonly>
																@if ($data->student_major == '01')
																<option>วิทยาศาสตร์-คณิตศาสตร์</option>

																@elseif ($data->student_major == '02')
																<option>ภาษาอังกฤษ-ภาษาอังกฤษ</option>

																@elseif ($data->student_major == '03')
																<option>ภาษาอังกฤษ-ภาษาจีน</option>

																@elseif ($data->student_major == '04')
																<option>ศิลป์ทั่วไป(พาณิชยกรรม)</option>

																@elseif ($data->student_major == '05')
																<option>ศิลป์ทั่วไป(ศิลปะ)</option>

																@elseif ($data->student_major == '06')
																<option>ศิลป์ทั่วไป(เกษตร)</option>

																@elseif ($data->student_major == '07')
																<option>ศิลป์ทั่วไป(คหกรรม)</option>

																@elseif ($data->student_major == '08')
																<option>ศิลป์ทั่วไป(พลศึกษา)</option>

																@elseif ($data->student_major == '09')
																<option>ปวช.(ช่างเชื่อมโลหะ)</option>

																@else
																<option>-</option>
																@endif
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระดับชั้น</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_class" readonly>
																<option>มัธยมศึกษาปีที่ {{$data->student_class}}</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ห้อง</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_room" readonly>
																<option>{{$data->student_room}}</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เลขที่</label>
															<input value="{{$data->student_number}}" type="text" class="form-control" name="student_number" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input value="{{$data->student_id_card}}" type="text" class="form-control" name="student_id_card" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename" readonly>
																<option>{{$data->prename}}</option>
																<option value="เด็กชาย">เด็กชาย</option>
																<option value="เด็กหญิง">เด็กหญิง</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input value="{{$data->fname}}" type="text" class="form-control" name="fname" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input value="{{$data->name_cen}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input value="{{$data->surname}}" type="text" class="form-control" name="surname" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_eng" readonly>
																<option>{{$data->prename_eng}}</option>
																<option value="mr">Mr.</option>
																<option value="mrs">Mrs.</option>
																<option value="miss">Miss</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อ(ภาษาอังกฤษ)</label>
															<input value="{{$data->name_eng}}" type="text" class="form-control" name="name_eng" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง(ภาษาอังกฤษ)</label>
															<input value="{{$data->name_cen_eng}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_eng" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุล(ภาษาอังกฤษ)</label>
															<input value="{{$data->surname_eng}}" type="text" class="form-control" name="surname_eng" readonly>
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
															<select class="form-control" id="formGroupDefaultSelect" name="birth_year" readonly>
																<option>{{$data->birth_year}}</option>
																<option value="2540">2540</option>
																<option value="2541">2541</option>
																<option value="2542">2542</option>
																<option value="2543">2543</option>
																<option value="2544">2544</option>
																<option value="2545">2545</option>
																<option value="2546">2546</option>
																<option value="2547">2547</option>
																<option value="2548">2548</option>
																<option value="2549">2549</option>
																<option value="2550">2550</option>
																<option value="2551">2551</option>
																<option value="2552">2552</option>
																<option value="2553">2553</option>
																<option value="2554">2554</option>
																<option value="2555">2555</option>
																<option value="2556">2556</option>
																<option value="2557">2557</option>
																<option value="2558">2558</option>
																<option value="2559">2559</option>
																<option value="2560">2560</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เดือน:</label>
															@if ($data->birth_month == '01')
															<input id="Name" type="text" class="form-control" placeholder="" value="มกราคม" readonly>
															@elseif ($data->birth_month == '02')
															<input id="Name" type="text" class="form-control" placeholder="" value="กุมภาพันธ์" readonly>
															@elseif ($data->birth_month == '03')
															<input id="Name" type="text" class="form-control" placeholder="" value="มีนาคม" readonly>
															@elseif ($data->birth_month == '04')
															<input id="Name" type="text" class="form-control" placeholder="" value="เมษายน" readonly>
															@elseif ($data->birth_month == '05')
															<input id="Name" type="text" class="form-control" placeholder="" value="พฤษภาคม" readonly>
															@elseif ($data->birth_month == '06')
															<input id="Name" type="text" class="form-control" placeholder="" value="มิถุนายน" readonly>
															@elseif ($data->birth_month == '07')
															<input id="Name" type="text" class="form-control" placeholder="" value="กรกฎาคม" readonly>
															@elseif ($data->birth_month == '08')
															<input id="Name" type="text" class="form-control" placeholder="" value="สิงหาคม" readonly>
															@elseif ($data->birth_month == '09')
															<input id="Name" type="text" class="form-control" placeholder="" value="กันยายน" readonly>
															@elseif ($data->birth_month == '10')
															<input id="Name" type="text" class="form-control" placeholder="" value="ตุลาคม" readonly>
															@elseif ($data->birth_month == '11')
															<input id="Name" type="text" class="form-control" placeholder="" value="พฤษจิกายน" readonly>
															@elseif ($data->birth_month == '12')
															<input id="Name" type="text" class="form-control" placeholder="" value="ธันวาคม" readonly>
															@endif
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>วัน:</label>
															<select class="form-control" id="formGroupDefaultSelect" name="birth_day" readonly>
																<option>{{$data->birth_day}}</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อเล่น</label>
															<input value="{{$data->nickname}}" type="text" class="form-control" name="nickname" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เพศสภาพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="gender" readonly>
																<option>{{$data->gender}}</option>
																<option value="ชาย">ชาย</option>
																<option value="หญิง">หญิง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup" readonly>
																<option>{{$data->bloodgroup}}</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="AB">AB</option>
																<option value="O">O</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ศาสนา</label>
															<input value="{{$data->religion}}" type="text" class="form-control" name="religion" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เชื้อชาติ</label>
															<input value="{{$data->origin}}" type="text" class="form-control" name="origin" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>สัญชาติ</label>
															<input value="{{$data->nationality}}" type="text" class="form-control" name="nationality" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
															<input value="{{$data->language}}" type="text" class="form-control" name="language" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input value="{{$data->tel_s}}" type="text" class="form-control" name="tel_s" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อีเมล์ (name@example.com)</label>
															<input value="{{$data->email}}" type="text" class="form-control" name="email" readonly>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 2 ที่อยู่ -->
											<div class="tab-pane" id="address">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ที่อยู่ตามทะเบียนบ้าน</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input value="{{$data->house_number}}" type="text" class="form-control" name="house_number" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input value="{{$data->group}}" type="text" class="form-control" name="group" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input value="{{$data->village}}" type="text" class="form-control" name="village" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input value="{{$data->alley}}" type="text" class="form-control" name="alley" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input value="{{$data->street}}" type="text" class="form-control" name="street" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->sub_district}}" type="text" class="form-control" name="sub_district" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->district}}" type="text" class="form-control" name="district" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->province}}" type="text" class="form-control" name="province" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->post}}" type="text" class="form-control" name="post" readonly>
														</div>
													</div>
												</div>

												<!-- ข้อมูลที่อยู่ปัจจุบัน -->
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ที่อยู่ปัจจุบัน</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<input value="{{$data->address_now}}" type="text" class="form-control" name="address_now" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input value="{{$data->house_number_n}}" type="text" class="form-control" name="house_number_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input value="{{$data->group_n}}" type="text" class="form-control" name="group_n" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input value="{{$data->village_n}}" type="text" class="form-control" name="village_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input value="{{$data->alley_n}}" type="text" class="form-control" name="alley_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input value="{{$data->street_n}}" type="text" class="form-control" name="street_n" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->sub_district_n}}" type="text" class="form-control" name="sub_district_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->district_n}}" type="text" class="form-control" name="district_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->province_n}}" type="text" class="form-control" name="province_n" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->post_n}}" type="text" class="form-control" name="post_n" readonly>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 3 ความสามารถ -->
											<div class="tab-pane" id="ability">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ด้านความสามารถ</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>สำเร็จการศึกษา จากโรงเรียน</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อโรงเรียนเดิม</label>
															<input value="{{$data->final_school}}" type="text" class="form-control" name="final_school" readonly>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จบชั้น</label>
															<select class="form-control" id="formGroupDefaultSelect" name="final_class" readonly>
																<option>{{$data->final_class}}</option>
																<option value="มัธยมศึกษาปีที่ 1">มัธยมศึกษาปีที่ 1</option>
																<option value="มัธยมศึกษาปีที่ 2">มัธยมศึกษาปีที่ 2</option>
																<option value="มัธยมศึกษาปีที่ 3">มัธยมศึกษาปีที่ 3</option>
																<option value="มัธยมศึกษาปีที่ 4">มัธยมศึกษาปีที่ 4</option>
																<option value="มัธยมศึกษาปีที่ 5">มัธยมศึกษาปีที่ 5</option>
																<option value="มัธยมศึกษาปีที่ 6">มัธยมศึกษาปีที่ 6</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ผลการเรียนเฉลี่ย</label>
															<input value="{{$data->avg_grade}}" type="text" class="form-control" name="avg_grade" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->f_sub_district}}" type="text" class="form-control" name="f_sub_district" readonly>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->f_district}}" type="text" class="form-control" name="f_district" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->f_province}}" type="text" class="form-control" name="f_province" readonly>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>วิชาที่ชอบ</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>1)</label>
															<input value="{{$data->like_subject1}}" type="text" class="form-control" name="like_subject1" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>2)</label>
															<input value="{{$data->like_subject2}}" type="text" class="form-control" name="like_subject2" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>3)</label>
															<input value="{{$data->like_subject3}}" type="text" class="form-control" name="like_subject3" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>4)</label>
															<input value="{{$data->like_subject4}}" type="text" class="form-control" name="like_subject4" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>วิชาที่ไม่ถนัด</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>1)</label>
															<input value="{{$data->unlike_subject1}}" type="text" class="form-control" name="unlike_subject1" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>2)</label>
															<input value="{{$data->unlike_subject2}}" type="text" class="form-control" name="unlike_subject2" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>3)</label>
															<input value="{{$data->unlike_subject3}}" type="text" class="form-control" name="unlike_subject3" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>4)</label>
															<input value="{{$data->unlike_subject4}}" type="text" class="form-control" name="unlike_subject4" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<label style="margin-bottom: 5px;"><small>เป้าหมายของชีวิตในอนาคต</small></label>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>อยากประกอบอาชีพอะไร</label>
															<input value="{{$data->dream_job}}" type="text" class="form-control" name="dream_job" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เพราะอะไร</label>
															<input value="{{$data->because}}" type="text" class="form-control" name="because" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ความสามารถพิเศษ</label>
															<input value="{{$data->talent}}" type="text" class="form-control" name="talent" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การอ่านเขียน</label>
															<input type="text" name="read_write" value="{{$data->read_write}}" class="form-control" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>นักเรียนไม่เข้าใจบทเรียนทุกวิชา</label>
															<input type="text" name="understand" value="{{$data->understand}}" class="form-control" readonly>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 4 รายละเอียด -->
											<div class="tab-pane" id="infostu">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>การเดินทางมาโรงเรียน</label>
															<select class="form-control" id="formGroupDefaultSelect" name="go_school" readonly>
																<option>{{$data->go_school}}</option>
																<option value="เดินเท้า">เดินเท้า</option>
																<option value="รถจักรยาน">รถจักรยาน</option>
																<option value="รถจักรยานยนต์">รถจักรยานยนต์</option>
																<option value="รถโดยสารประจำทาง">รถโดยสารประจำทาง</option>
																<option value="พ่อแม่หรือญาติมาส่ง">พ่อแม่หรือญาติมาส่ง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะเวลาเดินทาง (นาที)</label>
															<input value="{{$data->go_school_time}}" type="text" class="form-control" name="go_school_time" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
															<input value="{{$data->distance}}" type="text" class="form-control" name="distance" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
															<input value="{{$data->long_distance}}" type="text" class="form-control" name="long_distance" readonly>
														</div>
													</div>
												</div>
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>อุปกรณ์ที่มี</label>
															<input value="{{$data->gadject}}" type="text" class="form-control" name="gadject" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>อินเตอร์เน็ตที่ใช้</label>
															<input value="{{$data->internet}}" type="text" class="form-control" name="internet" readonly>
														</div>
													</div>
												</div>
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลด้านอื่นๆ</b></p>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ความพิการ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="disabled" readonly>
																<option>{{$data->disabled}}</option>
																<option value="ไม่มี">ไม่มี</option>
																<option value="การมองเห็น">การมองเห็น</option>
																<option value="การได้ยิน">การได้ยิน</option>
																<option value="สติปัญญา">สติปัญญา</option>
																<option value="ร่างกาย/สุขภาพ">ร่างกาย/สุขภาพ</option>
																<option value="การเรียนรู้">การเรียนรู้</option>
																<option value="การพูด/ภาษา">การพูด/ภาษา</option>
																<option value="พฤติกรรม/อารมณ์">พฤติกรรม/อารมณ์</option>
																<option value="ออทิสติค">ออทิสติค</option>
																<option value="พิการซ้ำซ้อน">พิการซ้ำซ้อน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ความด้อยโอกาส</label>
															<select class="form-control" id="formGroupDefaultSelect" name="unfortuned" readonly>
																<option>{{$data->unfortuned}}</option>
																<option value="ไม่มี">ไม่มี</option>
																<option value="ถูกบังคับขายแรงงาน">ถูกบังคับขายแรงงาน</option>
																<option value="อยู่ในธุรกิจทางเพศ">อยู่ในธุรกิจทางเพศ</option>
																<option value="ถูกทอดทิ้ง">ถูกทอดทิ้ง</option>
																<option value="เด็กเร่ร่อน">เด็กเร่ร่อน</option>
																<option value="ได้รับผลกระทบจากเอดส์">ได้รับผลกระทบจากเอดส์</option>
																<option value="ชนกลุ่มน้อย">ชนกลุ่มน้อย</option>
																<option value="ถูกทำร้ายทารุณ">ถูกทำร้ายทารุณ</option>
																<option value="เด็กยากจน">เด็กยากจน</option>
																<option value="เด็กที่มีปัญหาเกี่ยวกับยาเสพติด">เด็กที่มีปัญหาเกี่ยวกับยาเสพติด</option>
																<option value="เด็กกำพร้า">เด็กกำพร้า</option>
																<option value="ทำงานรับผิดชอบตนเองและครอบครัว">ทำงานรับผิดชอบตนเองและครอบครัว</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>ความขาดแคลน</label>
															<input value="{{$data->lack}}" type="text" class="form-control" name="lack" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</label>
															<input value="{{$data->friend_drug}}" type="text" class="form-control" name="friend_drug" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</label>
															<input value="{{$data->sell_drug}}" type="text" class="form-control" name="sell_drug" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</label>
															<input value="{{$data->sexual}}" type="text" class="form-control" name="sexual" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</label>
															<input value="{{$data->not_parent}}" type="text" class="form-control" name="not_parent" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนชอบเที่ยวกลางคืน</label>
															<input value="{{$data->dark_travel}}" type="text" class="form-control" name="dark_travel" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนเคยถูกล่วงละเมิดทางเพศ</label>
															<input value="{{$data->sexual_harrasment}}" type="text" class="form-control" name="sexual_harrasment" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนรู้สึกว่าโลกนี้</label>
															<input value="{{$data->cute_world}}" type="text" class="form-control" name="cute_world" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นักเรียนรู้สึกว่าตัวเอง</label>
															<input value="{{$data->rich_man}}" type="text" class="form-control" name="rich_man" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
															<input value="{{$data->good_guy}}" type="text" class="form-control" name="good_guy" readonly>
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
															<input value="{{$data->social_good}}" type="text" class="form-control" name="social_good" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้</label>
															<input value="{{$data->problem}}" type="text" class="form-control" name="problem" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร</label>
															<input value="{{$data->help}}" type="text" class="form-control" name="help" readonly>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 5 สุขภาพ -->
											<div class="tab-pane" id="health">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
												</div>

												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>น้ำหนัก</label>
															<input value="{{$data->weight}}" type="text" class="form-control" placeholder="" name="weight" readonly>
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ส่วนสูง</label>
															<input value="{{$data->height}}" type="text" class="form-control" placeholder="" name="height" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>โรคประจำตัว</label>
															<input value="{{$data->disease}}" type="text" class="form-control" placeholder="" name="disease" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ยาที่แพ้</label>
															<input value="{{$data->medicine_lose}}" type="text" class="form-control" placeholder="" name="medicine_lose" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ยาที่ต้องรับประทานประจำ</label>
															<input value="{{$data->medicine}}" type="text" class="form-control" placeholder="" name="medicine" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>วิธีแก้ไขเมื่อเกิดอาการ</label>
															<input value="{{$data->remedy}}" type="text" class="form-control" placeholder="" name="remedy" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>นักเรียนมีภาวะทางสายตา</label>
															<input value="{{$data->sight_eye}}" type="text" class="form-control" placeholder="" name="sight_eye" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนสวมแว่นตา</label>
															<input value="{{$data->glasses}}" type="text" class="form-control" name="glasses" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</label>
															<input value="{{$data->danger}}" type="text" class="form-control" name="danger" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนมีความบกพร่องทางการได้ยิน</label>
															<input value="{{$data->unsound}}" type="text" class="form-control" name="unsound" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนมีความบกพร่องทางร่างกาย</label>
															<input value="{{$data->defective}}" type="text" class="form-control" name="defective" readonly>
														</div>
													</div>
												</div>
											</div>

											<!-- Step 6 ครอบครัว -->
											<div class="tab-pane" id="family">
												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_f" readonly>
																<option>{{$data->prename_f}}</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input value="{{$data->name_f}}" type="text" class="form-control" placeholder="" name="name_f" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input value="{{$data->name_cen_f}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_f" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input value="{{$data->surname_f}}" type="text" class="form-control" placeholder="" name="surname_f" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input value="{{$data->id_father}}" type="text" class="form-control" placeholder="" name="id_father" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_f" readonly>
																<option>{{$data->type_card_f}}</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input value="{{$data->age_f}}" type="text" class="form-control" placeholder="" name="age_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_f" readonly>
																<option>{{$data->bloodgroup_f}}</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="O">O</option>
																<option value="AB">AB</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_f" readonly>
																<option>{{$data->job_f}}</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_f" readonly>
																<option>{{$data->salary_f}}</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input value="{{$data->tel_f}}" type="text" class="form-control" name="tel_f" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input value="{{$data->house_number_f}}" type="text" class="form-control" placeholder="" name="house_number_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input value="{{$data->group_f}}" type="text" class="form-control" placeholder="" name="group_f" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input value="{{$data->village_f}}" type="text" class="form-control" placeholder="" name="village_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input value="{{$data->alley_f}}" type="text" class="form-control" placeholder="" name="alley_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input value="{{$data->street_f}}" type="text" class="form-control" placeholder="" name="street_f" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->sub_district_f}}" type="text" class="form-control" placeholder="" name="sub_district_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->district_f}}" type="text" class="form-control" placeholder="" name="district_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->province_f}}" type="text" class="form-control" placeholder="" name="province_f" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->post_f}}" type="text" class="form-control" placeholder="" name="post_f" readonly>
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลมารดา</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_m" readonly>
																<option>{{$data->prename_m}}</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input value="{{$data->name_m}}" type="text" class="form-control" placeholder="" name="name_m" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input value="{{$data->name_cen_m}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_m" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input value="{{$data->surname_m}}" type="text" class="form-control" placeholder="" name="surname_m" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input value="{{$data->id_mother}}" type="text" class="form-control" placeholder="" name="id_mother" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_m" readonly>
																<option>{{$data->type_card_m}}</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input value="{{$data->age_m}}" type="text" class="form-control" placeholder="" name="age_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่เลือด</label>
															<select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_m" readonly>
																<option>{{$data->bloodgroup_m}}</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="O">O</option>
																<option value="AB">AB</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_m" readonly>
																<option>{{$data->job_m}}</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_m" readonly>
																<option>{{$data->salary_m}}</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input value="{{$data->tel_m}}" type="text" class="form-control" name="tel_m" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input value="{{$data->house_number_m}}" type="text" class="form-control" placeholder="" name="house_number_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input value="{{$data->group_m}}" type="text" class="form-control" placeholder="" name="group_m" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input value="{{$data->village_m}}" type="text" class="form-control" placeholder="" name="village_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input value="{{$data->alley_m}}" type="text" class="form-control" placeholder="" name="alley_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input value="{{$data->street_m}}" type="text" class="form-control" placeholder="" name="street_m" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->sub_district_m}}" type="text" class="form-control" placeholder="" name="sub_district_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->district_m}}" type="text" class="form-control" placeholder="" name="district_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->province_m}}" type="text" class="form-control" placeholder="" name="province_m" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->post_m}}" type="text" class="form-control" placeholder="" name="post_m" readonly>
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
												</div>

												<div class="row">
													<div class="col-sm-6 col-md-12">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->parent}}" type="text" class="form-control" name="parent" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>คำนำหน้าชื่อ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="prename_p" readonly>
																<option>{{$data->prename_p}}</option>
																<option value="นาย">นาย</option>
																<option value="นางสาว">นางสาว</option>
																<option value="นาง">นาง</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชื่อภาษาไทย</label>
															<input value="{{$data->name_p}}" type="text" class="form-control" placeholder="" name="name_p" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ชื่อกลาง</label>
															<input value="{{$data->name_cen_p}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_p" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>นามสกุลภาษาไทย</label>
															<input value="{{$data->surname_p}}" type="text" class="form-control" placeholder="" name="surname_p" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>เลขประจำตัวประชาชน</label>
															<input value="{{$data->id_parent}}" type="text" class="form-control" placeholder="" name="id_parent" readonly>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>ชนิดของบัตร</label>
															<select class="form-control" id="formGroupDefaultSelect" name="type_card_p" readonly>
																<option>{{$data->type_card_p}}</option>
																<option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
																<option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
																<option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>อายุ</label>
															<input value="{{$data->age_p}}" type="text" class="form-control" placeholder="" name="age_p" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ความสัมพันธ์ผู้ปกครอง</label>
															<input value="{{$data->relationship_parent}}" type="text" class="form-control" placeholder="" name="relationship_parent" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group form-group-default">
															<label>การประกอบอาชีพ</label>
															<select class="form-control" id="formGroupDefaultSelect" name="job_p" readonly>
																<option>{{$data->job_p}}</option>
																<option value="รับราชกาล">รับราชกาล</option>
																<option value="ค้าขาย">ค้าขาย</option>
																<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
																<option value="เกษตรกร">เกษตรกร</option>
																<option value="ลูกจ้าง">ลูกจ้าง</option>
																<option value="อิสระ">อิสระ</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รายได้ต่อเดือน (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="salary_p" readonly>
																<option>{{$data->salary_p}}</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
															<input value="{{$data->tel_p}}" type="text" class="form-control" name="tel_p" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>บ้านเลขที่</label>
															<input value="{{$data->house_number_p}}" type="text" class="form-control" placeholder="" name="house_number_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>หมู่</label>
															<input value="{{$data->group_p}}" type="text" class="form-control" placeholder="" name="group_p" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ชื่อหมู่บ้าน</label>
															<input value="{{$data->village_p}}" type="text" class="form-control" placeholder="" name="village_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>ซอย</label>
															<input value="{{$data->alley_p}}" type="text" class="form-control" placeholder="" name="alley_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ถนน</label>
															<input value="{{$data->street_p}}" type="text" class="form-control" placeholder="" name="street_p" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>ตำบล/แขวง</label>
															<input value="{{$data->sub_district_p}}" type="text" class="form-control" placeholder="" name="sub_district_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>อำเภอ/เขต</label>
															<input value="{{$data->district_p}}" type="text" class="form-control" placeholder="" name="district_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จังหวัด</label>
															<input value="{{$data->province_p}}" type="text" class="form-control" placeholder="" name="province_p" readonly>
														</div>
													</div>
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>รหัสไปรษณีย์</label>
															<input value="{{$data->post_p}}" type="text" class="form-control" placeholder="" name="post_p" readonly>
														</div>
													</div>
												</div>

												<div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
													<p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลครอบครัวเบื้องต้น</b></p>
												</div>

												<div class="row">
													<div class="col-6 col-md-8">
														<div class="form-group form-group-default">
															<label>สถานภาพสมรสของบิดามารดา</label>
															<select class="form-control" id="formGroupDefaultSelect" name="status_parent" readonly>
																<option>{{$data->status_parent}}</option>
																<option value="สมรส">สมรส</option>
																<option value="หย่าร้าง">หย่าร้าง</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-4">
														<div class="form-group form-group-default">
															<label>สถานะผู้ปกครองนักเรียน</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_parent" readonly>
																<option>{{$data->student_parent}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_blood" readonly>
																<option>{{$data->no_blood}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนพี่ชาย</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_brother" readonly>
																<option>{{$data->no_brother}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนน้องชาย</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_son" readonly>
																<option>{{$data->no_son}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนพี่สาว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_sister" readonly>
																<option>{{$data->no_sister}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-6 col-md-2">
														<div class="form-group form-group-default">
															<label>จำนวนน้องสาว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_son2" readonly>
																<option>{{$data->no_son2}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนเป็นบุตรคนที่</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_parent" readonly>
																<option>{{$data->no_parent}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_study" readonly>
																<option>{{$data->no_study}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_job" readonly>
																<option>{{$data->no_job}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
															<select class="form-control" id="formGroupDefaultSelect" name="no_house" readonly>
																<option>{{$data->no_house}}</option>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-9">
														<div class="form-group form-group-default">
															<label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
															<input value="{{$data->student_id}}" type="text" class="form-control" name="student_job" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="form-group form-group-default">
															<label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="student_money" readonly>
																<option>{{$data->student_money}}</option>
																<option value="0 - 20">0 - 20</option>
																<option value="21 - 40">21 - 40</option>
																<option value="41 - 60">41 - 60</option>
																<option value="61 - 80">61 - 80</option>
																<option value="81 - 100">81 - 100</option>
																<option value="มากกว่า 100">มากกว่า 100</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="parent_money" readonly>
																<option>{{$data->parent_money}}</option>
																<option value="0 - 9000">0 - 9000</option>
																<option value="9,001 - 15,000">9,001 - 15,000</option>
																<option value="15,001 - 30,000">15,001 - 30,000</option>
																<option value="30,001 - 50,000">30,001 - 50,000</option>
																<option value="50,001 - 100,000">50,001 - 100,000</option>
																<option value="100,001 - 300,000">100,001 - 300,000</option>
																<option value="มากกว่า 300,000">มากกว่า 300,000</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group form-group-default">
															<label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
															<input value="{{$data->parent_total}}" type="text" class="form-control" name="parent_total" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>เกี่ยวข้องเป็น</label>
															<input value="{{$data->parent_house}}" type="text" class="form-control" name="parent_house" readonly>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6 col-md-2">
														<div class="form-group form-group-default">
															<label>การหารายได้ด้วยตนเอง</label>
															<input value="{{$data->job_study}}" type="text" class="form-control" name="job_study" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>โปรดระบุ (หารายได้จากอะไร)</label>
															<input value="{{$data->job_detail}}" type="text" class="form-control" name="job_detail" readonly>
														</div>
													</div>
													<div class="col-sm-6 col-md-4">
														<div class="form-group form-group-default">
															<label>รายได้เฉลี่ยวันละ (บาท)</label>
															<select class="form-control" id="formGroupDefaultSelect" name="total_study" readonly>
																<option>{{$data->total_study}}</option>
																<option value="0 - 100">0 - 100</option>
																<option value="101 - 150">101 - 150</option>
																<option value="151 - 200">151 - 200</option>
																<option value="201 - 250">201 - 250</option>
																<option value="251 - 300">251 - 300</option>
																<option value="มากกว่า 300">มากกว่า 300</option>
															</select>
														</div>
													</div>
												</div>



											</div>
										</div>

										<div class="wizard-action">
											<div class="pull-left">
												<input type="button" class="btn btn-previous btn-fill btn-black" name="previous" value="ย้อนกลับ">
											</div>
											<div class="pull-right">
												<input type="button" class="btn btn-next btn-info" name="next" value="ถัดไป">

											</div>
											<div class="clearfix"></div>
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