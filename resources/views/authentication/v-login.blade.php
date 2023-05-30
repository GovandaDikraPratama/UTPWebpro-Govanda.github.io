@extends('layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 mx-auto col-lg-5">
            <div class="p-4 p-md-5 border rounded-3 bg-light">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                      </div>
                    @endif
                    <form action="/auth/login" method="POST">
                        @csrf
                        <h5 class="text-center" >Sign In</h5>
                        <div class="mb-3">
                            <input type="text" name="email" id="email" class="form-control mb-2 @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="email" autocomplete="off" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" name="buttonLogin" class="btn btn-outline-primary btn-sm">Login</button>
                        <a href="/" type="button" class="btn btn-outline-danger btn-sm">Cancle</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
