@extends('layouts.app')

@section('content')

<section class="py-3 text-center container">
<div class="row py-lg-2">
    <div class="jumbotron">
        <h1>Welcome To Ngoding Bareng Blog</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni iste quisquam qui voluptas, quod ex necessitatibus odio nobis alias. Voluptatum tenetur dolorem cum quod eveniet unde libero cupiditate odio quis!</p>
        <div class="container">
          <a href="{{ route('blog.create') }}"class="btn btn-primary my-2">Login</a>
        </div>
    </div>
  </div>
</section>
@endsection