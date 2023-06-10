<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description"
          content="Lucknow Imaging Centre is a premier diagnostic imaging facility offering cutting-edge technology and highly skilled professionals for accurate and reliable diagnoses.">
    <meta name="keywords"
          content="Lucknow Imaging Centre, diagnostic imaging, medical imaging, radiology services, imaging facility, diagnostic center, Lucknow, advanced technology, skilled professionals, accurate diagnoses, state-of-the-art facilities, accurate results, appointment, ultrasound, xray, mri, ct scan">
    <meta name="robots" content="index, follow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Leadership | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate Results"</title>
    @include('live.includes.top-scripts')


</head>
<body>
<div class="wrapper">
    <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- Header Start-->
    @include('live.includes.header')
    <!-- Header Ends-->

    <!-- Slider- Start -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
        <div class="bg-img"><img
                src="{{asset('dist/images/about/leadership-at-lucknow-imaging-and-diagnostic-centre-lucknow.png')}}"
                alt="leadership-at-lucknow-imaging-and-diagnostic-centre-lucknow"></div>
        <div class="container">
            <div class="row pb-30">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="pagetitle-heading">Our Leadership</h1>
                    <p class="pagetitle-desc">The Leadership Team at Lucknow Imaging Centre comprises experienced
                        professionals who are dedicated to the vision and mission of the organization. They bring a wealth
                        of knowledge and expertise to ensure the smooth operation and success of the center.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider- Ends -->
    <!-- Teams Start -->
    <section class="team-layout1 pb-30">
        <div class="container">
            <div class="row">
                <!-- Member #1 -->
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('dist/images/team/1.jpg')}}" alt="member img">
                        </div>
                        <div class="member-info d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="member-name">Name Demo</h5>
                                <p class="member-desc">Chief Executive</p>
                            </div>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Member #2 -->
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('dist/images/team/2.jpg')}}" alt="member img">
                        </div>
                        <div class="member-info d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="member-name">Name Demo</h5>
                                <p class="member-desc">Managing Director</p>
                            </div>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Member #3 -->
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{asset('dist/images/team/3.jpg')}}" alt="member img">
                        </div>
                        <div class="member-info d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="member-name">Name Demo</h5>
                                <p class="member-desc">Vice President</p>
                            </div>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Teams End -->

<!-- Blog Start -->
@include('live.includes.insert-blog')
<!-- Blog Ends -->

    <!-- Footer Start -->
    @include('live.includes.footer')
    <!-- Footer Ends -->
    <!-- Footer Start -->
    @include('live.includes.scroll-to-top')
    <!-- Footer Ends -->
</div>

@include('live.includes.bottom-scripts')
</body>

</html>
