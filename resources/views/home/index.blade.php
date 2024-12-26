<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('fontawesome-5.5/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-infinite-loop.css') }}">
<!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->

 </head>
  <body>    
    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" >              
        <div class="container">   
          <div class="tm-next">
            <a href="#infinite" class="navbar-brand">
              <img src="img/tnation-removebg-preview.png" class="navbar-logo" alt="Logo">
            </a>
          </div>                
            
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#infinite">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#movie">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-nav-link" href="#news">News</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="#contact">Contact</a>
              </li>

 

             
                        
                                @auth
                                <li class="nav-item">
                                  <a
                                      href="{{ url('/tickets') }}"
                                      class="nav-link tm-nav-link"
                                  >
                                      Tickets
                                  </a>
                                  </li>
                                <li class="nav-item">
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="nav-link tm-nav-link"
                                    >
                                        Dashboard
                                    </a>
                                    </li>
                                @else
                                <li class="nav-item">
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav-link tm-nav-link"
                                    >
                                        Log in
                                    </a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('register') }}"
                                            class="nav-link tm-nav-link"
                                        >
                                            Register
                                        </a>
                                        </li>
                                  
                                @endauth
                        
                      
            </ul>
          </div>        
        </div>
      </nav>


      
      <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
          <h2 class="tm-hero-title text-center font-weight-bold mb-4 pb-2">T-NATION</h2>
          <p class="tm-hero-subtitle text-center font-weight-bold mb-4 pb-2">
            "WORLD BEST CINEMA"
              
            </p>
        </div>        
      </div>

      <div class="tm-next tm-intro-next">
        <a href="#whatwedo" class="text-center tm-down-arrow-link">
          <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
        </a>
      </div>      
    </section>
    <section id="movie" class="tm-section-pad-top">
      <div class="container tm-container-gallery">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">NOW SHOWING IN CINEMAS</h2>
              <p class="mx-auto tm-section-desc">
                Nikmati pengalaman menonton yang tak terlupakan dengan berbagai film terbaru yang kini sedang ditayangkan di bioskop favorit Anda! Dapatkan tiket Anda sekarang dan rasakan serunya menonton di layar lebar dengan kualitas gambar dan suara yang memukau
              </p>
          </div>            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <div class="grid ">
                    @foreach($movies as $movie)
                      <a href="{{ route('movies.malls', ['movie' => $movie->id]) }}">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="{{ $movie->image_url }}" alt="Image 1" class="img-fluid">
                          <figcaption>
                            <h2><i>BELI TIKET <span>SEKARANG!</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      @endforeach
                    
                    </div>
                </div>                
            </div>        
          </div>
      </div>
    </section>
    <section id="news" class="tm-section-pad-top">
      
      <div class="container my-5">


        <!--Section: Content-->
        <section class="magazine-section dark-grey-text">
      
          <!-- Section heading -->
          <h3 class="text-center font-weight-bold mb-4 pb-2">T-Nation NOW</h3>
          <!-- Section description -->
          <p class="text-center w-responsive mx-auto mb-5">Tetap update dengan berita terbaru dari dunia perfilman! Kami hadir dengan informasi terkini tentang film-film yang akan datang, ulasan film terbaru, wawancara eksklusif dengan para aktor dan sutradara, serta berita dari festival film internasional.</p>
      
            <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12">
      
              <!-- Featured news -->
              <div class="single-news mb-4">
      
                <!-- Image -->
                <div class="view overlay rounded z-depth-1-half mb-4">
                  <img class="img-fluid" src="img/image1.webp" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!-- Data -->
                <div class="news-data d-flex justify-content-between">
                  <a href="#!" class="light-blue-text">
                    
                  </a>
                  <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>13/07/2024</p>
                </div>
      
                <!-- Excerpt -->
                <h3 class="font-weight-bold dark-grey-text mb-3"><a>Sukses Bikin Penonton Geram, Jangan Lewatkan Film Ipar Adalah Maut!</a></h3>
                <p class="dark-grey-text">Bioskop tanah air kini tengan diramaikan dengan film Ipar Adalah Maut yang sudah tayang mulai hari ini, Kamis 13 Juni.  Yang mengejutkan filmnya ternyata merupakan...
              </div>
              <!-- Featured news -->
      
              <!-- Small news -->
              <div class="single-news mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-4">
                      <img class="img-fluid" src="img/berita1.webp" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">10/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-3">
                        <a href="#!" class="text-warning">Chris Evans Bergabung Dengan Dwayne Johnson di Film Red One!</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
              <!-- Small news -->
              <div class="single-news mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-4">
                      <img class="img-fluid" src="img/berita2.webp" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">9/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-3">
                        <a href="#!" class="text-warning">Ngeri! Pasangan ini Menjadi Incaran Sekelompok Pembunuh Bertopeng</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
              <!-- Small news -->
              <div class="single-news mb-lg-0 mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-lg-0 mb-4">
                      <img class="img-fluid" src="img/berita3.webp" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">9/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-lg-0 mb-3">
                        <a href="#!" class="text-warning">The Watchers, Drama Thriller Penuh Plot Twist!</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12">
      
              <!-- Featured news -->
              <div class="single-news mb-4">
      
                <!-- Image -->
                <div class="view overlay rounded z-depth-1-half mb-4">
                  <img class="img-fluid" src="img/image2.webp" alt="Sample image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
      
                <!-- Data -->
                <div class="news-data d-flex justify-content-between">
                  <a href="#!" class="pink-text">
                    
                  </a>
                  <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>14/07/2024</p>
                </div>
      
                <!-- Excerpt -->
                <h3 class="font-weight-bold dark-grey-text mb-3"><a>A Quiet Place: Day One, Kisahkan Awal Kehancuran!</a></h3>
                <p class="dark-grey-text">Franchise A Quiet Place akan kembali dengan film prekuel yang berjudul A Quiet Place: Day One. Berbeda dari film sebelumnya, Day One akan mengambil timeline...
                    </p>
      
              </div>
              <!-- Featured news -->
      
              <!-- Small news -->
              <div class="single-news mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-4">
                      <img class="img-fluid" src="img/berita4.webp" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">10/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-3">
                        <a href="#!" class="text-warning">Bersiap Ketemu Lagi Dengan Will Smith dan Martin Lawrence di Film Terbaru Bad Boys: Ride or Die!</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
              <!-- Small news -->
              <div class="single-news mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-4">
                      <img class="img-fluid" src="img/berita5.webp" alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">15/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0 mb-3">
                        <a href="#!" class="text-warning">The Garfield Movie, Hadirkan Petualangan Animasi si Kucing Orange!</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
              <!-- Small news -->
              <div class="single-news mb-4">
      
                <!-- Grid row -->
                <div class="row">
      
                  <!-- Grid column -->
                  <div class="col-md-3">
      
                    <!--Image-->
                    <div class="view overlay rounded z-depth-1 mb-md-0 mb-4">
                      <img class="img-fluid" src="img/berita6.webp"
                        alt="Sample image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                  <!-- Grid column -->
                  <div class="col-md-9">
      
                    <!-- Excerpt -->
                    <p class="font-weight-bold dark-grey-text">14/07/2024</p>
                    <div class="d-flex justify-content-between">
                      <div class="col-11 text-truncate pl-0">
                        <a href="#!" class="text-warning">IF: Imaginary Friends, Saatnya Berpetualang Bersama Teman Khayalan!</a>
                      </div>
                      <a><i class="fas fa-angle-double-right"></i></a>
                    </div>
      
                  </div>
                  <!-- Grid column -->
      
                </div>
                <!-- Grid row -->
      
              </div>
              <!-- Small news -->
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </section>
        <!--Section: Content-->
      
      
      </div>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
  </body>
</html>

      
    </section>
    
    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">      
      <div class="container tm-testimonials-content">
        <div class="row">
          <div class="col-lg-12 tm-content-box">
            <h2 class="text-white text-center mb-4 tm-section-title">Testimonials</h2>
            <p class="mx-auto tm-section-desc text-center">
              Dengar langsung dari pelanggan kami! Di T-Nation, kami sangat menghargai pendapat dan pengalaman setiap pengunjung. Bagian testimoni ini berisi cerita-cerita dan ulasan dari mereka yang telah menikmati layanan dan fasilitas kami
              </p>
            <div class="mx-auto tm-gallery-container tm-gallery-container-2">
              <div class="tm-testimonials-carousel">
                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-03.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>T-NATION benar-benar memberikan pengalaman menonton yang luar biasa! Kualitas gambar dan suara yang sempurna membuat saya merasa benar-benar tenggelam dalam film."</blockquote>
                  <figcaption>"Pengalaman Luar Biasa!"</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-02.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>"Saya sangat terkesan dengan kenyamanan yang ditawarkan oleh T-NATION. Kursinya sangat nyaman dan ruangannya bersih.</blockquote>
                  <figcaption>"Kenyamanan Terbaik"</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-03.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>"Pelayanan di T-NATION sungguh mengagumkan! Dari pembelian tiket hingga menikmati film, semuanya berjalan dengan lancar. Stafnya sangat membantu dan ramah.</blockquote>
                  <figcaption>"Pelayanan yang Mengagumkan"</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-04.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>SAKANIGADIG</blockquote>
                  <figcaption>Oliva Htoo (Designer)</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/soldier boy.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>"Fab Five freddy tell me everybody fly DJ Spinin Made my mind flash is fast flash is cool flash has no face flash ain't no dude and you dont stop shoe shock go out to a parking lot.</blockquote>
                  <figcaption>-Soldier Boy</figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-bg-overlay"></div>
    </section>
    
   

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
    
      <div class="container tm-container-contact">
        
        <div class="row">
            
            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">Contact Us</h2>
                <p class="mb-5">
                  Kami di T-Nation siap membantu Anda! Apapun pertanyaan, saran, atau masukan yang Anda miliki, jangan ragu untuk menghubungi kami. Tim kami akan dengan senang hati memberikan respon terbaik untuk kebutuhan Anda.
                </p><br>
            </div>
            
            <div class="col-sm-12 col-md-6">
              <form action="" method="get">
                <input id="name" name="name" type="text" placeholder="Your Name" class="tm-input" required />
                <input id="email" name="email" type="email" placeholder="Your Email" class="tm-input" required />
                <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required></textarea>
                <button type="submit" class="btn tm-btn-submit">Submit</button>
              </form>
            </div>
            
            <div class="col-sm-12 col-md-6">

                <div class="contact-item">
                  <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                      <i class="far fa-2x fa-comment mr-4"></i>
                      <span class="mb-0">Chat Online</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                      <i class="far fa-2x fa-envelope mr-4"></i>
                      <span class="mb-0">t-nation@gmail.com</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="https://www.google.com/maps" class="item-link">
                      <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                      <span class="mb-0">Our Location</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="tel:0100200340" class="item-link">
                      <i class="fas fa-2x fa-phone-square mr-4"></i>
                      <span class="mb-0">255-662-5566</span>
                  </a>              
                </div>
                
                <div class="contact-item">&nbsp;</div>
            
            </div>
            
            
        </div><!-- row ending -->
        
      </div>

      	<footer class="text-center small tm-footer">
          <p class="mb-0">
          Copyright &copy; 2024 T-Nation 
          
          . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by T-Nation</a></p>
        </footer>

    </section>
    
    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        
        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        background_image_parallax_2($("#testimonials"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        $('.tm-testimonials-carousel').slick({
          dots: true,
          prevArrow: false,
          nextArrow: false,
          infinite: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            }, 
            {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }                 
            }
          ]
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  </body>
</html>