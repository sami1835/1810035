@extends('layouts.frontend')

@section('frontend_content')
     <!-- Banner Area -->
     <section class="banner-area other-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctor's</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('our_doctor2_page')}}">Our Doctor's</a>
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
                            <img src="{{ asset('frontend')}}/assets/images/55.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Nurjahan Begum</h3>
                                <h6>MBBS, FCPS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Laparoscopic Surgeon & Colposcopy</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalnurjahan">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalnurjahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Nurjahan Begum</h3>
                                      <p>MBBS, FCPS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Laparoscopic Surgeon & Colposcopy </p><br>
                                      <h4>Associate Professor (Sex Hormone and Infertility)</h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday & Monday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/77.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sharmin Siddika Rumki</h3>
                                <h6>MBBS, FCPS Specialist in Obstetrics & Gynaecology </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalrumki">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalrumki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Sharmin Siddika Rumki</h3>
                                      <p>MBBS, FCPS Specialist in Obstetrics & Gynaecology, Laparoscopic Surgeon </p><br>
                                      <h4>Assistant Professor </h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Anawer Khan Modern Medical College & Hospital</h4><br><hr>
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
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/m18.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Sahadat Hossain</h3>
                                <h6>MBBS, DDV, FCPS, FRCP (UK), MACP (USA)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#eexampleModalsahadat">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="eexampleModalsahadat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Sahadat Hossain</h3>
                                      <p>MBBS, DDV, FCPS, FRCP (UK), MACP (USA) Specialist in Skin &Venereal (Sex), Allergy & Leprosy Leser, Dermato & Cosmetic Surgeon </p><br>
                                      <h4>Professor and Department Head</h4>
                                      <h4>Department of Skin & VD</h4>
                                      <h4>Shaheed Suhrawardy Medical College & Hospital, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday, Saturday, Sunday & Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/66.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Israt Buiyan </h3>
                                <h6>MBBS (DMC), DDV, FCPS (Skin & VD), FRCP (Gasgo), MACP (USA) Specialist in Skin, Venereal, Leprosy & Allergy Leser & Dermato Surgeon </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalisrat">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalisrat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Israt Buiyan </h3>
                                      <p>MBBS (DMC), DDV, FCPS (Skin & VD), FRCP (Gasgo), MACP (USA) Specialist in Skin, Venereal, Leprosy & Allergy Leser & Dermato Surgeon </p><br>
                                      <h4>Associate Professor </h4>
                                      <h4>Department of Skin & VD</h4>
                                      <h4>Shaheed Suhrawardy Medical College & Hospital, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday to Friday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m20.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Golam Kibriya Khan</h3>
                                <h6>MBBS (DMC), DDV (DU), DD (Thiland & Japan)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalgolam">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalgolam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Golam Kibriya Khan</h3>
                                      <p>MBBS (DMC), DDV (DU), DD (Thiland & Japan) Specialist in Skin &Venereal (Sex), Allergy & Leprosy </p><br>
                                      <h4>Assistant Professor (Ex)</h4>
                                      <h4>Department of Skin & VD</h4>
                                      <h4>Sir Salimullah Medical College & Hospital (Midford Hospital)</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday, Wednesday & Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/m3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Mostafizur Rahman</h3>
                                <h6>MBBS, BCS (Health), DMEU</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalmosta">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalmosta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Mostafizur Rahman</h3>
                                      <p>MBBS, BCS (Health), DMEU, DDV (Derma & DD) Bangabandhu Sheikh Mujib Medical University Specialist in Skin, Allergy, Venereal (Sex) & Cosmetic  </p><br>
                                      <h4>Mugda Medical College, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Friday</h4>
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
                  <div class="single-doctor mb-4 mb-sm-0">
                      <div class="doctor-img">
                          <img src="{{ asset('frontend')}}/assets/images/doctor33.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="content-area">
                          <div class="doctor-name text-center">
                              <h3>Dr. Umme Salma Chowdhury (Shanta)</h3>
                              <h6>MBBS, FCPS (Obs. & Gynae) Highly Trained in Infertility form Singapur</h6>
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
                          <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalumme">
                              View More
                            </button>
                            
                            <!-- Modal  -->
                            <div class="modal fade" id="exampleModalumme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h3>Dr. Umme Salma Chowdhury (Shanta)</h3>
                                    <p>MBBS, FCPS (Obs. & Gynae) Highly Trained in Infertility form Singapur Specialist in Infertility & Laparoscopy</p><br>
                                    <h4>Assistant Professor</h4>
                                    <h4>Department of Obstetrics & Gynaecology</h4>
                                    <h4>Shaheed Suhrawardy Medical College & Hospital, Dhaka</h4><br><hr>
                                    <h3>Seeing Patient Time:</h3>
                                    <h4>Saturday to Thursday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/000.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sanjida Rahman</h3>
                                <h6>MBBS, CCD (Bardem), FCPS (Obs. & Gynae) Specialist and Surgeon in Obstetrics & Gynaecology </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsanjida">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsanjida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Sanjida Rahman </h3>
                                      <p>MBBS, CCD (Bardem), FCPS (Obs. & Gynae) Specialist and Surgeon in Obstetrics & Gynaecology </p><br>
                                      <h4>Assistant Professor</h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Universal Medical College & Hospital</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday, Tuesday, Thursday & Friday</h4>
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