@extends('layouts.frontend')

@section('frontend_content')
    <!-- Banner Area -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('about_page')}}">About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="{{ asset('frontend')}}/assets/images/welcome.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>Welcome to our clinic</h2>
                        <p class="pt-3">Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were.</p>
                        <p>Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn't seed stars were the boring.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ipsum quis consequatur quo alias nemo adipisci, quam enim beatae optio illum recusandae in, error iste.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- About Section -->
     <section class="about-seciton py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend')}}/assets/images/about_side.jpg" alt="" class="about-image">
                </div>

                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="a-text">
                            <h3> About Our Diagnostic Center </h3>
                            <h2>We have been serving treatment with patinet properly.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <strong>In our diagnostic center,We focus on such things:</strong>
                            <ul>
                                <li><span><i class="fas fa-check"></i></span>Maintaing Patient Serial</li>
                                <li><span><i class="fas fa-check"></i></span>Good Behaviour</li>
                                <li><span><i class="fas fa-check"></i></span>Appoint with doctor</li>
                                <li><span><i class="fas fa-check"></i></span>Properly Test</li>
                                <li><span><i class="fas fa-check"></i></span>Proper treatment</li>
                                <li><span><i class="fas fa-check"></i></span>Provide Correct Report</li>
                                <li><span><i class="fas fa-check"></i></span>Give Discount in Test</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- member_counter counter start -->
    <section class="member_counter padding_bottom py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{ asset('frontend')}}/assets/images/icon/doctor.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter" data-target="70"></span>
                        <h4> <span>Specialized</span>Doctor</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{ asset('frontend')}}/assets/images/icon/laboratory.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter" data-target="12"></span>
                        <h4> <span>Resourceful</span>Laboratory</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{ asset('frontend')}}/assets/images/icon/hospital.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter" data-target="350"></span>
                        <h4> <span>Total</span>Patients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{ asset('frontend')}}/assets/images/icon/staff.png" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span class="counter" data-target="120"></span>
                        <h4> <span>Friendly</span>Staff's</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('frontend')}}/assets/js/counter.js"></script>

    

    <!-- Specialist Area -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our Doctor's</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, velit sint porro debitis, impedit ipsa minus dolorum quibusdam, placeat recusandae aliquid? Magnam ab quidem possimus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m10.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Rafiqul Islam</h3>
                                <h6>MBBS, BCS (Health), MD (Gastroenterology) Gastroenterology & Medicine Specialist  </h6>
                            </div>
                            <div class="doctor-text text-center">
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalrafuqul">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalrafuqul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Rafiqul Islam</h3>
                                      <p>MBBS, BCS (Health), MD (Gastroenterology) Gastroenterology & Medicine Specialist  </p><br>
                                      <h4>Assistant Professor </h4>
                                      <h4>Department of Gastroenterology</h4>
                                      <h4>Rajshahi Medical College, Rajshahi</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Thursday</h4>
                                      <h4>From 7:00 PM to 8:30 PM</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m11.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. M.A.K Saifullah</h3>
                                <h6>MBBS, BCS (Health), FCPS (Medicine), FCPS (Pulmonology)(Thesis), RMO, NIDCH, Mohakhali, Dhaka  </h6>
                            </div>
                            <div class="doctor-text text-center">
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsaifullah">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsaifullah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. M.A.K Saifullah</h3>
                                      <p>MBBS, BCS (Health), FCPS (Medicine), FCPS (Pulmonology)(Thesis)</p><br>
                                      <h4>RMO, National Institute of Diseases of the Chest and Hospital (NIDCH)  Mohakhali, Dhaka </h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday, Sunday & Monday</h4>
                                      <h4>From 7:00 PM to 9:00 PM</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m12.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. M. Saidul Haq</h3>
                                <h6>MBBS, BCS (Health), MD (Gastroenterology)</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#eexampleModalsaidul">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="eexampleModalsaidul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. M. Saidul Haq</h3>
                                      <p>MBBS, BCS (Health), MD (Gastroenterology) Liver, Gastroenterology & Medicine Specialist</p><br>
                                      <h4>Chief Consultant</h4>
                                      <h4>Dhaka Gastro-liver Center</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday, Saturday, Sunday & Thursday</h4>
                                      <h4>From 6:00 PM to 8:00 PM</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m16.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. K.M. Murshed </h3>
                                <h6>MBBS (MMC), FCPS (Medicine), FRCP (London) Certified Course On Diabetics, Heart Diseases, Gastro-liver, Chest Diseases </h6>
                            </div>
                            <div class="doctor-text text-center">
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalmurshed">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalmurshed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. K.M. Murshed</h3>
                                      <p>MBBS (MMC), FCPS (Medicine), FRCP (London) Certified Course On Diabetics, Heart Diseases, Gastro-liver, Chest Diseases, Kidney Diseases, Azma, Paralaisis, Skin and Venereal (Sex) </p><br>
                                      <h4>Consultant Medicine</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday & Saturday</h4>
                                      <h4>From 6:00 PM to 8:00 PM</h4>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="our_doctor.html" class="read_more">Read More --></a>
        </div>
    </section>

    <!-- Patient Area -->
    <section class="patient-area section-padding3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Patient Feedback</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-patient mb-2">
                        <img src="{{ asset('frontend')}}/assets/images/patient1.jpg" alt="">
                        <h3>Md. Azimul Karim</h3>
                        <p class="pt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse sapiente mollitia libero. Sit eos saepe non accusamus perspiciatis voluptatem molestias impedit modi, illum, laborum dolor praesentium porro dolore quidem vel.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-patient">
                        <img src="{{ asset('frontend')}}/assets/images/patient2.jpg" alt="">
                        <h3>Farhana Hamid</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae reprehenderit non error harum omnis totam minima soluta? Facilis voluptatem sed hic rerum magnam quo quisquam animi beatae quod placeat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 