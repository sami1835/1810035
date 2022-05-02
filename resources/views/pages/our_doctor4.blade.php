@extends('layouts.frontend')

@section('frontend_content')
<!-- Banner Area -->
<section class="banner-area other-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctor's</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('our_doctor4_page')}}">Our Doctor's</a>
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

            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/3mm.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Wasif Chisti</h3>
                                <h6>MBBS (Dhaka), BCS (Health), CCD (Berdem), PGT (Medicine), MD Fage-A (Pulmonology) </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalwasif">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalwasif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Wasif Chisti</h3>
                                      <p>MBBS (Dhaka), BCS (Health), CCD (Berdem), PGT (Medicine), MD Fage-A (Pulmonology) Specialist in Medicine and Chest Diseases </p><br>
                                      <h4>National Institute of Diseases of the Chest and Hospital (NIDCH)  Mohakhali, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday, Wednesday & Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/121.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Tamanna Akter Toma</h3>
                                <h6>MBBS (Dhaka), CCD (Berdem) D.M.U</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModaltoma">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModaltoma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Tamanna Akter Toma</h3>
                                      <p>MBBS (Dhaka), CCD (Berdem) D.M.U Sonologist & Specialist in Women Diseases </p><br>
                                      <h4>Medical Officer</h4>
                                      <h4>Sohitunnesa Layans Eye Hospital, Narayanganj</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Friday</h4>
                                      <h4>From 5:30 PM to 8:00 PM</h4>
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
                          <img src="{{ asset('frontend')}}/assets/images/1mm.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="content-area">
                          <div class="doctor-name text-center">
                              <h3>Dr. S.M. Mamun Iqbal</h3>
                              <h6>MBBS (DMC), MD (Cardiology), MRCP (UK) Trained in Clinical and Interventional Cardiology, Professor, Department of Cardiology</h6>
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
                          <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalmamun">
                              View More
                            </button>
                            
                            <!-- Modal  -->
                            <div class="modal fade" id="exampleModalmamun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h3>Dr. S.M. Mamun Iqbal</h3>
                                    <p>MBBS (DMC), MD (Cardiology), MRCP (UK) Trained in Clinical and Interventional Cardiology</p><br>
                                    <h4>Professor & Department Head</h4>
                                    <h4>Department of Cardiology</h4>
                                    <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                    <h3>Seeing Patient Time:</h3>
                                    <h4>Every Saturday to Tuesday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/4mm.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Shakhawat Hossain</h3>
                                <h6>MBBS (Dhaka), BCS (Health), FCPS</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalshakhawat">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalshakhawat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Shakhawat Hossain</h3>
                                      <p>MBBS (Dhaka), BCS (Health), FCPS-Preli (Medicine), FCPS-Chest (Chest Diseases)</p>
                                      <h4>Specialist in Medicine, Azma and Chest Diseases, Allergy, Diabetics Hormone, Kidney Diseases</h4><br>
                                      <h4>National Institute of Diseases of the Chest and Hospital (NIDCH)  Mohakhali, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Tuesday</h4>
                                      <h4>From 7:30 PM to 9:30 PM</h4>
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