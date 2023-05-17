<section class="contact-layout1 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-panel">
                    <form class="contact-panel-form" method="post" action="assets/php/contact.php" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h4 class="contact-panel-title">Do you have a Story?</h4>
                                <p class="contact-panel-desc mb-30">We strive to make your experience as pleasant as possible, and
                                    the only way we know whether or not this is happening is by listening to you.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="contact-name">Name (required)</label>
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                                           required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="contact-email"> email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                           name="contact-email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="contact-age">Age</label>
                                    <input type="text" class="form-control" placeholder="Genetic Tests" id="contact-age"
                                           name="contact-age" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="contact-gender">Gender</label>
                                    <select id="contact-gender" name="contact-gender" class="form-control">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-message">Your Story</label>
                                    <textarea class="form-control" placeholder="Your Story" id="contact-message"
                                              name="contact-message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="mb-10">Your Test Experience</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="custom-control custom-checkbox mr-30">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">General Diagnostic Tests</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-30">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Specialized Genetic Tests</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-30">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Food Sensitivity Tests</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-xl mt-10">
                                    <span>Submit Your Story</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->
