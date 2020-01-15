@extends('layout')



@section('content')

    
          <!-- Breacrumb Area -->
          <div class="breadcrumb-area-about" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>About Us</h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration passages of Lorem Ipsum available, but the majority</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- About Area -->
            <section id="about-area" class="about-area section-padding-lg bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 order-2 order-lg-1">
                            <div class="about-content">
                                <h2>No road is long with good company</h2>
                                <p>There are many variation of passages of Lorem Ipsum available, but the majority have suffered
                                    alteration passages of Lorem Ipsum available, but the majority</p>
                                <a href="about-us.html" class="cr-btn">
                                    <span>Know More</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 order-1 order-lg-2">
                            <div class="about-image text-center wow fadeInRight" data-tilt="">
                                <img src="images/about/about-thumb-1.png" alt="about thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About Area -->

       

            <!-- Skills Area -->
            <section id="skills-area" class="skills-area section-padding-lg bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="skills-area-content p-0">
                                <h2>Learn About Us</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have of
                                    Lorem Ipsum available, but the majority</p>

                                <div class="cr-progress-bar">
                                    <h6>Photoshop</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 85%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>85%</span>
                                    </div>
                                </div>

                                <div class="cr-progress-bar">
                                    <h6>Web Design</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 68%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>68%</span>
                                    </div>
                                </div>

                                <div class="cr-progress-bar">
                                    <h6>Marketing</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 76%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>76%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-box m-0 ml-xl-5" data-tilt>
                                <div class="video-box-thumb">
                                    <img src="images/video-thumbs/video-thumb-1.jpg" alt="video-thumb">
                                </div>
                                <a href="https://www.youtube.com/watch?v=dk9uNWPP7EA" class="play-button">
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//Skills Area  -->

            <!-- Counter Area -->
            <div class="counter-area bg-theme">
                <div class="counter-area-inner bg-theme">
                    <div class="container">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-3 col-md-12">
                                <div class="counter-content">
                                    <h1>The last 9 years</h1>
                                    <h4>What we have done</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="counter text-center">
                                    <h1 class="counter-active">131</h1>
                                    <h6>AWARD WIN</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="counter text-center">
                                    <h1 class="counter-active">612</h1>
                                    <h6>Projects Done</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="counter text-center">
                                    <h1 class="counter-active">465</h1>
                                    <h6>Satisfied Client</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Counter Area -->

        </main>
        <!--// Page Content -->

@endsection