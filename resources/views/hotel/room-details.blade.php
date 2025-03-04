@extends('layouts.app')

@section('content')
    <script>
        function onChangeDate() {
            var checkIn = document.getElementById('check-in-input').value;
            var checkOut = document.getElementById('check-out-input');

            if (checkIn) {
                var date = new Date(checkIn);
                date.setDate(date.getDate() + 1);
                var checkOutDate = date.toISOString().split("T")[0];
            }
            checkOut.min = checkOutDate;
        }
    </script>
    @if (session('available') === false)
        <div class="Unsuccess">
            The room is already occupied on these dates :/
        </div>
    @endif
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
            <h1 class="subheaderSection__title">Ultimate Room</h1>
            <div class="subheaderSection__navigation">
                <a href="{{ route('index') }}">
                    <p class="subheaderSection__navigation__page">Home</p>
                </a>
                <p class="subheaderSection__navigation__page--active">Room Details</p>
            </div>
        </section>



        <section class="roomSection">
            <p class="roomSection__subtitle">DOUBLE BED</p>
            <h1 class="roomSection__title">{{ $room['bed_type'] }}</h1>
            <p class="roomSection__price">${{ $room['price'] }}<span class="roomSection__price--perNight">/Night</span></p>
            <img class="roomSlider__slides--roomImg" src="{{ asset($room['photo']) }}" alt="Hotel room" />
        </section>
        <section class="roomSectionDesktop">
            <div class="roomSectionDesktop__container">
                <div class="roomSectionDesktop__container__subcontainer">
                    <p class="roomSectionDesktop__container__subcontainer__subtitle">DOUBLE BED</p>
                    <h1 class="roomSectionDesktop__container__subcontainer__title">{{ $room['bed_type'] }}</h1>
                </div>
                <p class="roomSectionDesktop__container__price">${{ $room['price'] }}<span
                        class="roomSectionDesktop__container__price--perNight">/Night</span>
                </p>
            </div>

            <img class="roomSectionDesktop__roomImg" src="{{ asset($room['photo']) }}" alt="Hotel room" />
            <p class="roomSectionDesktop__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
            </p>
        </section>

        <section class="singleRoomAvailabilitySection">
            <p class="singleRoomAvailabilitySection__subtitle">
                Check Availability
            </p>
            <form class="singleRoomAvailabilitySection__form"
                action="{{ route('check', ['room' => $room['room_number']]) }}" method="POST">
                @csrf
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-in-input">Check In</label>
                    <input id="check-in-input" type="date" name="checkIn" value="{{ session('checkIn') }}"
                        onchange="onChangeDate()" />
                </div>
                <div class="singleRoomAvailabilitySection__form__block">
                    <label for="check-out-input">Check Out</label>
                    <input id="check-out-input" type="date" name="checkOut" value="{{ session('checkOut') }}" />
                </div>
                <button class="btn btn--light" type="submit">
                    CHECK AVAILABILITY
                </button>
                @if (session('available') === true)
                    <input type="hidden" value="{{ $room['price'] }}" name="price">

                    <button class="btn btn--green" type="submit"
                        formaction="{{ route('create.booking', ['room' => $room['room_number']]) }}">
                        BOOK
                    </button>
                @endif
            </form>

            <p class="singleRoomAvailabilitySection__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum. Sed ut
                perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem.
            </p>
        </section>



        <section class="amenitiesSection">
            <h1 class="amenitiesSection__title">Amenities</h1>
            <div class="amenitiesSection__separation"></div>
            <div class="amenitiesSection__container">
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/air-conditioner.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Air conditioner
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="{{ asset('assets/icons/wifi.svg') }}"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        High speed WiFi
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/lunch.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Breakfast
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/kitchen.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Kitchen
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/cleaning.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Cleaning
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/shower.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shower
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/grocery.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Grocery
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="{{ asset('assets/icons/bed.svg') }}"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Single bed
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/shop.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Shop near
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/towel.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Towels
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/online-support.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        24/7 Online Support
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img" src="{{ asset('assets/icons/key.svg') }}"
                        alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Strong Locker
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/security.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Smart security
                    </p>
                </div>
                <div class="amenitiesSection__container__subcontainer">
                    <img class="amenitiesSection__container__subcontainer__img"
                        src="{{ asset('assets/icons/expert-team.svg') }}" alt="Amenity icon" />
                    <p class="amenitiesSection__container__subcontainer__text">
                        Expert Team
                    </p>
                </div>
            </div>
        </section>



        <section class="employeeSection">
            <div class="employeeSection__container">
                <div class="employeeSection__container__imgContainer">
                    <img class="employeeSection__container__imgContainer__portrait"
                        src="{{ asset('assets/imgs/DPFounder.png') }}" alt="Employee image" />
                    <div class="employeeSection__container__imgContainer__checkContainer">
                        <img class="employeeSection__container__imgContainer__checkContainer__check"
                            src="{{ asset('assets/icons/check.svg') }}" alt="Check mark image" />
                    </div>
                </div>
                <h1 class="employeeSection__container__name">Daniel Poveda Aveiga</h1>
                <p class="employeeSection__container__position">FOUNDER, CEO.</p>
                <p class="employeeSection__container__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
        </section>



        <section class="cancellationSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Cancellation</h1>
            <div class="amenitiesSection__separation"></div>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                Phasellus volutpat neque a tellus venenatis, a euismod augue
                facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus.
                Pellentesque orci quis hendrerit sed eu dolor.
            </p>
            <p class="cancellationSection__text singleRoomAvailabilitySection__text" style="padding-top: 0">
                Cancel up to 14 days to get a full refund.
            </p>
        </section>



        <section class="relatedRoomsSection amenitiesSection singleRoomAvailabilitySection">
            <h1 class="amenitiesSection__title">Related Rooms</h1>
            <div class="amenitiesSection__separation"></div>
            <div class="swiper roomSlider__slides">
                <div class="swiper-wrapper">
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <div style="position: relative">
                                <img class="roomSlider__slides--extras" src="{{ asset('assets/imgs/room-info.svg') }}"
                                    alt="Room extras" />
                                <img class="roomSlider__slides--roomImg" src="{{ asset($room['photo']) }}"
                                    alt="Hotel room" />
                                <h1 class="roomSlider__slides--title">{{ $room['bed_type'] }}</h1>
                                <p class="roomSlider__slides--description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore.
                                </p>
                                <div class="roomSlider__slides__container">
                                    <p class="roomSlider__slides__container--price">
                                        ${{ $room['price'] }}<span
                                            class="roomSlider__slides__container--price--perNight">/Night</span>
                                    </p>
                                    <a href="{{ route('details', ['id' => $room['id']]) }}"
                                        class="roomSlider__slides__container--bookNow">Book
                                        now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="relatedRoomsSection__desktopContainer">
                @foreach ($rooms as $room)
                    <div class="relatedRoomsSection__swiper__slide">
                        <div style="position: relative">
                            <img class="relatedRoomsSection__swiper__slide__extras"
                                src="{{ asset('assets/imgs/room-info.svg') }}" alt="Room extras" />
                            <img class="relatedRoomsSection__swiper__slide__roomImg" src="{{ asset($room['photo']) }}"
                                alt="Hotel room" />
                            <h1 class="relatedRoomsSection__swiper__slide__title">{{ $room['bed_type'] }}</h1>
                            <p class="relatedRoomsSection__swiper__slide__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore.
                            </p>
                            <div class="relatedRoomsSection__swiper__slide__container">
                                <p class="relatedRoomsSection__swiper__slide__container__price">${{ $room['price'] }}
                                    <span
                                        class="relatedRoomsSection__swiper__slide__container__price--perNight">/Night</span>
                                </p>
                                <a href="{{ route('details', ['id' => $room['id']]) }}">
                                    <p class="relatedRoomsSection__swiper__slide__container__bookNow">
                                        Book now
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <a href="https://www.linkedin.com/" target="_blank">
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
                                dapoav2002@gmail.com.com
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
