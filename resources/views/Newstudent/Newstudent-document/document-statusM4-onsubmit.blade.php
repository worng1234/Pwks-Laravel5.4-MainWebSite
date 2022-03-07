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

    <style>
        /* Ensure that the demo table scrolls */
        th, td { white-space: nowrap; }
        div.dataTables_wrapper {
            margin: 0 auto;
        }

        div.container {
            width: 100%;
        }
        .bgimgheader {
            
            background-repeat: repeat;
            background-position: center; 
            position: relative;
        }
        
    </style>

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
                    <a href="index.html" class="logo d-flex align-items-center">
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

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/')}}">
                                <i class="link-icon icon-home"></i>
                                <span class="menu-title">หน้าแรก</span>
                            </a>
                        </li>
                        <li class="nav-item submenu active">
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
                        <li class="nav-item " >
							<a class="nav-link" href="{{ url('/Contact')}}">
								<i class="link-icon icon-bubbles"></i>
								<span class="menu-title">ติดต่อเรา</span>
							</a>
						</li>
						<li class="nav-item " >
							<a class="nav-link" href="https://www.pwks.ac.th/" target="_blank">
								<i class="link-icon icon-star"></i>
								<span class="menu-title">Go Pwks!</span>
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
                                <div class="card-body" align="center" style="min-height: 450px">
                                <div class="card-title fw-mediumbold">สถานะหลักฐานรายงานตัว</div>
                                    <p class="card-category">เพื่อตรวจสอบสิทธิ์ในการยื่นเอกสารรายงานตัวเพื่อเข้าเป็นนักเรียนในระดับชั้นมัธยมศึกษาปีที่ 4</p>
                                    <p class="card-category" style="color:red;">*หากสถานะขึ้นว่า "ยังไม่ได้ส่งหลักฐาน" หรือยังไม่ได้ทำการส่งหลักฐานรายงานตัว ให้กดที่ปุ่มในหัวข้อ "ส่งหลักฐาน"</p><br><br><br><br>
                                   
                                    <div class="table-responsive" >
                                            <table class="table table-bordered table-striped table-hover" style="width:100%">
                                                <thead>
                                                    <th><center>เลขบัตรประจำตัวประชาชน</center></th>
                                                    <th><center>ชื่อนาม-สกุล</center></th>
                                                    <th><center>โอนย้ายข้อมูล</center></th>
                                                    <th><center>สถานะเอกสารรายงานตัว</center></th>
                                                    <th><center>ส่งเอกสาร</center></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">{{$data->id_number}}</td>
                                                        <td align="center">{{$data->prename}}{{$data->fname}} {{$data->surname}}</td>
                                                        <td align="center">
                                                            @if ($data->status_tranfer == '01')
                                                                <p style="color:green;">โอนย้ายแล้ว</p>
                                                            @elseif ($data->status_tranfer == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($data->status_tranfer == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                 รอตรวจสอบ
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($data->status_report == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($data->status_report == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($data->status_report == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                ยังไม่ได้ส่งหลักฐาน
                                                            @endif
                                                        </td>
                                                        <td align="center"><a href='{{ url("/documentPhotoM4/{$data->id}" )}}' class="btn btn-secondary btn-xs" type="button"><i class="fas fa-file-invoice"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        </br>
                                    </br>
                                    <div class="card-title fw-mediumbold">สถานะหลักฐานการรายงานตัว</div>
                                    <p class="card-category" style="color:red;">*หากมีหลักฐานที่ตรวจสอบแล้วไม่ผ่านให้ทำการกด ปุ่มในช่อง "แก้ไขหลักฐาน" (ช่องหลักสุดของตารางนี้) แล้วทำการอัพโหลดหลักฐานที่ไม่ผ่านใหม่</p><br><br>
                                    </br>


                                        <div class="table-responsive" >
                                            <table class="table table-bordered table-striped table-hover" style="width:100%">
                                                <thead>
                                                    <th><center>สถานะหลักฐาน</center></th>
                                                    <th><center>สำเนาบัตรประชาชนบิดา</center></th>
                                                    <th><center>สำเนาบัตรประชาชนมารดา</center></th>
                                                    <th><center>สำเนาทะเบียนบ้านบิดา</center></th>
                                                    <th><center>สำเนาทะเบียนบ้านมารดา</center></th>
                                                    <th><center>สำเนาบัตรประชาชนผู้ปกครอง</center></th>
                                                    <th><center>สำเนาทะเบียนบ้านผู้ปกครอง</center></th>
                                                    <th><center>ใบ ปพ.1 (ด้านหน้า)</center></th>
                                                    <th><center>ใบ ปพ.1 (ด้านหลัง)</center></th>
                                                    <th><center>ใบสูติบัตร</center></th>
                                                    <th><center>ใบรับรองความพิการ</center></th>
                                                    <th><center>แก้ไขหลักฐาน</center></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            @if ($data->status_report == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($data->status_report == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($data->status_report == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_idcard_father == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_idcard_father == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_idcard_father == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_idcard_mother == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_idcard_mother == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_idcard_mother == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_house_father == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_house_father == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_house_father == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_house_mother == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_house_mother == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_house_mother == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_idcard_parent == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_idcard_parent == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_idcard_parent == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_house_parent == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_house_parent == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_house_parent == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_front_grade == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_front_grade == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_front_grade == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_back_grade == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_back_grade == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_back_grade == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_birth_certificate == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_birth_certificate == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_birth_certificate == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center">
                                                            @if ($status->status_disability_certificate == '01')
                                                                <p style="color:green;">ผ่าน</p>
                                                            @elseif ($status->status_disability_certificate == '02')
                                                                <p style="color:blue;">รอตรวจสอบ</p>
                                                            @elseif ($status->status_disability_certificate == '03')
                                                                <p style="color:red;">ไม่ผ่าน</p>
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td align="center"><a href='{{ url("/documentPhotoM4/{$data->id}" )}}' class="btn btn-secondary btn-xs" type="button"><i class="fas fa-file-invoice"></i></a></td>
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

    <!-- Date time picker -->
	

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