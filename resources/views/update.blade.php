<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" action="{{route('update',[$custome->id])}}">
    @csrf
    <input type="text" name="name" value="{{$custome->name}}">
    <input type="" name="age" value="{{$custome->age}}">
    <input type="submit" value="add">
  </form>  
</body>
</html>