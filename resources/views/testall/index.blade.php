<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $("#classSelect").change(function() {
                var displayClass = $("#classSelect option:selected").text();
                $("#inputClass").val(displayClass);
            })
        })
    </script>

    <script>
        $(function() {
            $("#roomSelect").change(function() {
                var displayRoom = $("#roomSelect option:selected").text();
                $("#inputRoom").val(displayRoom);
            })
        })
    </script>
</head>

<body>

    <div>
        <input type="submit" value="submit" class="btn" onclick="event.preventDefault(); document.getElementById('submit-change').submit();">
    </div>
    <table style="border: 1px solid black;">
        <thead>
            <th>id</th>
            <th>id_number2 <div>
                    <select id="classSelect">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </th>
            <th>score <div>
                    <select id="roomSelect">
                        <option></option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </th>
        </thead>
        <tbody>
            <form id="submit-change" action="{{ url('/testmulti' )}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @foreach ($data as $key => $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td> <select name="id_number2[]" id="inputClass">
                            <option>{{$value->id_number2}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                    <td><select name="score[]" id="inputRoom">
                            <option>{{$value->score}}</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select></td>
                </tr>
                @endforeach
            </form>
        </tbody>
    </table>

    
</body>

</html>