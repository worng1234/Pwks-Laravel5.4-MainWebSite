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
                            <a class="dropdown-toggle profile-pic" href="index.html" aria-expanded="false">
                                <i class="fas fa-unlock"></i> ออกระบบ
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
                            <a href="/">
                                <i class="fas fa-home"></i>
                                <p>หน้าหลัก</p>
                            </a>
                        </li>

                        <li class="nav-item active submenu">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-user-graduate"></i>
                                <p>จัดการข้อมูลนักเรียน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#forms1">
                                            <span class="sub-item">ข้อมูลนักเรียนพื้นฐาน</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse show" id="forms1">
                                            <ul class="nav nav-collapse subnav">
                                                <li class="active">
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

                                    <!-- <li>
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
                                                    <a href="academic-graduated-all.html">
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
                                    </li> -->
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


                <form>
                    <!-- ข้อมูลเบื้องต้น -->
                    <div class="step-one">
                        <div class="page-inner mt--5">
                            <div class="row mt--2">
                                <div class="col-md-12">
                                    <div class="card full-height">
                                        <div class="card-header">
                                            <div class="card-head-row">
                                                <div class="card-title"><i class="fas fa-id-card-alt"></i> &nbsp;&nbsp; ข้อมูลนักเรียนพื้นฐาน <i class="flaticon-right-arrow"></i> แสดงข้อมูลนักเรียน</div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลเบื้องต้น</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวนักเรียน</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_id" value="{{$studentcore->student_id}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>แผนการเรียน</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_major" value="{{$studentcore->student_major}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระดับชั้น</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_class" value="{{$studentcore->student_class}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ลำดับห้อง</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_room" value="{{$studentcore->student_room}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-5 col-md-1">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_number" value="{{$studentcore->student_number}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_id_card" value="{{$studentcore->student_id_card}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="" name="prename" value="{{$studentcore->prename}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="fname" value="{{$studentcore->fname}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen" value="{{$studentcore->name_cen}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="surname" value="{{$studentcore->surname}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="" name="prename_eng" value="{{$studentcore->prename_eng}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อ(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="" name="name_eng" value="{{$studentcore->name_eng}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_eng" value="{{$studentcore->name_cen_eng}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุล(ภาษาอังกฤษ)</label>
                                                        <input type="text" class="form-control" placeholder="" name="surname_eng" value="{{$studentcore->surname_eng}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="birth_year" value="{{$studentcore->birth_year}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เดือน:</label>
                                                        <input type="text" class="form-control" placeholder="" name="birth_month" value="{{$studentcore->birth_month}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>วัน:</label>
                                                        <input type="text" class="form-control" placeholder="" name="birth_day" value="{{$studentcore->birth_day}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อเล่น</label>
                                                        <input type="text" class="form-control" placeholder="" name="nickname" value="{{$studentcore->nickname}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เพศสภาพ</label>
                                                        <input type="text" class="form-control" placeholder="" name="gender" value="{{$studentcore->gender}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="" name="bloodgroup" value="{{$studentcore->bloodgroup}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ศาสนา</label>
                                                        <input type="text" class="form-control" placeholder="" name="religion" value="{{$studentcore->religion}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เชื้อชาติ</label>
                                                        <input type="text" class="form-control" placeholder="" name="origin" value="{{$studentcore->origin}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>สัญชาติ</label>
                                                        <input type="text" class="form-control" placeholder="" name="nationality" value="{{$studentcore->nationality}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ภาษาที่ใช้ เช่น ไทย จีน อังกฤษ ญี่ปุ่น</label>
                                                        <input type="text" class="form-control" placeholder="" name="language" value="{{$studentcore->language}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control" placeholder="" name="tel_s" value="{{$studentcore->tel_s}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อีเมล์ (name@example.com)</label>
                                                        <input type="text" class="form-control" placeholder="" name="email" value="{{$studentcore->email}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ตามทะเบียนบ้าน</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="house_number" value="{{$addressstudent->house_number}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="" name="group" value="{{$addressstudent->group}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="" name="village" value="{{$addressstudent->village}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="" name="alley" value="{{$addressstudent->alley}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="" name="street" value="{{$addressstudent->street}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="subdistrict" value="{{$addressstudent->subdistrict}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="district" value="{{$addressstudent->district}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="province" value="{{$addressstudent->province}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="" name="post" value="{{$addressstudent->post}}" readonly>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- ข้อมูลที่อยู่ปัจจุบัน -->
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลที่อยู่ปัจจุบัน</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ที่อยู่ปัจจุบัน</label>
                                                        <input type="text" class="form-control" placeholder="" name="address_now" value="{{$addressstudent->address_now}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="house_number_n" value="{{$addressstudent->house_number_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="" name="group_n" value="{{$addressstudent->group_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="" name="village_n" value="{{$addressstudent->village_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="" name="alley_n" value="{{$addressstudent->alley_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="" name="street_n" value="{{$addressstudent->street_n}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="subdistrict_n" value="{{$addressstudent->subdistrict_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="district_n" value="{{$addressstudent->district_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="province_n" value="{{$addressstudent->province_n}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="" name="post_n" value="{{$addressstudent->post_n}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <input type="text" class="form-control" placeholder="" name="final_school" value="{{$talentstudent->final_school}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จบชั้น</label>
                                                        <input type="text" class="form-control" placeholder="" name="final_class" value="{{$talentstudent->final_class}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ผลการเรียนเฉลี่ย</label>
                                                        <input type="text" class="form-control" placeholder="" name="avg_grade" value="{{$talentstudent->avg_grade}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="f_subdistrict" value="{{$talentstudent->f_subdistrict}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="f_district" value="{{$talentstudent->f_district}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="f_province" value="{{$talentstudent->f_province}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="like_subject1" value="{{$talentstudent->like_subject1}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input type="text" class="form-control" placeholder="" name="like_subject2" value="{{$talentstudent->like_subject2}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input type="text" class="form-control" placeholder="" name="like_subject3" value="{{$talentstudent->like_subject3}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input type="text" class="form-control" placeholder="" name="like_subject4" value="{{$talentstudent->like_subject4}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="unlike_subject1" value="{{$talentstudent->unlike_subject1}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>2)</label>
                                                        <input type="text" class="form-control" placeholder="" name="unlike_subject2" value="{{$talentstudent->unlike_subject2}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>3)</label>
                                                        <input type="text" class="form-control" placeholder="" name="unlike_subject3" value="{{$talentstudent->unlike_subject3}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>4)</label>
                                                        <input type="text" class="form-control" placeholder="" name="unlike_subject4" value="{{$talentstudent->unlike_subject4}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="dream_job" value="{{$talentstudent->dream_job}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เพราะอะไร</label>
                                                        <input type="text" class="form-control" placeholder="" name="because" value="{{$talentstudent->because}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสามารถพิเศษ</label>
                                                        <input type="text" class="form-control" placeholder="" name="talent" value="{{$talentstudent->talent}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การอ่านเขียน</label>
                                                        <input type="text" class="form-control" placeholder="" name="read_write" value="{{$talentstudent->read_write}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนไม่เข้าใจบทเรียนทุกวิชา</label>
                                                        <input type="text" class="form-control" placeholder="" name="understand" value="{{$talentstudent->understand}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเดินทาง</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>การเดินทางมาโรงเรียน</label>
                                                        <input type="text" class="form-control" placeholder="" name="go_school" value="{{$studentdetail->go_school}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะเวลาเดินทาง (นาที)</label>
                                                        <input type="text" class="form-control" placeholder="" name="go_school_time" value="{{$studentdetail->go_school_time}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลูกรัง) เมตร</label>
                                                        <input type="text" class="form-control" placeholder="" name="distance" value="{{$studentdetail->distance}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ระยะห่างจาก ร.ร. (ลาดยาง) เมตร</label>
                                                        <input type="text" class="form-control" placeholder="" name="long_distance" value="{{$studentdetail->long_distance}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>การเรียนออนไลน์</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>อุปกรณ์ที่มี </label>
                                                        <input type="text" class="form-control" placeholder="" name="gadject" value="{{$studentdetail->gadject}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>อินเตอร์เน็ตที่ใช้ </label>
                                                        <input type="text" class="form-control" placeholder="" name="internet" value="{{$studentdetail->internet}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="disabled" value="{{$studentdetail->disabled}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ความด้อยโอกาส</label>
                                                        <input type="text" class="form-control" placeholder="" name="unfortuned" value="{{$studentdetail->unfortuned}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ความขาดแคลน</label>
                                                        <input type="text" class="form-control" placeholder="" name="lack" value="{{$studentdetail->lack}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคบเพื่อนที่เกี่ยวข้องกับสิ่งเสพติด</label>
                                                        <input type="text" class="form-control" placeholder="" name="friend_drug" value="{{$studentdetail->friend_drug}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมเสพยาหรือจำหน่ายสิ่งเสพติด</label>
                                                        <input type="text" class="form-control" placeholder="" name="sell_drug" value="{{$studentdetail->sell_drug}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีพฤติกรรมส่อไปในทางชู้สาว</label>
                                                        <input type="text" class="form-control" placeholder="" name="sexual" value="{{$studentdetail->sexual}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนพักหรืออาศัยอยู่กับเพื่อนต่างเพศที่มิใช่ญาติพี่น้อง</label>
                                                        <input type="text" class="form-control" placeholder="" name="not_parent" value="{{$studentdetail->not_parent}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนชอบเที่ยวกลางคืน</label>
                                                        <input type="text" class="form-control" placeholder="" name="dark_travel" value="{{$studentdetail->dark_travel}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนเคยถูกล่วงละเมิดทางเพศ</label>
                                                        <input type="text" class="form-control" placeholder="" name="sexual_harrasment" value="{{$studentdetail->sexual_harrasment}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าโลกนี้</label>
                                                        <input type="text" class="form-control" placeholder="" name="cute_world" value="{{$studentdetail->cute_world}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนรู้สึกว่าตัวเอง</label>
                                                        <input type="text" class="form-control" placeholder="" name="rich_man" value="{{$studentdetail->rich_man}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าคนที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input type="text" class="form-control" placeholder="" name="good_guy" value="{{$studentdetail->good_guy}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนคิดว่าสังคมที่ดีควรมีลักษณะอย่างไร</label>
                                                        <input type="text" class="form-control" placeholder="" name="social_good" value="{{$studentdetail->social_good}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ปัญหาเรื่องใด ที่นักเรียนกำลังประสบอยู่ในขณะนี้</label>
                                                        <input type="text" class="form-control" placeholder="" name="problem" value="{{$studentdetail->problem}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ถ้าต้องการความช่วยเหลือ/ปรึกษา นักเรียนต้องการความช่วยเหลือ/ปรึกษา จากใคร</label>
                                                        <input type="text" class="form-control" placeholder="" name="help" value="{{$studentdetail->help}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลสุขภาพ</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>น้ำหนัก</label>
                                                        <input type="text" class="form-control" placeholder="" name="weight" value="{{$healtystudent->weight}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ส่วนสูง</label>
                                                        <input type="text" class="form-control" placeholder="" name="height" value="{{$healtystudent->height}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>โรคประจำตัว</label>
                                                        <input type="text" class="form-control" placeholder="" name="disease" value="{{$healtystudent->disease}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่แพ้</label>
                                                        <input type="text" class="form-control" placeholder="" name="medicine_lose" value="{{$healtystudent->medicine_lose}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ยาที่ต้องรับประทานประจำ</label>
                                                        <input type="text" class="form-control" placeholder="" name="medicine" value="{{$healtystudent->medicine}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>วิธีแก้ไขเมื่อเกิดอาการ</label>
                                                        <input type="text" class="form-control" placeholder="" name="remedy" value="{{$healtystudent->remedy}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีภาวะทางสายตา</label>
                                                        <input type="text" class="form-control" placeholder="" name="glasses" value="{{$healtystudent->glasses}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนสวมแว่นตา</label>
                                                        <input type="text" class="form-control" placeholder="" name="danger" value="{{$healtystudent->danger}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนป่วยเป็นโรคร้ายแรงหรือเรื้อรัง</label>
                                                        <input type="text" class="form-control" placeholder="" name="unsound" value="{{$healtystudent->unsound}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางการได้ยิน</label>
                                                        <input type="text" class="form-control" placeholder="" name="defective" value="{{$healtystudent->defective}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีความบกพร่องทางร่างกาย</label>
                                                        <input type="text" class="form-control" placeholder="" name="sight_eye" value="{{$healtystudent->sight_eye}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลบิดา</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="" name="prename_f" value="{{$parentstudentModel->prename_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="name_f" value="{{$parentstudentModel->name_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_f" value="{{$parentstudentModel->name_cen_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="surname_f" value="{{$parentstudentModel->surname_f}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="" name="id_father" value="{{$parentstudentModel->id_father}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="" name="type_card_f" value="{{$parentstudentModel->type_card_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input id="age_f" type="text" class="form-control" placeholder="" name="age_f" value="{{$parentstudentModel->age_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="" name="bloodgroup_f" value="{{$parentstudentModel->bloodgroup_f}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="" name="job_f" value="{{$parentstudentModel->job_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="" name="salary_f" value="{{$parentstudentModel->salary_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control" name="tel_f" value="{{$parentstudentModel->tel_f}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="house_number_f" value="{{$parentstudentModel->house_number_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="" name="group_f" value="{{$parentstudentModel->group_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="" name="village_f" value="{{$parentstudentModel->village_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="" name="alley_f" value="{{$parentstudentModel->alley_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="" name="street_f" value="{{$parentstudentModel->street_f}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="subdistrict_f" value="{{$parentstudentModel->subdistrict_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="district_f" value="{{$parentstudentModel->district_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="province_f" value="{{$parentstudentModel->province_f}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="" name="post_f" value="{{$parentstudentModel->post_f}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="prename_m" value="{{$parentstudentModel->prename_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="name_m" value="{{$parentstudentModel->name_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_m" value="{{$parentstudentModel->name_cen_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="surname_m" value="{{$parentstudentModel->surname_m}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="" name="id_mother" value="{{$parentstudentModel->id_mother}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="" name="type_card_m" value="{{$parentstudentModel->type_card_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input type="text" class="form-control" placeholder="" name="age_m" value="{{$parentstudentModel->age_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่เลือด</label>
                                                        <input type="text" class="form-control" placeholder="" name="bloodgroup_m" value="{{$parentstudentModel->bloodgroup_m}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="" name="job_m" value="{{$parentstudentModel->job_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="" name="salary_m" value="{{$parentstudentModel->salary_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control" name="tel_m" value="{{$parentstudentModel->tel_m}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="house_number_m" value="{{$parentstudentModel->house_number_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="" name="group_m" value="{{$parentstudentModel->group_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="" name="village_m" value="{{$parentstudentModel->village_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="" name="alley_m" value="{{$parentstudentModel->alley_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="" name="street_m" value="{{$parentstudentModel->street_m}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="subdistrict_m" value="{{$parentstudentModel->subdistrict_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="district_m" value="{{$parentstudentModel->district_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="province_m" value="{{$parentstudentModel->province_m}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="" name="post_m" value="{{$parentstudentModel->post_m}}" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="border-radius: 5px; background-color: #8B469B; margin-bottom: 15px; color: white;">
                                                <p style="margin-left: 25px;  font-size: 15px;"><b>ข้อมูลผู้ปกครอง</b></p>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>ผู้ปกครอง</label>
                                                        <input type="text" class="form-control" placeholder="" name="parent" value="{{$parentstudentModel->parent}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <input type="text" class="form-control" placeholder="" name="prename_p" value="{{$parentstudentModel->prename_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="name_p" value="{{$parentstudentModel->name_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อกลาง</label>
                                                        <input type="text" class="form-control" placeholder="(ถ้ามี)" name="name_cen_p" value="{{$parentstudentModel->name_cen_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input type="text" class="form-control" placeholder="" name="surname_p" value="{{$parentstudentModel->surname_p}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>เลขประจำตัวประชาชน</label>
                                                        <input type="text" class="form-control" placeholder="" name="id_parent" value="{{$parentstudentModel->id_parent}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชนิดของบัตร</label>
                                                        <input type="text" class="form-control" placeholder="" name="type_card_p" value="{{$parentstudentModel->type_card_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>อายุ</label>
                                                        <input type="text" class="form-control" placeholder="" name="age_p" value="{{$parentstudentModel->age_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ความสัมพันธ์ผู้ปกครอง</label>
                                                        <input type="text" class="form-control" placeholder="" name="bloodgroup_p" value="{{$parentstudentModel->bloodgroup_p}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>การประกอบอาชีพ</label>
                                                        <input type="text" class="form-control" placeholder="" name="job_p" value="{{$parentstudentModel->job_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ต่อเดือน (บาท)</label>
                                                        <input type="text" class="form-control" placeholder="" name="salary_p" value="{{$parentstudentModel->salary_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>หมายเลขโทรศัพท์ที่สามารถติดต่อได้</label>
                                                        <input type="text" class="form-control" name="tel_p" value="{{$parentstudentModel->tel_p}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>บ้านเลขที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="house_number_p" value="{{$parentstudentModel->house_number_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>หมู่</label>
                                                        <input type="text" class="form-control" placeholder="" name="group_p" value="{{$parentstudentModel->group_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อหมู่บ้าน</label>
                                                        <input type="text" class="form-control" placeholder="" name="village_p" value="{{$parentstudentModel->village_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>ซอย</label>
                                                        <input type="text" class="form-control" placeholder="" name="alley_p" value="{{$parentstudentModel->alley_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ถนน</label>
                                                        <input type="text" class="form-control" placeholder="" name="street_p" value="{{$parentstudentModel->street_p}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>ตำบล/แขวง</label>
                                                        <input type="text" class="form-control" placeholder="" name="subdistrict_p" value="{{$parentstudentModel->subdistrict_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>อำเภอ/เขต</label>
                                                        <input type="text" class="form-control" placeholder="" name="district_p" value="{{$parentstudentModel->district_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จังหวัด</label>
                                                        <input type="text" class="form-control" placeholder="" name="province_p" value="{{$parentstudentModel->province_p}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัสไปรษณีย์</label>
                                                        <input type="text" class="form-control" placeholder="" name="post_p" value="{{$parentstudentModel->post_p}}" readonly>
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
                                                        <input type="text" class="form-control" placeholder="" name="status_parent" value="{{$parentstudentModel->status_parent}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>สถานะผู้ปกครองนักเรียน</label>
                                                        <input type="text" class="form-control" placeholder="" name="student_parent" value="{{$parentstudentModel->student_parent}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้อง ร่วมสายโลหิต</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_blood" value="{{$parentstudentModel->no_blood}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่ชาย</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_brother" value="{{$parentstudentModel->no_brother}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนน้องชาย</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_son" value="{{$parentstudentModel->no_son}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่สาว</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_sister" value="{{$parentstudentModel->no_sister}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนน้องสาว</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_son2" value="{{$parentstudentModel->no_son2}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนเป็นบุตรคนที่</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_parent" value="{{$parentstudentModel->no_parent}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่ศึกษาอยู่ (ไม่นับรวมนักเรียน)</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_study" value="{{$parentstudentModel->no_study}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่ประกอบอาชีพแล้ว</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_job" value="{{$parentstudentModel->no_job}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>จำนวนพี่น้องที่อยู่ในความอุปการะของครอบครัว</label>
                                                        <input type="text" class="form-control" placeholder="" name="no_house" value="{{$parentstudentModel->no_house}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-9">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนมีหน้าที่รับผิดชอบภายในบ้าน นอกเหนือจากการเรียน</label>
                                                        <input type="text" class="form-control" name="student_job" value="{{$parentstudentModel->student_job}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-3">
                                                    <div class="form-group form-group-default">
                                                        <label>นักเรียนนำเงินมาโรงเรียนวันละ (บาท)</label>
                                                        <input type="text" class="form-control" name="student_money" value="{{$parentstudentModel->student_money}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้ของครอบครัวต่อเดือน (รายได้รวมกัน)</label>
                                                        <input type="text" class="form-control" placeholder="" name="parent_money" value="{{$parentstudentModel->parent_money}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ผู้ออกค่าใช้จ่ายให้นักเรียน (ชื่อ-นามสกุล)</label>
                                                        <input type="text" class="form-control" name="parent_total" value="{{$parentstudentModel->parent_total}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>เกี่ยวข้องเป็น</label>
                                                        <input type="text" class="form-control" placeholder="" name="parent_house" value="{{$parentstudentModel->parent_house}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>การหารายได้ด้วยตนเอง</label>
                                                        <input type="text" class="form-control" placeholder="" name="job_study" value="{{$parentstudentModel->job_study}}" readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>โปรดระบุ (หารายได้จากอะไร)</label>
                                                        <input type="text" class="form-control" name="job_detail" value="{{$parentstudentModel->job_detail}}" readonly>
                                                    </div>
                                                    <div class="form-group form-group-default">
                                                        <label>รายได้เฉลี่ยวันละ (บาท)</label>
                                                        <input type="text" class="form-control" name="total_study" value="{{$parentstudentModel->total_study}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" align="center">
                                            <a href='{{ url("/FixStudentCore/{$studentcore->id}")}}' class="btn btn-success"><strong>แก้ไขข้อมูล</strong></a>
                                            <a href="{{ url('/StudentCore')}}" type="button" class="btn btn-danger"><strong>ย้อนกลับ</strong></a>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

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