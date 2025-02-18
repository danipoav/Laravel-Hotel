<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda DP</title>
    <link rel="icon" type="image/svg+xml" href="src/assets/icons/favicon.svg">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
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
                        <a href="index.html">
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
                        <img class="nav__container__functionalities--person"
                            src="{{ asset('assets/icons/person.svg') }}" alt="User icon">
                        <img class="nav__container__functionalities--search"
                            src="{{ asset('assets/icons/search.svg') }}" alt="Search icon">
                    </div>
                </div>
            </div>
        </nav>
    </header>



    <main>
        <section class="tourSection">
            <div class="tourSection__container">
                <p class="tourSection__container--subtitleDesktop">
                    We Make You Feel Comfortable
                </p>
                <p class="tourSection__container--subtitle">
                    THE ULTIMATE LUXURY EXPERIENCE
                </p>
                <h1 class="tourSection__container--title">
                    The Perfect Base For You
                </h1>
                <div class="tourSection__container__buttons">
                    <button class="tourSection__container_buttons tourSection__container__buttons--tour btn">
                        TAKE A TOUR
                    </button>
                    <button class="tourSection__container_buttons tourSection__container__buttons--learn btn">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </section>

        <section class="availabilitySection">
            <div class="availabilitySection__container">
                <div class="availabilitySection__container availabilitySection__container__arrival">
                    <p class="availabilitySection__container__arrival availabilitySection__container__arrival--text">
                        Arrival Date
                    </p>
                    <input
                        class="availabilitySection__container__arrival availabilitySection__container__arrival--input"
                        type="date" />
                </div>
                <div class="availabilitySection__container availabilitySection__container__departure">
                    <p
                        class="availabilitySection__container__departure availabilitySection__container__departure--text">
                        Departure Date
                    </p>
                    <input
                        class="availabilitySection__container__departure availabilitySection__container__departure--input"
                        type="date" />
                </div>
                <button class="availabilitySection__container availabilitySection__container__button btn">
                    CHECK AVAILABILITY
                </button>
            </div>
        </section>

        <section class="aboutSection">
            <div class="aboutSection__info">
                <p class="aboutSection__info--subtitle">ABOUT US</p>
                <h1 class="aboutSection__info--title">Discover Our Underground.</h1>
                <p class="aboutSection__info--paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <button class="aboutSection__info--button btn">BOOK NOW</button>
            </div>
            <div class="aboutSection__cards">
                <div class="aboutSection__cards__team">
                    <img class="aboutSection__cards__team--img" src="{{ asset('assets/imgs/team.jpg') }}"
                        alt="team" />
                    <div class="aboutSection__cards__team--container">
                        <div class="aboutSection__cards__team--container--icons">
                            <img class="aboutSection__cards__team--container--icons--small"
                                src="{{ asset('assets/icons/strong-team.svg') }}" alt="" />
                            <img class="aboutSection__cards__team--container--icons--big"
                                src="{{ asset('assets/icons/strong-team-transparent.svg') }}" alt="Strong team" />
                        </div>
                        <h2 class="aboutSection__cards__team--container--title">
                            Strong Team
                        </h2>
                        <p class="aboutSection__cards__team--container--paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="aboutSection__cards__room">
                    <img class="aboutSection__cards__room--img" src="{{ asset('assets/imgs/luxury.jpg') }}"
                        alt="Luxury room" />
                    <div class="aboutSection__cards__room--container">
                        <div class="aboutSection__cards__room--container--icons">
                            <img class="aboutSection__cards__room--container--icons--small"
                                src="{{ asset('assets/icons/calendar.svg') }}" alt="Luxury room" />
                        </div>
                        <h2 class="aboutSection__cards__room--container--title">
                            Luxury Room
                        </h2>
                        <p class="aboutSection__cards__room--container--paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <section class="roomSlider">
            <p class="roomSlider__subtitle">ROOMS</p>
            <h1 class="roomSlider__title">Hand Picked Rooms</h1>
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img1.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img2.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img3.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img4.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img5.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                    <div class="swiper-slide">
                        <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                            alt="Room extras" />
                        <img class="roomSlider__slides--roomImg" src="{{ asset('assets/imgs/room-img6.jpg') }}"
                            alt="Hotel room" />
                        <h1 class="roomSlider__slides--title">Minimal Duplex Room</h1>
                        <p class="roomSlider__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore.
                        </p>
                        <p class="roomSlider__slides--price">$345<span
                                class="roomSlider__slides--price--perNight">/Night</span></p>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>


        <section class="videoSection">
            <p class="videoSection__subtitle">INTRO VIDEO</p>
            <h1 class="videoSection__title">Meet With Our Luxury Place.</h1>
            <p class="videoSection__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat you have to understand this.
            </p>

            <div class="videoSection__videoContainer">
                <video autoplay muted loop controls>
                    <source src="src/assets/video/video-hotel.mp4" type="video/mp4">
                </video>
            </div>

            <button class="videoSection__button btn">BOOK NOW</button>
        </section>




        <section class="featuresSection">
            <p class="featuresSection__subtitle">FACILITIES</p>
            <h1 class="featuresSection__title">Core Features</h1>
            <div class="swiperFeatures featuresSection__slides">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/rating.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/01.jpg"
                                alt="Number one" />
                        </div>

                        <h1 class="featuresSection__slides--title">Have High Rating</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/hours.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/02.jpg"
                                alt="Number two" />
                        </div>

                        <h1 class="featuresSection__slides--title">Quiet Hours</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/locations.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/03.jpg"
                                alt="Number three" />
                        </div>

                        <h1 class="featuresSection__slides--title">Best Locations</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon"
                                src="src/assets/icons/cancellation.svg" alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/04.jpg"
                                alt="Number four" />
                        </div>

                        <h1 class="featuresSection__slides--title">Free Cancellation</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/payment.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/05.jpg"
                                alt="Number five" />
                        </div>

                        <h1 class="featuresSection__slides--title">Payment Options</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                    <div class="swiper-slide">
                        <div class="featuresSection__slides__container">
                            <img class="featuresSection__slides__container--icon" src="src/assets/icons/offers.svg"
                                alt="Rating icon" />
                            <img class="featuresSection__slides__container--number" src="src/assets/imgs/06.jpg"
                                alt="Number six" />
                        </div>

                        <h1 class="featuresSection__slides--title">Special Offers</h1>
                        <p class="featuresSection__slides--description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>
                <div class="swiperFeatures-pagination"></div>
            </div>
        </section>



        <section class="menuSection">
            <div class="wrapper">
                <img class="menuSection__icon" src="src/assets/icons/donut.svg" alt="Food icon" />
                <p class="menuSection__subtitle">MENU</p>
                <h1 class="menuSection__title">Our Foods Menu</h1>
                <div class="swiperMenu menuSection__slides">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/egg&bacon.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/egg&bacon.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/egg&bacon.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/salad.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Fresh Salad
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/steak.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Delicious Steak
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/food2.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/egg&bacon.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Egg & Bacon
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/coffee.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Tea or Coffee
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/fruits.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menuSection__slides__part1">
                                <div class="menuSection__slides__part1__container">
                                    <img class="menuSection__slides__part1__container--icon"
                                        src="src/assets/imgs/salad.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part1__container2">
                                    <h1 class="menuSection__slides__part1__container2--title">
                                        Fresh Salad
                                    </h1>
                                    <p class="menuSection__slides__part1__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part1--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part2">
                                <div class="menuSection__slides__part2__container">
                                    <img class="menuSection__slides__part2__container--icon"
                                        src="src/assets/imgs/steak.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part2__container2">
                                    <h1 class="menuSection__slides__part2__container2--title">
                                        Delicious Steak
                                    </h1>
                                    <p class="menuSection__slides__part2__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part2--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                            <div class="menuSection__slides__part3">
                                <div class="menuSection__slides__part3__container">
                                    <img class="menuSection__slides__part3__container--icon"
                                        src="src/assets/imgs/food2.jpg" alt="Food image" />
                                </div>
                                <div class="menuSection__slides__part3__container2">
                                    <h1 class="menuSection__slides__part3__container2--title">
                                        Seasonal fruits
                                    </h1>
                                    <p class="menuSection__slides__part3__container2--description">
                                        Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                        sed do eiusmod tempor.
                                    </p>
                                </div>
                                <img class="menuSection__slides__part3--arrow" src="src/assets/imgs/goldenArrow.png"
                                    alt="Golden arrow" />
                            </div>
                        </div>
                    </div>
                    <div class="swiperMenu-button-prev">&#60;</div>
                    <div class="swiperMenu-button-next">&#62;</div>
                </div>
                <div class="swiperMenuImages menuSection__images">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food2.jpg" alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food.jpg" alt="Food image" />
                        </div>
                        <div class="swiper-slide">
                            <img class="swiperMenuImages__img" src="src/assets/imgs/food3.jpg" alt="Food image" />
                        </div>
                    </div>
                    <div class="swiperMenuImages-pagination"></div>
                </div>
                <div class="menuSection__imagesDesktop">
                    <img class="swiperMenuImages__img" src="src/assets/imgs/food2.jpg" alt="Food image" />
                    <img class="swiperMenuImages__img" src="src/assets/imgs/food.jpg" alt="Food image" />
                    <img class="swiperMenuImages__img" src="src/assets/imgs/food3.jpg" alt="Food image" />
                </div>
            </div>
        </section>



        <section class="statsSection">
            <div class="statsSection__container">
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/rocket.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        84k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Projects are completed
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/team.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        10M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Active Backers Around World
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/economy.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        02k<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Categories Served
                    </p>
                </div>
                <div class="statsSection__container__stat">
                    <img src="src/assets/icons/book.svg" alt="Stat icon" />
                    <h1 class="statsSection__container__stat__title">
                        100M<span class="statsSection__container__stat__title--span">+</span>
                    </h1>
                    <p class="statsSection__container__stat__subtitle">
                        Idea Raised Funds
                    </p>
                </div>
            </div>
        </section>

    </main>


    <footer class="footer">
        <div class="footer__container1">
            <div class="footer__container1__subcontainer1">
                <div class="footer__container1__subcontainer1__header">
                    <h1>H</h1>
                    <img src="src/assets/icons/logo.svg" alt="Hotel name" />
                </div>
                <p class="footer__container1__subcontainer1__description">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <div class="footer__container1__subcontainer1__icons">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="src/assets/icons/facebook.svg" alt="Logo" />
                    </a>
                    <svg width="24" height="38" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z"
                            fill="#777777" />
                    </svg>
                    <a href="https://www.behance.net/" target="_blank">
                        <img src="src/assets/icons/behance.svg" alt="Logo" />
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <img src="src/assets/icons/linkedin.svg" alt="Logo" />
                    </a>

                    <a href="https://www.youtube.com/" target="_blank">
                        <img src="src/assets/icons/youtube.svg" alt="Logo" />
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
                            src="src/assets/icons/phone.svg" alt="Contact icon" />
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
                            src="src/assets/icons/mail.svg" alt="Contact icon" />
                        <div class="footer__container1__subcontainer3__contact__one__data">
                            <p class="footer__container1__subcontainer3__contact__one__data__title">
                                Mail
                            </p>
                            <p class="footer__container1__subcontainer3__contact__one__data__number">
                                dapoav2002@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="footer__container1__subcontainer3__contact__one">
                        <img class="footer__container1__subcontainer3__contact__one__icon"
                            src="src/assets/icons/location.svg" alt="Contact icon" />
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



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="src/js/scripts.js"></script>

</body>

</html>
