@extends('layouts.app')

@section('content')
    <header class="header">
        <nav class="nav">
            <div class="nav__container">
                <div class="nav__container nav__container__menu">
                    <div class="nav__container__menu nav__container__menu--burger">
                        <img id="mobileMenuBurguer" src="{{ asset('assets/icons/menu.svg') }}" alt="Menu icon">
                    </div>
                    <div class="nav__container__menu nav__container__menu--logo">
                        <div class="nav__container__menu--logo nav__container__menu--logo--favicon">
                            <span>H</span>
                        </div>
                        <a href="{{ route('index') }}">
                            <img class="nav__container__menu--logo nav__container__menu--logo--title"
                                src="{{ asset('assets/icons/logo.svg') }}" alt="Hotel Title">
                        </a>
                    </div>
                </div>
                <div class="nav__menu">
                    <a href="{{ route('about') }}" class="nav__itzem">About Us</a>
                    <a href="{{ route('rooms') }}" class="nav__item">Rooms</a>
                    <a href="{{ route('offers') }}" class="nav__item">Offers</a>
                    <a href="{{ route('contact') }}" class="nav__item">Contact</a>
                </div>
                <div>
                    <div class="nav__container nav__container__functionalities">
                        <img class="nav__container__functionalities--person" src="{{ asset('assets/icons/person.svg') }}"
                            alt="User icon">
                        <img class="nav__container__functionalities--search" src="{{ asset('assets/icons/search.svg') }}"
                            alt="Search icon">
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <section class="subheaderSection">
            <p class="tourSection__container--subtitleDesktop">
                We Make You Feel Comfortable
            </p>
            <p class="subheaderSection__subtitle">THE ULTIMATE LUXURY</p>
            <h1 class="subheaderSection__title">About Us</h1>
            <div class="subheaderSection__navigation">
                <a href="{{route('index')}}"><p class="subheaderSection__navigation__page">Home</p></a>
                <p class="subheaderSection__navigation__page--active">About</p>
            </div>
        </section>



        <section class="aboutVideoSection">
            <div class="aboutVideoSection__videoContainer">
                <video autoplay muted loop controls>
                    <source src="{{ asset('assets/video/video-hotel.mp4') }}" type="video/mp4">
                </video>
            </div>
            <h1 class="aboutVideoSection__title">
                Hello. Our hotel has been present for over 20 years. We make the best
                for all our customers.
            </h1>
            <div class="aboutVideoSection__container">
                <div class="aboutVideoSection__container__service">
                    <img class="aboutVideoSection__container__service__icon"
                        src="{{ asset('assets/icons/breakfast.svg') }}" alt="Service icon" />
                    <h1 class="aboutVideoSection__container__service__title">
                        BREAKFAST
                    </h1>
                </div>
                <div class="aboutVideoSection__container__service">
                    <img class="aboutVideoSection__container__service__icon" src="{{ asset('assets/icons/airport.svg') }}"
                        alt="Service icon" />
                    <h1 class="aboutVideoSection__container__service__title">
                        AIRPORT PICKUP
                    </h1>
                </div>
                <div class="aboutVideoSection__container__service">
                    <img class="aboutVideoSection__container__service__icon" src="{{ asset('assets/icons/guide.svg') }}"
                        alt="Service icon" />
                    <h1 class="aboutVideoSection__container__service__title">
                        CITY GUIDE
                    </h1>
                </div>
                <div class="aboutVideoSection__container__service--hide">
                    <img class="aboutVideoSection__container__service--hide__icon"
                        src="{{ asset('assets/icons/bbq.svg') }}" alt="Service icon" />
                    <h1 class="aboutVideoSection__container__service--hide__title">
                        BBQ PARTY
                    </h1>
                </div>
                <div class="aboutVideoSection__container__service">
                    <img class="aboutVideoSection__container__service__icon" src="{{ asset('assets/icons/luxury.svg') }}"
                        alt="Service icon" />
                    <h1 class="aboutVideoSection__container__service__title">
                        LUXURY ROOM
                    </h1>
                </div>
            </div>
        </section>



        <section class="restaurantSection">
            <img src="{{ asset('assets/imgs/restaurant-services.jpg') }}" alt="Restaurant picture"
                class="restaurantSection__img" />
            <div class="restaurantSection__container">
                <p class="restaurantSection__container__subtitle">RESTAURANT</p>
                <h1 class="restaurantSection__container__title">
                    Get Restaurant Facilities & Many Other More
                </h1>
                <p class="restaurantSection__container__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip.
                </p>
                <a href="{{ route('rooms') }}"><button class="btn">BOOK NOW</button></a>
            </div>
        </section>



        <!-- Facilities Section -->
        <section class="featuresSection dark">
            <p class="featuresSection__subtitle dark__subtitle">FACILITIES</p>
            <h1 class="featuresSection__title dark__title">Core Features</h1>
            <div class="swiperFeatures featuresSection__slides dark__slides">
                <div class="swiper-wrapper dark__swiper-wrapper">
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/rating.svg') }}" alt="Rating icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                01
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Have High Rating
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/hours.svg') }}" alt="Hours icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                02
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Quiet Hours
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/locations.svg') }}" alt="Location icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                03
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Best Locations
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/cancellation.svg') }}" alt="Cancellation icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                04
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Free Cancellation
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/payment.svg') }}" alt="Payment icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                05
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Payment Options
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide dark__swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="{{ asset('assets/icons/offers.svg') }}" alt="Offers icon" />
                            <div class="featuresSection__slides__container--number dark__slides--number">
                                06
                            </div>
                        </div>

                        <h1 class="featuresSection__slides--title dark__slides--title">
                            Special Offers
                        </h1>
                        <p class="featuresSection__slides--description dark__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
                <div class="swiperFeatures-pagination"></div>
            </div>
            <div class="featuresSection__container dark__container">
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container dark__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/rating.svg') }}" alt="Rating icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            01
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Have High Rating
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/hours.svg') }}" alt="Hours icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            02
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Quiet Hours
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/locations.svg') }}" alt="Location icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            03
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Best Locations
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/cancellation.svg') }}" alt="Cancellation icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            04
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Free Cancellation
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/payment.svg') }}" alt="Payment icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            05
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Payment Options
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
                <div class="featuresSection__container__slides dark__container__slides">
                    <div class="featuresSection__container__slides__container">
                        <img class="featuresSection__container__slides__container--icon"
                            src="{{ asset('assets/icons/offers.svg') }}" alt="Offers icon" />
                        <div class="featuresSection__slides__container--number dark__slides--number">
                            06
                        </div>
                    </div>

                    <h1 class="featuresSection__container__slides--title dark__slides--title">
                        Special Offers
                    </h1>
                    <p class="featuresSection__container__slides--description dark__slides--description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
        </section>



        <section class="counterSection">
            <p class="counterSection__subtitle">COUNTER</p>
            <h1 class="counterSection__title">Some Fun Facts</h1>
            <div class="counterSection__container">
                <img class="counterSection__container__icon" src="{{ asset('assets/icons/happy.svg') }}"
                    alt="Facts icon" />
                <div class="counterSection__container__subContainer">
                    <h1 class="counterSection__container__subContainer__number">
                        8000
                    </h1>
                    <p class="counterSection__container__subContainer__text">
                        Happy Users
                    </p>
                </div>
                <img class="counterSection__container__arrow" src="{{ asset('assets/icons/arrow.svg') }}"
                    alt="Facts icon" />
            </div>
            <div class="counterSection__container">
                <img class="counterSection__container__icon" src="{{ asset('assets/icons/review.svg') }}"
                    alt="Facts icon" />
                <div class="counterSection__container__subContainer">
                    <h1 class="counterSection__container__subContainer__number">10M</h1>
                    <p class="counterSection__container__subContainer__text">
                        Reviews & Appriciate
                    </p>
                </div>
                <img class="counterSection__container__arrow" src="{{ asset('assets/icons/arrow.svg') }}"
                    alt="Facts icon" />
            </div>
            <div class="counterSection__container">
                <img class="counterSection__container__icon" src="{{ asset('assets/icons/country.svg') }}"
                    alt="Facts icon" />
                <div class="counterSection__container__subContainer">
                    <h1 class="counterSection__container__subContainer__number">100</h1>
                    <p class="counterSection__container__subContainer__text">
                        Country Coverage
                    </p>
                </div>
                <img class="counterSection__container__arrow" src="{{ asset('assets/icons/arrow.svg') }}"
                    alt="Facts icon" />
            </div>
            <div class="swiperMenuImages counterSection__images">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/restaurant-food1.jpg') }}"
                            alt="Reception image" />
                    </div>
                    <div class="swiper-slide">
                        <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/restaurant-food2.jpg') }}"
                            alt="Reception image" />
                    </div>
                </div>
                <div class="swiperMenuImages-pagination"></div>
            </div>
            <div class="menuSection__imagesDesktop">
                <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/restaurant-food1.jpg') }}"
                    alt="Reception image" />
                <img class="swiperMenuImages__img" src="{{ asset('assets/imgs/restaurant-food2.jpg') }}"
                    alt="Reception image" />
            </div>
        </section>

    </main>


    <footer class="footer">
        <div class="footer__container1">
            <div class="footer__container1__subcontainer1">
                <div class="footer__container1__subcontainer1__header">
                    <h1>H</h1>
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="Hotel name" />
                </div>
                <p class="footer__container1__subcontainer1__description">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <div class="footer__container1__subcontainer1__icons">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Logo" />
                    </a>
                    <svg width="24" height="38" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z"
                            fill="#777777" />
                    </svg>
                    <a href="https://www.behance.net/" target="_blank">
                        <img src="{{ asset('assets/icons/behance.svg') }}" alt="Logo" />
                    </a>
                    <a href="https://www.linkedin.com/in/danipoav" target="_blank">
                        <img src="{{ asset('assets/icons/linkedin.svg') }}" alt="Logo" />
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <img src="{{ asset('assets/icons/youtube.svg') }}" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="footer__container1__subcontainer2">
                <h2 class="footer__container1__subcontainer2__title">Services.</h2>
                <div class="footer__container1__subcontainer2__services">
                    <div class="footer__container1__subcontainer2__services__1">
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Restaurant & Bar
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Swimming Pool
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Wellness & Spa
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Restaurant
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Conference Room
                        </p>
                        <p class="footer__container1__subcontainer2__services__1--p">
                            + Cocktail Party House
                        </p>
                    </div>
                    <div class="footer__container1__subcontainer2__services__2">
                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Gaming Zone
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Marriage Party
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Party Planning
                        </p>

                        <p class="footer__container1__subcontainer2__services__2--p">
                            + Tour Consultancy
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer__container1__subcontainer3">
                <h2 class="footer__container1__subcontainer3__title">Contact Us.</h2>
                <div class="footer__container1__subcontainer3__contact">
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/phone.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Phone Number
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                +34 634 91 43 22
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/mail.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Email
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                dapoav2002@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="{{ asset('assets/icons/location.svg') }}" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Our Location
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                Barcelona, Spain
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__container2">
            <div>
                <p class="footer__container2__copyright">
                    Copyright by Daniel Poveda - 2025
                </p>
            </div>
            <div class="footer__container2__links">
                <a href="#">Termns of use | </a>
                <a href="#">Privacy Environmental Policy</a>
            </div>
        </div>
    </footer>
@endsection
