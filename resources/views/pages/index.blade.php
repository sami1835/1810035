@extends('layouts.frontend')

@section('frontend_content')
    <!-- Banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Caring for better life</h4>
                    <h1>Leading the way in medical excellence</h1>
                    <p>Earth greater grass for good. Place for divide evening yielding them that. Creeping beginning over gathered brought.</p>
                    <a href="{{ route('login') }}" class="template-btn mt-3">take appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Area -->
    <section class="feature-area section-padding">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_head">
                        <p>About Our Diagnostic Center</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="{{ asset('frontend')}}/assets/images/feature1.png" alt="">
                        <h3>advance technology</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="{{ asset('frontend')}}/assets/images/feature2.png" alt="">
                        <h3>comfortable place</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="{{ asset('frontend')}}/assets/images/feature3.png" alt="">
                        <h3>quality equipment</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="{{ asset('frontend')}}/assets/images/feature4.png" alt="">
                        <h3>friendly staff</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Area -->
    <section class="welcome-area section-padding3">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Area -->
    <section class="department-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-head text-center">
                        <span>OUR DEPARTMENTS</span>
                        <p>Our Medical Services</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{ asset('frontend')}}/assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>cardiac</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur voluptatem molestias, deleniti voluptatum veniam atque?</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{ asset('frontend')}}/assets/images/department2.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.html"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>online services</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, consequatur debitis error veniam molestiae facilis.</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{ asset('frontend')}}/assets/images/department3.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.html"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Patient Test</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius debitis deserunt harum recusandae, iusto nulla!</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="{{ asset('frontend')}}/assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.html"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>cardiac</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla animi porro, a totam molestiae architecto?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Area -->
    <section class="patient-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Patient are saying</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row p-area-row">
                <div class="col-lg-6">
                    <div class="single-patient mb-4">
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

    <!-- Specialist Area -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our specialish</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
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
                                <h6>MBBS (DMC), MS (Cardiology), Ph.D, FRCS (England) Cardiac, Vascular & Thoracic Surgeon</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
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
                                <h6>MBBS (DU), BCS (Health), DGO (BSMMU), FCPS (Obs. & Gynae) Obstetrician And Gynaecologist</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
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
                                <h6>MBBS, FCPS (Obs. & Gynae) Highly Trained in Infertility form Singapur Specialist in Infertility</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
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
                                <h6>MBBS, FCPS (Surgery), MRCS (UK) Specialist Surgeon in General Laparoscopic Breast Colorectal</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('our_doctor1_page')}}" class="read_more">Read More --></a>
        </div>
    </section>
   

    <!-- Hotline Area -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+880) – 1956 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Our loacation Area-->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="location_head text-center">
                        <span class="text-center">Our Loacation</span>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29073.970044913876!2d88.57136930221334!3d24.372735400000018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbef394afc3e4d%3A0x79078cc2eb0ad2b9!2sMedilab%20Diagnostic%20%26%20Consultation%20Center%2C%20Laxmipur%2C%20Rajshahi!5e0!3m2!1sbn!2sbd!4v1648274162173!5m2!1sbn!2sbd" 
                width="1300" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection 