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
    <title>About Us | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate Results"</title>
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

    <!-- /.Slider- Start -->
    @include('live.includes.about.about-us-slider-banner')
    <!-- /.Slider- Ends -->

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
@include('live.includes.twak')
</body>

</html>
