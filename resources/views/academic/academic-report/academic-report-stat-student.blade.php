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
                "ordering": false
            });
        });
    </script>

    <style>
        .saraban {
            font-family: 'Sarabun', sans-serif;
        }

        table,th,td {
            text-align: center;
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
            <h3 class="saraban">จำนวนนักเรียนทั้งหมดปีการศึกษา {{$school_year->study_year}}</h3>
        </div>
        


        <div style="margin-top: 30px;">
            <table id="example" class="table table-bordered table-hover table-condesed">
                <thead>
                    <th width="5%" class="saraban">
                        <center>ชั้น</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>ชาย</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>หญิง</center>
                    </th>
                    <th width="5%" class="saraban">
                        <center>รวม</center>
                    </th>
                </thead>
                <tbody>
                    <!-- ม.1 -->
                    <tr>
                        <td>ม.1/1</td>
                        @if ($m1_1_m_all != 0)
                        <td>{{$m1_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_1_fm_all != 0)
                        <td>{{$m1_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_1_all_sum != 0)
                        <td>{{$m1_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/2</td>
                        @if ($m1_2_m_all != 0)
                        <td>{{$m1_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_2_fm_all != 0)
                        <td>{{$m1_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_2_all_sum != 0)
                        <td>{{$m1_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/3</td>
                        @if ($m1_3_m_all != 0)
                        <td>{{$m1_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_3_fm_all != 0)
                        <td>{{$m1_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_3_all_sum != 0)
                        <td>{{$m1_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/4</td>
                        @if ($m1_4_m_all != 0)
                        <td>{{$m1_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_4_fm_all != 0)
                        <td>{{$m1_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_4_all_sum != 0)
                        <td>{{$m1_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/5</td>
                        @if ($m1_5_m_all != 0)
                        <td>{{$m1_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_5_fm_all != 0)
                        <td>{{$m1_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_5_all_sum != 0)
                        <td>{{$m1_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/6</td>
                        @if ($m1_6_m_all != 0)
                        <td>{{$m1_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_6_fm_all != 0)
                        <td>{{$m1_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_6_all_sum != 0)
                        <td>{{$m1_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/7</td>
                        @if ($m1_7_m_all != 0)
                        <td>{{$m1_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_7_fm_all != 0)
                        <td>{{$m1_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_7_all_sum != 0)
                        <td>{{$m1_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/8</td>
                        @if ($m1_8_m_all != 0)
                        <td>{{$m1_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_8_fm_all != 0)
                        <td>{{$m1_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_8_all_sum != 0)
                        <td>{{$m1_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.1</td>
                        @if ($m1_m_all != 0)
                        <td>{{$m1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_fm_all != 0)
                        <td>{{$m1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m1_all_sum != 0)
                        <td>{{$m1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <!-- ม.2 -->
                    <tr>
                        <td>ม.2/1</td>
                        @if ($m2_1_m_all != 0)
                        <td>{{$m2_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_1_fm_all != 0)
                        <td>{{$m2_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_1_all_sum != 0)
                        <td>{{$m2_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/2</td>
                        @if ($m2_2_m_all != 0)
                        <td>{{$m2_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_2_fm_all != 0)
                        <td>{{$m2_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_2_all_sum != 0)
                        <td>{{$m2_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/3</td>
                        @if ($m2_3_m_all != 0)
                        <td>{{$m2_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_3_fm_all != 0)
                        <td>{{$m2_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_3_all_sum != 0)
                        <td>{{$m2_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/4</td>
                        @if ($m2_4_m_all != 0)
                        <td>{{$m2_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_4_fm_all != 0)
                        <td>{{$m2_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_4_all_sum != 0)
                        <td>{{$m2_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/5</td>
                        @if ($m2_5_m_all != 0)
                        <td>{{$m2_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_5_fm_all != 0)
                        <td>{{$m2_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_5_all_sum != 0)
                        <td>{{$m2_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/6</td>
                        @if ($m2_6_m_all != 0)
                        <td>{{$m2_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_6_fm_all != 0)
                        <td>{{$m2_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_6_all_sum != 0)
                        <td>{{$m2_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/7</td>
                        @if ($m2_7_m_all != 0)
                        <td>{{$m2_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_7_fm_all != 0)
                        <td>{{$m2_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_7_all_sum != 0)
                        <td>{{$m2_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.2/8</td>
                        @if ($m2_8_m_all != 0)
                        <td>{{$m2_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_8_fm_all != 0)
                        <td>{{$m2_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_8_all_sum != 0)
                        <td>{{$m2_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.2</td>
                        @if ($m2_m_all != 0)
                        <td>{{$m2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_fm_all != 0)
                        <td>{{$m2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m2_all_sum != 0)
                        <td>{{$m2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <!-- ม.3 -->
                    <tr>
                        <td>ม.3/1</td>
                        @if ($m3_1_m_all != 0)
                        <td>{{$m3_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_1_fm_all != 0)
                        <td>{{$m3_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_1_all_sum != 0)
                        <td>{{$m3_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/2</td>
                        @if ($m3_2_m_all != 0)
                        <td>{{$m3_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_2_fm_all != 0)
                        <td>{{$m3_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_2_all_sum != 0)
                        <td>{{$m3_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/3</td>
                        @if ($m3_3_m_all != 0)
                        <td>{{$m3_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_3_fm_all != 0)
                        <td>{{$m3_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_3_all_sum != 0)
                        <td>{{$m3_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/4</td>
                        @if ($m3_4_m_all != 0)
                        <td>{{$m3_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_4_fm_all != 0)
                        <td>{{$m3_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_4_all_sum != 0)
                        <td>{{$m3_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/5</td>
                        @if ($m3_5_m_all != 0)
                        <td>{{$m3_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_5_fm_all != 0)
                        <td>{{$m3_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_5_all_sum != 0)
                        <td>{{$m3_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/6</td>
                        @if ($m3_6_m_all != 0)
                        <td>{{$m3_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_6_fm_all != 0)
                        <td>{{$m3_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_6_all_sum != 0)
                        <td>{{$m3_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/7</td>
                        @if ($m3_7_m_all != 0)
                        <td>{{$m3_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_7_fm_all != 0)
                        <td>{{$m3_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_7_all_sum != 0)
                        <td>{{$m3_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.3/8</td>
                        @if ($m3_8_m_all != 0)
                        <td>{{$m3_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_8_fm_all != 0)
                        <td>{{$m3_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_8_all_sum != 0)
                        <td>{{$m3_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.3</td>
                        @if ($m3_m_all != 0)
                        <td>{{$m3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_fm_all != 0)
                        <td>{{$m3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m3_all_sum != 0)
                        <td>{{$m3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <!-- ม.4 -->
                    <tr>
                        <td>ม.4/1</td>
                        @if ($m4_1_m_all != 0)
                        <td>{{$m4_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_1_fm_all != 0)
                        <td>{{$m4_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_1_all_sum != 0)
                        <td>{{$m4_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/2</td>
                        @if ($m4_2_m_all != 0)
                        <td>{{$m4_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_2_fm_all != 0)
                        <td>{{$m4_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_2_all_sum != 0)
                        <td>{{$m4_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/3</td>
                        @if ($m4_3_m_all != 0)
                        <td>{{$m4_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_3_fm_all != 0)
                        <td>{{$m4_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_3_all_sum != 0)
                        <td>{{$m4_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/4</td>
                        @if ($m4_4_m_all != 0)
                        <td>{{$m4_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_4_fm_all != 0)
                        <td>{{$m4_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_4_all_sum != 0)
                        <td>{{$m4_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/5</td>
                        @if ($m4_5_m_all != 0)
                        <td>{{$m4_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_5_fm_all != 0)
                        <td>{{$m4_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_5_all_sum != 0)
                        <td>{{$m4_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/6</td>
                        @if ($m4_6_m_all != 0)
                        <td>{{$m4_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_6_fm_all != 0)
                        <td>{{$m4_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_6_all_sum != 0)
                        <td>{{$m4_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/7</td>
                        @if ($m4_7_m_all != 0)
                        <td>{{$m4_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_7_fm_all != 0)
                        <td>{{$m4_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_7_all_sum != 0)
                        <td>{{$m4_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.4/8</td>
                        @if ($m4_8_m_all != 0)
                        <td>{{$m4_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_8_fm_all != 0)
                        <td>{{$m4_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_8_all_sum != 0)
                        <td>{{$m4_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ปวช.1</td>
                        @if ($m4_9_m_all != 0)
                        <td>{{$m4_9_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_9_fm_all != 0)
                        <td>{{$m4_9_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_9_all_sum != 0)
                        <td>{{$m4_9_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.4</td>
                        @if ($m4_m_all != 0)
                        <td>{{$m4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_fm_all != 0)
                        <td>{{$m4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m4_all_sum != 0)
                        <td>{{$m4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <!-- ม.5 -->
                    <tr>
                        <td>ม.5/1</td>
                        @if ($m5_1_m_all != 0)
                        <td>{{$m5_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_1_fm_all != 0)
                        <td>{{$m5_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_1_all_sum != 0)
                        <td>{{$m5_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/2</td>
                        @if ($m5_2_m_all != 0)
                        <td>{{$m5_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_2_fm_all != 0)
                        <td>{{$m5_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_2_all_sum != 0)
                        <td>{{$m5_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/3</td>
                        @if ($m5_3_m_all != 0)
                        <td>{{$m5_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_3_fm_all != 0)
                        <td>{{$m5_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_3_all_sum != 0)
                        <td>{{$m5_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/4</td>
                        @if ($m5_4_m_all != 0)
                        <td>{{$m5_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_4_fm_all != 0)
                        <td>{{$m5_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_4_all_sum != 0)
                        <td>{{$m5_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/5</td>
                        @if ($m5_5_m_all != 0)
                        <td>{{$m5_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_5_fm_all != 0)
                        <td>{{$m5_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_5_all_sum != 0)
                        <td>{{$m5_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/6</td>
                        @if ($m5_6_m_all != 0)
                        <td>{{$m5_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_6_fm_all != 0)
                        <td>{{$m5_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_6_all_sum != 0)
                        <td>{{$m5_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/7</td>
                        @if ($m5_7_m_all != 0)
                        <td>{{$m5_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_7_fm_all != 0)
                        <td>{{$m5_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_7_all_sum != 0)
                        <td>{{$m5_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.5/8</td>
                        @if ($m5_8_m_all != 0)
                        <td>{{$m5_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_8_fm_all != 0)
                        <td>{{$m5_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_8_all_sum != 0)
                        <td>{{$m5_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ปวช.2</td>
                        @if ($m5_9_m_all != 0)
                        <td>{{$m5_9_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_9_fm_all != 0)
                        <td>{{$m5_9_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_9_all_sum != 0)
                        <td>{{$m5_9_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.5</td>
                        @if ($m5_m_all != 0)
                        <td>{{$m5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_fm_all != 0)
                        <td>{{$m5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m5_all_sum != 0)
                        <td>{{$m5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <!-- ม.6 -->
                    <tr>
                        <td>ม.6/1</td>
                        @if ($m6_1_m_all != 0)
                        <td>{{$m6_1_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_1_fm_all != 0)
                        <td>{{$m6_1_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_1_all_sum != 0)
                        <td>{{$m6_1_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/2</td>
                        @if ($m6_2_m_all != 0)
                        <td>{{$m6_2_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_2_fm_all != 0)
                        <td>{{$m6_2_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_2_all_sum != 0)
                        <td>{{$m6_2_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/3</td>
                        @if ($m6_3_m_all != 0)
                        <td>{{$m6_3_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_3_fm_all != 0)
                        <td>{{$m6_3_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_3_all_sum != 0)
                        <td>{{$m6_3_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/4</td>
                        @if ($m6_4_m_all != 0)
                        <td>{{$m6_4_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_4_fm_all != 0)
                        <td>{{$m6_4_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_4_all_sum != 0)
                        <td>{{$m6_4_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/5</td>
                        @if ($m6_5_m_all != 0)
                        <td>{{$m6_5_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_5_fm_all != 0)
                        <td>{{$m6_5_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_5_all_sum != 0)
                        <td>{{$m6_5_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/6</td>
                        @if ($m6_6_m_all != 0)
                        <td>{{$m6_6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_6_fm_all != 0)
                        <td>{{$m6_6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_6_all_sum != 0)
                        <td>{{$m6_6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/7</td>
                        @if ($m6_7_m_all != 0)
                        <td>{{$m6_7_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_7_fm_all != 0)
                        <td>{{$m6_7_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_7_all_sum != 0)
                        <td>{{$m6_7_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.6/8</td>
                        @if ($m6_8_m_all != 0)
                        <td>{{$m6_8_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_8_fm_all != 0)
                        <td>{{$m6_8_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_8_all_sum != 0)
                        <td>{{$m6_8_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ปวช.3</td>
                        @if ($m6_9_m_all != 0)
                        <td>{{$m6_9_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_9_fm_all != 0)
                        <td>{{$m6_9_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_9_all_sum != 0)
                        <td>{{$m6_9_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.6</td>
                        @if ($m6_m_all != 0)
                        <td>{{$m6_m_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_fm_all != 0)
                        <td>{{$m6_fm_all}}</td>
                        @else
                        <td>0</td>
                        @endif
                        @if ($m6_all_sum != 0)
                        <td>{{$m6_all_sum}}</td>
                        @else
                        <td>0</td>
                        @endif
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>