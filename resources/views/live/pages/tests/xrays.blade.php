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
    <title>X-ray Tests | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate Results"
    </title>
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
                    src="{{asset('dist/images/tests/xray-test-at-lucknow-imaging-diagnostic-centre.png')}}"
                    alt="xray-test-at-lucknow-imaging-diagnostic-centre"></div>
            <div class="container">
                <div class="row mb-30">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <h1 class="pagetitle-heading">X-ray Tests </h1>
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
                            <h2 class="heading-subtitle">X-ray Tests Offered at Lucknow Imaging Centre</h2>
                            <h5>Lucknow Imaging Centre is committed to providing a comprehensive range of diagnostic
                                services, including X-ray examinations. Our state-of-the-art facility and experienced
                                radiologists ensure accurate and timely results. <br>Here is a list of X-ray tests
                                offered at our centre:</h5>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="pricing-widget-layout1 mb-30">
                            <h5 class="pricing-title">X-ray List - 1</h5>
                            <ul class="pricing-list list-unstyled mb-0">
                                <li><span class="text-danger">XRAY ABDOMEN VIEW (ERECT / SUPINE)</span></li>
                                <li><span class="text-danger">XRAY CHEST PA VIEW</span></li>
                                <li><span class="text-danger">XRAY CHEST AP VIEW</span></li>
                                <li><span class="text-danger">XRAY CERVICAL SPINE AP & LATERAL VIEW</span></li>
                                <li><span class="text-danger">XRAY DORSAL SPINE AP & LATERAL VIEW</span></li>
                                <li><span class="text-danger">XRAY LUMBOSACRAL SPINE AP & LATERAL VIEW</span></li>
                                <li><span class="text-danger">XRAY PNS (ALL VIEW)</span></li>
                                <li><span class="text-danger">XRAY SKULL</span></li>
                                <li><span class="text-danger">XRAY MASTOID</span></li>
                                <li><span class="text-danger">XRAY ALL EXTREMITIES( ARM, HEAD, THIGH, LEG, FOOT)</span></li>


                            </ul>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="pricing-widget-layout2 mb-30">
                            <h5 class="pricing-title">X-ray List - 2</h5>
                            <ul class="pricing-list list-unstyled mb-0">
                                <li><span class="text-danger">XRAY ALL JOINTS( SHOULDER, HIB, ELBOW, KNEE, WRIST, ANKLE)</span></li>
                                <li><span class="text-danger">BARIUM SWALLOW</span></li>
                                <li><span class="text-danger">BARIUM MEAL</span></li>
                                <li><span class="text-danger">(BMFT) BARIUM MEAL FOLLOW THROUGH</span></li>
                                <li><span class="text-danger">BARIUM ENEMA</span></li>
                                <li><span class="text-danger">FISTULOGRAM / SINOGARM</span></li>
                                <li><span class="text-danger">LOOPOGRAM</span></li>
                                <li><span class="text-danger">IVP</span></li>
                                <li><span class="text-danger">MCU / RGU</span></li>
                                <li><span class="text-danger">HSG</span></li>
                            </ul>
                        </div>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                        <p class="font-weight-bold mb-0">We are committed to delivering exceptional care and reliable
                            diagnostic services at Lucknow Imaging Centre.
                            To schedule an X-ray test or to obtain more information, please <a
                                href="{{route('live.pages.contact-us')}}"
                                class="color-secondary underlined-text-secondary">contact us</a>
                        </p>
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