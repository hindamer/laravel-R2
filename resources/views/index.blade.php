<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        @foreach ($customers as $val)
        <tr>
          <td>{{$val->name}}</td>
          <td>{{$val->age}}</td>
          <td><a href="/edit/{{$val->id}}"</a>Edit</td>
        </tr>
        @endforeach
    </table>
</body>
</html>