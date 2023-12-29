<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" action="{{route('update' ,[$user->id])}}">
    @csrf
    <input type="text" name="name" value="{{$user->name}}">
    <br>
    <input type="email" name="email" value="{{$user->email}}">
    <br>
    <input type="password" name="password" value="{{$user->password}}">
    <input type="submit" value="add">
  </form>  
</body>
</html>