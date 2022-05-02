@extends('layouts.user_panel')

@section('user_content')
<style>
    @media (max-width: 712px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 620px;
    }
    }
    @media (max-width: 600px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 500px;
    }
    }
    @media (max-width: 540px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 200px;
    }
    }
    @media (max-width: 480px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 330px;
    }
    }
    @media (max-width: 414px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 375px;
    }
    }
    @media (max-width: 412px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 397px;
    }
    }
    @media (max-width: 394px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 335px;
    }
    }
    @media (max-width: 390px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 320px;
    }
    }
    @media (max-width: 376px) {
	.register-page{
		margin-bottom: 10px;
	}
    .register-btn{
        padding-bottom: 3px;
    }
    .all-register{
        padding-bottom: 140px;
    }
    }
    @media (max-width: 360px) {
	.register-page{
		margin-bottom: 15px;
	}
    .register-btn{
        padding-bottom: 53px;
    }
    .all-register{
        padding-bottom: 115px;
    }
    }
</style>

<main class="all-register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                                <div class="col-md-6 register-page">
                                    <input id="name" type="text" placeholder="User Name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                 @enderror
                                </div>
                        
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 register-page">
                                <input id="country" type="text" placeholder="Country" class="form-control form-control-lg @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-4 register-page">
                                <select id="city" type="text" placeholder="City" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                    <option></option>
                                    <option>Dhaka</option>
                                    <option>Rajshahi</option>
                                    <option>Khulna</option>
                                    <option>Chittagong</option>
                                    <option>Barisal</option>
                                    <option>Comilla</option>
                                    <option>Sylhet</option>
                                    <option>Mymensingh</option>
                                </select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="phone" type="number" placeholder="Mobile No" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                        <div class="row mb-3">
                                <div class="col-md-6 register-page">
                                    <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                           
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-6 offset-md-5 register-btn">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> 

                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small have_ac"><a href="{{url('login')}}">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
@endsection
