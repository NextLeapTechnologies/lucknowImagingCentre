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
    <title>Request Home Visit | Lucknow Imaging Centre - "Advanced Diagnostics and Imaging Services for Accurate
        Results"</title>
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
                src="{{asset('dist/images/tests/ctscan-test-at-lucknow-imaging-diagnostic-centre.png')}}"
                alt="ctscan-test-at-lucknow-imaging-diagnostic-centre"></div>
        <div class="container">
            <div class="row mb-30">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                    <h1 class="pagetitle-heading">Request A Home Visit</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- MRI Banner Ends-->

    <!-- Main Test -->
    <section class=" pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar has-marign-right sticky-top mb-30">
                        <div class="widget widget-banner bg-overlay bg-overlay-secondary">
                            <div class="widget-content">
                                <h4 class="widget-title">Skip the Queue , Choose Your Preferred Slot, Plan Ahead</h4>
                                <p class="widget-desc">Visit our website or download our mobile app to discover the ease
                                    of scheduling your appointments online. Save time, avoid waiting, and focus on what
                                    truly matters – your health and well-being.
                                </p>
                            </div>
                        </div>

                        <div class="widget widget-download">
                            <h5 class="widget-title">Get In Touch With Us</h5>
                            <a href="tel:+91522-3180995" class="btn btn-primary btn-block">
                                <i class="icon-phone mr-20 btn-icon bg-success"></i> <span> 0522-3180995 </span>
                            </a>
                            <a href="tel:+917379737918" class="btn btn-primary btn-block">
                                <i class="icon-phone mr-20 btn-icon bg-success"></i> <span> 7379737918 </span>
                            </a>
                            <a href="tel:+918009039993" class="btn btn-primary btn-block">
                                <i class="icon-phone mr-20 btn-icon bg-success"></i> <span> 8009039993 </span>
                            </a>
                        </div>

                    </aside>

                </div>
                <!-- Form -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="contact-panel">
                        <form class="contact-panel-form" id="homevisitForm" method="POST" action="/submit-home-visit">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel-title">Request a Home Visit</h4>
                                    <p class="contact-panel-desc mb-30">We appreciate your interest in our home visit
                                        services. To ensure a seamless and efficient experience, we kindly request you
                                        to fill out the online form prior to your scheduled home visit. By completing
                                        the form in advance, you can provide us with the necessary information to better
                                        understand your needs and tailor our services accordingly. This will help us
                                        deliver personalized care right to your doorstep. If you have any questions or
                                        need assistance with the form, please don't hesitate to reach out to our
                                        dedicated team. We value your time and strive to make your home visit as
                                        convenient and comfortable as possible. Thank you for your cooperation, and we
                                        look forward to serving you.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="service">Select Services</label>
                                        <select id="service" class="form-control" name="service" required>
                                            <option value="1">Services</option>
                                            <option value="2">Test</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select id="location" class="form-control" name="location" required>
                                            <option value="1">Lucknow</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name (required)</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email (required)</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="phone">Phone (required)</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group form-group-date">
                                        <label for="date">Date (required)</label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group form-group-date">
                                        <label for="time">Time (required)</label>
                                        <input type="time" class="form-control" id="time" name="time" required>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <div class="form-group mb-20">
                                        <label class="mb-20">Special Hours and Access</label>
                                        <div class="d-flex flex-wrap checkbox-controls">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6" name="special_hours[]" value="open_before_9am">
                                                <label class="custom-control-label" for="customCheck6"> Open before 9:00
                                                    am</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7" name="special_hours[]" value="wheelchair_accessible">
                                                <label class="custom-control-label" for="customCheck7">Wheelchair
                                                    Accessible</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-info">
                                        We understand that your time is valuable. To make your visit as efficient as
                                        possible, we offer multiple options for your convenience. You have the
                                        flexibility to choose between walking in, booking an appointment, or utilizing
                                        our online check-in service. While we do welcome walk-ins, we highly recommend
                                        booking an appointment in advance to help minimize any potential wait time. By
                                        scheduling ahead, we can ensure that our team is fully prepared to provide you
                                        with prompt and personalized care. Thank you for considering these options, and
                                        we look forward to serving you.
                                    </div>
                                    <div class="border-top mb-50 mt-50"></div>
                                    <p class="mb-30">Kindly provide your personal informations below:</p>
                                    <div class="form-group">
                                        <label for="address">Street Address</label>
                                        <input type="text" class="form-control mb-10"
                                               placeholder="4/12,Vijayant Khand,Near Kathauta Chauraha,"
                                               id="address1" name="address1">
                                        <input type="text" class="form-control" placeholder="Gomti Nagar,"
                                        id="address2" name="address2">
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" placeholder="Lucknow" id="city" name="city">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" placeholder="226010" id="zip" name="zip">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="details">Additional Details</label>
                                        <textarea class="form-control" placeholder="Details" id="details" name="details" rows="6"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                                        <span>Confirm Home Visit</span> <i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
