<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>Doctor serial</title>

    <link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

	   <!--date picker -->
	   <script type="text/javascript">
	   $(document).ready(function(){
	   $("#datepicker").datepicker({
        minDate: 0, 
        maxDate: 0,  
	   });
	   
	   });
       </script>
       
        <div class="mt-2"></div>
        <marquee behavior="" direction="right">
        <h2 style="color: #1ba8fd;" class="font-weight-bold">MediLab Diagnostic Center</h2>
        </marquee>
  </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg mt-4">
                <div class="card-header"><h3 class="text-center font-weight-bold m-2">Patient Serial Form</h3></div>

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

                <form action="{{route('serialdoc')}}" method="post">
                @csrf
                    <div class="form-group p-4 pb-0">
                        <label for="inputName" class="col">Patient Name</label>
                        <div class="col mt-1">
                            <input type="text" class="form-control" name="patient_name" id="inputName" placeholder="Enter Patient Name">
                            @error('patient_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-2">
                        <label for="inputName" class="col">Age</label>
                        <div class="col mt-1">
                            <input type="text" class="form-control" name="age" id="inputName" placeholder="Enter Patient Age">
                            @error('age')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-2">
                        <label for="inputName" class="col">Date</label>
                        <div class="col mt-1">
                            <input type="" class="form-control" name="date" placeholder="Enter Date" id= "datepicker">
                            @error('date')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group p-4 pb-0 pt-0 mt-2">
                        <label for="inputName" class="col">Doctor Name</label>
                        <div class="col mt-1">
                            <input type="text" class="form-control" name="doctor_name" id="inputName" value="{{$docs->name}}">
                            @error('doctor_name')
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
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
