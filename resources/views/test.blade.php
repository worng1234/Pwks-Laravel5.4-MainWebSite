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
            <label>name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>surname</label>
            <input type="text" name="surname">
        </div>
        <div>
            <label>id_number2</label>
            <input type="text" name="id_number2">
        </div>
        <div>
            <label>address</label>
            <input type="text" name="address">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>