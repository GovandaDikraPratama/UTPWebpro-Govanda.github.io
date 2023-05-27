@extends('layout')

@section('content')
<div class="card bg-light border-0 shadow-lg">
  <div class="card-body">
    <h1 class="text-center mb-4 mt-4 text-dark display-4 fw-bold">EDIT DATA PEGAWAI</h1>
  </div>
</div>


<div class="container">

  <div class="row justify-content-center mt-4">
      <div class="col-8">
          <div class="card">
              <div class="card-body">
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
@endsection




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  @section('footer')
  <footer>
    <div class="card text-center mt-5">
       <div class="card-header">
          UJIAN TENGAH SEMESTER
       </div>
       <div class="card-body">
          <h5 class="card-title">WEB PROGRAMMING</h5>
          <p class="card-text">GOVANDA DIKRA PRATAMA_065120026</p>
       </div>
       <div class="card-footer text-muted">
          copyright.2023
       </div>
    </div>
  </footer>
  @endsection
</html>
