@extends('layouts.main')

@section('konten')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal">Silahkan Login`</h1>
                      @if(Session()->has('error'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                    <form method="POST" action="/login">
                        @csrf
                      <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid
                        @enderror" id="email" name="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        <label for="password">Password</label>
                      </div>
                      <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign in</button>
                    </form>
                  </main>
            </div>
        </div>
    </div>
@endsection
