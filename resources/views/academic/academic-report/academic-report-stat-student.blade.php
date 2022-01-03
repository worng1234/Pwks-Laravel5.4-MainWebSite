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
    </style>

</head>

<body>

    <div class="container">
        <div align="center" style="margin-top:50px;">
            <img src="../assets/img/logo3.png" width="20%" height="20%">
        </div>

        <div class="container" align="center" style="margin-top: 30px;">
            <h3 class="saraban">เอกสารประกอบการคัดนักเรียนตามสายการเรียนที่เลือกแต่ละอันดับ ม.4</h3>
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
                        @if ($m1_1_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_1_m_all}}</td>
                        @endif
                        @if ($m1_1_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_1_fm_all}}</td>
                        @endif
                        @if ($m1_1_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_1_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/2</td>
                        @if ($m1_2_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_2_m_all}}</td>
                        @endif
                        @if ($m1_2_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_2_fm_all}}</td>
                        @endif
                        @if ($m1_2_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_2_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/3</td>
                        @if ($m1_3_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_3_m_all}}</td>
                        @endif
                        @if ($m1_3_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_3_fm_all}}</td>
                        @endif
                        @if ($m1_3_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_3_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/4</td>
                        @if ($m1_4_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_4_m_all}}</td>
                        @endif
                        @if ($m1_4_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_4_fm_all}}</td>
                        @endif
                        @if ($m1_4_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_4_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/5</td>
                        @if ($m1_5_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_5_m_all}}</td>
                        @endif
                        @if ($m1_5_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_5_fm_all}}</td>
                        @endif
                        @if ($m1_5_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_5_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/6</td>
                        @if ($m1_6_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_6_m_all}}</td>
                        @endif
                        @if ($m1_6_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_6_fm_all}}</td>
                        @endif
                        @if ($m1_6_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_6_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/7</td>
                        @if ($m1_7_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_7_m_all}}</td>
                        @endif
                        @if ($m1_7_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_7_fm_all}}</td>
                        @endif
                        @if ($m1_7_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_7_all_sum}}</td>
                        @endif
                    </tr>
                    <tr>
                        <td>ม.1/8</td>
                        @if ($m1_8_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_8_m_all}}</td>
                        @endif
                        @if ($m1_8_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_8_fm_all}}</td>
                        @endif
                        @if ($m1_8_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_8_all_sum}}</td>
                        @endif
                    </tr>
                    <tr class="bg-success" style="color:white;">
                        <td>ม.1</td>
                        @if ($m1_m_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_m_all}}</td>
                        @endif
                        @if ($m1_fm_all = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_fm_all}}</td>
                        @endif
                        @if ($m1_all_sum = 0)
                        <td>0</td>
                        @else
                        <td>{{$m1_all_sum}}</td>
                        @endif
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>