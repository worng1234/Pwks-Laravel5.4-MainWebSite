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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;600&display=swap" rel="stylesheet">


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
            <h3 class="saraban">สรุปสถิติรายวันการรับสมัครนักเรียนใหม่ประจำชั้นมัธยมศึกษาปีที่ 1</h3>
        </div>
        <div style="margin-top: 30px;">
            <form role="form" method="post" action="{{ url('/search/reportM1')}}">
                {{csrf_field()}}
                <div>
                    <div>
                        <label class="saraban">วันที่ (ตัวอย่างการกรอกวันที่ xxxx-xx-xx , 2021-11-28 )</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="search" name="search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary" type="button">ค้นหา</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>


        <div style="margin-top: 30px;">
            <table id="example" class="table table-bordered table-hover table-condesed">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2" width="7%" class="saraban">
                            <center>เกณฑ์ นร./ห้อง</center>
                        </th>
                        <th scope="col" rowspan="2" width="3%" class="saraban">
                            <center>ห้อง</center>
                        </th>
                        <th scope="col" rowspan="2" width="5%" class="saraban">
                            <center>นักเรียน (คน)</center>
                        </th>

                    </tr>
                    <tr>
                        <th scope="col" width="5%" class="saraban">
                            <center>ประจำวันที่</center >
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>ในเขต</center >
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>นอกเขต</center>
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>รวม</center>
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>ในเขตรวมทั้งหมด</center>
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>นอกเขตรวมทั้งหมด</center>
                        </th>
                        <th scope="col" width="5%" class="saraban">
                            <center>รวมทั้งสิ้น</center>
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td scope="col" width="7%" class="saraban">
                            <center>40</center>
                        </td>
                        <td scope="col" width="3%" class="saraban">
                            <center>7</center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            <center>280</center>
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($dateM1->date !== NULL)
                            <center>{{$dateM1->date}}</center>
                            @else 
                            <p align="center">-</p>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($partitionAll != 0)
                            <center>{{$partitionAll}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($sum != 0)
                            <center>{{$sum}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($dataCountAll != 0)
                            <center>{{$dataCountAll}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($partitionAlls != 0)
                            <center>{{$partitionAlls}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($sumAll != 0)
                            <center>{{$sumAll}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                        <td scope="col" width="5%" class="saraban">
                            @if ($dataCountAlls != 0)
                            <center>{{$dataCountAlls}}</center>
                            @else 
                            <center>0</center>
                            @endif
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>