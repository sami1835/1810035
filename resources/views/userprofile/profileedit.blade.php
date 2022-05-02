@extends('layouts.user_panel')

@section('user_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 620px;
	}
    .res_f{
        width: 440px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 600px) {
	.responsive{
		padding-bottom: 500px;
	}
    .res_f{
        width: 440px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 540px) {
	.responsive{
		padding-bottom: 195px;
	}
  }
  @media (max-width: 480px) {
	.responsive{
		padding-bottom: 350px;
        display: inline-block;
	}
    .res_f{
        width: 371px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 381px;
	}
    .res_f{
        width: 318px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 408px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 300px;
	}
    .res_f{
        width: 295px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 332px;
	}
  }
  @media (max-width: 376px) {
	.responsive{
		padding-bottom: 180px;
	}
    .res_f{
        width: 282px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
  @media (max-width: 360px) {
	.responsive{
		padding-bottom: 150px;
        display: inline-block;
	}
    .res_f{
        width: 260px;
    }
    .res_btn{
        margin-top: 15px;
        padding-left: 58px;
    }
  }
</style>











<div class="container responsive">
<div class="container">
<div class="mt-2"></div>
  <marquee behavior="" direction="right">
  <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
  </marquee>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h4 class="text-center font-weight-bold m-2">Edit {{Auth::user()->name}}'s Profile</h3></div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->

                @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('success')}}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif 
                    <form action="{{url('user/profile/update'.Auth::user()->id)}}" method="post"> 
                        @csrf 
                                <div class="form-group row mt-4 res_f" style="margin-left: 45px;">
                                    <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">Username</h6></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="inputName" value="{{$users->name}}">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row res_f" style="margin-left: 45px;">
                                    <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">Mobile No</h6></label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="inputName" value="{{$users->phone}}">
                                        @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row res_f" style="margin-left: 45px;">
                                    <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">City</h6></label>
                                    <div class="col-md-6">
                                        <select id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$users->city}}">
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
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group row res_f" style="margin-left: 45px;">
                                <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">Country</h6></label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="inputName" value="{{$users->country}}">
                                    @error('country')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 offset-md-5 res_btn">
                                <button type="submit" class="btn btn-primary mb-3 ml-3">Update</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection


