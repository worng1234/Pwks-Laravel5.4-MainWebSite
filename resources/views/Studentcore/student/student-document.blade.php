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
                                        <div class="card-title"><i class="fas fa-id-card-alt fa-lg"></i> &nbsp;&nbsp; เอกสารประจำตัวของ {{$data1->prename}}{{$data1->fname}} {{$data1->surname}}</div>
										<a class="btn btn-success" style="margin-left: auto;" href='{{ url("/DocumentStudent/{$data1->id}")}}'>แก้ไขเอกสาร</a>
                                    </div>
									
                                </div>
                                <div class="card-body" style="min-height: 400px">
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>รูประจำตัว หนังสือรับรอง สำเนาบัตรประชาชนและสำเนาทะเบียนบ้านของผู้เรียน</b></p>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->profile_img !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->profile_img !== NULL)
                                                <a href='{{ url("ImgAll/profile_img", $data2->profile_img)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-user fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadProfile", $data2->profile_img)}}' class="btn btn-secondary disabled"><i class="fa fa-user fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="รูปประจำตัวนักเรียน" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->id_card_student !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->id_card_student !== NULL )
                                                <a href='{{ url("ImgAll/id_card/id_card_student", $data2->id_card_student)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdStudent", $data2->id_card_student)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาบัตรประชาชน" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->house_student !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->house_student !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_student", $data2->house_student)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseStudent", $data2->house_student)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาทะเบียนบ้าน" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->student_submit !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->student_submit !== NULL)
                                                <a href='{{ url("ImgAll/student_submit", $data2->student_submit)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-user-graduate fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadStudentSubmite", $data2->student_submit)}}' class="btn btn-secondary disabled"><i class="fa fa-user-graduate fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="ใบ ปพ.1 หรือหนังสือรับรอง" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาบัตรประชาชน บิดา มารดา</b></p>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->id_card_father !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->id_card_father !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_father", $data2->id_card_father)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdFather", $data2->id_card_father)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาบัตรประชาชนบิดา" class="form-control" readonly>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->id_card_mother !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->id_card_mother !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_mother", $data2->id_card_mother)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdMother", $data2->id_card_mother)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาบัตรประชาชนมารดา" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาทะเบียนบ้าน บิดา มารดา</b></p>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->house_father !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->house_father !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_father", $data2->house_father)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseFather", $data2->house_father)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาทะเบียนบ้านบิดา" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->house_mother !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->house_mother !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_mother", $data2->house_mother)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseMother", $data2->house_mother)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาทะเบียนบ้านมารดา" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>สำเนาทะเบียนบ้านและสำเนาบัตรประชาชนผู้ปกครอง (ในกรณีที่ไม่ได้อยู่กับบิดา มารดา)</b></p>
                                    </div>

                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->id_card_parent !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->id_card_parent !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_parent", $data2->id_card_parent)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdParent", $data2->id_card_parent)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาบัตรประชาชนผู้ปกครอง" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->house_parent !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->house_parent !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_parent", $data2->house_parent)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseParent", $data2->house_parent)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="สำเนาทะเบียนบ้านผู้ปกครอง" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>ใบ ปพ.1 และใบสูติบัตร </b></p>
                                    </div>

                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->front_grade !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->front_grade !== NULL)
                                                <a href='{{ url("ImgAll/front_grade", $data2->front_grade)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadFrontGrade", $data2->front_grade)}}' class="btn btn-secondary disabled"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="ใบ ปพ.1 (ด้านหน้า)" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->back_grade !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->back_grade !== NULL)
                                                <a href='{{ url("ImgAll/back_grade", $data2->back_grade)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadBackGrade", $data2->back_grade)}}' class="btn btn-secondary disabled"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="ใบ ปพ.1 (ด้านหลัง)" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->birth_certificate !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->birth_certificate !== NULL)
                                                <a href='{{ url("ImgAll/birth_certificate", $data2->birth_certificate)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-alt fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadBirth", $data2->birth_certificate)}}' class="btn btn-secondary disabled"><i class="fa fa-file-alt fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="ใบสูติบัตร" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                        <p style="margin-left: 25px;  font-size: 15px;"><b>หนังสือรับรองความพิการ (ในกรณีที่แพทย์รับรองว่าพิการจริง) </b></p>
                                    </div>

                                    <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data2->disability_certificate !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data2->disability_certificate !== NULL)
                                                <a href='{{ url("ImgAll/disability_certificate", $data2->disability_certificate)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-medical-alt fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadDisability", $data2->disability_certificate)}}' class="btn btn-secondary disabled"><i class="fa fa-file-medical-alt fa-lg"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group ">
                                                <input type="text" value="หนังสือรับรองความพิการ" class="form-control" readonly>
                                            </div>
                                        </div>
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