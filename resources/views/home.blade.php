<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/filament/admin/theme.css') --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/script.js') --}}
    @vite('resources/css/filament/admin/theme.css')

    <title>HOME</title>
</head>

<body>
    <header class="mt-[-75px] min-h-[140vh] bg-cover bg-no-repeat">

        <nav class="navbar">
            <div class="mb-[37px] ml-[26px] mr-[26px] mt-[37px] flex items-end justify-between">
                <img class="mb-[-34px] ml-[35px] mr-[0px] mt-[66px] w-[147px]" src="{{ asset('images/logo22.png') }}"
                    alt="bus_logo">
                <nav class="float-left h-[70px] w-[600px]">
                    <ul class="float-left mt-[3px] flex list-none items-center justify-center">
                        <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                                class="font-['Raleway'] text-[18px] font-bold text-[#1f5fdc] decoration-[none] hover:text-[#87adf9]"
                                href="#">Companies</a></li>
                        <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                                class="font-['Raleway'] text-[18px] font-bold text-[#1f5fdc] decoration-[none] hover:text-[#87adf9]"
                                href="{{ route('app.Search') }}">Search Trip</a></li>
                        <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                                class="font-['Raleway'] text-[18px] font-bold text-[#1f5fdc] decoration-[none] hover:text-[#87adf9]"
                                href="{{ route('app.home') }}">About
                                Us</a></li>
                        <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                                class="font-['Raleway'] text-[18px] font-bold text-[#1f5fdc] decoration-[none] hover:text-[#87adf9]"
                                href="{{ route('app.contactus') }}">Contact Us</a></li>
                    </ul>
                </nav>

                @if (auth()->check())
                    @livewire('logout-componant')
                @else
                    <a href="{{ route('app.login') }}"> <button type="submit"
                            class="mt-[-10px] inline-block h-[40px] w-[100px] cursor-pointer rounded-[40px] bg-[#fff] font-['Raleway'] text-[17px] font-bold text-[#3f70d0] transition duration-[.3s] ease-in hover:bg-[#3f70d0] hover:text-[#fff]"
                            style="border: 2px solid #3f70d0; box-shadow: 0px 1px 7px;">Login</button></a>
                @endif
            </div>
        </nav>
        {{--
    <div class="absolute bg-white md:hidden" x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen"
            class="block text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
            <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M21 5H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2zM3 11h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2zm18 6H3a1 1 0 1 1 0-2h18a1 1 0 0 1 0 2z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div x-show="isOpen" class="h-screen w-screen bg-white">
            dsoiajdopisaj
        </div>
    </div> --}}




        <div class="mb-[10px] ml-[54px] mr-[10px] mt-[10px] flex h-auto w-[1200px] flex-col justify-center">
            <h1 class="mt-[7%] pl-[20px] text-[60px] font-bold tracking-[2px] text-[#3f70d0]"
                style="text-shadow: 1px 1px 3px #ababab;">TRAVEL IT </h1><br>
            <h3 class="ml-[30px] mt-[-14px] font-[700px] text-[#3f70d099]">ONLINE SERVICE</h3><br>
            <p
                class="pb-[25px] pl-[20px] font-['Raleway'] text-[18px] font-[500] leading-[30px] tracking-[1.5px] text-[#4e4d4d]">
                A Website for organizing and managing trips and<br>
                reservations throughout Syria between customers<br>
                and transportation companies to facilitate the<br>
                reservation process, save time,and achieve <br>
                a unique experience for users.</P>
            <button
                class="mb-[10px] ml-[17px] h-[40px] w-[160px] cursor-pointer rounded-[40px] border-none bg-[#3f70d0] font-['Raleway'] text-[18px] font-bold transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:shadow-slate-500"
                style=":hover{box-shadow:1px 2px 7px #ababab};box-shadow:0px 2px 5px #ababab;">
                <a class="font-['Raleway'] tracking-[2px] text-[#fff] decoration-[none] transition duration-[.3s] ease-in"
                    href="{{ route('app.Register') }}">Sign Up</a></button>
        </div>
    </header>
    <main>
        <section class="flex min-h-[116vh] items-center justify-center bg-cover bg-no-repeat"
            style="background-image: url({{ asset('images/section22.png') }})">
            <div class="container">
                <div class="mb-[5rem] text-center">
                    <h1 class="mb-[20px] text-[50px] font-bold text-[#3f70d0]"
                        style="text-shadow: 1px 1px 3px #ababab;">Get Your Ticket With 3 Steps</h1>
                    <p class="text-center text-[23px] font-[500] text-[#004de5bf]">get a ticket for your great journey.
                        !</p>
                </div>
                <div class="flex flex-col items-center justify-center md:flex-row">

                    <div class="z-[2] my-3 mr-[15px] h-[330px] w-[300px] rounded-[40px] bg-transparent px-[40px] py-[16px] text-[#fff] backdrop-blur-[20px] duration-[0.5s] hover:scale-110 md:my-0"
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="search">

                            <div class="relative ml-[70px] h-[70px] w-[70px] rounded-[100px] bg-[#93b5f770]">
                                <div
                                    class="absolute bottom-[9px] right-[7px] h-[55px] w-[55px] rounded-[100px] bg-[#4f84eab3]">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <h3 class="ml-[13px] mt-[16px] w-[200px] text-[25px] font-[600] text-[#3f70d0]">Search Your
                                Trip</h3>
                            <p class="mt-[7px] text-center text-[23px] font-[500] text-[#004de5bf]">choose your <br>
                                origin,destination, <br> dates and search for trip. </p>

                        </div>
                    </div>

                    <div class="z-[2] my-3 mr-[15px] h-[330px] w-[300px] rounded-[40px] bg-transparent px-[40px] py-[16px] text-[#fff] backdrop-blur-[20px] duration-[0.5s] hover:scale-110 md:my-0"
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="choose">

                            <div class="relative ml-[70px] h-[70px] w-[70px] rounded-[100px] bg-[#93b5f770]">
                                <div
                                    class="absolute bottom-[9px] right-[7px] flex h-[55px] w-[55px] items-center justify-center rounded-[100px] bg-[#4f84eab3] text-[23px]">
                                    <i class="fa-solid fa-bus"></i>
                                </div>
                            </div>
                            <h3 class="ml-[11px] mt-[16px] w-[200px] text-[24px] font-[600] text-[#3f70d0]">Choose Your
                                Trip</h3>
                            <p class="mt-[7px] text-center text-[23px] font-[500] text-[#004de5bf]">After you <br>search
                                for your trip, <br> choose the best trip <br> for you. </p>

                        </div>
                    </div>




                    <div class="z-[2] my-3 mr-[15px] h-[330px] w-[300px] rounded-[40px] bg-transparent px-[40px] py-[16px] text-[#fff] backdrop-blur-[20px] duration-[0.5s] hover:scale-110 md:my-0"
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="pay">

                            <div class="relative ml-[70px] h-[70px] w-[70px] rounded-[100px] bg-[#93b5f770]">
                                <div
                                    class="absolute bottom-[9px] right-[7px] flex h-[55px] w-[55px] items-center justify-center rounded-[100px] bg-[#4f84eab3] text-[23px]">
                                    <i class="fa-solid fa-money-bill-1-wave"></i>
                                </div>
                            </div>
                            <h3 class="ml-[21px] mt-[16px] w-[200px] text-[25px] font-[600] text-[#3f70d0]">Pay for the
                                trip</h3>
                            <p class="mt-[7px] text-center text-[23px] font-[500] text-[#004de5bf]">After you
                                <br>choose, get your data to be packed<br> and then pay.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </section>


        <hr>



        <section id="company" class="h-[117vh] bg-cover bg-no-repeat"
            style="background-image: url({{ asset('images/Section33.png') }})">

            <section id="tranding">
                <div class="container1">

                    <h1 class="section-heading text-center font-bold">- Bus Companies -</h1>
                    <h3 class="section-subheading mb-[32px] text-center font-[600]">View Recent Companies</h3>
                </div>
                <div class="container1">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            @foreach ($companies as $company)
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="{{ $company->CompanyProfiles->image }}"
                                            alt="{{ $company->Company_Name }}">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <!-- <h1 class="food-price">$20</h1> -->
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="food-name">
                                                {{ $company->Company_Name }}
                                            </h2>
                                            <a
                                                href="{{ route('app.companyprofile', ['profile' => $company->CompanyProfiles->id]) }}"><button
                                                    class="btn_comp" type="button">Company
                                                    profile</button></a>
                                            <!-- <h3 class="food-rating">
                                                <span>4.5</span>
                                                <div class="rating">
                                                    <ion-icon name="star"></ion-icon>
                                                    <ion-icon name="star"></ion-icon>
                                                    <ion-icon name="star"></ion-icon>
                                                    <ion-icon name="star"></ion-icon>
                                                    <ion-icon name="star"></ion-icon>
                                                </div>
                                                </h3> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                            @endforeach
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

        {{-- <x-slot:js>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

            <script src="{{asset('../js/script.js') }}"></script>
        </x-slot:js> --}}


        <section class="flex h-[93vh] items-center justify-center bg-cover bg-no-repeat"
            style="background-image: url({{ asset('images/section4.png') }})">


            <div class="center">
                <h2 class="relative left-[32px] mt-[-150px] border-b-2 border-solid border-[#13709a] pb-[20px] pl-[175px] text-[61px] font-bold text-[#3f70d0]"
                    style="text-shadow: 1px 1px 3px #ababab;">
                    Trips
                </h2>

                <p class="relative left-[36px] mt-[33px] pb-[50px] text-[42px] font-medium text-[#3f70d0]"
                    style="text-shadow: 1px 1px 3px #ababab;">search for your great trip !</p>


                <div class="viewww">
                    <a href="busticket.html"> <button type="submit"
                            class="relative left-[72px] ml-[89px] inline-block h-[40px] w-[239px] cursor-pointer rounded-[40px] border-none bg-[#3f70d0] text-[18px] font-bold text-[#fff] transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:text-[#fff] hover:transition hover:duration-[.3s] hover:ease-in"
                            style="box-shadow: 0px 1px 5px #b3b3b3;">Go & search</button></a>
                </div>


            </div>

        </section>


    </main>



    <footer
        class="relative flex min-h-[50vh] items-center justify-around bg-[#3f70d0] bg-cover bg-no-repeat text-[#ffffffda]">
        <div class="mb-[30px] ml-[-29px]">
            <div class="relative left-[-10px]">
                <img src="{{ asset('images/travelit_logo3.png') }}" width="200px" height="128px" alt="">
            </div>
            <div class="column1">
                <!-- <h2>TRAVEL IT</h2> -->
                <P class="pb-[13px] text-[15.5px] font-[400] leading-[19px] text-[#fff]">A Website for organizing and
                    managing trips and reservations <br> throughout Syria between customers and transportation companies
                    <br>
                    to facilitate the reservation process, save time, <br>and achieve a unique experience for users.
                </P>
                <ul class="m-[0px] mt-[10px]">
                    <a class="m-[10px] rounded-[50%] bg-[#fff] p-[10px] pt-[20px] decoration-[none] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-facebook text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                    <a class="m-[10px] rounded-[50%] bg-[#fff] p-[10px] pt-[20px] decoration-[none] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-instagram text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                    <a class="m-[10px] rounded-[50%] bg-[#fff] p-[10px] pt-[20px] decoration-[none] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-twitter text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                </ul>
            </div>
        </div>
        <div class="ml-[-106px] mr-[78px]">
            <h4 class="footer-col">Information</h4>
            <ol style="list-style: none;">
                <li class="mb-[6px] text-[17px]"><a class="text-[#fff] hover:text-[16px] hover:text-[#0f239b]"
                        href="#">About Us</a></li>
                <li class="mb-[6px] text-[17px]"><a class="text-[#fff] hover:text-[16px] hover:text-[#0f239b]"
                        href="#">Customer Service</a></li>
                <li class="mb-[6px] text-[17px]"><a class="text-[#fff] hover:text-[16px] hover:text-[#0f239b]"
                        href="#">Our Sitemap</a></li>
                <li class="mb-[6px] text-[17px]"><a class="text-[#fff] hover:text-[16px] hover:text-[#0f239b]"
                        href="#">Terms &amp; Conditions</a></li>
                <li class="mb-[6px] text-[17px]"><a class="text-[#fff] hover:text-[16px] hover:text-[#0f239b]"
                        href="#">Privacy Policy</a></li>
                <!-- <li><a href="#">Delivery Information</a></li> -->
            </ol>
        </div>
        <div class="relative bottom-[31px] right-[178px]">
            <h4 class="footer-col">Contact Us</h4>
            <ol style="list-style: none;">
                <li class="mb-[6px] text-[17px]">
                    <p><i class="fas fa-map-marker-alt"></i>
                        "Address: Damascus"
                    </p>
                </li>
                <li class="mb-[6px] text-[17px]">
                    <p> <i class="fas fa-envelope"></i>
                        Email:
                        <a class="text-[#fff] hover:text-[#0f239b]"
                            href="sedrashawish43@gmail.com">Travelit@gmail.com</a>
                    </p>
                </li>
                <li class="mb-[6px] text-[17px]">
                    <p> <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                        Phone:+963 456 765 456

                    </p>
                </li>
                <!-- <li></li> -->
            </ol>
            <!-- <input type="text" placeholder="send message" style="width: 210px ; height: 50px; border-radius: 40px; background-color: #fff; color: #3f70d0;"> -->
        </div>
    </footer>

    @filamentScripts
    @livewireScripts

    <x-slot:js>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        {{-- <script src="{{ asset('../js/script.js.js') }}"></script> --}}
        <script src="{{ asset('../js/jquery.seat-charts.js') }}"></script>
        <script src="{{ asset('../js/seat.js') }}"></script>
    </x-slot:js>
</body>

</html>
