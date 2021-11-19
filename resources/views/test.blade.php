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
            <input type="text" name="id_number2" >
        </div>
        <div >
            <select name="address">
                <option value="1">ก</option>
                <option value="2">ข</option>
                <option value="3">ค</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>

    
</body>

</html>