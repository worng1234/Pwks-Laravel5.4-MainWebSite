<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('POST') }}
        <div>
            <label for="">name</label>
            <input type="text" name="id_number2" id="id_number2">
        </div>
        <div>
            <input type="file" name="file" id="file">
        </div>
        <button type="submit">Submit</button>
    </form>

</body>
</html>