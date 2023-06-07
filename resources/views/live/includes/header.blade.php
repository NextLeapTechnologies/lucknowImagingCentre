
<header class="header header-layout3">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('live.index')}}">
                <img src="{{asset('dist/images/logo/logo-dark.png')}}" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <!-- Navbar Starts -->
            <div class="collapse navbar-collapse justify-content-center" id="mainNavigation">
                <ul class="navbar-nav">
                    <!-- Home -->
                    <li class="nav-item ">
                        <a href="{{route('live.index')}}" class="nav-item-link active">Home</a>
                    </li>
                    <!-- About-us -->
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">About Us</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{route('live.pages.about-us')}}" class="nav-item-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.leadership')}}" class="nav-item-link">Our Leadership</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.why-us')}}" class="nav-item-link">Why Choose Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.career')}}" class="nav-item-link">Careers</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Test and Services Mega Menu -->
                    <li class="nav-item has-dropdown has-mega-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Tests & Services</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="nav-item">
                                <div class="container">

                                    <div class="row">
                                        <!-- Test Row Start-->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Tests</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.tests.mri-test')}}">MRI Test</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.tests.ctscan-test')}}">CT SCAN Test</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.tests.ctscan-test')}}">Ultrasound Test</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Xray & OPG Test</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Laboratory Test</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Services Row Start-->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Services</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">MRI SCAN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">CT SCAN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Ultrasound</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">X-Rays</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">LAB</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">OPD</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">ECHO</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">ECG</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Packages Row Start-->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Health Packages</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.diabetic-package')}}">Diabetic Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.hypertension-package')}}">Hypertension Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.anemia-package')}}">Anemia Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.post-menopausal-package')}}">Post Menopausal Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.liver-panel-package')}}">Liver Panel Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.kidney-panel-package')}}">Kidney Panel Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.thyroid-package')}}">Thyroid Panel Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.para-thyroid-package')}}">Para-Thyroid Panel Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.osteoporotic-bone-profile-package')}}">Osteoporotic Bone Profile Package</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="{{route('live.pages.packages.fatty-liver-package')}}">Fatty Liver Package</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Extra Care Row Start-->
                                        <div class="col-sm-12 col-md-2 nav-block">
                                            <h2 class="nav-title">Get Care</h2>
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Insurance</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Billing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Locations</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Accreditation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-item-link" href="javascript:void(0)">Mobile App</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Special Promotion-->
                                        <div class="col-sm-12 col-md-4 nav-block nav-block-featured bg-secondary">
                                            <div class="menu-shape"></div>
                                            <div>
                                                <h2 class="nav-title color-white">Special Mother Days Packages and Discounts </h2>
                                                <p class="nav-desc color-white">Our Mother's Day Package includes a range of diagnostic tests and screenings tailored to address women's specific health needs.
                                                </p>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-item-link" href="javascript:void(0)">
                                                            <i class="icon-arrow-right"></i><span>Women's Health Check-up</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-item-link" href="#">
                                                            <i class="icon-arrow-right"></i><span>Comprehensive Blood Tests</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a href="javascript:void(0)" class="btn btn-primary mt-10">
                                                    <span>View Package Details</span> <i class="icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- My Health Menu -->
                    <li class="nav-item">
                        <a href="#" class="nav-item-link">My Health</a>
                    </li>
                    <!-- Contact Menu -->
                    <li class="nav-item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-item-link">Contact Us</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{route('live.pages.contact-us')}}" class="nav-item-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.request-lab-visit')}}" class="nav-item-link">Request lab visit</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.request-home-visit')}}" class="nav-item-link">Request home visit</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('live.pages.refer-a-patient')}}" class="nav-item-link">Refer a Patient</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div>
            <!-- Navbar Ends -->
            <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                <ul class="header-actions d-flex align-items-center position-relative list-unstyled mb-0">
                    <!-- Time Menu -->
                    <li>
                        <div>
                            <a class="phone-link d-block" href="javascript:void(0)">Mon - Sat: 9:00 AM - 8:00 PM</a>
                            <a class="phone-link d-block" href="javascript:void(0)">Sunday: 10:00 AM - 2:00 PM</a>
                        </div>
                    </li>
                    <!-- Call Menu -->
                    <li>
                        <div>
                            <span class="d-block">Call Us Now:</span>
                            <a class="phone-link d-block" href="tel:+91-0522-3180995">0522-3180995</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
