@extends('layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pagawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/pegawai">Home</a></li>
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
                            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                  <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected>{{ $data->jenis_kelamin }}</option>
                                    <option value="cowo">cowo</option>
                                    <option value="cewe">cewe</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                  <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelpon }}">
                                </div>

                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                  <input type="file" name="foto" class="form-control" value="{{ $data->foto }}">
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
