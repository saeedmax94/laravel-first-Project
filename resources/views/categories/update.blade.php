<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add category </h1>
    @if ($errors->any())
@foreach ($errors->all() as $error )
<p>{{$error}}</p>

@endforeach
    @endif

<form action="{{url("/categories/$category ->id ")}}"  method="POST" >
    @csrf
    @method('put')

    <input type="text"  name="name" value="{{$category->name}}">
    <br>
<textarea name="desc"  cols="30" rows="5">{{$category->desc}}</textarea>

<br>
<input type="submit"    value="add">
</form>
</body>
</html>

