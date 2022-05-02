@extends('layouts.admin_panel')

@section('admin_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 680px;
    display: inline-grid;
	}
  }
  @media (max-width: 600px) {
	.responsive{
		padding-bottom: 568px;
    display: inline-grid;
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
    display: inline-grid;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 425px;
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
  }
  @media (max-width: 360px) {
	.responsive{
		padding-bottom: 170px;
    display: inline-grid;
    margin-top: 20px;
	}
  }
</style>


<div class="container responsive">
  <div class="mt-3"></div>
  <marquee behavior="" direction="right">
  <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
  </marquee>
</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}} <span class="badge bg-success"><b>Active Now</b></span>
                <b class="float-end">Total Users <span class="badge bg-danger">{{count($users)}}</span> </b>
                </div>

                

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->

                
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">User Id</th>
                      <th scope="col">User Name</th>
                      <th scope="col">E-mail Address</th>
                      <th scope="col">Mobile No</th>
                      <th scope="col">City</th>
                      <th scope="col">Country</th>
                      <th scope="col">Created At</th>
                    </tr>
                  </thead>

                  
                  <tbody>
                    @php($id='MLDC0001')
                    @foreach($users as $user)
                    <tr>
                      <td scope="row">{{$id++}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->city}}</td>
                      <td>{{$user->country}}</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$users->links()}}

            </div>
        </div>
    </div>
</div>
@endsection
