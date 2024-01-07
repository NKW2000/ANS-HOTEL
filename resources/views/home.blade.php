@include('head')


<body class="bg-light">

  <!-- <div class="content"> -->

  @include('nav')
  <div class="container-fluid px-lg-4 mt-4">

    <div class="landing-page">
      <div class="overlay"></div>
      <div class="text">
        <img class="logo" src="{{ asset('img/favicon/logo_white.png') }}" alt="">
        <h1 style="color: white;"> We Are <span>Creative</span> space </h1>
        <p style="color: #FFD700" id="welcomeText"></p>
      </div>
    </div>
  </div>

  <a class="nav-link active me-5" aria-current="page" href="royal.php">royal</a>

  <!-- Our Rooms -->
  <div class="row pt-1 pb-5">

    <div class="main-title text-center pt-5 pb-2   position-relative ">
      <h2 class="h-font">OUR ROOMS</h2>
      <p class="text-black-50 text-uppercase"> New Story</p>
    </div>

    <div class="col-lg-4 col-md-6 pb-2">
      <div class="card p-4">
        <img src="./img/photos/1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title ">Royal Room <span style="color: black;">100$</span></h5>
          <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <ul>
            Bedrooms: <span class="me-5">3</span>
            Bathrooms: <span>2</span> <br>
            Area: <span class="me-5">16m2 </span>
            Floor: <span class="me-5">6 floor</span>
          </ul>
          <div class="book d-flex justify-content-between align-items-center">
            <a href="{{ route('book.index') }}" class="btn btn-outline-success btn-sm me-2" role="button">Book Now</a>
            <div class="text-start">
              <h6>Room Rating</h6>
              <div class="stars fs-5 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="fs-6 text-secondary">4 - Very Good</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 pb-2">
      <div class="card p-4">
        <img src="./img/photos/2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Delux Room <span style="color: black;">200$</span></h5>
          <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <ul>
            Bedrooms: <span class="me-5">3</span>
            Bathrooms: <span>2</span> <br>
            Area: <span class="me-5">16m2 </span>
            Floor: <span class="me-5">6 floor</span>
          </ul>
          <div class="book d-flex justify-content-between align-items-center">
            <a href="{{ route('book.index') }}" class="btn btn-outline-success btn-sm me-2" role="button">Book Now</a>
            <div class="text-start">
              <h6>Room Rating</h6>
              <div class="stars fs-5 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="fs-6 text-secondary">4 - Very Good</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card p-4">
        <img src="./img/photos/3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Preminum <span style="color: black;">50$</span></h5>
          <p class="card-text text-black-50">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

          <ul>
            Bedrooms: <span class="me-5">3</span>
            Bathrooms: <span>2</span> <br>
            Area: <span class="me-5">16m2 </span>
            Floor: <span class="me-5">6 floor</span>
          </ul>
          <div class="book d-flex justify-content-between align-items-center">
            <a href="{{ route('book.index') }}" class="btn btn-outline-success btn-sm me-2" role="button">Book Now</a>
            <div class="text-start">
              <h6>Room Rating</h6>
              <div class="stars fs-5 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="fs-6 text-secondary">4 - Very Good</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center pb-5 container">
      <a class="btn btn-outline-dark main-btn btn text-center fw-bold h-font" href="{{ route('rooms.index') }}">More Rooms>> </a>
    </div>


    <!-- Start Swipr Sliders -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="./img//photos/select/ban.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/hotel3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/suproom.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/suproom1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/banquet.jpeg" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/hotel1.jpg" />
        </div>
        <div class="swiper-slide ">
          <img src="./img/photos/3.png" />
        </div>

        <div class="swiper-slide ">
          <img src="./img/photos/2.png" />
        </div>
        <div class="swiper-slide">
          <img src="./img/photos/1.png" />
        </div>
        <div class="swiper-slide">
          <img src="./img//photos/select/suproom2.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- End Swiper Sliders -->


    <!-- start script for search Hotel -->

    <script charset="utf-8" type="text/javascript">
      window.TP_FORM_SETTINGS = window.TP_FORM_SETTINGS || {};
      window.TP_FORM_SETTINGS["a2b352eb3a520af732e1edd9b1fdcff0"] = {
        "handle": "a2b352eb3a520af732e1edd9b1fdcff0",
        "widget_name": "Airport Hotel Form",
        "border_radius": "2",
        "additional_marker": null,
        "width": null,
        "show_logo": false,
        "show_hotels": true,
        "form_type": "hotel",
        "locale": "en",
        "currency": "usd",
        "sizes": "default",
        "search_target": "_blank",
        "active_tab": "avia",
        "search_host": "www.jetradar.com/searches/new",
        "hotels_host": "hotellook.com/search",
        "hotel": "",
        "hotel_alt": "Search hotels with Hotellook and book hotels online",
        "avia_alt": null,
        "retargeting": true,
        "trip_class": "economy",
        "depart_date": null,
        "return_date": null,
        "check_in_date": null,
        "check_out_date": null,
        "id": 79221,
        "marker": 74230,
        "origin": {
          "name": ""
        },
        "destination": {
          "name": ""
        },
        "color_scheme": {
          "name": "white_blue",
          "icons": "icons_blue",
          "background": "#ffffff",
          "color": "#000000",
          "border_color": "#c1c1c1",
          "button": "#1b9ed9",
          "button_text_color": "#ffffff",
          "input_border": "#ffffff"
        },
        "hotels_type": "hotellook_host",
        "best_offer": {
          "locale": "en",
          "currency": "usd",
          "marker": 74230,
          "search_host": "www.jetradar.com/searches/new",
          "offers_switch": false,
          "api_url": "//minprices-jetradar.aviasales.ru/minimal_prices/offers.json",
          "routes": []
        },
        "hotel_logo_host": "hotellook.com",
        "search_logo_host": "www.jetradar.com",
        "hotel_marker_format": "marker=",
        "hotelscombined_marker": null,
        "responsive": true,
        "height": 164
      };
    </script>
    <script charset="utf-8" src="//www.travelpayouts.com/widgets/a2b352eb3a520af732e1edd9b1fdcff0.js?v=808" async></script>
    <!-- End script for search Hotel -->
    <!-- --------------------------------------------------- -->
    <!-- Room1 detalis -->
    <div class="row pt-5">
      <div class="col-lg-6 col-md-6 m-3 p-4">
        <div class="card p-4">
          <img src="./img/photos/3.png" class="card-img-top" alt="Room Image">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 m-3 p-3">
        <h5 class="card-title pt-3 pb-2 fs-4">Premium Room</h5>
        <p class="card-text fs-5 lh-base">Enjoy our premium room with great amenities and beautiful views.</p>

        <ul class="list-unstyled fs-5">
          <li class="mt-2">Bedrooms: <span class="me-3">3</span></li>
          <li class="mt-2">Bathrooms: <span>2</span></li>
          <li class="mt-2">Area: <span class="me-3">16m<sup>2</sup></span></li>
          <li class="mt-2">Floor: <span>6th floor</span></li>
        </ul>

        <div class="mt-3">
          <h6>Room Rating</h6>
          <div class="stars fs-5 text-warning">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p class="fs-6 text-secondary">4/5 - Very Good</p>
          <div class="book mt-4 text-end">
            <a href="{{ route('book.index') }}" class="btn btn-success btn-lg">BOOK NOW</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Us -->

    <!-- ***** Header Area End ***** -->

    <div class="contact-page section mt-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading  ">
              <h6>| Contact Us</h6>
              <h2>Get In Touch With Our Agents</h2>
            </div>
            <p>lorem9</p>
            <div class="col-lg-12">
              <div class="item phone">
                <img src="img/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>0934442050<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="img/email-icon.png" alt="" style="max-width: 52px;">
                <h6>ANS-hotel@gmail.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form id="contact-form" action="" method="post">
              <div class="row">

                <div class="col-lg-12">
                  <fieldset>
                    <label for="name">Full Name</label>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <label for="subject">Subject</label>
                    <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                  </fieldset>
                </div>

              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106582.86313516543!2d36.341712361404355!3d33.40461262771994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1519187a6ec47073%3A0xbecc8f0470798ea!2z2KfZhNis2KfZhdi52Kkg2KfZhNiz2YjYsdmK2Kkg2KfZhNiu2KfYtdipINmE2YTYudmE2YjZhSDZiNin2YTYqtmD2YbZiNmE2YjYrNmK2Kc!5e0!3m2!1sar!2snl!4v1703422780772!5m2!1sar!2snl" width="100%" height="500px" style="border:0;  border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
      </div>
    </div>

    <!-- Start Footer -->
    <footer class="mt-5">
      <div class="container p-3">
        <div class="col-lg-12">
          <p>Copyright © 2023 ANS-Hotel.
        </div>
      </div>
    </footer>
    <!-- End Footer -->


    <!-- --------------------------------------------------------------------------------------------------------- -->
    <!-- Script for Swiper Sliders -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Script for library Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!--Script for Text auto -->
    <script>
      const welcomeText = document.getElementById('welcomeText');
      // const spanText = document.getElementById('spanText');
      const text = "Welcome to ANS Hotel";
      // const span = "We Are Creative space";
      let index = 0;

      function typeWriter() {
        if (index < text.length) {
          welcomeText.textContent += text.charAt(index);
          index++;
          setTimeout(typeWriter, 200);
        } else {
          index = 0;
          welcomeText.textContent = "";
          setTimeout(typeWriter, 900);
        }
      }
      typeWriter();
      // ----------------------------------------

      //  Script For Landing Slider Auto 
      // start let landing
      let landing = document.querySelector(".landing-page");

      // Get Array  of images
      let Arrayimages = ["1.png", "2.png", "3.png"];

      setInterval(() => {
        // get random number
        let randomNumber = Math.floor(Math.random() * Arrayimages.length);

        // change background image url
        landing.style.backgroundImage = 'url("../img/photos/' + Arrayimages[randomNumber] + '")';
      }, 2000);
    </script>

    <!-- Script For Slider js -->
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>

</body>

</html>