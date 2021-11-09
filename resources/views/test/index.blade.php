<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test Up</h1>
    <div>
        <table>
            <thead>
                <th>ID</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </thead>
            @foreach ($data as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->id_number2}}</td>
                <td><a href="{{ route('testup.edit', $value->id)}}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ route('testup.show', $value->id)}}" class="btn btn-primary">Show</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
