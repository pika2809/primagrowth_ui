<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/14.jpg)" data-stellar-background-ratio=".2">
                <div class="overlay-bg t50">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Contact Us</h1>
								<p>Get in touch with us</p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" data-bgcolor="#f9f9f9">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 mb-md-30">
                            <form name="contactForm" id='contact_form' class="de_form" method="post" action='email.php'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Contact Us' class="btn btn-custom color-2">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>


                                </div>
                            </form>

                        </div>

                        <div class="col-md-4">
                            <h6 class="id-color">Call Us</h6>
                            (+91) 7900132928
                            <div class="spacer-single"></div>
                            <h6 class="id-color">Address</h6>
                            -
                            <div class="spacer-single"></div>
                            <h6 class="id-color">Email Us</h6>
                            contactus@prismagrowth.com
                        </div>

                    </div>

                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

<?php include('includes/footer.php'); ?>