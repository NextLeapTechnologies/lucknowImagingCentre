<header class="header header-layout1">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact-list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li class="miniPopup-language-area">
                                <button class="miniPopup-language-trigger" type="button">Change language</button>
                                <ul class="miniPopup miniPopup-language list-unstyled">
                                    <li>
                                        <button>
                                            <img src="{{asset('dist/images/flags/en.png')}}" alt="en">
                                            <span>English</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <img src="assets/images/flags/gr.png" alt="en">
                                            <span>Germany</span>
                                        </button>
                                    </li>
                                </ul><!-- /.miniPopup-language -->
                            </li>
                            <li>
                                <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                            </li>
                            <li>
                                <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                            </li>
                            <li>
                                <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                            </li>
                        </ul><!-- /.contact-list -->
                        <div class="d-flex">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                            <form class="header-topbar-search">
                                <input type="text" class="form-control" placeholder="Type Search Words">
                                <button class="header-topbar-search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="mainNavigation">
                <ul class="navbar-nav">
                    <li class="nav-item has-dropdown">
                        <a href="{{route('live.index')}}" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Home</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="index.html" class="nav-item-link">Home Main</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="home-modern.html" class="nav-item-link">Home Modern</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="home-classic.html" class="nav-item-link">Home Classic</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="home-supllies.html" class="nav-item-link">Home Supllies</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">About Us</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="about-us.html" class="nav-item-link">About Us</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="team.html" class="nav-item-link">Leadership Team</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="why-us.html" class="nav-item-link">Why Choose Us</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="testimonials.html" class="nav-item-link">Testimonials</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="faqs.html" class="nav-item-link">Help & FAQs</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="find-lab.html" class="nav-item-link">Find a Lab</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="supplies.html" class="nav-item-link">Supplies</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="careers.html" class="nav-item-link">Careers</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav-item has-dropdown has-mega-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Tests & Services</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="nav-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Tests & Services</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">General Diagnostic Tests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Specialized Genetic Tests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Food Sensitivity Tests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Genova Diagnostics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Hormone Insights Tests</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Naturopathic Tests</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.col-md-2  -->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Healthcare Provider</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-provider-registration.html">Provider
                                                        Registration</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Resources and Supplies</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-services.html">Tests and Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="faqs.html">Help and FAQs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="provider-login.html">Provider Login</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.col-md-2  -->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Patients</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-services.html">Tests and Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-prepare-test.html">Preparing for a Test</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-single-test.html">Check your Results</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-book-visit.html">Book a Lab Visit</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="faqs.html">Patients FAQs</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.col-md-2  -->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Get Care</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-billing.html">Billing and Insurance</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="contact-us.html">Contact and Locations</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="tests-accreditation.html">Accreditation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="testimonials.html">Testimonials</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.col-md-2  -->
                                        <div class="col-sm-12 col-md-4 nav-block nav-block-featured bg-secondary">
                                            <div class="menu-shape"></div>
                                            <div>
                                                <h2 class="nav-title color-white">COVID19 Testing Solutions</h2>
                                                <p class="nav-desc color-white">Human coronaviruses cause infections of the nose, throat
                                                    and
                                                    lungs, they are most spread from an infected person.
                                                </p>
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-item-link" href="#">
                                                            <i class="icon-arrow-right"></i><span>Workplaces</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-item-link" href="#">
                                                            <i class="icon-arrow-right"></i><span>Individuals</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-item-link" href="#">
                                                            <i class="icon-arrow-right"></i><span>Travellers</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="about-us.html" class="btn btn-primary mt-10">
                                                    <span>Explore More</span> <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.col-md-4  -->
                                    </div><!--  /.row  -->
                                </div><!--  /.container  -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Research</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="research-grid.html" class="nav-item-link">Research Grid</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="research-modern.html" class="nav-item-link">Research Modern</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="research-single.html" class="nav-item-link">Single Research</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="blog.html" class="nav-item-link">Blog Grid</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="blog-single-post.html" class="nav-item-link">Single Blog Post</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->
                    <li class="nav-item">
                        <a href="contact-us.html" class="nav-item-link active">Contacts</a>
                    </li><!-- /.nav-item -->

                </ul><!-- /.navbar-nav -->
                <ul class="header-actions d-flex align-items-center position-relative list-unstyled mb-0">
                    <li class="d-none d-xl-flex align-items-center">
                        <a href="tests-book-visit.html" class="btn btn-primary btn-outlined btn-contact">
                            Book a Lab Visit
                        </a>
                    </li>
                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                <div class="contact-phone d-flex align-items-center">
                    <div class="contact-icon"><i class="icon-chemical9"></i></div>
                    <div>
                        <span class="d-block">Call Us Now:</span>
                        <a class="phone-link d-block" href="tel:00201061245741">02 01061245741</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->
