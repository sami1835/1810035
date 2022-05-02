@extends('layouts.user_panel')

@section('user_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 620px;
	}
  }
  @media (max-width: 600px) {
	.responsive{
		padding-bottom: 500px;
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
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 381px;
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
  }
  @media (max-width: 360px) {
	.responsive{
		padding-bottom: 150px;
        display: inline-block;
	}
  }
</style>


<div class="container responsive">
<div class="mt-2"></div>
  <marquee behavior="" direction="right">
  <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
  </marquee>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h4 class="text-center font-weight-bold m-2"> {{Auth::user()->name}}'s Profile</h3></div>

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

                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 mt-2 pl-4">
                            <br>
                            <span style="font-size: 17px; font-weight: bold;">Username:</span> {{ Auth::user()->name}} <br><br>
                            <span style="font-size: 17px; font-weight: bold;">E-Mail:</span> {{ Auth::user()->email}} <br><br>
                            <span style="font-size: 17px; font-weight: bold;">Mobile No:</span> {{ Auth::user()->phone}} <br><br>
                            <br><br>
                        </div>
 
                        <div class="col-lg-4 mt-2">
                            <br>
                            <span style="font-size: 17px; font-weight: bold;">City:</span> {{ Auth::user()->city}} <br><br>
                            <span style="font-size: 17px; font-weight: bold;">Country:</span> {{ Auth::user()->country}} <br><br>
                        </div>

                        <div class="col-lg-3 mt-4 pl-2">
                            <a href="{{url('user/profile/edit'.Auth::user()->id)}}" class="btn btn-primary mt-3 mx-auto mb-3">Edit Profile</a>
                            <a href="{{route('password')}}" class="btn btn-primary mt-3  mx-auto mb-3">Change Password</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
