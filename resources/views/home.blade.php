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
		padding-bottom: 330px;
	}
    }
    @media (max-width: 414px) {
	.responsive{
		padding-bottom: 370px;
	}
    }
    @media (max-width: 412px) {
	.responsive{
		padding-bottom: 390px;
	}
    }
    @media (max-width: 394px) {
	.responsive{
		padding-bottom: 325px;
	}
    }
    @media (max-width: 390px) {
	.responsive{
		padding-bottom: 320px;
	}
    }
    @media (max-width: 376px) {
	.responsive{
		padding-bottom: 144px;
	}
    }
    @media (max-width: 360px) {
	.responsive{
		padding-bottom: 116px;
	}
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 responsive">
            <div class="card">
                <div class="card-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="" alt="">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="font-weight-bold">MediLab Diagnostic Center</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                   Welcome, <h4 class="font-weight-bold">{{ Auth::user()->name }}</h4><br>
                   <span>
                   You can see all of our doctors, search them using search bar and fill up a form to give serial. </br>
                   You can change your profile and also change your password as your wish from here. </br></br>

                   We hope you will get better service from us. If you feel any problem or any doubt, you can contact us through e-mail or phone. 
                   Also if you have any complain, you can know us freely. Our staffs are ready to help you according to your needs. </br></br>

                   With best wishes for you </br>
                   Thank you 
                   </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
