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
    display: inherit;
    margin-top: 20px;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 470px;
	}
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 490px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 435px;
	}
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 420px;
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
    width: 100%;
    display: inherit
	}
  }
</style>


<div class="container responsive">
<div class="mt-2"></div>
  <marquee behavior="" direction="right">
  <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
  </marquee>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <h3 class="text-center font-weight-bold m-1">All Doctors</h3>
                    <form action="{{route('searchdata')}}" method="get" class="d-none d-md-inline-block float-end">
                      <div class="input-group">
                          <input class="form-control" type="search" name="search" placeholder="Search Doctor" aria-describedby="btnNavbarSearch" />
                          <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                      </div>
                  </form>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Sl.</th>
                      <th scope="col">Doctor’s Name</th>
                      <th scope="col">Qualification</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Institution</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($docs as $doc)
                    <tr>
                      <th scope="row">{{$docs->firstItem()+$loop->index}}</th>
                      <td>{{$doc->name}}</td>
                      <td>{{$doc->qualification}}</td>
                      <td>{{$doc->designation}}</td>
                      <td>{{$doc->institution}}</td>
                    </tr>
                   @endforeach
                  </tbody>
                </table>

                {{$docs->links()}}

                
            </div>
        </div>


    </div>
</div>
@endsection
