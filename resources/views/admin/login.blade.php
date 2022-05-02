@extends('layouts.admin_panel')

@section('admin_content')
<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('login.admin') }}">
        @csrf
        <div class="form-group mt-2 mb-4">
            <div class="col-lg-12">
                <input id="email" type="email" placeholder="Email Address" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
             @enderror
            </div>
        </div>   

        <div class="form-group">
            <div class="col-md-12">
                <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                
            </div>
        </div>

        <div class="form-group mb-2 offset-md-4">
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0 ml-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                
            </div>
        </div>
    </form>
    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

