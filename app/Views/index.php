<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Haina Company Profile">
    <meta name="author" content="Chico Finando">

    <link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Haina Service Indonesia</title>

    

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/templatemo-lava.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            <img class="logo-img" src="<?php echo base_url(); ?>/assets/images/logo.png"></img>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">{{ __('landing-page.home') }}</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">{{ __('landing-page.about') }}</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">{{ __('landing-page.testimonials') }}</a></li>
                            <li class="scroll-to-section"><a href="#maps" class="menu-item">{{ __('landing-page.findus') }}</a></li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">{{ __('landing-page.contactus') }}</a></li>
                            <li class="submenu">
                                <a href="javascript:;">{{Lang::locale()}}</a>
                                <ul>
                                    <li><a href="setlocale/en">EN</a></li>
                                    <li><a href="setlocale/zh">ZH</a></li>
                                    <li><a href="setlocale/id">ID</a></li>
                                </ul>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>{{ __('landing-page.title') }}</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, eaque. Dolorem, in ducimus totam facere cum modi temporibus hic iusto ab illum corrupti ullam, culpa eligendi mollitia quisquam voluptate obcaecati?</p> 
                        <a href="#about" class="main-button-slider">KNOW US BETTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="<?php echo base_url(); ?>/assets/images/features-icon-1.png" alt="">
                            <h4>Trend Analysis</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href="#testimonials" class="main-button">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="<?php echo base_url(); ?>/assets/images/features-icon-2.png" alt="">
                            <h4>Site Optimization</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href="#testimonials" class="main-button">
                                Discover More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="<?php echo base_url(); ?>/assets/images/features-icon-3.png" alt="">
                            <h4>Email Design</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href="#testimonials" class="main-button">
                                More Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo base_url(); ?>/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?php echo base_url(); ?>/assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Vestibulum pulvinar rhoncus</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> us for
                            additional licensing of our template or to get a PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?php echo base_url(); ?>/assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Sed blandit quam in velit</h4>
                                <p>You can <a rel="nofollow"
                                        href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                    magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?php echo base_url(); ?>/assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Aenean faucibus venenatis</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                    maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna."</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Maps Starts ***** -->
    <section class="section" id="maps">
        <div class="container">
            <div class="maps-content">
                <div class="row">
                    
                    <div class="right-content col-lg-6 col-md-12 col-sm-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h2>Find <em>Us</em></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius aut illo saepe quasi minima reprehenderit in autem nam ipsa iste amet, eum veritatis voluptate accusamus explicabo, id commodi molestias quas.</p>
                        
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12" 
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Maps Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                            for more detail.</p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 CV. Haina Service Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url(); ?>/assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

    <!-- Maps -->
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7mdcAuKayR6nIJIxgLL9ADAiNSig9ugI&callback=initMap">
    </script>
    <script>
        function initMap() {
        const haina = { lat: -6.1279338, lng: 106.8058385 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 13,
          center: haina,
        });
        const marker = new google.maps.Marker({
          position: haina,
          map: map,
        });
      }
    </script>
    

    

</body>
</html>