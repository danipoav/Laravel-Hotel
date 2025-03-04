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
                        <a href="{{ route('index') }}"> <img
                                class="nav__container__menu--logo nav__container__menu--logo--title"
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
            <h1 class="subheaderSection__title">New Details</h1>
            <div class="subheaderSection__navigation">
                a href="{{ route('index') }}"><p class="subheaderSection__navigation__page">Home</p></a>
                <p class="subheaderSection__navigation__page--active">Contact</p>
            </div>
        </section>



        <section class="contactDetailsSection">
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="{{ asset('assets/icons/mail.svg') }}"
                    alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Hotel Address
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        OXYGEN Workspace, C/Princesa 31, planta 2, 28008 Madrid
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">01</p>
            </div>
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="{{ asset('assets/icons/phone.svg') }}"
                    alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Phone Number
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        +34 634 91 43 22
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">02</p>
            </div>
            <div class="contactDetailsSection__container">
                <img class="contactDetailsSection__container__img" src="{{ asset('assets/icons/location.svg') }}"
                    alt="Contact icon" />
                <div class="contactDetailsSection__container__subcontainer">
                    <p class="contactDetailsSection__container__subcontainer__header">
                        Email
                    </p>
                    <p class="contactDetailsSection__container__subcontainer__text">
                        dapoav2002@gmail.com
                    </p>
                </div>
                <p class="contactDetailsSection__container__number">03</p>
            </div>
        </section>



        <form class="contactFormSection" action="{{ route('create.contact') }}" method="POST">
            @csrf
            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text" placeholder="Your name"
                        name="name" required />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="{{ asset('assets/icons/form-person.svg') }}" alt="Contact icon" />
                </div>
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field" type="text"
                        placeholder="Add phone number" name="phone" required />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="{{ asset('assets/icons/form-phone.svg') }}" alt="Contact icon" />
                </div>
            </div>

            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <select name="days" id="days" required>
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                        <option value="sunday">Sunday</option>
                    </select>
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="{{ asset('assets/icons/form-mail.svg') }}" alt="Contact icon" />
                </div>
                <div class="contactFormSection__firstContainer__input">
                    <select name="status" id="status" required>
                        <option value="booked">Booked</option>
                        <option value="available">Available</option>
                    </select>
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="{{ asset('assets/icons/form-subject.svg') }}" alt="Contact icon" />
                </div>
            </div>

            <div class="contactFormSection__firstContainer">
                <div class="contactFormSection__firstContainer__input">
                    <input class="contactFormSection__firstContainer__input__field--big" type="text"
                        placeholder="Your job description" name="job_desc" required />
                    <img class="contactFormSection__firstContainer__input__icon"
                        src="{{ asset('assets/icons/form-pencil.svg') }}" alt="Contact icon" />
                </div>
            </div>

            <button type="submit" class="btn">SEND</button>
        </form>
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
