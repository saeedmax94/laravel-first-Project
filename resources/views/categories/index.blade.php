@extends('categories.layout')

@section('page  style ')
<style>
    h1{
        color: red
    }
    h3{
        color: blue
    }
    
</style>

@endsection

@section('contnet')
<h1>All categories  </h1>
@foreach ($categories  as   $category )
<h3>


<a href="{{url("/categories/$category->id")}}">

    {{$category->name}}


</a>

</h3>

<hr>

@endforeach

@endsection