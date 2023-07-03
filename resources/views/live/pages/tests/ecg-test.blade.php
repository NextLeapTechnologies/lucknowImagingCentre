<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"
        content="Lucknow Imaging Centre is a premier diagnostic imaging facility offering cutting-edge technology and highly skilled professionals for accurate and reliable diagnoses.">
    <meta name="keywords"
        content="Lucknow Imaging Centre, diagnostic imaging, medical imaging, radiology services, imaging facility, diagnostic center, Lucknow, advanced technology, skilled professionals, accurate diagnoses, state-of-the-art facilities, accurate results, appointment, ultrasound, xray, mri, ct scan">
    <meta name="robots" content="index, follow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECG Test | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for
        Accurate Results"</title>
    @include('live.includes.top-scripts')

</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->

        <!-- /.Header Start-->
        @include('live.includes.header')
        <!-- /.Header Ends-->

        <!-- MRI Banner Start-->
        <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
            <div class="bg-img"><img
                    src="{{asset('dist/images/tests/intervention-radiology-testt-at-lucknow-imaging-diagnostic-centre.png')}}"
                    alt="intervention-radiology-testt-at-lucknow-imaging-diagnostic-centre"></div>
            <div class="container">
                <div class="row mb-30">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <h1 class="pagetitle-heading">ECG Test </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- MRI Banner Ends-->

        <section class="pricing pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="heading  mb-50">
                            <h2 class="heading-subtitle">Echo Scan Offered at Lucknow Imaging
                                Centre</h2>
                            <h5>We are pleased to offer Electrocardiogram (ECG) services to help assess the electrical activity of your heart. Our experienced team of technicians and cardiologists utilize advanced ECG technology to provide accurate and reliable results. </h5>
                            <h5>Our dedicated team ensures that the ECG test is performed comfortably and efficiently. The results of the test will be analyzed by our expert cardiologists, and a comprehensive report will be provided to you and your referring physician.</h5>
                            <h5>At Lucknow Imaging Centre, we are committed to providing accurate and timely ECG services to aid in the diagnosis and management of heart conditions. For further information or to schedule an ECG test, please  <a
                                href="{{route('live.pages.contact-us')}}"
                                class="color-secondary underlined-text-secondary">contact our center.</a></h5>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing -->


        <!-- Footer Start -->
        @include('live.includes.footer')
        <!-- Footer Ends -->
        <!-- Footer Start -->
        @include('live.includes.scroll-to-top')
        <!-- Footer Ends -->
    </div>

    @include('live.includes.bottom-scripts')
    @include('live.includes.twak')
</body>

</html>