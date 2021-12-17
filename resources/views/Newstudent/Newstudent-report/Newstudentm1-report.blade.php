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
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
    
        </script>

</head>

<body>

    <div class="card-body" style="min-height: 400px">
        <div class="form-group">
            <form role="form" method="post" action="{{ url('/search/reportM1')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-6 col-md-4">
                        <label>วันที่ (ตัวอย่างการกรอกวันที่ xxxx-xx-xx , 2021-11-28 )</label>
                        <input type="search" class="form-control" name="search" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-xs"><i class="fas fa-search"></i> แสดง</button>
                </div>
            </form>
        </div>

        <div class="container" align="center">
            <h3>สรุปสถิติรายวันการรับสมัครนักเรียนใหม่ประจำชั้นมัธยมศึกษาปีที่ 1</h3>
        </div>

        <table id="example" class="table table-bordered table-hover table-condesed">
            <thead>
                <!-- <tr align="center">
                    <th scope="col" colspan="9">ระดับชั้น มัธยมศึกษาปีที่ 1</th>
                </tr> 
                 <tr align="center">
                    <th scope="col" colspan="3">แผนการรับ (ตามเกณฑ์ สพฐ.)</th>
                    <th scope="col" colspan="3">วันที่</th>
                    <th scope="col" rowspan="2" colspan="3">รวมทั้งสิ้น</th>
                </tr>  -->
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
                        <center>ในเขต</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>นอกเขต</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>รวม</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>ในเขตรวมทั้งหมด</center>
                    </th>
                    <th scope="col" width="5%">
                        <center>นอกเขตรวมทั้งหมด</center>
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
                        <center>7</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>280</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>{{$dateM1->date}}</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>{{$partitionAll}}</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>{{$sum}}</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>{{$dataCountAll}}</center>
                    </td>
                    <td scope="col" width="5%">
                        <center>{{$partitionAlls}}</center>
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


</body>

</html>