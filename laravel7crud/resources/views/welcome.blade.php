@extends('layouts.app')

@section('content')

<section class="py-3 text-center container">
<div class="row py-lg-2">
    <div class="jumbotron">
        <h1>Welcome To Ngoding Bareng Blog</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni iste quisquam qui voluptas, quod ex necessitatibus odio nobis alias. Voluptatum tenetur dolorem cum quod eveniet unde libero cupiditate odio quis!</p>
        
    </div>
  </div>
</section>
@endsection

{{-- Isi Blog --}}
@section('blog')
<div class="container">
  <h3>Hello this is Blog</h3>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @forelse ($blogs as $blog)
        <div class="col">
              <div class="card shadow-sm mt-5">
                <div class="card-header text-center">
                    <div class="card-text">
                       <b> {{ $blog->title }} </b> 
                    </div>
                </div>
                <img style="height:270px; object-fit:cover; object-position:center" src="{{ asset($blog->image) }}" class="bd-placeholder-img card-img-top" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                
                <div class="card-body">
                    <p class="card-text">{{ Str::limit($blog->description,200,'') }}  <a href="">Read More...</a></p>
                   
                    
                   <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">{{ $blog->created_at->diffForHumans() }}</small>
                   </div>
                   
                </div>
            </div>
        </div>

    @empty
        <h2>Data Is Empty</h2>
    @endforelse
  </div>
  <div class="d-flex justify-content-center mt-5">
    <div>
        {{ $blogs->links() }}
    </div>
</div>
</div>
    
@endsection



