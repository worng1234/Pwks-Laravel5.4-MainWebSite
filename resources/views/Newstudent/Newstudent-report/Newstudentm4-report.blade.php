<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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


    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excelHtml5',
                ]
            });
        });
    </script>

</head>

<body>

    <div class="container">
        <div align="center" style="margin-top:50px;">
            <img src="../assets/img/logo3.png" width="20%" height="20%">
        </div>
        <div class="container" align="center" style="margin-top: 30px;">
            <h3>สรุปสถิติรายวันการรับสมัครนักเรียนใหม่ประจำชั้นมัธยมศึกษาปีที่ 4</h3>
        </div>
        <div style="margin-top: 30px;">
            <form role="form" method="post" action="{{ url('/search/reportM4')}}">
                {{csrf_field()}}
                <div>
                    <label>วันที่ (ตัวอย่างการกรอกวันที่ xxxx-xx-xx , 2021-11-28 )</label>
                </div>
                <input type="search" name="search">
                <button type="submit"><i class="fas fa-search"></i> แสดง</button>
            </form>
        </div>


        <div style="margin-top: 30px;">
            <table id="example" class="table table-bordered table-hover table-condesed">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2" width="7%">
                            <center>เกณฑ์ นร./ห้อง</center>
                        </th>
                        <th scope="col" rowspan="2" width="3%">
                            <center>ห้อง</center>
                        </th>
                        <th scope="col" rowspan="2" width="5%">
                            <center>นักเรียน (คน)</center>
                        </th>

                    </tr>
                    <tr>
                        <th scope="col" width="5%">
                            <center>ประจำวันที่</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>ม.3 เดิม</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>ม.3 รร. อื่น</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>รวม</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>ม.3 เดิมรวมทั้งหมด</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>ม.3 รร. อื่นรวมทั้งหมด</center>
                        </th>
                        <th scope="col" width="5%">
                            <center>รวมทั้งสิ้น</center>
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td scope="col" width="7%">
                            <center>40</center>
                        </td>
                        <td scope="col" width="3%">
                            <center>10</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>400</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$dateM1->date}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$partitionCount}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$sum}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$dataCountAll}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$partitionAllCount}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$sumAll}}</center>
                        </td>
                        <td scope="col" width="5%">
                            <center>{{$dataCountAlls}}</center>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>