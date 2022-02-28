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
        .bor{
            border: 3px solid ;
            border-color: #cd8fff;
            border-radius: 3px;
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

                <a href="student-index.html" class="logo">
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
                        <label><small>โรงเรียนพร้าววิทยาคม จังหวัดเชียงใหม่ (สำหรับเจ้าหน้าที่ฝ่ายวิชาการ)</small></label>
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

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#agree">
                                <i class="fas fa-id-card-alt"></i>
                                <p>หลักฐานและข้อมูล</br>การสมัครเข้าเรียน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="agree">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#formob1">
                                            <span class="sub-item">ยังไม่ได้ตรวจสอบ</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="formob1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="{{ url('/UnsubmitObject/M1')}}">
                                                        <span class="sub-item">มัธยมศึกษาปีที่ 1</span>
                                                    </a>
                                                </li>
                                                <li>
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

                        <li class="nav-item active">
                            <a href="{{ url('/StudentCore')}}">
                                <i class="fas fa-file-archive"></i>
                                <p>ข้อมูลพื้นฐานนักเรียน</p>
                            </a>
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
                                <p>กำหนดชั้นเรียน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="basic">
                                <ul class="nav nav-collapse">
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
                            <div class="wizard-container wizard-round ">
                                <div class="wizard-header">
                                    <div class="card-title"><i class="fas fa-file-archive fa-lg"></i> &nbsp;&nbsp; ข้อมูลพื้นฐานนักเรียน <i class="flaticon-right-arrow"></i> ข้อมูลประจำตัวของ {{$studentcore->prename}}{{$studentcore->fname}} {{$studentcore->surname}}</div>
                                </div>

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
                                            <li class="step">
                                                <a class="nav-link" href="#photo" data-toggle="tab"><i class="fa fa-file-alt mr-0"></i> เอกสาร</br>ประจำตัว</a>
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
                                                        <input readonly type="text" class="form-control" name="student_id" value="{{$studentcore->student_id}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-5">
                                                    <div class="form-group form-group-default">
                                                        <label>แผนการเรียน (กรอกเฉพาะนักเรียนระดับชั้น ม.4 - ม.6)</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="student_major" readonly>
                                                            @if ($studentcore->student_major == '01')
                                                            <option>วิทยาศาสตร์-คณิตศาสตร์</option>

                                                            @elseif ($studentcore->student_major == '02')
                                                            <option>ภาษาอังกฤษ-ภาษาอังกฤษ</option>

                                                            @elseif ($studentcore->student_major == '03')
                                                            <option>ภาษาอังกฤษ-ภาษาจีน</option>

                                                            @elseif ($studentcore->student_major == '04')
                                                            <option>ศิลป์ทั่วไป(พาณิชยกรรม)</option>

                                                            @elseif ($studentcore->student_major == '05')
                                                            <option>ศิลป์ทั่วไป(ศิลปะ)</option>

                                                            @elseif ($studentcore->student_major == '06')
                                                            <option>ศิลป์ทั่วไป(เกษตร)</option>

                                                            @elseif ($studentcore->student_major == '07')
                                                            <option>ศิลป์ทั่วไป(คหกรรม)</option>

                                                            @elseif ($studentcore->student_major == '08')
                                                            <option>ศิลป์ทั่วไป(พลศึกษา)</option>

                                                            @elseif ($studentcore->student_major == '09')
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
                                                            <option>มัธยมศึกษาปีที่ {{$studentcore->student_class}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ห้อง</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="student_room" readonly>
                                                            <option>{{$studentcore->student_room}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขที่</label>
                                                        <input value="{{$studentcore->student_number}}" type="text" class="form-control" name="student_number" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input value="{{$studentcore->student_id_card}}" type="text" class="form-control" name="student_id_card" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="prename" readonly>
                                                            <option>{{$studentcore->prename}}</option>
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
                                                        <input value="{{$studentcore->fname}}" type="text" class="form-control" name="fname" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input value="{{$studentcore->name_cen}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input value="{{$studentcore->surname}}" type="text" class="form-control" name="surname" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="prename_eng" readonly>
                                                            <option>{{$studentcore->prename_eng}}</option>
                                                            <option value="mr">Mr.</option>
                                                            <option value="mrs">Mrs.</option>
                                                            <option value="miss">Miss</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อ(ภาษาอังกฤษ)</label>
                                                        <input value="{{$studentcore->name_eng}}" type="text" class="form-control" name="name_eng" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                                        <input value="{{$studentcore->name_cen_eng}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_eng" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุล(ภาษาอังกฤษ)</label>
                                                        <input value="{{$studentcore->surname_eng}}" type="text" class="form-control" name="surname_eng" readonly>
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
                                                            <option>{{$studentcore->birth_year}}</option>
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
                                                        @if ($studentcore->mounth == '01')
															<input id="Name" type="text" class="form-control" placeholder="" value="มกราคม" readonly>
															@elseif ($studentcore->mounth == '02')
															<input id="Name" type="text" class="form-control" placeholder="" value="กุมภาพันธ์" readonly>
															@elseif ($studentcore->mounth == '03')
															<input id="Name" type="text" class="form-control" placeholder="" value="มีนาคม" readonly>
															@elseif ($studentcore->mounth == '04')
															<input id="Name" type="text" class="form-control" placeholder="" value="เมษายน" readonly>
															@elseif ($studentcore->mounth == '05')
															<input id="Name" type="text" class="form-control" placeholder="" value="พฤษภาคม" readonly>
															@elseif ($studentcore->mounth == '06')
															<input id="Name" type="text" class="form-control" placeholder="" value="มิถุนายน" readonly>
															@elseif ($studentcore->mounth == '07')
															<input id="Name" type="text" class="form-control" placeholder="" value="กรกฎาคม" readonly>
															@elseif ($studentcore->mounth == '08')
															<input id="Name" type="text" class="form-control" placeholder="" value="สิงหาคม" readonly>
															@elseif ($studentcore->mounth == '09')
															<input id="Name" type="text" class="form-control" placeholder="" value="กันยายน" readonly>
															@elseif ($studentcore->mounth == '10')
															<input id="Name" type="text" class="form-control" placeholder="" value="ตุลาคม" readonly>
															@elseif ($studentcore->mounth == '11')
															<input id="Name" type="text" class="form-control" placeholder="" value="พฤษจิกายน" readonly>
															@elseif ($studentcore->mounth == '12')
															<input id="Name" type="text" class="form-control" placeholder="" value="ธันวาคม" readonly>
															@endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>วัน:</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="birth_day" readonly>
                                                            <option>{{$studentcore->birth_day}}</option>
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
                                                        <input value="{{$studentcore->nickname}}" type="text" class="form-control" name="nickname" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เพศสภาพ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="gender" readonly>
                                                            <option>{{$studentcore->gender}}</option>
                                                            <option value="ชาย">ชาย</option>
                                                            <option value="หญิง">หญิง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="bloodgroup" readonly>
                                                            <option>{{$studentcore->bloodgroup}}</option>
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
                                                        <input value="{{$studentcore->religion}}" type="text" class="form-control" name="religion" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เชื้อชาติ</label>
                                                        <input value="{{$studentcore->origin}}" type="text" class="form-control" name="origin" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>สัญชาติ</label>
                                                        <input value="{{$studentcore->nationality}}" type="text" class="form-control" name="nationality" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                                        <input value="{{$studentcore->language}}" type="text" class="form-control" name="language" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input value="{{$studentcore->tel_s}}" type="text" class="form-control" name="tel_s" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อีเมล์ (name@example.com)</label>
                                                        <input value="{{$studentcore->email}}" type="text" class="form-control" name="email" readonly>
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
                                                        <input value="{{$addressstudent->house_number}}" type="text" class="form-control" name="house_number" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input value="{{$addressstudent->group}}" type="text" class="form-control" name="group" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input value="{{$addressstudent->village}}" type="text" class="form-control" name="village" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input value="{{$addressstudent->alley}}" type="text" class="form-control" name="alley" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input value="{{$addressstudent->street}}" type="text" class="form-control" name="street" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$addressstudent->sub_district}}" type="text" class="form-control" name="sub_district" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$addressstudent->district}}" type="text" class="form-control" name="district" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$addressstudent->province}}" type="text" class="form-control" name="province" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input value="{{$addressstudent->post}}" type="text" class="form-control" name="post" readonly>
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
                                                        <input value="{{$addressstudent->address_now}}" type="text" class="form-control" name="address_now" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input value="{{$addressstudent->house_number_n}}" type="text" class="form-control" name="house_number_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input value="{{$addressstudent->group_n}}" type="text" class="form-control" name="group_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input value="{{$addressstudent->village_n}}" type="text" class="form-control" name="village_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input value="{{$addressstudent->alley_n}}" type="text" class="form-control" name="alley_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input value="{{$addressstudent->street_n}}" type="text" class="form-control" name="street_n" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$addressstudent->sub_district_n}}" type="text" class="form-control" name="sub_district_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$addressstudent->district_n}}" type="text" class="form-control" name="district_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$addressstudent->province_n}}" type="text" class="form-control" name="province_n" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input value="{{$addressstudent->post_n}}" type="text" class="form-control" name="post_n" readonly>
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
                                                        <input value="{{$talentstudent->final_school}}" type="text" class="form-control" name="final_school" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จบชั้น</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="final_class" readonly>
                                                            <option>{{$talentstudent->final_class}}</option>
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
                                                        <input value="{{$talentstudent->avg_grade}}" type="text" class="form-control" name="avg_grade" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$talentstudent->f_sub_district}}" type="text" class="form-control" name="f_sub_district" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$talentstudent->f_district}}" type="text" class="form-control" name="f_district" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$talentstudent->f_province}}" type="text" class="form-control" name="f_province" readonly>
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
                                                        <input value="{{$talentstudent->like_subject1}}" type="text" class="form-control" name="like_subject1" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input value="{{$talentstudent->like_subject2}}" type="text" class="form-control" name="like_subject2" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input value="{{$talentstudent->like_subject3}}" type="text" class="form-control" name="like_subject3" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input value="{{$talentstudent->like_subject4}}" type="text" class="form-control" name="like_subject4" readonly>
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
                                                        <input value="{{$talentstudent->unlike_subject1}}" type="text" class="form-control" name="unlike_subject1" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input value="{{$talentstudent->unlike_subject2}}" type="text" class="form-control" name="unlike_subject2" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input value="{{$talentstudent->unlike_subject3}}" type="text" class="form-control" name="unlike_subject3" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input value="{{$talentstudent->unlike_subject4}}" type="text" class="form-control" name="unlike_subject4" readonly>
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
                                                        <input value="{{$talentstudent->dream_job}}" type="text" class="form-control" name="dream_job" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เพราะอะไร</label>
                                                        <input value="{{$talentstudent->because}}" type="text" class="form-control" name="because" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสามารถพิเศษ</label>
                                                        <input value="{{$talentstudent->talent}}" type="text" class="form-control" name="talent" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การอ่านเขียน</label>
                                                        <input type="text" name="read_write" value="{{$talentstudent->read_write}}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนไม่เข้าใจบทเรียนทุกวิชา</label>
                                                        <input type="text" name="understand" value="{{$talentstudent->understand}}" class="form-control" readonly>
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
                                                            <option>{{$studentdetail->go_school}}</option>
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
                                                        <input value="{{$studentdetail->go_school_time}}" type="text" class="form-control" name="go_school_time" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                        <input value="{{$studentdetail->distance}}" type="text" class="form-control" name="distance" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                        <input value="{{$studentdetail->long_distance}}" type="text" class="form-control" name="long_distance" readonly>
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
                                                        <input value="{{$studentdetail->gadject}}" type="text" class="form-control" name="gadject" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>อินเตอร์เน็ตที่ใช้</label>
                                                        <input value="{{$studentdetail->internet}}" type="text" class="form-control" name="internet" readonly>
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
                                                            <option>{{$studentdetail->disabled}}</option>
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
                                                            <option>{{$studentdetail->unfortuned}}</option>
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
                                                        <input value="{{$studentdetail->lack}}" type="text" class="form-control" name="lack" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</label>
                                                        <input value="{{$studentdetail->friend_drug}}" type="text" class="form-control" name="friend_drug" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</label>
                                                        <input value="{{$studentdetail->sell_drug}}" type="text" class="form-control" name="sell_drug" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</label>
                                                        <input value="{{$studentdetail->sexual}}" type="text" class="form-control" name="sexual" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</label>
                                                        <input value="{{$studentdetail->not_parent}}" type="text" class="form-control" name="not_parent" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนชอบเที่ยวกลางคืน</label>
                                                        <input value="{{$studentdetail->dark_travel}}" type="text" class="form-control" name="dark_travel" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนเคยถูกล่วงละเมิดทางเพศ</label>
                                                        <input value="{{$studentdetail->sexual_harrasment}}" type="text" class="form-control" name="sexual_harrasment" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าโลกนี้</label>
                                                        <input value="{{$studentdetail->cute_world}}" type="text" class="form-control" name="cute_world" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าตัวเอง</label>
                                                        <input value="{{$studentdetail->rich_man}}" type="text" class="form-control" name="rich_man" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input value="{{$studentdetail->good_guy}}" type="text" class="form-control" name="good_guy" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input value="{{$studentdetail->social_good}}" type="text" class="form-control" name="social_good" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้</label>
                                                        <input value="{{$studentdetail->problem}}" type="text" class="form-control" name="problem" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร</label>
                                                        <input value="{{$studentdetail->help}}" type="text" class="form-control" name="help" readonly>
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
                                                        <input value="{{$healtystudent->weight}}" type="text" class="form-control" placeholder="" name="weight" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ส่วนสูง</label>
                                                        <input value="{{$healtystudent->height}}" type="text" class="form-control" placeholder="" name="height" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>โรคประจำตัว</label>
                                                        <input value="{{$healtystudent->disease}}" type="text" class="form-control" placeholder="" name="disease" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่แพ้</label>
                                                        <input value="{{$healtystudent->medicine_lose}}" type="text" class="form-control" placeholder="" name="medicine_lose" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่ต้องรับประทานประจำ</label>
                                                        <input value="{{$healtystudent->medicine}}" type="text" class="form-control" placeholder="" name="medicine" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>วิธีแก้ไขเมื่อเกิดอาการ</label>
                                                        <input value="{{$healtystudent->remedy}}" type="text" class="form-control" placeholder="" name="remedy" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีภาวะทางสายตา</label>
                                                        <input value="{{$healtystudent->sight_eye}}" type="text" class="form-control" placeholder="" name="sight_eye" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนสวมแว่นตา</label>
                                                        <input value="{{$healtystudent->glasses}}" type="text" class="form-control" name="glasses" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</label>
                                                        <input value="{{$healtystudent->danger}}" type="text" class="form-control" name="danger" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางการได้ยิน</label>
                                                        <input value="{{$healtystudent->unsound}}" type="text" class="form-control" name="unsound" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางร่างกาย</label>
                                                        <input value="{{$healtystudent->defective}}" type="text" class="form-control" name="defective" readonly>
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
                                                            <option>{{$parentstudent->prename_f}}</option>
                                                            <option value="นาย">นาย</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                            <option value="นาง">นาง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input value="{{$parentstudent->name_f}}" type="text" class="form-control" placeholder="" name="name_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input value="{{$parentstudent->name_cen_f}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input value="{{$parentstudent->surname_f}}" type="text" class="form-control" placeholder="" name="surname_f" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input value="{{$parentstudent->id_father}}" type="text" class="form-control" placeholder="" name="id_father" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="type_card_f" readonly>
                                                            <option>{{$parentstudent->type_card_f}}</option>
                                                            <option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
                                                            <option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                            <option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input value="{{$parentstudent->age_f}}" type="text" class="form-control" placeholder="" name="age_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_f" readonly>
                                                            <option>{{$parentstudent->bloodgroup_f}}</option>
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
                                                            <option>{{$parentstudent->job_f}}</option>
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
                                                            <option>{{$parentstudent->salary_f}}</option>
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
                                                        <input value="{{$parentstudent->tel_f}}" type="text" class="form-control" name="tel_f" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input value="{{$parentstudent->house_number_f}}" type="text" class="form-control" placeholder="" name="house_number_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input value="{{$parentstudent->group_f}}" type="text" class="form-control" placeholder="" name="group_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input value="{{$parentstudent->village_f}}" type="text" class="form-control" placeholder="" name="village_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input value="{{$parentstudent->alley_f}}" type="text" class="form-control" placeholder="" name="alley_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input value="{{$parentstudent->street_f}}" type="text" class="form-control" placeholder="" name="street_f" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$parentstudent->sub_district_f}}" type="text" class="form-control" placeholder="" name="sub_district_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$parentstudent->district_f}}" type="text" class="form-control" placeholder="" name="district_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$parentstudent->province_f}}" type="text" class="form-control" placeholder="" name="province_f" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input value="{{$parentstudent->post_f}}" type="text" class="form-control" placeholder="" name="post_f" readonly>
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
                                                            <option>{{$parentstudent->prename_m}}</option>
                                                            <option value="นาย">นาย</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                            <option value="นาง">นาง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input value="{{$parentstudent->name_m}}" type="text" class="form-control" placeholder="" name="name_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input value="{{$parentstudent->name_cen_m}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input value="{{$parentstudent->surname_m}}" type="text" class="form-control" placeholder="" name="surname_m" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input value="{{$parentstudent->id_mother}}" type="text" class="form-control" placeholder="" name="id_mother" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="type_card_m" readonly>
                                                            <option>{{$parentstudent->type_card_m}}</option>
                                                            <option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
                                                            <option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                            <option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input value="{{$parentstudent->age_m}}" type="text" class="form-control" placeholder="" name="age_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="bloodgroup_m" readonly>
                                                            <option>{{$parentstudent->bloodgroup_m}}</option>
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
                                                            <option>{{$parentstudent->job_m}}</option>
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
                                                            <option>{{$parentstudent->salary_m}}</option>
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
                                                        <input value="{{$parentstudent->tel_m}}" type="text" class="form-control" name="tel_m" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input value="{{$parentstudent->house_number_m}}" type="text" class="form-control" placeholder="" name="house_number_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input value="{{$parentstudent->group_m}}" type="text" class="form-control" placeholder="" name="group_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input value="{{$parentstudent->village_m}}" type="text" class="form-control" placeholder="" name="village_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input value="{{$parentstudent->alley_m}}" type="text" class="form-control" placeholder="" name="alley_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input value="{{$parentstudent->street_m}}" type="text" class="form-control" placeholder="" name="street_m" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$parentstudent->sub_district_m}}" type="text" class="form-control" placeholder="" name="sub_district_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$parentstudent->district_m}}" type="text" class="form-control" placeholder="" name="district_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$parentstudent->province_m}}" type="text" class="form-control" placeholder="" name="province_m" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input value="{{$parentstudent->post_m}}" type="text" class="form-control" placeholder="" name="post_m" readonly>
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
                                                        <input value="{{$parentstudent->parent}}" type="text" class="form-control" name="parent" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="prename_p" readonly>
                                                            <option>{{$parentstudent->prename_p}}</option>
                                                            <option value="นาย">นาย</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                            <option value="นาง">นาง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input value="{{$parentstudent->name_p}}" type="text" class="form-control" placeholder="" name="name_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input value="{{$parentstudent->name_cen_p}}" type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input value="{{$parentstudent->surname_p}}" type="text" class="form-control" placeholder="" name="surname_p" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input value="{{$parentstudent->id_parent}}" type="text" class="form-control" placeholder="" name="id_parent" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="type_card_p" readonly>
                                                            <option>{{$parentstudent->type_card_p}}</option>
                                                            <option value="บัตรประจำตัวประชาชน">บัตรประจำตัวประชาชน</option>
                                                            <option value="บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย">บัตรประจำตัวคนซึ่งไม่มีสัญชาติไทย</option>
                                                            <option value="บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน">บัตรประจำตัวบุคคลที่ไม่มีสถานะทางทะเบียน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input value="{{$parentstudent->age_p}}" type="text" class="form-control" placeholder="" name="age_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสัมพันธ์ผู้ปกครอง</label>
                                                        <input value="{{$parentstudent->relationship_parent}}" type="text" class="form-control" placeholder="" name="relationship_parent" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="job_p" readonly>
                                                            <option>{{$parentstudent->job_p}}</option>
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
                                                            <option>{{$parentstudent->salary_p}}</option>
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
                                                        <input value="{{$parentstudent->tel_p}}" type="text" class="form-control" name="tel_p" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input value="{{$parentstudent->house_number_p}}" type="text" class="form-control" placeholder="" name="house_number_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input value="{{$parentstudent->group_p}}" type="text" class="form-control" placeholder="" name="group_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input value="{{$parentstudent->village_p}}" type="text" class="form-control" placeholder="" name="village_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input value="{{$parentstudent->alley_p}}" type="text" class="form-control" placeholder="" name="alley_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input value="{{$parentstudent->street_p}}" type="text" class="form-control" placeholder="" name="street_p" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input value="{{$parentstudent->sub_district_p}}" type="text" class="form-control" placeholder="" name="sub_district_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input value="{{$parentstudent->district_p}}" type="text" class="form-control" placeholder="" name="district_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input value="{{$parentstudent->province_p}}" type="text" class="form-control" placeholder="" name="province_p" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input value="{{$parentstudent->post_p}}" type="text" class="form-control" placeholder="" name="post_p" readonly>
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
                                                            <option>{{$parentstudent->status_parent}}</option>
                                                            <option value="สมรส">สมรส</option>
                                                            <option value="หย่าร้าง">หย่าร้าง</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>สถานะผู้ปกครองนักเรียน</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="student_parent" readonly>
                                                            <option>{{$parentstudent->student_parent}}</option>
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
                                                            <option>{{$parentstudent->no_blood}}</option>
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
                                                            <option>{{$parentstudent->no_brother}}</option>
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
                                                            <option>{{$parentstudent->no_son}}</option>
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
                                                            <option>{{$parentstudent->no_sister}}</option>
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
                                                            <option>{{$parentstudent->no_son2}}</option>
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
                                                            <option>{{$parentstudent->no_parent}}</option>
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
                                                            <option>{{$parentstudent->no_study}}</option>
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
                                                            <option>{{$parentstudent->no_job}}</option>
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
                                                            <option>{{$parentstudent->no_house}}</option>
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
                                                        <input value="{{$parentstudent->student_job}}" type="text" class="form-control" name="student_job" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="student_money" readonly>
                                                            <option>{{$parentstudent->student_money}}</option>
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
                                                            <option>{{$parentstudent->parent_money}}</option>
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
                                                        <input value="{{$parentstudent->parent_total}}" type="text" class="form-control" name="parent_total" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เกี่ยวข้องเป็น</label>
                                                        <input value="{{$parentstudent->parent_house}}" type="text" class="form-control" name="parent_house" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>การหารายได้ด้วยตนเอง</label>
                                                        <input value="{{$parentstudent->job_study}}" type="text" class="form-control" name="job_study" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>โปรดระบุ (หารายได้จากอะไร)</label>
                                                        <input value="{{$parentstudent->job_detail}}" type="text" class="form-control" name="job_detail" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้เฉลี่ยวันละ (บาท)</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="total_study" readonly>
                                                            <option>{{$parentstudent->total_study}}</option>
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

                                    <div class="tab-pane" id="photo">
                                    <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
											<p style="margin-left: 25px;  font-size: 15px;"><b>รูปประจำตัว สำเนาบัตรประชาชน สำเนาทะเบียนบ้าน ใบปพ.1 หรือหนังสือรับรองการเป็นนักเรียน</b></p>
								</div>
                                <div class="row">
                                        <div align="center" style="margin-left:20px;">
                                            <div class="form-group">
                                                @if($data->profile_img !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->profile_img !== NULL)
                                                <a href='{{ url("ImgAll/profile_img", $data->profile_img)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-user fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadProfile", $data->profile_img)}}' class="btn btn-secondary disabled"><i class="fa fa-user fa-lg"></i></a>
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
                                                @if($data->id_card_student !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->id_card_student !== NULL )
                                                <a href='{{ url("ImgAll/id_card/id_card_student", $data->id_card_student)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdStudent", $data->id_card_student)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
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
                                                @if($data->house_student !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->house_student !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_student", $data->house_student)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseStudent", $data->house_student)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
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
                                                @if($data->student_submit !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->student_submit !== NULL)
                                                <a href='{{ url("ImgAll/student_submit", $data->student_submit)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-user-graduate fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadStudentSubmite", $data->student_submit)}}' class="btn btn-secondary disabled"><i class="fa fa-user-graduate fa-lg"></i></a>
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
                                                @if($data->id_card_father !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->id_card_father !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_father", $data->id_card_father)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdFather", $data->id_card_father)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
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
                                                @if($data->id_card_mother !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->id_card_mother !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_mother", $data->id_card_mother)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdMother", $data->id_card_mother)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
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
                                                @if($data->house_father !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->house_father !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_father", $data->house_father)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseFather", $data->house_father)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
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
                                                @if($data->house_mother !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->house_mother !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_mother", $data->house_mother)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseMother", $data->house_mother)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
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
                                                @if($data->id_card_parent !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->id_card_parent !== NULL)
                                                <a href='{{ url("ImgAll/id_card/id_card_parent", $data->id_card_parent)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-id-badge fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadIdParent", $data->id_card_parent)}}' class="btn btn-secondary disabled"><i class="fa fa-id-badge fa-lg"></i></a>
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
                                                @if($data->house_parent !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->house_parent !== NULL)
                                                <a href='{{ url("ImgAll/house_regis/house_parent", $data->house_parent)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadHouseParent", $data->house_parent)}}' class="btn btn-secondary disabled"><i class="fa fa-file fa-lg"></i></a>
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
                                                @if($data->front_grade !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->front_grade !== NULL)
                                                <a href='{{ url("ImgAll/front_grade", $data->front_grade)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadFrontGrade", $data->front_grade)}}' class="btn btn-secondary disabled"><i class="fa fa-file-contract fa-lg"></i></a>
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
                                                @if($data->back_grade !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->back_grade !== NULL)
                                                <a href='{{ url("ImgAll/back_grade", $data->back_grade)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-contract fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadBackGrade", $data->back_grade)}}' class="btn btn-secondary disabled"><i class="fa fa-file-contract fa-lg"></i></a>
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
                                                @if($data->birth_certificate !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->birth_certificate !== NULL)
                                                <a href='{{ url("ImgAll/birth_certificate", $data->birth_certificate)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-alt fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadBirth", $data->birth_certificate)}}' class="btn btn-secondary disabled"><i class="fa fa-file-alt fa-lg"></i></a>
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
                                                @if($data->disability_certificate !== NULL)
                                                <p><i class="fas fa-circle" style="color:green;"></i></p>
                                                @else
                                                <p><i class="fas fa-circle" style="color:red;"></i></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-1">
                                            <div class="form-group ">
                                                @if ($data->disability_certificate !== NULL)
                                                <a href='{{ url("ImgAll/disability_certificate", $data->disability_certificate)}}' class="btn btn-secondary " target="_blank"><i class="fa fa-file-medical-alt fa-lg"></i></a>
                                                @else
                                                <a href='{{ url("/DownloadDisability", $data->disability_certificate)}}' class="btn btn-secondary disabled"><i class="fa fa-file-medical-alt fa-lg"></i></a>
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

                                    <div class="wizard-action">
                                        <div class="pull-left">
                                            <input type="button" class="btn btn-previous btn-fill btn-black" name="previous" value="ย้อนกลับ">
                                        </div>
                                        <div class="pull-right">
                                            <input type="button" class="btn btn-next btn-info" name="next" value="ถัดไป">

                                        </div>
                                        <div class="clearfix"></div>
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

    <!-- Date time picker -->
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