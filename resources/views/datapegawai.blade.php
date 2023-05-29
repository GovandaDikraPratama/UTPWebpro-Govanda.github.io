@extends('layout')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/pegawai">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
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
    </section>

</main>
<!-- End #main -->
@endsection
