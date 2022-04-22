<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <div>
        <form action="{{ url('/updatedtest', $data->id)}}" method="POST" enctype="multipart/form-data">
        
        {{csrf_field()}}
        {{ method_field('POST') }}
        <div>
            <label>รหัสนักเรียน</label>
            <input type="text" name="student_id" value="{{$data->student_id}}">
        </div>
        <div>
            <label>ชื่อ</label>
            <input type="text" name="name" value="{{$data->name}}">
        </div>
        <input type="text" name="score" value="10">
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>
