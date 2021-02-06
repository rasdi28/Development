@extends('layouts.app')

@section('content')

    <h3>Article</h3>
    Hello {{ $nama }}

    @foreach ($article as $item)
        <p> Judul : {{ $item ['title'] }}</p>
        <p> Keterangan : {{ $item ['subjek'] }}</p>
    @endforeach


    
@endsection