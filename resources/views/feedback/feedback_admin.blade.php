@extends('layouts.admin_panel')

@section('admin_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 760px;
    display: inline-grid;
	}
  }
  @media (max-width: 600px) {
	.responsive{
		padding-bottom: 700px;
    display: inline-grid;
	}
  }
  @media (max-width: 540px) {
	.responsive{
		padding-bottom: 280px;
	}
  }
  @media (max-width: 480px) {
	.responsive{
		padding-bottom: 530px;
    display: inline-grid;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 705px;
	}
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 742px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 540px;
	}
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 625px;
	}
  }
  @media (max-width: 376px) {
	.responsive{
		padding-bottom: 300px;
	}
  }
  @media (max-width: 360px) {
	.responsive{
		padding-bottom: 225px;
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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <h3 class="text-center font-weight-bold m-2">Feedback or Complain List</h3>
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

                <form action="{{ route('muldell') }}" method="post">
                @csrf 
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"><input type="checkbox" id="checkall"></th>
                      <th scope="col">Sl_No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Address</th>
                      <th scope="col">Message</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td><input type="checkbox" name="delid[]" class="checkboxclass" value="{{$category->id}}"></td>
                      <td scope="row">{{$categories->firstItem()+$loop->index}}</th>
                      <td>{{$category->name}}</td>
                      <td>{{$category->email}}</td>
                      <td>{{$category->mobile}}</td>
                      <td>{{$category->address}}</td>
                      <td>{{$category->message}}</td>
                      <td>
                        <a href="{{url('fc/delete'.$category->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{$categories->links()}}

                <div class="form-group d-none d-md-block">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete Selected Data</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

  <script>
  $(function(e){
    $('#checkall').click(function(){
      $('.checkboxclass').prop('checked', $(this).prop('checked')); 
    });
  });
</script>

@endsection
