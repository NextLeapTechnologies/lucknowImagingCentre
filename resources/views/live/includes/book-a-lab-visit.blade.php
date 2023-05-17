<section class="contact-layout2 bg-overlay bg-overlay-primary-gradient">
    <div class="bg-img"><img src="{{asset('dist/images/banners/6.jpg')}}" alt="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <div class="heading heading-light mb-30">
                        <h2 class="heading-subtitle">Having Lab Work Done Has Never Been Easier!</h2>
                        <h3 class="heading-title mb-30">Preparing for Your Test Help Ensure All Goes Smoothly.</h3>
                        <p class="heading-desc">To reduce your wait time, complete the personal information on the
                            form in
                            advance. Although most routine tests are covered under your provincial health insurance
                            plan, some
                            tests may not be covered.
                        </p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <a href="about-us.html" class="btn btn-white-style2 mr-30">
                            <span>Values and Culture</span> <i class="icon-arrow-right"></i>
                        </a>
                        <a href="find-lab.html" class="btn btn-light btn-outlined">Prepare for a Test</a>
                    </div>
                </div>
                <div class="testimonials-layout2 testimonials-light">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": false, "arrows": true, "dots": false}'>
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item">
                            <h3 class="testimonial-title">My testing honestly saved my life. I was suffering from
                                such horrible
                                migraines I had no idea what to do. I had tried everything. I'd had allergy testing
                                done and
                                everything was negative. 48 hrs after cutting out foods, I felt human again.
                            </h3>
                            <div class="testimonial-meta d-flex align-items-center">
                                <div class="testimonial-thmb">
                                    <img src="{{asset('dist/images/testimonials/thumbs/3.jpg')}}" alt="thumb">
                                </div>
                                <div>
                                    <h4 class="testimonial-meta-title">Anna Mudson</h4>
                                    <p class="testimonial-meta-desc">Optime Labs</p>
                                </div>
                            </div>
                        </div><!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class="testimonial-item">
                            <h3 class="testimonial-title">They Have Cultivated A Loyal Following Of Functional And
                                Integrative
                                Medicine Professionals, Unified By A Desire To Prevent Disease And Attain Health.
                                They Alued
                                Partners In Providing Only High Quality Testing To Help Us Achieve Faster Results.
                            </h3>
                            <div class="testimonial-meta d-flex align-items-center">
                                <div class="testimonial-thmb">
                                    <img src="{{asset('dist/images/testimonials/thumbs/1.jpg')}}" alt="thumb">
                                </div>
                                <div>
                                    <h4 class="testimonial-meta-title">Anna Mudson</h4>
                                    <p class="testimonial-meta-desc">Optime Labs</p>
                                </div>
                            </div>
                        </div><!-- /. testimonial-item -->
                    </div><!-- /.slick-carousel -->
                </div>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-panel">
                    <form class="contact-panel-form" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel-title">Book a Lab Visit</h4>
                                <p class="contact-panel-desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our doctors will receive or return any
                                    urgent calls.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="service">Select Services</label>
                                    <select id="service" class="form-control">
                                        <option value="1">Genetic Tests</option>
                                        <option value="2">Genetic Tests</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <select id="location" class="form-control">
                                        <option value="1">California</option>
                                        <option value="2">NYC</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name (required)</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email">
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="phone">Phone (required)</label>
                                    <input type="text" class="form-control" placeholder="Phone" id="phone">
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <label for="date">Date (required)</label>
                                    <input type="date" class="form-control" id="date" required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <label for="time">Time (required)</label>
                                    <input type="time" class="form-control" id="time" required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="mb-20">Special Hours and Access</label>
                                    <div class="d-flex flex-wrap checkbox-controls">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6"> Open before 8:00
                                                am</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Wheelchair
                                                Accessible</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8">Open
                                                Saturdays</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9"> Serving
                                                Customers with Autism</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">24 Hour Holter
                                                Monitoring</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block btn-xhight">
                                    <span>Book Your Visit</span> <i class="icon-arrow-right"></i>
                                </button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 2 -->
