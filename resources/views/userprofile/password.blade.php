@extends('layouts.user_panel')

@section('user_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 680px;
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
		padding-bottom: 568px;
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
		padding-bottom: 250px;
	}
  }
  @media (max-width: 480px) {
	.responsive{
		padding-bottom: 385px;
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
		padding-bottom: 425px;
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
		padding-bottom: 440px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 365px;
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
		padding-bottom: 380px;
	}
  }
  @media (max-width: 376px) {
	.responsive{
		padding-bottom: 200px;
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
		padding-bottom: 170px;
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
        <div class="col-md-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-danger text-white">
                    <h4 class="text-center font-weight-bold m-2">Change Password</h4>
                </div>

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

                    <form action="{{route('up.pass')}}" method="post">
                        @csrf

                        <div class="form-group row mt-4 res_f" style="margin-left: 45px;">
                            <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">Old Password</h6></label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="inputName" placeholder="Enter Old Password">
                                @if(session('error1'))
                                    <span class="text-danger">{{session('error1')}}</span>
                                @endif

                                @error('old_password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row res_f" style="margin-left: 45px;">
                            <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">New Password</h6></label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="inputName" placeholder="Enter New Password">
                                @if(session('error2'))
                                    <span class="text-danger">{{session('error2')}}</span>
                                @endif

                                @error('new_password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row res_f" style="margin-left: 45px;">
                            <label for="inputName" class="col-md-4 col-form-label text-md-right"><h6 class="fs-5">Confirm Password</h6></label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="inputName" placeholder="Enter Confirm Password">
                                @error('confirm_password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-5 res_btn">
                            <button type="submit" class="btn btn-primary ml-3 mb-3">Submit</button>
                        </div>
    
                    </form>
                


            </div>
        </div>

        

    </div>
</div>
@endsection


