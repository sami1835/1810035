@extends('layouts.frontend')

@section('frontend_content')
<!-- Banner Area -->
<section class="banner-area other-pagess">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Gallery</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('gallery_page')}}">Our Gallery</a>
                </div>
            </div>
        </div>
    </section>





    <!-- Gallery part -->
    <section class="gallery-section py-5">
        <div class="container">

            <div class="row g-row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our Gallery</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus harum illo nihil, delectus saepe soluta culpa odio numquam.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/online_serial.jpg" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Online Serial</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/phone_serial.png" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Serial Using Phone</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/waiting_room.jpeg" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Comfortable Waiting Room</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4 mb-2">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/resourceful_lab.png" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Resourceful Laboratory</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/test_report.png" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Most Correct Test Report</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/treatment_machine.jpg" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Modern Treatment Machine</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/staff_helping.jpg" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Staff's Helping & Good Behavior</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/blood_room.jpg" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Giving Blood for Test</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="g-all">
                        <a href="#">
                            <img src="{{ asset('frontend')}}/assets/images/gallery/lab.png" alt="">
                        </a>
                        <div class="g-content mt-3">
                            <h3>Clean Test Room for Patient</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 