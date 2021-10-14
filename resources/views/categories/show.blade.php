<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show category    {{$category->name}}</title>
</head>
<body>


    <form action=" "    method="POST">

@csrf
@method('DELETE')

<button type="button" class="btn btn-danger"    value="Delete"><input type="submit" value="Delete" ></button>

    </form>
    <h1>show    category -{{$category->name}} </h1>

    <p>{{$category->desc}}</p>
    <p> Created at:{{$category->created_at->format('d   M   Y,  H :i    a')   }}</p>



    <hr>




</body>

<script src="{{asset('js/bootstrap.min.js')}}">    </script>
</html>