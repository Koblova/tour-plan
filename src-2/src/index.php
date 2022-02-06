<?php include('header.php')?>
<section class="hotel">
    <div class="container">
      <div class="hotel-info">
        <div class="hotel-info__text">
          <div class="hotel-wrapper">
            <div class="stars">
              <img src="img/star.svg" alt="stars" class="stars stars__image" />
              <img src="img/star.svg" alt="stars" class="stars stars__image" />
              <img src="img/star.svg" alt="stars" class="stars stars__image" />
              <img src="img/star.svg" alt="stars" class="stars stars__image" />
              <img src="img/star.svg" alt="stars" class="stars stars__image" />
            </div>
            <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
            <span class="offer hotel-info__offer">Flash Offer</span>
          </div>
          <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities +
            Child
            Stays Free</p>
        </div>
        <!-- /.hotel-info__text -->
        <div class="rating hotel-info__rating">
          <span class="rating__text">
            User Rattings
          </span>
          <span class="rating__counter">
            4.5/<span class="rating__counter-item">5</span>
          </span>
        </div>
        <!-- /.rating hotel-info__rating -->
      </div>
      <!-- /.hotel-info -->
      <div class="hotel-grid">
        <!-- Slider main container -->
        <div class="swiper-container hotel-slider hotel__slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide.jpg"
                alt="slide"></div>
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide-1.jpg"
                alt="slide"></div>
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide-2.jpg"
                alt="slide"></div>
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide-3.jpg"
                alt="slide"></div>
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide-4.jpg"
                alt="slide"></div>
            <div class="swiper-slide hotel-slider__item"><img class="swiper-slide__image" src="img/slide-5.jpg"
                alt="slide"></div>
          </div>
          <!-- swiper-wrapper -->
          <button class="hotel-slider__button hotel-slider__button--prev"></button>
          <button class="hotel-slider__button hotel-slider__button--next"></button>
        </div>
        <!--swiper-container-->
        <div class="hotel-right">
          <div class="booking">
            <div class="booking__info">
              <div class="booking__price">
                <span class="booking__start">price starts as</span>
                <strong class="booking__pricetag">$ 8,500</strong>
                <span class="booking__per-room">per room / night</span>
              </div>
              <div class="booking__room">
                <div class="booking__text">
                  <img src="img/person.svg" alt="Icon-user" class="booking__icon">
                  <span class="booking__description">2 x Guests</span>
                </div>
                <div class="booking__text">
                  <img src="img/home.svg" alt="Icon-home" class="booking__icon">
                  <span class="booking__description">1 x Room</span>
                </div>
              </div>
            </div>
            <div class="booking__call-center">
              <span class="booking__heading">Quick Booking</span>
              <a class="booking__number" href="tel:12100">
                <img src="img/phone-call.svg" alt="Icon: phone-call">
                <span class="booking__num">12100</span></a>
            </div>
            <button class="button booking__button">View Other Options</button>

          </div>
          <!-- /.booking -->
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.2235015846572!2d55.96649611461797!3d25.79619958362109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef676cd10d75637%3A0x87d9622fc273e134!2sDoubleTree%20by%20Hilton%20Ras%20Al%20Khaimah!5e0!3m2!1sru!2sru!4v1642710491183!5m2!1sru!2sru"
              width="100%" height="213" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <!--.map-->
      </div>
      <!--.hotel-right-->
    </div>
    <!--hotel-grid-->
    <!-- /.container -->
  </section>
  <section class="newsletter">
    <div class="newsletter-wrapper">
      <h2 class="newsletter-title newsletter__title">subscribe to our
        <span class="newsletter-title__strong">Newsletter</span>
      </h2>

      <form action="#" class="subscribe newsletter__subscribe">
        <input type="text" class="subscribe__input" placeholder="Your email address">
        <button class="subscribe__button">Send</button>
      </form>

    </div>
    <!-- /.newsletter-wrapper -->
  </section>
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">
        What people think about&nbsp;us
      </h2>
      <div class="swiper-container reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="img/reviews-avatar.jfif" alt="Image: Megan Fox" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Megan Fox</h3>
                <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                <div class="reviews-slider__rating">
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                </div>
                <!-- /.reviews-slider__rating -->
              </div>
              <!-- /.reviews-slider__profile -->

              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                Issue was only
                that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of
                gallery which
                were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not
                good as per
                atmosphere, it is very nearby most of the popular places but self location in a narrow street is not
                good.
                Overall it
                was a good experience and could recommend.
              </p>
            </div>
            <!-- /.reviews-slider__item -->
          </div>
          <!-- /.swiper-slide -->
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="img/reviews-avatar-2.jfif" alt="Image: Angela Johns" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Angela Johns</h3>
                <span class="reviews-slider__date">Stayed 20 Dec, 2020</span>
                <div class="reviews-slider__rating">
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                  <img src="img/star.svg" alt="star" class="reviews-slider__rating reviews-slider__rating--star" />
                </div>
                <!-- /.reviews-slider__rating -->
              </div>
              <!-- /.reviews-slider__profile -->

              <p class="reviews-slider__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quam placeat ipsum et quo officiis quos
                soluta eius esse? Expedita iure a quidem et explicabo necessitatibus est autem voluptatibus vel! Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Possimus nesciunt, voluptate dicta accusantium
                tempora dolore quas consequatur! Porro perspiciatis, culpa temporibus exercitationem maiores alias
                doloribus ipsa officia quidem, velit quaerat!
              </p>
            </div>
            <!-- /.reviews-slider__item -->
          </div>
          <!-- /.swiper-slide -->

          <!-- /.swiper-wrapper -->

        </div>
        <button class="reviews-slider__button reviews-slider__button--prev"></button>
        <button class="reviews-slider__button reviews-slider__button--next"></button>
      </div>
      <!-- /.swiper-container reviews-slider -->
    </div>
    <!-- container -->
  </section>
  <section class="activities">
    <div class="container">
      <h2 class="activities__title">Other Activities</h2>
      <div class="activities-wrapper">
        <div class="card activities__card">
          <img src="img/activities-1.jpg" alt="The curious corner 
of chamarel" class="card__image">
          <h3 class="card__title">The curious corner
            of chamarel</h3>
          <!-- /.card__title -->
          <button class="card__button">Book Now</button>

        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img src="img/activities-2.jpg" alt="Gymkhana club golf
course" class="card__image">
          <h3 class="card__title">Gymkhana&nbsp;club&nbsp;golf
            course</h3>
          <!-- /.card__title -->
          <button class="card__button">Book Now</button>

        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img src="img/activities-3.jpg" alt="Tamarind falls hiking
trip - full day
" class="card__image">
          <h3 class="card__title">Tamarind&nbsp;falls&nbsp;hiking
&nbsp;trip - full day
          </h3>
          <!-- /.card__title -->
          <button class="card__button">Book Now</button>

        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img src="img/activities-4.jpg" alt="The blue marine discovery
quest" class="card__image">
          <h3 class="card__title">The&nbsp;blue&nbsp;marine&nbsp;discovery
            quest</h3>
          <!-- /.card__title -->
          <button class="card__button">Book Now</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.activities-wrapper -->
    </div>
  </section>
 <?php include('footer.php')?>