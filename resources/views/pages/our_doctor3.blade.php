@extends('layouts.frontend')

@section('frontend_content')
 <!-- Banner Area -->
 <section class="banner-area other-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctor's</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('our_doctor3_page')}}">Our Doctor's</a>
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
                            <img src="{{ asset('frontend')}}/assets/images/m2.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sayem Al Monsur Foyeji </h3>
                                <h6>MBBS, FCPS (Surgery) General Laparoscopic </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsayem">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsayem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Sayem Al Monsur Foyeji </h3>
                                      <p>MBBS, FCPS (Surgery) General Laparoscopic & Colorectal Surgeon  Specialist in Breast, Anus, Hepatobiliary & Pancreatic </p><br>
                                      <h4>Assistant Professor (Ex BMC) </h4>
                                      <h4>Department of Surgery</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Wednesday</h4>
                                      <h4>From 5:00 PM to 8:00 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Ronojit Roy</h3>
                                <h6>MBBS, MD, FCPS (Child), FRCP (UK), Professor & Chairman, Bangabandhu Sheikh Mujib Medical University (BSMMU), Dhaka </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalronojit">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalronojit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Ronojit Roy</h3>
                                      <p>MBBS, MD, FCPS (Child), FRCP (UK)</p><br>
                                      <h4>Professor & Chairman </h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday to Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m14.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Ahasanulla Al Baki</h3>
                                <h6>MBBS, DCH, MRCP (London) Professor (Child Health), Consultant</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalbaki">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalbaki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Ahasanulla Al Baki</h3>
                                      <p>MBBS, DCH, MRCP (London) Professor (Child Health), Consultant, Newborn Baby & Child </p><br><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Friday</h4>
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
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m19.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Safikul Islam </h3>
                                <h6>MBBS, FCPS (Child), DCH (DU), MD (Child) Specialist in Child Diseases</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsafikul">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsafikul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Safikul Islam </h3>
                                      <p>MBBS, FCPS (Child), DCH (DU), MD (Child) Specialist in Child Diseases</p><br>
                                      <h4>Assistant Professor</h4>
                                      <h4>Department of Child</h4>
                                      <h4>Mymensingh Medical College & Hospital </h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Sunday to Friday</h4>
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

            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m13.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Nizam Uddin</h3>
                                <h6>MBBS, FCPS (Medicine), MPhil, MD (SAEK) Professor & Department Head Department of Nerve & Mental Disorder </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalnizam">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalnizam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Nizam Uddin</h3>
                                      <p>MBBS, FCPS (Medicine), MPhil, MD (SAEK) </p><br>
                                      <h4>Professor & Department Head </h4>
                                      <h4>Department of Nerve & Mental Disorder </h4>
                                      <h4>Comilla Medical College & Hospital</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Sunday, Monday, Wednesday & Thursday</h4>
                                      <h4>From 5:00 PM to 7:00 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m7.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. M M Yasir Arafat</h3>
                                <h6>MBBS (DMC), MBA, MPH, MD (Psychiatry) Bangabandhu Sheikh Mujib Medical University (BSMMU) Specialist in Mental Disorder</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalarafat">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalarafat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. M M Yasir Arafat</h3>
                                      <p>MBBS (DMC), MBA, MPH, MD (Psychiatry) Bangabandhu Sheikh Mujib Medical University (BSMMU) Specialist in Mental Disorder, Brain, Headache, Nerve, Drug Addiction and Sex</p><br>
                                      <h4>Assistant Professor </h4>
                                      <h4>Enam Medical College & Hospital, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday & Tuesday</h4>
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
                  <div class="single-doctor mb-4 mb-sm-0">
                      <div class="doctor-img">
                          <img src="{{ asset('frontend')}}/assets/images/m8.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="content-area">
                          <div class="doctor-name text-center">
                              <h3>Dr. Md. Kazim Uddin</h3>
                              <h6>MBBS, DCP, MCPS (Hematology) Professor Department of Hematology,Nordern International Medical College, Dhaka </h6>
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
                          <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalkazim">
                              View More
                            </button>
                            
                            <!-- Modal  -->
                            <div class="modal fade" id="exampleModalkazim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h3>Dr. Md. Kazim Uddin</h3>
                                    <p>MBBS, DCP, MCPS (Hematology)</p><br>
                                    <h4>Professor</h4>
                                    <h4>Department of Hematology</h4>
                                    <h4>Nordern International Medical College, Dhaka </h4><br><hr>
                                    <h3>Seeing Patient Time:</h3>
                                    <h4>Every Friday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/151.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Fahima Jahan</h3>
                                <h6>MBBS, FCPS, MS (Obs. & Gynae) Trained in Laparoscopic & Hysteroscopy</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalfahima">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalfahima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Fahima Jahan</h3>
                                      <p>MBBS, FCPS, MS (Obs. & Gynae) Trained in Laparoscopic & Hysteroscopy</p><br>
                                      <h4>Associate Professor </h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Rangamati Medical College, Rangamati</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Thursday & Friday</h4>
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