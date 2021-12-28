<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('/created')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('POST') }}
        <div>
            <label>ID</label>
            <input type="text" name="name" >
        </div>
        <div >
        <label>ID student</label>
        <input type="file" class="form-control-file" id="student_id" name="student_id">
        </div>
        <input name="score" value="100" hidden>
        <button type="submit">Submit</button>
    </form>

    
</body>

</html>