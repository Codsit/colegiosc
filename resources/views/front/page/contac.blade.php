@extends('template.app')

@section('main')


    <!-- Inner Banner -->
    <div class="inner-banner dark-bg">
        <div class="container">
            <div class="inner-page-heading">
                <div class="main-heading style-2 h-white p-white position-center-x">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner -->



    <!-- Main Content -->
    <main class="main-content">

        <!-- Adress Nd Map -->
        <div class="tc-padding-bottom">
            <div class="container">
                <div class="contact-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-5">
                            <div class="contact-address z-depth-1">
                                <h3>Contacto Info</h3>
                                <p>Jr.Ricardo Palma 229, La Molina - Perú</p>
                                <ul class="address-list">
                                    <li><i class="fa fa-phone"></i>(511) 348-6044</li>
                                    <li><i class="fa fa-envelope"></i> santacecilialm@gmail.com</li>
                                </ul>
                                <div class="social-icons-2">
                                    <ul>
                                        <li><a class="fa fa-twitter-square" href="#"></a></li>
                                        <li><a class="fa fa-facebook-square" href="#"></a></li>
                                        <li><a class="fa fa-linkedin-square" href="#"></a></li>
                                        <li><a class="fa fa-pinterest-square" href="#"></a></li>
                                        <li><a class="fa fa-google-plus-square" href="#"></a></li>
                                        <li><a class="fa fa-github-square" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-7">
                            <div id="" class="contact-map-holder z-depth-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1950.852637299895!2d-76.944791!3d-12.063788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63a659e71d88a25e!2sColegio+Santa+Cecilia!5e0!3m2!1ses!2sus!4v1483087539422" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Adress Nd Map -->

        <!-- Contact Form -->
        <section class="tc-padding white-bg">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading style-2 add-p">
                    <h2>Leave a Message</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>
                </div>
                <!-- Main Heading -->

                <!-- Form -->
                <form id="contact-form" class="row">
                    <div class="col-sm-4 col-xs-4 r-full-width">
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label class="control-label">Name</label><i class="bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4 r-full-width">
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label class="control-label">Email *</label><i class="bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4 r-full-width">
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label class="control-label">Phone</label><i class="bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group m-0">
                            <textarea required="required"></textarea>
                            <label class="control-label">Message *</label><i class="bar"></i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <button class="btn blue z-depth-1">Send Message<i class="fa fa-send"></i></button>
                    </div>
                </form>
                <!-- Form -->

            </div>
        </section>
        <!-- Contact Form -->

    </main>
    <!-- Main Content -->

@stop