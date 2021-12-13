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
                <th>คะแนน</th>
                <th>4</th>
            </thead>
            @foreach ($data as $datas)
            <tr>
                <td>{{$datas->student_id}}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->score}}</td>
                <td><a href='{{url("/Fixtest/{$datas->id}")}}' class="btn">เพิ่มความประพฤติ(หักคะแนน)</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a class="btn" href="{{url('/testup')}}">เพิ่มข้อมูลนักเรียน</a>
    </div>
</body>
</html>
