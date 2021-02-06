@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Form Membuat Post</h2>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Post</label>
                    <input type="text" class="form-control">
                </div>
                <button class="btn btn-secondary">Kirim</button>
            </form>
        </div>
    </div>
   
</div>
@endsection