@extends('layouts.user_panel')

@section('user_content')
<style>
  @media (max-width: 712px) {
    .res-btn{
        margin-top: 15px;
    }
  }
  @media (max-width: 600px) {
	.responsive{
		padding-bottom: 508px;
    display: inline-grid;
	}
  }
  @media (max-width: 540px) {
	.responsive{
		padding-bottom: 205px;
	}
  }
  @media (max-width: 480px) {
	.responsive{
		padding-bottom: 330px;
    display: inline-grid;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 380px;
	}
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 420px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 300px;
	}
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 355px;
	}
  }
  @media (max-width: 376px) {
	.responsive{
		padding-bottom: 170px;
	}
  }
  @media (max-width: 360px) {
    .res-btn{
        margin-top: 15px;
    }
  }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h5 class="text-center font-weight-bold mt-3">Reset Password</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h5 class="fs-4">E-Mail Address</h5></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 res-btn">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
