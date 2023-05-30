@extends('layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">

            <div class="row justify-content-center mt-4">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body p-5">
                            <form action="/admin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                  <label for="name" class="form-label">Nama Lengkap</label>
                                  <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $data->name }}">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ $data->email }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
          </div>
    </section>

</main>
<!-- End #main -->
@endsection
