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
    <title>Contact Us | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate Results"</title>
    @include('live.includes.top-scripts')

</head>
<body>
<div class="wrapper">
    <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    @include('live.includes.header')

    <!-- =========================
            Google Map
    =========================  -->
    <section class="map py-0">
        <iframe height="620"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1779.5897216511678!2d81.02302457064172!3d26.86603936879961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1683193530511!5m2!1sen!2sin"></iframe>
        <div class="map-container">
            <div class="contact-panel p-0">
                <div class="panel-header">
                    <h3 class="panel-title color-white mb-0">Office Address</h3>
                </div>
                <div class="accordion" id="accordion">
                    <div class="accordion-item opened">
                        <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                            <a class="accordion-title" href="#">Gomti Nagar Office</a>
                        </div><!-- /.accordion-item-header -->
                        <div id="collapse1" class="collapse show" data-parent="#accordion">
                            <div class="accordion-body">
                                <ul class="contact-list list-unstyled mb-0">
                                    <li><b>Lucknow Imaging Centre</b></li>
                                    <li><b>4/12, Vijayant Khand,<br>
                                            Near Kathauta Chauraha,<br>
                                            Gomti Nagar, Lucknow,<br>
                                            U.P, 226010</b></li>
                                    <li><b>7379737918,8009039993</b></li>
                                    <li><b>0522-3180995</b></li>
                                    <li><b>contact@lucknowimagingcentre.com</b></li>

                                    <li><b>Mon-Sat: 9:00 AM – 8:00 PM<br>
                                            Sun: 10:00 AM – 2:00 PM</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" data-toggle="collapse" data-target="#collapse2">
                            <a class="accordion-title" href="#">Indra Nagar Office</a>
                        </div>
                        <div id="collapse2" class="collapse" data-parent="#accordion">
                            <div class="accordion-body">
                                <ul class="contact-list list-unstyled mb-0">
                                    <li><b>OPENING SOON</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.map-container -->
    </section><!-- /.GoogleMap -->


    <!-- Why Choose us Start -->
    @include('live.includes.why-choose-us')
    <!-- Why Choose us Ends -->

    <!-- Faqs Start -->
    @include('live.includes.faqs')
    <!-- Faqs Ends -->


    <section class="clients pt-50 pb-50 border-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="{{asset('dist/images/clients/1.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/2.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/3.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/4.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/5.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/6.png')}}" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="{{asset('dist/images/clients/4.png')}}" alt="client">
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients -->


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
