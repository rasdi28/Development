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

<main>

  <section class="py-3 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Blog</h1>
        <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis obcaecati ex est quasi ipsam ratione neque sint, pariatur esse unde, magni facere quia quidem dolorem aspernatur! Ad debitis nesciunt aperiam?</p>
        <p>
         
        </p>
      </div>
      <div class="row-lg-6 mx-auto">
        <a href="{{ route('blog.create') }}"class="btn btn-primary my-2">Add Blog</a>

      </div>
      
    </div>
  </section>

  <div class="album py-2 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($blogs as $blog)
            <div class="col">
                  <div class="card shadow-sm mt-5">
                    <div class="card-header text-center">
                        <div class="card-text">
                            <h4>{{ $blog->title }} </h4> 
                        </div>
                    </div>
                    <img style="height:270px; object-fit:cover; object-position:center" src="{{ asset($blog->image) }}" class="bd-placeholder-img card-img-top" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
                    
                    <div class="card-body">
                        <p class="card-text">{{ Str::limit($blog->description,200,'')  }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a 
                              href="{{ route('blog.edit', $blog->id) }}"
                              class="btn btn-sm btn-outline-success">
                              EDIT
                            </a>
                            <form action="{{ url('blog/'.$blog->id) }}" method="post" onsubmit="return confirm('Hapus Data?')">
                                @csrf
                                @method('delete')                                
                                <button class="btn btn-danger mr-4" type="submit">Delete</button>   
                            </form>
                            {{-- <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="" data-id="{{ $blog->id }}">DELETE</button> --}}
                            </div>
                            <small class="text-muted">{{ $blog->created_at->format("d F, Y") }}</small>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h2>Data Is Empty</h2>
        @endforelse
        
      </div>
    </div>
  </div>

</main>
@endsection