@extends('layouts.frontend')

@section('frontend_content')
<!-- Banner Area -->
<section class="banner-area other-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctor's</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('our_doctor1_page')}}">Our Doctor's</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialist Area -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our All Doctor's</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam cum tenetur eum. Itaque architecto excepturi sint dolore tempore velit qui!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/doctor11.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Asit Baran Adhikary</h3>
                                <h6>MBBS (DMC), MS (Cardiology), Ph.D, FRCS (England)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModal">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Asit Baran Adhikary</h3>
                                      <p>MBBS (DMC), MS (Cardiology), Ph.D, FRCS (England) Cardiac, Vascular & Thoracic Surgeon </p><br>
                                      <h4>Professor</h4>
                                      <h4>Department of Cardiology</h4>
                                      <h4>Chittagong Medical University, Chittagong</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Wednesday & Thursday</h4>
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
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Khandakar Nurul Arefin</h3>
                                <h6>MBBS (Dhaka), MS (Orthopedics) Specialist in Orthopedics</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalnurul">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalnurul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Khandakar Nurul Arefin</h3>
                                      <p>MBBS (Dhaka), MS (Orthopedics) Specialist in Orthopedics & Trauma Surgeon</p><br>
                                      <h4>Associate Professor & Unit Head</h4>
                                      <h4>Department of Orthopedic Surgery & Traumatology</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka </h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday, Saturday & Sunday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m18.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Jagodish Chandro Ghosh </h3>
                                <h6>MBBS, MS (Ortho- Surgery)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#eexampleModall">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="eexampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Jagodish Chandro Ghosh </h3>
                                      <p>MBBS, MS (Ortho- Surgery), Felospine Surgery (ISIC), New Delhi </p><br>
                                      <h4>Professor</h4>
                                      <h4>Department of Orthopedic Surgery & Traumatology</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Thursday</h4>
                                      <h4>From 6:00 PM to 9:00 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/doctor44.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Rana Jahangir Alam</h3>
                                <h6>MBBS, FCPS (Surgery), MRCS (UK) Specialist Surgeon</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalrana">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalrana" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Rana Jahangir Alam</h3>
                                      <p>MBBS, FCPS (Surgery), MRCS (UK) Specialist Surgeon in General Laparoscopic Breast Colorectal & Anus  </p><br>
                                      <h4>Assistant Professor</h4>
                                      <h4>Department of Surgery</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Sunday, Monday & Tuesday</h4>
                                      <h4>From 6:00 PM to 9:00 PM</h4>
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

            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m9.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Monirujjaman Monir </h3>
                                <h6>MBBS, BCS (Health), MS (Orthopedics Surgery)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalmonir">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalmonir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Monirujjaman Monir </h3>
                                      <p>MBBS, BCS (Health), MS (Orthopedics Surgery) Bangabandhu Sheikh Mujib Medical University (PG Hospital) Highly Trained AO Basic Trauma (India), AO Advanced Trauma (Bangladesh)APSS Operative Spine Course (Indonesia) Consultant, Orthopedics & Trauma Surgeon </p><br>
                                      <h4>National Institute of Traumatology & Orthopedic Rehabilitation (NITOR) (Pongu Hospital, Dhaka)</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Wednesday, Thursday & Friday</h4>
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
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/doctor22.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Farzana Ferdous Munmun</h3>
                                <h6>MBBS (DU), BCS (Health), DGO (BSMMU), FCPS (Obs. & Gynae)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#eexampleModal">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="eexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Farzana Ferdous Munmun </h3>
                                      <p>MBBS (DU), BCS (Health), DGO (BSMMU), FCPS (Obs. & Gynae) Obstetrician And Gynaecologist & Laparoscopic Surgeon</p><br>
                                      <h4>Sher-E-Bangla Medical College, Barisal </h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday & Saturday</h4>
                                      <h4>From 5:00 PM to 9:00 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m444.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sabbir Ahmed </h3>
                                <h6>MBBS, BCS (Health), D-OrthoNITOR (Pongu Hospital), Dhaka Specialist in Orthopedics & Trauma Surgeon</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModallsabbir">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModallsabbir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Sabbir Ahmed </h3>
                                      <p>MBBS, BCS (Health), D-Ortho NITOR (Pongu Hospital), Dhaka Specialist in Orthopedics & Trauma Surgeon</p><br><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/141.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Nahid Yasmin</h3>
                                <h6>MBBS, FCPS (Obs. & Gynae), FICS (USA) Laparoscopic Surgeon, Surgeon Trained from India, Singapur and Koria, Specialist in Obs. & Gynae </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalnahid">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalnahid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Nahid Yasmin</h3>
                                      <p>MBBS, FCPS (Obs. & Gynae), FICS (USA) Laparoscopic Surgeon Trained from India, Singapur and Koria Specialist in Obstetrics & Gynaecology  </p><br>
                                      <h4>Professor and Department Head (Ex)</h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Labaid Specialized Hospital</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Tuesday, Thursday & Friday</h4>
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
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section>
      <div class="container pagination_fe">
          <div class="row">
              <div class="col-lg-12">
                  <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ route('our_doctor1_page') }}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('our_doctor2_page') }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('our_doctor3_page') }}">3</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('our_doctor4_page') }}">4</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('our_doctor5_page') }}">5</a></li>
                      </ul>
                    </nav>
              </div>
          </div>
      </div>
  </section>
@endsection 