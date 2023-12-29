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
            <th>Email</th>
            <th>Password</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Delete2</th>
        </tr>
        @foreach($user as $val)
        <tr>
            <td>{{$val->name}}</td>
            <td>{{$val->email}}</td>
            <td>{{$val->password}}</td>
            <td><a href="/show/{{$val->id}}">Show</a></td>
            <td><a href="/edit/{{$val->id}}">Edit</a></td>
            <td><a href="/delete/{{$val->id}}">Delete</a></td>
            <td>
              
                <form method="post" action="/delete2">
                @csrf
                @method('DELETE')
                    <input type="hidden" name="id" value="{{$val->id}}">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>