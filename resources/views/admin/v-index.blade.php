@extends('layout')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container mt-5">
            <a href="/admin/create" class="btn btn-outline-success">Tambah Data</a>
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
                        <th scope="col">Email</th>
                        <th scope="col">Ditambah Pada</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($admins as $admin)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->created_at}}</td>
                            <td>
                                <a href="/admin/{{ $admin->id  }}/edit" class="btn btn-outline-warning">Edit</a>
                                <form action="/admin/{{$admin->id}}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger" style="background-color: transparent;" onclick="return confirm('Hapus data ini ?');">Delete</button>
                                </form>
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
