<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

</head>

<body>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>class 
                <div><select id="ddlselect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select></div>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ja</td>
                <td><input type="text" readonly id="txtReadMulti" value="4"></td>
            </tr>
        </tbody>
    </table>

    

    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>

    <script>
        $(function() {
            $("#ddlselect").change(function() {
                var dispalyAll = $("#ddlselect option:selected").text();
                $("#txtReadMulti").val(dispalyAll);
            })
        })
    </script>

</body>

</html>