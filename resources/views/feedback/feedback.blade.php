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
<div class="mt-2"></div>
  <marquee behavior="" direction="right">
  <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
  </marquee>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg mt-4">
                <div class="card-header"><h3 class="text-center font-weight-bold m-2">Feedback or Complain Form</h3></div>

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

                <form action="{{ route('fc_form')}}" method="post">
                @csrf
                    <div class="form-group p-4 pb-0">
                        <label for="inputName" class="col">Name</label>
                        <div class="col mt-1">
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="Enter Name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-1">
                        <label for="inputName" class="col">E-mail</label>
                        <div class="col mt-1">
                            <input type="email" class="form-control" name="email" id="inputName" placeholder="Enter E-mail Address">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-1">
                        <label for="inputName" class="col">Mobile No</label>
                        <div class="col mt-1">
                            <input type="number" class="form-control" name="mobile" id="inputName" placeholder="Enter Mobile Number">
                            @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-1">
                        <label for="inputName" class="col">Address</label>
                        <div class="col mt-1">
                            <input type="text" class="form-control" name="address" id="inputName" placeholder="Enter Address">
                            @error('address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-1">
                        <label for="inputName" class="col">Message</label>
                        <div class="col mt-1">
                            <textarea class="form-control lg pb-5 mb-2" name="message" id="inputName" placeholder="Enter Feedback or Complain"></textarea>
                            @error('message')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 mt-3 p-4 pt-0 pb-0">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>  
@endsection

