<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1234</title>
</head>
<body>
<table>
    <th>1</th>
    <th>add_now</th>

    @foreach ($add as $adds)
    <tr>
        <td>{{ $adds->id }}</td>
        <td>{{ $adds->address_now }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>

