@extends('categories.layout')
@section('title')
add categories

@endsection
@section('contnet')
<h1>Add category </h1>
    @if ($errors->any())
@foreach ($errors->all() as $error )
<p>{{$error}}</p>

@endforeach
    @endif

<form action="{{url('/categories')}}"  method="POST" >
    @csrf

    <input type="text"  name="name" id="">
    <br>
<textarea name="desc"  cols="30" rows="5"></textarea>

<br>
<input type="submit"    value="add">
</form>

@endsection