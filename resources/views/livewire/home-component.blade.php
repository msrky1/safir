
    <header id="navigation" class="navbar-fixed-top navbar">
      <div class="container">
        <div class="navbar-header">
          <!-- responsive nav button -->
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="sr-only">SAFİR </span>
            <i class="fa fa-bars fa-2x"></i>
          </button>
          <!-- /responsive nav button -->

          <!-- logo -->
          <a class="navbar-brand" href="#body">
            <h1 id="logo">
              <img width="100px" class="logo-return"  src="{{asset('assets')}}/img/logo.png" alt="Brandi" />
            </h1>
          </a>
          <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
          <ul id="nav" class="nav navbar-nav">
            <li class="current"><a href="#body">{{__('home.anasayfa')}}</a></li>
            <li><a href="#features">{{__('home.hakkımızda')}}</a></li>
            <li><a href="#works">{{__('home.projeler')}}</a></li>
            {{-- <li><a href="#team">{{__('home.anasayfa')}}</a></li> --}}
            <li><a href="#contact">{{__('home.iletişim')}}</a></li>
        


          </ul>
         <a href="/tr"> Türkçe </a> | <a href="/en"> English </a>
        </nav>
      
        <!-- /main nav -->
      </div>
    </header>
    <!--
        End Fixed Navigation
        ==================================== -->

    <!--
        Home Slider
        ==================================== -->

    <section id="slider">
      <div
        id="carousel-example-generic"
        class="carousel slide"
        data-ride="carousel"
      >
        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
          <li
            data-target="#carousel-example-generic"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <!-- single slide -->
          <div
            class="item active"
            style="background-image: url({{asset('assets')}}/img/works/01.jpg)"
          >
            <div class="carousel-caption">
              <h2
                data-wow-duration="700ms"
                data-wow-delay="500ms"
                class="wow bounceInDown animated"
              >
              {{__('home.Kalite')}}
              </h2>
              <h3 data-wow-duration="1000ms" class="wow slideInLeft animated">
                <span class="color">/safir</span> 
              </h3>
              <p data-wow-duration="1000ms" class="wow slideInRight animated">
                    Alanında Uzman Ekip
              </p>

              <ul class="social-links text-center">
                <li>
                  <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-dribbble fa-lg"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- end single slide -->

          <!-- single slide -->
          <div class="item" style="background-image: url({{asset('assets')}}/img/works/02.jpg)">
            <div class="carousel-caption">
              <h2
                data-wow-duration="500ms"
                data-wow-delay="500ms"
                class="wow bounceInDown animated"
              >
                Safir<span>  {{__('home.Kalite2')}}</span>!
              </h2>
              <h3 data-wow-duration="500ms" class="wow slideInLeft animated">
                <span class="color">/Safir</span>
              </h3>
              <p data-wow-duration="500ms" class="wow slideInRight animated">
                Alanında Uzman Ekip
              </p>

              <ul class="social-links text-center">
                <li>
                  <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-dribbble fa-lg"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- end single slide -->
        </div>
        <!-- End Wrapper for slides -->
      </div>
    </section>

    <!--
        End Home SliderEnd
        ==================================== -->

    <!--
        Features
        ==================================== -->

    <section id="features" class="features">
      <div class="container">
        <div class="row">
          <div
            class="sec-title text-center mb50 wow bounceInDown animated"
            data-wow-duration="500ms"
          >
            <h2> {{__('home.özellikler')}}</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <!-- service item -->
          <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-github fa-2x"></i>
              </div>

              <div class="service-desc">
                <h3> {{__('home.markalaşma')}}</h3>
                <p>
                  {{__('home.m1')}}</p>
              </div>
            </div>
          </div>
          <!-- end service item -->

          <!-- service item -->
          <div
            class="col-md-4 wow fadeInUp"
            data-wow-duration="500ms"
            data-wow-delay="500ms"
          >
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-pencil fa-2x"></i>
              </div>

              <div class="service-desc">
                <h3> {{__('home.Kalite3')}}</h3>
                <p>
                  {{__('home.m2')}}
                </p>
              </div>
            </div>
          </div>
          <!-- end service item -->

          <!-- service item -->
          <div
            class="col-md-4 wow fadeInRight"
            data-wow-duration="500ms"
            data-wow-delay="900ms"
          >
            <div class="service-item">
              <div class="service-icon">
                <i class="fa fa-bullhorn fa-2x"></i>
              </div>

              <div class="service-desc">
                <h3> {{__('home.gelişim')}}</h3>
                <p>
                  {{__('home.m3')}}
                </p>
              </div>
            </div>
          </div>
          <!-- end service item -->
        </div>
      </div>
    </section>

    <!--
        End Features
        ==================================== -->

    <!--
        Our Works
        ==================================== -->

    <section id="works" class="works clearfix">
      <div class="container">
        <div class="row">
          <div class="sec-title text-center">
            <h2> {{__('home.işler')}}</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <div class="sec-sub-title text-center">
            <p>
               {{__('home.hakkimizdakisa')}}
            </p>
          </div>

          <div
            class="work-filter wow fadeInRight animated"
            data-wow-duration="500ms"
          >
            <ul class="text-center">
              <li>
                <a href="javascript:;" data-filter="all" class="active filter"
                  > {{__('home.Herşey')}}</a
                >
              </li>
              <li>
                <a href="javascript:;" data-filter=".web" class="filter"> {{__('home.Poliüretan')}}</a>
              </li>
              <li>
                <a href="javascript:;" data-filter=".branding" class="filter"
                  > {{__('home.Polyurea')}}</a
                >
              </li>
              
              <li>
                <a href="javascript:;" data-filter=".logo-design" class="filter"
                  > {{__('home.Kaplama')}}</a
                >
              </li>
              <li>
                <a href="javascript:;" data-filter=". " class="filter"
                  > {{__('home.Sıkma')}}</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="project-wrapper">
        <figure class="mix work-item branding">
          <img src="{{asset('assets')}}/img/works/item-1.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-1.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>Safir</h4>
            {{-- <p></p> --}}
          </figcaption>
        </figure>

        <figure class="mix work-item web">
          <img src="{{asset('assets')}}/img/works/item-2.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-2.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>SAFİR</h4>
            <p> </p>
          </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
          <img src="{{asset('assets')}}/img/works/item-3.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-3.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>{{__('home.safir')}}</h4>
            {{-- <p> </p> --}}
          </figcaption>
        </figure>

        <figure class="mix work-item  ">
          <img src="{{asset('assets')}}/img/works/item-4.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-4.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>Safir</h4>
            <p> </p>
          </figcaption>
        </figure>

        {{-- <figure class="mix work-item branding">
          <img src="{{asset('assets')}}/img/works/item-5.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-5.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>SAFİR</h4>
            <p> </p>
          </figcaption>
        </figure>

        <figure class="mix work-item web">
          <img src="{{asset('assets')}}/img/works/item-6.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-6.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>SAFİR</h4>
            <p> </p>
          </figcaption>
        </figure>

        <figure class="mix work-item logo-design">
          <img src="{{asset('assets')}}/img/works/item-7.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-7.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>SAFİR</h4>
            <p> </p>
          </figcaption>
        </figure>

        <figure class="mix work-item  ">
          <img src="{{asset('assets')}}/img/works/item-8.jpg" alt="" />
          <figcaption class="overlay">
            <a
              class="fancybox"
              rel="works"
              title="Write Your Image Caption Here"
              href="{{asset('assets')}}/img/works/item-8.jpg"
              ><i class="fa fa-eye fa-lg"></i
            ></a>
            <h4>SAFİR</h4>
            <p> </p>
          </figcaption>
        </figure> --}}
      </div>
    </section>

    <!--
        End Our Works
        ==================================== -->

    <!--
        Meet Our Team
        ==================================== -->

    <section id="team" class="team">
      <div class="container">
        <div class="row">
          <div
            class="sec-title text-center wow fadeInUp animated"
            data-wow-duration="700ms"
          >
            <h2> {{__('home.tercih')}}</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>

          <div
            class="sec-sub-title text-center wow fadeInRight animated"
            data-wow-duration="500ms"
          >
            <p>
             {{__('home.m1')}}
            </p>
          </div>

          <!-- single member -->
          <figure
            class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
            data-wow-duration="500ms"
          >
            <div class="member-thumb">
              <img
                src="{{asset('assets')}}/img/team/01.jpg"
                alt="Team Member"
                class="img-responsive"
              />
              <figcaption class="overlay">
                <h5>FİLLİ BOYA</h5>
                {{-- <p>it aspernatur aut odit aut fugit,s</p> --}}
                <ul class="social-links text-center">
                  {{-- <li>
                    <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                  </li> --}}
                </ul>
              </figcaption>
            </div>
            <h4>FİLLİ BOYA</h4>
            <span>Safir Teknik İzolasyon</span>
          </figure>
          <figure
            class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
            data-wow-duration="500ms"
          >
            <div class="member-thumb">
              <img
                src="{{asset('assets')}}/img/team/01.jpg"
                alt="Team Member"
                class="img-responsive"
              />
              <figcaption class="overlay">
                <h5>FİLLİ BOYA</h5>
                {{-- <p>it aspernatur aut odit aut fugit,s</p> --}}
                <ul class="social-links text-center">
                  {{-- <li>
                    <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                  </li> --}}
                </ul>
              </figcaption>
            </div>
            <h4>FİLLİ BOYA</h4>
            <span>Safir Teknik İzolasyon</span>
          </figure>
          <figure
            class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
            data-wow-duration="500ms"
          >
            <div class="member-thumb">
              <img
                src="{{asset('assets')}}/img/team/01.jpg"
                alt="Team Member"
                class="img-responsive"
              />
              <figcaption class="overlay">
                <h5>FİLLİ BOYA</h5>
                {{-- <p>it aspernatur aut odit aut fugit,s</p> --}}
                <ul class="social-links text-center">
                  {{-- <li>
                    <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                  </li> --}}
                </ul>
              </figcaption>
            </div>
            <h4>FİLLİ BOYA</h4>
            <span>Safir Teknik İzolasyon</span>
          </figure>
          <figure
            class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
            data-wow-duration="500ms"
          >
            <div class="member-thumb">
              <img
                src="{{asset('assets')}}/img/team/01.jpg"
                alt="Team Member"
                class="img-responsive"
              />
              <figcaption class="overlay">
                <h5>FİLLİ BOYA</h5>
                {{-- <p>it aspernatur aut odit aut fugit,s</p> --}}
                <ul class="social-links text-center">
                  {{-- <li>
                    <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                  </li> --}}
                </ul>
              </figcaption>
            </div>
            <h4>FİLLİ BOYA</h4>
            <span>Safir Teknik İzolasyon</span>
          </figure>
          <figure
            class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
            data-wow-duration="500ms"
          >
            <div class="member-thumb">
              <img
                src="{{asset('assets')}}/img/team/01.jpg"
                alt="Team Member"
                class="img-responsive"
              />
              <figcaption class="overlay">
                <h5>FİLLİ BOYA</h5>
                {{-- <p>it aspernatur aut odit aut fugit,s</p> --}}
                <ul class="social-links text-center">
                  {{-- <li>
                    <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa fa-google-plus fa-lg"></i></a>
                  </li> --}}
                </ul>
              </figcaption>
            </div>
            <h4>FİLLİ BOYA</h4>
            <span>Safir Teknik İzolasyon</span>
          </figure>
          <!-- end single member -->

          <!-- single member -->
         
          <!-- end single member -->

          <!-- single member -->
         
          <!-- end single member -->

          <!-- single member -->
         
          <!-- end single member -->
        </div>
      </div>
    </section>

    <!--
        End Meet Our Team
        ==================================== -->

    <!--
        Some fun facts
        ==================================== -->

    <section id="facts" class="facts">
      <div class="parallax-overlay">
        <div class="container">
          <div class="row number-counters">
            <div
              class="sec-title text-center mb50 wow rubberBand animated"
              data-wow-duration="1000ms"
            >
              <h2>{{__('home.müşteri')}}</h2>
              <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <!-- first count item -->
            <div
              class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="counters-item">
                <i class="fa fa-clock-o fa-3x"></i>
                <strong data-to="3200">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                {{__('home.saat')}}</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="300ms"
            >
              <div class="counters-item">
                <i class="fa fa-users fa-3x"></i>
                <strong data-to="120">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>{{__('home.mennun')}}</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="600ms"
            >
              <div class="counters-item">
                <i class="fa fa-rocket fa-3x"></i>
                <strong data-to="360">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>{{__('home.teslim')}}</p>
              </div>
            </div>
            <div
              class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
              data-wow-delay="900ms"
            >
              <div class="counters-item">
                <i class="fa fa-trophy fa-3x"></i>
                <strong data-to="6454">0</strong>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <p>{{__('home.başarılar')}}</p>
              </div>
            </div>
            <!-- end first count item -->
          </div>
        </div>
      </div>
    </section>

    <!--
        End Some fun facts
        ==================================== -->

    <!--
        Contact Us
        ==================================== -->

