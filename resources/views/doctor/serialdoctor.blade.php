@extends('layouts.admin_panel')

@section('admin_content')
<style>
  @media (max-width: 712px) {
	.responsive{
		padding-bottom: 626px;
    display: inline-grid;
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
		padding-bottom: 385px;
    display: inline-grid;
	}
  }
  @media (max-width: 414px) {
	.responsive{
		padding-bottom: 480px;
	}
  }
  @media (max-width: 412px) {
	.responsive{
		padding-bottom: 520px;
	}
  }
  @media (max-width: 394px) {
	.responsive{
		padding-bottom: 445px;
	}
  }
  @media (max-width: 390px) {
	.responsive{
		padding-bottom: 440px;
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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <h3 class="text-center font-weight-bold m-2">Patient Serial List</h3>
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

                <form action="{{ route('muldel') }}" method="post">
                @csrf 
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"><input type="checkbox" id="checkall"></th>
                      <th scope="col">Sl No</th>
                      <th scope="col">Patient Name</th>
                      <th scope="col">Age</th>
                      <th scope="col">Date</th>
                      <th scope="col">Doctor's Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @php($id='PSN00001')
                    @foreach($categories as $category)
                    <tr>
                      <td><input type="checkbox" name="delid[]" class="checkboxclass" value="{{$category->id}}"></td>
                      <td scope="row">{{$id++}}</th>
                      <td>{{$category->patient_name}}</td>
                      <td>{{$category->age}}</td>
                      <td>{{$category->date}}</td>
                      <td>{{$category->doctor_name}}</td>
                      <td>
                        <a href="{{url('category/delete'.$category->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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
