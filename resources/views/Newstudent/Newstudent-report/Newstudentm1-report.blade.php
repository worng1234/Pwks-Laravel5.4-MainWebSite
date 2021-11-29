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

    <link rel="stylesheet" href="/assets2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/assets2/css/jquery.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

    <script type="text/javascript">
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



    <table id="example" class="table table-bordered table-hover table-condesed">
        <thead>
            <tr align="center">
                <th scope="col" colspan="21">ระดับชั้น มัธยมศึกษาปีที่ 1</th>
            </tr>
            <tr align="center">
                <th scope="col" colspan="3">แผนการรับ (ตามเกณฑ์ สพฐ.)</th>
                <th scope="col" colspan="15">วันที่สมัครเข้าเรียน</th>
                <th scope="col" rowspan="2" colspan="3">รวมทั้งสิ้น</th>
            </tr>
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
                <th scope="col" colspan="3" width="15%">
                    <center>24 เม.ย. 64</center>
                </th>
                <th scope="col" colspan="3" width="15%">
                    <center>25 เม.ย. 64</center>
                </th>
                <th scope="col" colspan="3" width="15%">
                    <center>26 เม.ย. 64</center>
                </th>
                <th scope="col" colspan="3" width="15%">
                    <center>27 เม.ย. 64</center>
                </th>
                <th scope="col" colspan="3" width="15%">
                    <center>28 เม.ย. 64</center>
                </th>
            </tr>
            <tr>
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
                    <center>ในเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>นอกเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>รวม</center>
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
                    <center>ในเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>นอกเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>รวม</center>
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
                    <center>ในเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>นอกเขต</center>
                </th>
                <th scope="col" width="5%">
                    <center>รวม</center>
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
                    <center>78</center>
                </td>
                <td scope="col" width="5%">
                    <center>8</center>
                </td>
                <td scope="col" width="5%">
                    <center>86</center>
                </td>
                <td scope="col" width="5%">
                    <center>6</center>
                </td>
                <td scope="col" width="5%">
                    <center>20</center>
                </td>
                <td scope="col" width="5%">
                    <center>26</center>
                </td>
                <td scope="col" width="5%">
                    <center>41</center>
                </td>
                <td scope="col" width="5%">
                    <center>28</center>
                </td>
                <td scope="col" width="5%">
                    <center>69</center>
                </td>
                <td scope="col" width="5%">
                    <center>12</center>
                </td>
                <td scope="col" width="5%">
                    <center>20</center>
                </td>
                <td scope="col" width="5%">
                    <center>32</center>
                </td>
                <td scope="col" width="5%">
                    <center>3</center>
                </td>
                <td scope="col" width="5%">
                    <center>10</center>
                </td>
                <td scope="col" width="5%">
                    <center>13</center>
                </td>
                <td scope="col" width="5%">
                    <center>140</center>
                </td>
                <td scope="col" width="5%">
                    <center>86</center>
                </td>
                <td scope="col" width="5%">
                    <center>226</center>
                </td>
            </tr>
        </tbody>

    </table>


</body>

</html>