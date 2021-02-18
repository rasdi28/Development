@extends('layouts.app')
@section('content')
<div class="container col-md-6">
    <h3>Masukkan data</h3>
    <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name="name" id="" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="" placeholder="Enter email">
          </div>
        <div class="form-group">
          <label for="no_telp">No Telephon</label>
          <input type="number" class="form-control" name="no_telp" id="" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="photo" class="form-control-label">Foto</label>
            <input type="file" name="image" accept="image/*" required class="form-control @error('type') is-invalid @enderror">
            @error('image')
                <div class="text-muted">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection