@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Members</h4>
</div>


    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telephon</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            @foreach ($data as $members)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$members->name}}</td>
                <td>{{$members->email}}</td>
                <td>{{$members->no_telp}}</td>
                <td>
                    <a href="">Lihat</a>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>

                </td>
              </tr>
              @endforeach
          </table>
          <a href="{{route('member.create')}}" class="btn btn-outline-danger ml-auto">Input data</a>

    </div>
    

    
@endsection