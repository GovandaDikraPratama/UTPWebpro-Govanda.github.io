@extends('layout')

@section('content')

<div class="card bg-light border-0 shadow-lg">
    <div class="card-body">
      <h1 class="text-center mb-4 mt-4 text-dark display-4 fw-bold">DATA PEGAWAI</h1>
    </div>
  </div>


<div class="container mt-5">
    <a href="/tambahpegawai" class="btn btn-outline-success">Tambah Data</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-4" role="alert">
            {{ $message }}
          </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telepon</th>
                <th scope="col">History</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

                @php
                    $no = 1;
                @endphp

                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>
                        <img src="{{ asset('fotopegawai/' . $row->foto ) }}" alt="" style="width: 40px;">
                    </td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>0{{ $row->notelpon }}</td>
                    <td>{{ $row->created_at->format('D M Y')}}</td>
                    <td>
                        <a href="/tampilkandata/{{ $row->id  }}" class="btn btn-outline-warning">Edit</a>
                        <a href="/delete/{{ $row->id  }}" class="btn btn-outline-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
    </div>
</div>
@endsection

@section('footer')
<footer>
  <div class="card text-center mt-5">
     <div class="card-header">
        UJIAN TENGAH SEMESTER
     </div>
     <div class="card-body">
        <h5 class="card-title">WEB PROGRAMMING</h5>
     </div>
     <div class="card-footer text-muted">
        copyright.2023
     </div>
  </div>
</footer>
@endsection
