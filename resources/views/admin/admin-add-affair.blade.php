<!doctype html>
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

                <a href="{{ url('/admin')}}" class="logo">
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

                            <label><b>ชื่อ-นามสกุล :</b>{{ Auth::guard('admin')->user()->prename}}{{ Auth::guard('admin')->user()->fname}} </br>{{ Auth::guard('admin')->user()->surname}}</label>
							<label><b>ตำแหน่ง :</b> Admin คนสวย ^^</label>
                            <label><b>ภาคเรียนที่ :</b> {{$school_year->term}}/{{$school_year->study_year}}</label>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- สิ้นสุดโปรไฟล์ -->

                    <!-- เริ่มเมนู -->
                    <ul class="nav nav-primary">

                        <li class="nav-item ">
                            <a href="{{ url('/admin')}}">
                                <i class="fas fa-home"></i>
                                <p>หน้าหลัก</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a data-toggle="collapse" href="#academic">
                                <i class="fas fa-user-graduate"></i>
                                <p>จัดการแอคเค้าท์ </br> ฝ่ายวิชาการ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse " id="academic">
                                <ul class="nav nav-collapse">
                                    <li >
                                        <a href="{{url('/AdminAdd/Academic')}}">
                                            <span class="sub-item">เพิ่มแอคเค้าท์</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/AdminAll/Academic')}}">
                                            <span class="sub-item">แอคเค้าท์ทั้งหมด</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item active submenu">
                            <a data-toggle="collapse" href="#affair">
                                <i class="fas fa-user-edit"></i>
                                <p>จัดการแอคเค้าท์ </br> ฝ่ายกิจการนักเรียน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse show" id="affair">
                                <ul class="nav nav-collapse">
                                    <li class="active">
                                        <a href="{{url('/AdminAdd/Affair')}}">
                                            <span class="sub-item">เพิ่มแอคเค้าท์</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href="{{url('/AdminAll/Affair')}}">
                                            <span class="sub-item">แอคเค้าท์ทั้งหมด</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#admin">
                                <i class="fas fa-user-lock"></i>
                                <p>จัดการแอคเค้าท์ </br> แอดมิน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="admin">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{url('/AdminAdd/Admin')}}">
                                            <span class="sub-item">เพิ่มแอคเค้าท์</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/AdminAll/Admin')}}">
                                            <span class="sub-item">แอคเค้าท์ทั้งหมด</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href='{{ url("/AdminSchoolYear/{$school_year->id}")}}'>
                            <i class="fas fa-book"></i>
                                <p>กำหนดปีการศึกษา</p>
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a href="#">
                                <i class="fas fa-book-open"></i>
                                <p>คู่มือการใช้งาน</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>




                    </ul>
                </div>
            </div>
        </div>
        <!-- สิ้นสุดเมนู -->

        <!-- เริ่มเนื้อหา-->
        <div class="main-panel">
            <div class="container">
                <div class="panel-header " style="background-color: #8B469B;">
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
                                        <div class="card-title"><i class="fas fa-user-plus fa-lg"></i> &nbsp;&nbsp; เพิ่มแอคเค้าท์ฝ่ายกิจการ</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ url('/AdminAdd/AffairInsert')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{ method_field('POST') }}
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อผู้ใช้ ( Username )</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="" name="username">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>รหัส</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-2">
                                                    <div class="form-group form-group-default">
                                                        <label>คำนำหน้าชื่อ</label>
                                                        <select class="form-control" id="formGroupDefaultSelect" name="prename">
                                                            <option>เลือก</option>
                                                            <option value="นาย">นาย</option>
                                                            <option value="นาง">นาง</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>ชื่อภาษาไทย</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="" name="fname">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4">
                                                    <div class="form-group form-group-default">
                                                        <label>นามสกุลภาษาไทย</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="" name="surname">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer" align="center"><br>
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> บันทึกข้อมูล</button>&nbsp;


                                        </div><br>


                                    </form>
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