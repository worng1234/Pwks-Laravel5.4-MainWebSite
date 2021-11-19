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
        <form action="{{ url('/updatedtest', $tttt->id)}}" method="POST">
        {{csrf_field()}}
        <div>
            <label>Address</label>
            <select name="address">
                <option>{{$tttt->address}}</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
        <div>
            <label>ID</label>
            <input type="text" name="id_number2" value="{{$tttt->id_number2}}" placeholder="id_number2">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>
