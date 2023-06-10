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
    <title>Refer A Patient | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate Results"</title>
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

    <!-- Slider- Start -->
    <section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
        <div class="bg-img"><img
                src="{{asset('dist/images/about/about-lucknow-imaging-and-diagnostic-centre-lucknow.png')}}"
                alt="lucknow-imaging-centre-top-diagnostic-centre-background"></div>
        <div class="container">
            <div class="row pb-30">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="pagetitle-heading">Career at Lucknow Imaging Centre</h1>
                    <p class="pagetitle-desc">At Lucknow Imaging Centre, we value and recognize the importance of our
                        staff in delivering exceptional healthcare services. We offer a range of exciting career
                        opportunities for individuals who are passionate about making a difference in the field of
                        medical diagnostics.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider- Ends -->

    <!-- Career Start -->
    <section class="careers pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <h2 class="heading-title">Here are some potential career paths at Lucknow Imaging Centre</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>

                        <!-- job item #1 -->
                        <div class=" job-item">
                            <div class="job-meta d-flex align-items-center">
                                <span class="job-type">Full Time</span>
                                <span class="job-location">Lucknow</span>
                            </div>
                            <h4 class="job-title">Radiologist</h4>
                            <p class="job-desc">As a radiologist, you will play a crucial role in interpreting medical
                                images and providing accurate diagnoses. You will work closely with other healthcare
                                professionals to ensure the effective management of patient care. A strong background in
                                radiology and the ability to analyze complex images are essential for this role.</p>
                            <a href="{{route('live.pages.contact-us')}}" class="btn btn-primary btn-link">
                                <span>Apply Now</span>
                            </a>
                        </div>

                        <!-- job item #2 -->
                        <div class=" job-item">
                            <div class="job-meta d-flex align-items-center">
                                <span class="job-type">Full Time</span>
                                <span class="job-location">Lucknow</span>
                            </div>
                            <h4 class="job-title">Medical Laboratory Technologist</h4>
                            <p class="job-desc">As a medical laboratory technologist, you will be responsible for
                                performing various laboratory tests on patient samples, such as blood or tissue samples.
                                Your expertise in laboratory techniques and attention to detail will contribute to
                                accurate and timely results.</p>
                            <a href="{{route('live.pages.contact-us')}}" class="btn btn-primary btn-link">
                                <span>Apply Now</span>
                            </a>
                        </div>

                        <!-- job item #3 -->
                        <div class=" job-item">
                            <div class="job-meta d-flex align-items-center">
                                <span class="job-type">Full Time</span>
                                <span class="job-location">Lucknow</span>
                            </div>
                            <h4 class="job-title">Medical Transcriptionist</h4>
                            <p class="job-desc">As a medical transcriptionist, you will convert dictated medical reports
                                into written format, ensuring accuracy and attention to detail. Proficiency in medical
                                terminology, strong typing skills, and excellent listening skills are important for this
                                role.</p>
                            <a href="{{route('live.pages.contact-us')}}" class="btn btn-primary btn-link">
                                <span>Apply Now</span>
                            </a>
                        </div>

                        <!-- job item #4 -->
                        <div class=" job-item">
                            <div class="job-meta d-flex align-items-center">
                                <span class="job-type">Full Time</span>
                                <span class="job-location">Lucknow</span>
                            </div>
                            <h4 class="job-title">Administrative and Support Staff</h4>
                            <p class="job-desc">Lucknow Imaging Centre also offers opportunities for administrative and
                                support roles, such as receptionists, medical billing specialists, and administrative
                                assistants. These roles are crucial in ensuring the smooth operation of the centre and
                                providing excellent customer service to our patients.</p>
                            <a href="{{route('live.pages.contact-us')}}" class="btn btn-primary btn-link">
                                <span>Apply Now</span>
                            </a>
                        </div>

                        <!-- </div> -->
                    </div>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center mt-50">
                    <p class="font-weight-bold mb-0">At Lucknow Imaging Centre, we encourage professional development and provide opportunities for continuous learning and growth. We offer competitive compensation packages, a supportive work environment, and opportunities to work with state-of-the-art technology.
                        <a href="javascript:void(0)" class="color-secondary underlined-text-secondary">We look forward to welcoming dedicated and passionate individuals to our team.
                        </a>
                    </p>
                </div><!-- /.col-lg-6 -->
            </div>
        </div><!-- /.container -->
    </section>
    <!-- Career Ends -->

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
