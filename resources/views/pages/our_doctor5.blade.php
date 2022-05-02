@extends('layouts.frontend')

@section('frontend_content')
 <!-- Banner Area -->
 <section class="banner-area other-pages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctor's</h1>
                    <a href="{{ url('/') }}">Home</a> <span>|</span> <a href="{{ route('our_doctor5_page')}}">Our Doctor's</a>
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
                            <img src="{{ asset('frontend')}}/assets/images/5mm.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Rokibul Islam Rakib</h3>
                                <h6>MBBS (DMC), MS (Neurosurgery)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalrokibul">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalrokibul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Rokibul Islam Rakib</h3>
                                      <p>MBBS (DMC), MS (Neurosurgery) Highly Trained in Neurosurgery (India, Turosko, Japan) </p><br>
                                      <h4>Assistant Professor</h4>
                                      <h4>Department of Neurosurgery</h4>
                                      <h4>Bangabandhu Sheikh Mujib Medical University, Dhaka</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday, Sunday & Monday</h4>
                                      <h4>From 6:30 PM to 8:30 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/6mm.png" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Saqib Salah Aufi</h3>
                                <h6>MBBS, CCD (Berdem) Advanced Training in Diabetes (Berdem) Member of American College of Physicians Diabetologist </h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsaqib">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsaqib" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Saqib Salah Aufi</h3>
                                      <p>MBBS, CCD (Berdem) Advanced Training in Diabetes (Berdem) </p><br>
                                      <h4>Member of American College of Physicians Diabetologist</h4>
                                      <h4>Rajshahi Diabetic Hospital</h4><br><hr>
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
                            <img src="{{ asset('frontend')}}/assets/images/2mm.png" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Md. Anisur Rahman</h3>
                                <h6>MBBS, MD, FIPM (India) Folo Interventional Pain Management (Chaina) Folo Neuropathic Pain Management (Malaysia)</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#eexampleModalanisur">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="eexampleModalanisur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Md. Anisur Rahman</h3>
                                      <p>MBBS, MD, FIPM (India) Folo Interventional Pain Management (Chaina) Folo Neuropathic Pain Management (Malaysia) Highly Trained in Florscopic & Altrasonograpic Guided Pain Procedure (America) Consultant, Pain Medicine </p><br>
                                      <h4>Dhaka Pain & Spain Center</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Friday, Saturday & Sunday</h4>
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
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/88.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Shuli Begum </h3>
                                <h6>MBBS, FCPS, MS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Infertility Trained in Laparoscopic & Hysteroscopy, Professor and Department Head</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalshuli">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalshuli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Shuli Begum</h3>
                                      <p>MBBS, FCPS, MS (Obs. & Gynae) Specialist in Obstetrics & Gynaecology, Infertility Trained in Laparoscopic & Hysteroscopy</p><br>
                                      <h4>Professor and Department Head</h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Enam Medical College Hospital</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Monday, Tuesday & Wednesday</h4>
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

            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="{{ asset('frontend')}}/assets/images/101.jpg" alt="" class="img-fluid" height="20px">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Indoo Ammbulkar</h3>
                                <h6>MBBS, FCPS, MD (Medical Oncology), Senior Consultant</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalindoo">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalindoo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Indoo Ammbulkar</h3>
                                      <p>MBBS, FCPS, MD (Medical Oncology)</p><br>
                                      <h4>Senior Consultant</h4>
                                      <h4>Retired From Bangabandhu Sheikh Mujib Medical University, Dhaka (PG Hospital)</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Tuesday to Friday</h4>
                                      <h4>From 6:00 PM to 9:30 PM</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/111.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Sharmin Jahan</h3>
                                <h6>MBBS, FCPS (General Surgery) Consultant General and Breast Surgery Specialist & Experienced in Breast, Colorectal and All General Surgery</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsharmin">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsharmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Sharmin Jahan</h3>
                                      <p>MBBS, FCPS (General Surgery) Consultant General and Breast Surgery Specialist & Experienced in Breast, Colorectal and All General Surgery</p><br>
                                      <h4>Sir Salimulla Medical College, Dhaka </h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday, Sunday & Monday</h4>
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
                          <img src="{{ asset('frontend')}}/assets/images/m17.jpg" alt="" class="img-fluid">
                      </div>
                      <div class="content-area">
                          <div class="doctor-name text-center">
                              <h3>Dr. Md. Kamrul Hasan </h3>
                              <h6>MBBS (DU), BCS (Health), PGT (Medicine), Experienced in Medicine</h6>
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
                          <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalkamrul">
                              View More
                            </button>
                            
                            <!-- Modal  -->
                            <div class="modal fade" id="exampleModalkamrul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h3>Dr. Md. Kamrul Hasan </h3>
                                    <p>MBBS (DU), BCS (Health), PGT (Medicine) Experienced in Medicine</p><br><br><hr>
                                    <h3>Seeing Patient Time:</h3>
                                    <h4>Every Saturday to Friday</h4>
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
                            <img src="{{ asset('frontend')}}/assets/images/99.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr. Asrafun Nahar Suity</h3>
                                <h6>MBBS (RMC), FCPS (Obs. & Gynae) Experienced in Obstetrician And Gynaecologist</h6>
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
                            <button type="button" class="btn btn-primary m-button" data-toggle="modal" data-target="#exampleModalsuity">
                                View More
                              </button>
                              
                              <!-- Modal  -->
                              <div class="modal fade" id="exampleModalsuity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">About Doctor's</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h3>Dr. Asrafun Nahar Suity </h3>
                                      <p>MBBS (RMC), FCPS (Obs. & Gynae) Experienced in Obstetrician And Gynaecologist & Laparoscopic Surgeon </p><br>
                                      <h4>Assistant Professor</h4>
                                      <h4>Department of Obstetrics & Gynaecology</h4>
                                      <h4>Rajshahi Medical College, Rajshahi</h4><br><hr>
                                      <h3>Seeing Patient Time:</h3>
                                      <h4>Every Saturday to Thursday</h4>
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
