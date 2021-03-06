@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justifly-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Blog') }} {{ $blog->title }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" id="" placeholder="{{ $blog->title }}" value="{{ $blog->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description" >Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="{{ $blog->description }}">{{ $blog->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Add Image</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('blog.index') }}" type="submit" class="btn btn-danger">Cancel</a>

                    </form>

                    @if($errors->any())
                        <div class="alert alert-danger my-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            @foreach($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection