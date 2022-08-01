<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">

<head>
    <!-- meta charec set -->
    <meta charset="utf-8" />
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Page Title -->
    <title>SAFİR</title>
    <!-- Meta Description -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Font -->

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet"
        type="text/css" />

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css" />
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.fancybox.css" />
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />
    <!-- media-queries -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/media-queries.css" />

    <!-- Modernizer Script for old Browsers -->
    <script src="{{ asset('assets') }}/js/modernizr-2.6.2.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BRVWPQ0PJX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BRVWPQ0PJX');
</script>
</head>

<body id="body">
    <!-- preloader -->
    <div id="preloader">
        <img src="{{ asset('assets') }}/img/preloader.gif" alt="Preloader" />
    </div>



    {{ $slot }}
    <section id="contact" class="contact">
        <div class="container">
          <div class="row mb50">
            <div
              class="sec-title text-center mb50 wow fadeInDown animated"
              data-wow-duration="500ms"
            >
              <h2>{{__('home.iletişim')}}</h2>
              <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>
  
            <div
              class="sec-sub-title text-center wow rubberBand animated"
              data-wow-duration="1000ms"
            >
              <p>
            İletişim Formunu Doldurun
              </p>
            </div>
  
            <!-- contact address -->
            <div
              class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated"
              data-wow-duration="500ms"
            >
              <div class="contact-address">
                <h3>Lütfen iletişim formunu doldurun</h3>
                <p>Adres</p>
              
                <p>Numara</p>
              </div>
            </div>
            <!-- end contact address -->
  
            <!-- contact form -->
            <div
              class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated"
              data-wow-duration="500ms"
              data-wow-delay="300ms"
            >
              <div class="contact-form">
                <h3>Bize Ulaşın</h3>
                <form action="#" id="contact-form">
                  <div class="input-group name-email">
                    <div class="input-field">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Adı"
                        class="form-control"
                      />
                    </div>
                    <div class="input-field">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="input-group">
                    <textarea
                      name="message"
                      id="message"
                      placeholder="Mesajınız"
                      class="form-control"
                    ></textarea>
                  </div>
                  <div class="input-group">
                    <input
                      type="submit"
                      id="form-submit"
                      class="pull-right"
                      value="Gönder"
                    />
                  </div>
                </form>
              </div>
            </div>
            <!-- end contact form -->
  
            <!-- footer social links -->
            <div
              class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated"
              data-wow-duration="500ms"
              data-wow-delay="600ms"
            >
              <ul class="footer-social">
                <li>
                  <a href="/"
                    ><i class="fa fa-instagram fa-2x"></i
                  ></a>
                </li>
               
              </ul>
            </div>
            <!-- end footer social links -->
          </div>
        </div>
  
        <!-- Google map -->
        <div
          id="map_canvas"
          class="wow bounceInDown animated"
          data-wow-duration="500ms"
        ></div>
        <!-- End Google map -->
      </section>
  
      <!--
          End Contact Us
          ==================================== -->
  
      <footer id="footer" class="footer">
        <div class="container">
          <div class="row">
            <div
              class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="footer-single">
                <img src="img/footer-logo.png" alt="" />
                <p>
                  Adresss
                </p>
              </div>
            </div>
  
            <div
              class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="300ms"
            >
              <div class="footer-single">
                <h6>Kaydol</h6>
                <form action="#" class="subscribe">
                  <input type="text" name="subscribe" id="subscribe" />
                  <input type="submit" value="&#8594;" id="subs" />
                </form>
                <p>Bize Abone Olun!</p>
              </div>
            </div>
  
            <div
              class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="600ms"
            >
              <div class="footer-single">
                <h6>Explore</h6>
                <ul>
                  <li><a href="#">{{__('home.anasayfa')}}</a></li>
                  <li><a href="#features">{{__('home.hakkımızda')}}</a></li>
                  <li><a href="#works">{{__('home.projeler')}}</a></li>
                </ul>
              </div>
            </div>
  
            <div
              class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="900ms"
            >
              <div class="footer-single">
                <h6>Daha Fazla</h6>
                <ul>
                  {{-- <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Market Blog</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Pressroom</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="copyright text-center">
                Copyright © 2022
                <a href="http://themefisher.com/">SAFİR</a>. All rights
                reserved. Designed & developed by
                <a href="http://themefisher.com/">Mahmut Sarıkaya</a>
              </p>
            </div>
          </div>
        </div>
      </footer>


    <!-- Main jQuery -->
    <script src="{{ asset('assets') }}/js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="{{ asset('assets') }}/js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="{{ asset('assets') }}/js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="{{ asset('assets') }}/js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="{{ asset('assets') }}/js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="{{ asset('assets') }}/js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="{{ asset('assets') }}/js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <!-- jquery easing -->
    <script src="{{ asset('assets') }}/js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            offset: 120, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
        });
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="{{ asset('assets') }}/js/custom.js"></script>

    <script type="text/javascript">
        $(function() {
            /* ========================================================================= */
            /*	Contact Form
    				/* ========================================================================= */

            $("#contact-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    message: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "come on, you have a name don't you?",
                        minlength: "your name must consist of at least 2 characters",
                    },
                    email: {
                        required: "no email, no message",
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?",
                    },
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "process.php",
                        success: function() {
                            $("#contact-form :input").attr("disabled", "disabled");
                            $("#contact-form").fadeTo("slow", 0.15, function() {
                                $(this).find(":input").attr("disabled", "disabled");
                                $(this).find("label").css("cursor", "default");
                                $("#success").fadeIn();
                            });
                        },
                        error: function() {
                            $("#contact-form").fadeTo("slow", 0.15, function() {
                                $("#error").fadeIn();
                            });
                        },
                    });
                },
            });
        });
    </script>
</body>

</html>
