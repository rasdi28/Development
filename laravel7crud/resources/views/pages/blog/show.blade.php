@extends('layouts.app')

@section('content')

<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>

@section('konten')
    <h4>Hello</h4>
    @method('PUT')
    <h3>{{$blog->title}}</h3>
    <h5>{{$blog->description}}</h5>    
@endsection