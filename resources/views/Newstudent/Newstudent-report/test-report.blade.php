<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#12358').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
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


        <div>
            <table id="12358" class="table table-bordered table-hover table-condesed">
                <thead>
                    <!-- <tr align="center">
                        <th scope="col" colspan="9">ระดับชั้น มัธยมศึกษาปีที่ 1</th>
                    </tr> -->
                    <!-- <tr align="center">
                        <th scope="col" colspan="3">แผนการรับ (ตามเกณฑ์ สพฐ.)</th>
                        <th scope="col" colspan="3"></th>
                        <th scope="col" rowspan="2" colspan="3">รวมทั้งสิ้น</th>
                    </tr> -->
                    <tr align="center">
                        <th scope="col" rowspan="2" width="7%">
                            เกณฑ์ นร./ห้อง
                        </th>
                        <th scope="col" rowspan="2" width="3%">
                            ห้อง
                        </th>
                        <th scope="col" rowspan="2" width="5%">
                            นักเรียน (คน)
                        </th>

                    </tr>
                    <tr align="center">
                        <th scope="col" width="5%">
                            ในเขต
                        </th>
                        <th scope="col" width="5%">
                            นอกเขต
                        </th>
                        <th scope="col" width="5%">
                            รวม
                        </th>
                        <th scope="col" width="5%">
                            ในเขต
                        </th>
                        <th scope="col" width="5%">
                            นอกเขต
                        </th>
                        <th scope="col" width="5%">
                            รวม
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <tr align="center">
                        <td scope="col" width="7%">
                            40
                        </td>
                        <td scope="col" width="3%">
                            7
                        </td>
                        <td scope="col" width="5%">
                            280
                        </td>
                        <td scope="col" width="5%">
                            {{$partitionAll}}
                        </td>
                        <td scope="col" width="5%">
                            {{$sum}}
                        </td>
                        <td scope="col" width="5%">
                            {{$dataCountAll}}
                        </td>
                        <td scope="col" width="5%">
                            {{$partitionAlls}}
                        </td>
                        <td scope="col" width="5%">
                            {{$sumAll}}
                        </td>
                        <td scope="col" width="5%">
                            {{$dataCountAlls}}
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>


</body>

</html>