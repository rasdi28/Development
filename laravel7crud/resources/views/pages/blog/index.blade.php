@extends('layouts.app')
@section('content')
<style>
    .bd-placehorder-img {
        font-size: 1.123rem;
        text-anchor: middle;
        -webkit-user-select: none;
        user-select: none;
    }
    @media (min-width:768px) {
        .bd-placehorder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
    
<main>
    <section class="py-3 text-center container">
        <div class="row py-lg-2">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">
                    Blog
                </h1>
                <p class="lead text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo assumenda voluptates deleniti cupiditate mollitia consequuntur cumque corrupti vel iusto similique, eveniet ipsam, atque, quam ex enim facere reiciendis vitae! Repellat.</p>
                <p>
                    <a href="{{ route('blog.create') }}" class="btn btn-primary my-2">Add</a>
                </p>
                
            </div>
        </div>
    </section>
    <div class="album py-2 bg-light">
        <div class="container">
            <div class="row row-cols row-cols-sm-2 row-cols-md-3 g-3">
                <div class="card-body">
                    {{-- <p class="card-text">{{ $blog->description }}</p> --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a 
                          {{-- href="{{ route('blog.edit', $blog->id) }}" --}}
                          class="btn btn-sm btn-outline-success">
                          EDIT
                        </a>
                        {{-- <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="" data-id="{{ $blog->id }}">DELETE</button> --}}
                        </div>
                        {{-- <small class="text-muted">{{ $blog->created_at }}</small> --}}
                    </div>
                </div>
            </div>
           
        </div>
        {{-- @empty
        <h2>Data Is Empty</h2>
        @endforelse --}}
    </div>
    </div>
    </div>
</main>

@endsection