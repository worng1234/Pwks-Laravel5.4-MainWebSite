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
        <form action=" {{ route('testup.update', $test->id)}} " method="post">
        @csrf
        @method('PUT')

        <div>
            <label>Address</label>
            <input type="text" name="address" value="{{$test->address}}">
        </div>
        <div>
            <label>ID</label>
            <input type="text" name="id_number2" value="{{$test->id_number2}}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>
