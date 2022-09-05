@extends('layouts.base')

@section('content')
    
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
                <img  class="logo-return"  src="{{asset('assets')}}/img/logo.png" alt="Safir" />
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
          
              <li>    <select id="langlist" class="btn btn-success"
                onchange="if (this.value) window.location.href=this.value">
                <option value="/tr" @if (App::getLocale()) @endif @if (App::isLocale('tr')) selected @endif>
                    Türkçe</option>
                <option value="/en" @if (App::isLocale('en')) selected @endif>English</option>
               
            </select>
              </li>
            </ul>
           {{-- <a href="/tr"> Türkçe </a> | <a href="/en"> English </a> --}}
  
           
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
                {{__('home.s1')}}
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
                  Safir<span>  {{__('home.s2')}}</span>!
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
            <div class="sec-sub-title text-center">
              <p>
                 {{__('home.hakkimizdakisa')}}
              </p>
            </div>
  
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
                  <a href="javascript:;" data-filter=".branding" class="filter"
                    > {{__('home.suyalıtımı')}}</a
                  >
                </li>
                <li>
                  <a href="javascript:;" data-filter=".web" class="filter"> {{__('home.epoxsi')}}</a>
                </li>
              
                
                {{-- <li>
                  <a href="javascript:;" data-filter=".logo-design" class="filter"
                    > {{__('home.poliüretan')}}</a
                  >
                </li> --}}
                <li>
                  <a href="javascript:;" data-filter=".aritma" class="filter"
                    > {{__('home.arıtma')}}</a
                  >
                </li>
               
              </ul>
            </div>
          </div>
        </div>
  
        <div class="project-wrapper">
          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/01.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Makina Odası Yalıtım Öncesi, Perde ve Zemin Hazırlığı"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/01.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>
          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/03.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Malzemeyi Uyguladıktan Sonra Dış Etkenlerden Korumak Amaçlı Kullanılan XPS Köpük ve Bitüm Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/03.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/04.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Malzemeyi Uyguladıktan Sonra Dış Etkenlerden Korumak Amaçlı Kullanılan XPS Köpük ve Bitüm Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/04.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/05.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Malzemeyi Uyguladıktan Sonra Dış Etkenlerden Korumak Amaçlı Kullanılan XPS Köpük ve Bitüm Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/05.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>


          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/06.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Likit Membran Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/06.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/08.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kipaş Kağıt Fabrikası Kauçuk-Bitüm Esaslı Likit Membran Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/08.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/09.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Temel İzolasyon"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/09.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/10.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Temel İzolasyon"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/10.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/17.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Poliüretan Enjeksiyon Su Yalıtımı Öncesi Super Packer Uygulaması"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/17.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/18.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Perde Beton İzolasyonu"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/18.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>
  
       
        

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/50.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Kauçuk-Bitüm Esaslı Perde Beton İzolasyonu"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/50.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>


          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/52.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/52.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>


          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/54.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/54.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>



          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/55.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/55.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>


          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/56.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/56.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

     
          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/57.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/57.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>



          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/suyalitim/59.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/suyalitim/59.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/60.mp4" type="video/mp4">
                <p> Birleşim Noktası Olmayan Kauçuk-Bitüm Esaslı Malzeme Üzeri Arduaz Uygulaması</p>
            </video>
        
        
          </figure>
          {{-- <figure class="mix work-item branding">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/61.mp4" type="video/mp4">
            </video>
         --}}
        
          </figure>
       
          <figure class="mix work-item aritma">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/62.mp4" type="video/mp4">
                <p> Arıtma Havuzu Yalıtım Öncesi Perde Beton ve Zemin Hazırlığı</p>

            </video>
        
        
          </figure>

          <figure class="mix work-item aritma">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/63.mp4" type="video/mp4">
                <p> Arıtma Havuzu Yalıtım Öncesi Perde Beton ve Zemin Hazırlığı</p>

            </video>
        
        
          </figure>

          <figure class="mix work-item aritma">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/65.mp4" type="video/mp4">
                <p> Tuz Havuzuna Uygulanan İzolasyon Testi</p>

            </video>
        
        
          </figure>


          <figure class="mix work-item aritma">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/suyalitim/67.mp4" type="video/mp4">
                <p> Arıtma Havuzuna Uygulanan İzolasyon Testi</p>

            </video>
        
        
          </figure>
          <!-- Epoxsi -->
        
          </figure>
          <figure class="mix work-item web">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/epoxsi/02.mp4" type="video/mp4">
            </video>
        
        
          </figure>
          <figure class="mix work-item web">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/epoxsi/03.mp4" type="video/mp4">
            </video>
        
        
          </figure>
        
      
          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/13.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/13.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>
            
          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/14.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/14.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/15.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/15.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/16.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/16.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/18.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/18.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/19.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/19.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item branding">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/20.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title=""
                href="{{asset('assets')}}/img/fotovideo/epoxsi/20.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/21.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/21.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item web">
            <img src="{{asset('assets')}}/img/fotovideo/epoxsi/22.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/epoxsi/22.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>

          <figure class="mix work-item aritma">
            <img src="{{asset('assets')}}/img/fotovideo/aritma/02.jpg" alt="" />
            <figcaption class="overlay">
              <a
                class="fancybox"
                rel="works"
                title="Write Your Image Caption Here"
                href="{{asset('assets')}}/img/fotovideo/aritma/02.jpg"
                ><i class="fa fa-eye fa-lg"></i
              ></a>
              <h4>Safir</h4>
              {{-- <p></p> --}}
            </figcaption>
          </figure>




          <figure class="mix work-item aritma">
            <video width="450px" controls>
              <source src="{{asset('assets')}}/img/fotovideo/aritma/03.mp4" type="video/mp4">
            </video>
        
        
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
                  src="{{asset('assets')}}/img/fotovideo/firmalar/kipas.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Kipaş Holding</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Kipaş Holding</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/asbeton.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>As Beton</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>As Beton</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>


            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/elifiplik.png"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Elif İplik</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Elif İplik</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>
            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/gonen.png"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Gönen Tekstil</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Gönen Tekstil</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>
       

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/hambey.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Hanbey Tarım</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Hanbey Tarım</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/kirik.png"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Kirik İnşaat - Mimarlık</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Kirik İnşaat - Mimarlık </h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/koster.png"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Köster Yapı Kimyasalları</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Köster Yapı Kimyasalları</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/marinboy.webp"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Marinboy Tekstil</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Marinboy Tekstil</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/marteks.webp"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Marteks Tekstil</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Marteks Tekstil</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/miksboya.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Miks Boya</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Miks Boya</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/nipas.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Nipaş Tektil</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Nipaş Tekstil</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>
            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/ozkok.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Özkök İnşaat</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Özkök İnşaat</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/qis.png"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Qis Yapı Kimyasalları</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Qis Yapı Kimyasalları</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/sandal.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Sandal İnşaat</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Sandal İnşaat</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>

            <figure
              class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated"
              data-wow-duration="500ms"
            >
              <div class="member-thumb">
                <img
                  src="{{asset('assets')}}/img/fotovideo/firmalar/turkan.jpg"
                  alt="Team Member"
                  class="img-responsive"
                />
                <figcaption class="overlay">
                  <h5>Türkan Tekstil</h5>
                  <ul class="social-links text-center">
                
                  </ul>
                </figcaption>
              </div>
              <h4>Türkan Tekstil</h4>
              <span>Safir Teknik İzolasyon</span>
            </figure>
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
        Whats -->

        <a href="https://api.whatsapp.com/send?phone=905373484997&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
          <i class="fa fa-whatsapp my-float"></i>
          </a>
  
          <a href="tel:+905373484997" class="float-one" target="_blank">
            <i class="fa fa-phone my-call"></i>           </a>

            <a href="https://www.instagram.com/safirteknik/" class="float-insta" target="_blank">
              <i class="fa fa-instagram my-call"></i>           </a>
    
      <!--
          Contact Us
          ==================================== -->
  
  
          @endsection   
