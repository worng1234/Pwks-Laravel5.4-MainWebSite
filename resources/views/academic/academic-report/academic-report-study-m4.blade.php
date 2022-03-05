<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เอกสารสายการเรียน ม.4</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;600&display=swap" rel="stylesheet">



    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                ],
                "pageLength": 100,
                "language": {
                    "search": "ค้นหาข้อมูล :"
                },
                "ordering": false,
                "searching": false
            });
        });
    </script>

    <style>
        .saraban {
            font-family: 'Sarabun', sans-serif;
        }
    </style>

</head>

<body>

    <div class="container">
        <div align="center" style="margin-top:50px;">
            <img src="../assets/img/logo3.png" width="20%" height="20%">
        </div>

        <div class="container" align="center" style="margin-top: 30px;">
            <h3 class="saraban">เอกสารประกอบการคัดนักเรียนตามสายการเรียนที่เลือกแต่ละอันดับ ม.4</h3>
            <h3 class="saraban">ประจำปีการศึกษา {{$register_year->register_year}}</h3>
        </div>
        <div style="margin-top: 30px;">
            <form role="form" method="post" action="{{ url('/SearchAcademicReport/ReportStudyM4')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="form-group form-group-default">
                            <label>รหัสบัตรประชาชน</label>
                            <input type="search" class="form-control" placeholder="" name="search1">
                        </div>
                    </div>
                    <div class="col-5 col-md-3">
                        <div class="form-group form-group-default">
                            <label>อันดับ 1</label>
                            <select class="form-control" id="slct1" type="search" name="search2" >
                                <option value="">เลือก</option>
                                <option value="01">วิทยาศาสตร์ - คณิตศาสตร์ (วค.)</option>
                                <option value="02">ศิลป์ทั่วไป(อังกฤษ)</option>
                                <option value="03">ศิลป์ทั่วไป(จีน)</option>
                                <option value="04">ศิลป์ทั่วไป(พาณิชย์)</option>
                                <option value="05">ศิลป์ทั่วไป(ศิลปะ)</option>
                                <option value="06">ศิลป์ทั่วไป(เกษตร)</option>
                                <option value="07">ศิลป์ทั่วไป(คหกรรม)</option>
                                <option value="08">ศิลป์ทั่วไป(พละ)</option>
                                <option value="09">ปวช.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-5 col-md-3">
                        <div class="form-group form-group-default">
                            <label>อันดับ 2</label>
                            <select class="form-control" id="slct2" type="search" name="search3" >
                                <option value="">เลือก</option>
                                <option value="01">วิทยาศาสตร์ - คณิตศาสตร์ (วค.)</option>
                                <option value="02">ศิลป์ทั่วไป(อังกฤษ)</option>
                                <option value="03">ศิลป์ทั่วไป(จีน)</option>
                                <option value="04">ศิลป์ทั่วไป(พาณิชย์)</option>
                                <option value="05">ศิลป์ทั่วไป(ศิลปะ)</option>
                                <option value="06">ศิลป์ทั่วไป(เกษตร)</option>
                                <option value="07">ศิลป์ทั่วไป(คหกรรม)</option>
                                <option value="08">ศิลป์ทั่วไป(พละ)</option>
                                <option value="09">ปวช.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-5 col-md-3">
                        <div class="form-group form-group-default">
                            <label>อันดับ 3</label>
                            <select class="form-control" id="slct3" type="search" name="search4" >
                                <option value="">เลือก</option>
                                <option value="01">วิทยาศาสตร์ - คณิตศาสตร์ (วค.)</option>
                                <option value="02">ศิลป์ทั่วไป(อังกฤษ)</option>
                                <option value="03">ศิลป์ทั่วไป(จีน)</option>
                                <option value="04">ศิลป์ทั่วไป(พาณิชย์)</option>
                                <option value="05">ศิลป์ทั่วไป(ศิลปะ)</option>
                                <option value="06">ศิลป์ทั่วไป(เกษตร)</option>
                                <option value="07">ศิลป์ทั่วไป(คหกรรม)</option>
                                <option value="08">ศิลป์ทั่วไป(พละ)</option>
                                <option value="09">ปวช.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-primary "><i class="fas fa-search"></i> ค้นหา</button>
                    </div>
                </div>
            </form>
        </div>


        <div style="margin-top: 30px;">
            <table id="example" class="table table-bordered table-hover table-condesed">
                <thead>
                    <th width="5%" class="saraban">
                        <center>รหัสบัตรประชาชน</center>
                    </th>
                    <th width="20%" class="saraban">
                        <center>ชื่อ - นามสกุล</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 1</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 2</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 3</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 4</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 5</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 6</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 7</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 8</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>อันดับ 9</center>
                    </th>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                        <td scope="col" width="5%" class="saraban">
                            <center>{{$value->id_number}}</center>
                        </td>
                        <td scope="col" width="20%" class="saraban">
                            <center>{{$value->prename}}{{$value->fname}} {{$value->surname}}</center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name1 == '01')
                                วค.
                                @elseif ($value->major_name1 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name1 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name1 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name1 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name1 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name1 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name1 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name1 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name2 == '01')
                                วค.
                                @elseif ($value->major_name2 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name2 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name2 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name2 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name2 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name2 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name2 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name2 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name3 == '01')
                                วค.
                                @elseif ($value->major_name3 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name3 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name3 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name3 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name3 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name3 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name3 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name3 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name4 == '01')
                                วค.
                                @elseif ($value->major_name4 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name4 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name4 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name4 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name4 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name4 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name4 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name4 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name5 == '01')
                                วค.
                                @elseif ($value->major_name5 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name5 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name5 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name5 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name5 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name5 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name5 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name5 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name6 == '01')
                                วค.
                                @elseif ($value->major_name6 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name6 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name6 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name6 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name6 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name6 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name6 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name6 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name7 == '01')
                                วค.
                                @elseif ($value->major_name7 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name7 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name7 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name7 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name7 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name7 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name7 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name7 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name8 == '01')
                                วค.
                                @elseif ($value->major_name8 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name8 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name8 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name8 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name8 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name8 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name8 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name8 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>
                                @if ($value->major_name9 == '01')
                                วค.
                                @elseif ($value->major_name9 == '02')
                                ศ(อังกฤษ)
                                @elseif ($value->major_name9 == '03')
                                ศ(จีน)
                                @elseif ($value->major_name9 == '04')
                                ศ(พาณิชย์)
                                @elseif ($value->major_name9 == '05')
                                ศ(ศิลปะ)
                                @elseif ($value->major_name9 == '06')
                                ศ(เกษตร)
                                @elseif ($value->major_name9 == '07')
                                ศ(คหกรรม)
                                @elseif ($value->major_name9 == '08')
                                ศ(พละ)
                                @elseif ($value->major_name9 == '09')
                                ปวช.
                                @else
                                -
                                @endif

                            </center>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>