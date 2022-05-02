@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h4 class="text-center font-weight-bold m-2">Admin Profile</h3></div>

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
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 mt-2 pl-4">
                            <br>
                            <span style="font-size: 17px; font-weight: bold;">Username:</span> Admin <br><br>
                            <span style="font-size: 17px; font-weight: bold;">E-Mail:</span> admin@gmail.com <br><br>
                            <br><br>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
