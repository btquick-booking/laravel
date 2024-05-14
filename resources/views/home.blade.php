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
    <header class="min-h-[140vh] bg-cover bg-no-repeat mt-[-75px]">

        <nav class="navbar">
            <div class="flex justify-between items-end mt-[37px] mb-[37px] ml-[26px] mr-[26px]">
                <img class="w-[147px] mt-[66px] mr-[0px] mb-[-34px] ml-[35px]" src="{{ asset('images/logo22.png') }}"
                    alt="bus_logo">
                <nav class="w-[600px] float-left h-[70px]">
                    <ul class="list-none mt-[3px] flex justify-center items-center float-left">
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a
                                class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#1f5fdc] hover:text-[#87adf9]"
                                href="#">Companies</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a
                                class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#1f5fdc] hover:text-[#87adf9]"
                                href="{{ route('app.Search') }}">Search Trip</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a
                                class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#1f5fdc] hover:text-[#87adf9]"
                                href="{{ route('app.companyprofile') }}">About
                                Us</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a
                                class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#1f5fdc] hover:text-[#87adf9]"
                                href="{{ route('app.contactus') }}">Contact Us</a></li>
                    </ul>
                </nav>

                @if (auth()->check())
                    @livewire('logout-componant')
                @else
                    <a href="{{ route('app.login') }}"> <button type="submit"
                            class="mt-[-10px] w-[100px] h-[40px] bg-[#fff] rounded-[40px] text-[17px] font-['Raleway']
                            font-bold inline-block cursor-pointer text-[#3f70d0] transition duration-[.3s] ease-in hover:bg-[#3f70d0] hover:text-[#fff]  "
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




        <div class="w-[1200px] h-auto mt-[10px] mr-[10px] mb-[10px] ml-[54px] flex flex-col justify-center">
            <h1 class="text-[60px] text-[#3f70d0] font-bold pl-[20px] mt-[7%] tracking-[2px]"
                style="text-shadow: 1px 1px 3px #ababab;">TRAVEL IT </h1><br>
            <h3 class="font-[700px] ml-[30px] mt-[-14px] text-[#3f70d099]">ONLINE SERVICE</h3><br>
            <p
                class="tracking-[1.5px] pl-[20px] pb-[25px] font-['Raleway'] leading-[30px] text-[18px] font-[500] text-[#4e4d4d]">
                A Website for organizing and managing trips and<br>
                reservations throughout Syria between customers<br>
                and transportation companies to facilitate the<br>
                reservation process, save time,and achieve <br>
                a unique experience for users.</P>
            <button
                class="w-[160px] h-[40px] bg-[#3f70d0] border-none mb-[10px] ml-[17px] text-[18px] font-['Raleway'] font-bold rounded-[40px] cursor-pointer transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:shadow-slate-500"
                style=":hover{box-shadow:1px 2px 7px #ababab};box-shadow:0px 2px 5px #ababab;">
                <a class="decoration-[none] text-[#fff] transition duration-[.3s] ease-in  font-['Raleway'] tracking-[2px]"
                    href="{{ route('app.Register') }}">Sign Up</a></button>
        </div>
    </header>
    <main>
        <section class="bg-cover bg-no-repeat min-h-[116vh] flex  justify-center items-center"
        style="background-image: url({{ asset('images/section22.png') }})">
            <div class="container">
                <div class="text-center mb-[5rem]">
                    <h1 class="text-[50px] mb-[20px] text-[#3f70d0] font-bold"
                        style="text-shadow: 1px 1px 3px #ababab;">Get Your Ticket With 3 Steps</h1>
                    <p class="text-[23px] text-center font-[500] text-[#004de5bf]">get a ticket for your great journey.
                        !</p>
                </div>
                <div class="flex justify-center items-center flex-col md:flex-row">

                    <div class="h-[330px] w-[300px] my-3 md:my-0 bg-transparent backdrop-blur-[20px] text-[#fff] rounded-[40px] py-[16px] px-[40px] mr-[15px] duration-[0.5s] hover:scale-110 z-[2]  "
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="search">

                            <div class="h-[70px] w-[70px] rounded-[100px] ml-[70px] relative bg-[#93b5f770]">
                                <div
                                    class="h-[55px] w-[55px] rounded-[100px] absolute right-[7px] bottom-[9px] bg-[#4f84eab3]">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <h3 class="ml-[13px] text-[25px] font-[600] mt-[16px] text-[#3f70d0] w-[200px]">Search Your
                                Trip</h3>
                            <p class="text-[23px] mt-[7px]  text-center font-[500] text-[#004de5bf]">choose your <br>
                                origin,destination, <br> dates and search for trip. </p>

                        </div>
                    </div>

                    <div class="h-[330px] my-3 md:my-0 w-[300px] bg-transparent backdrop-blur-[20px] text-[#fff] rounded-[40px] py-[16px] px-[40px] mr-[15px] duration-[0.5s] hover:scale-110 z-[2]  "
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="choose">

                            <div class="h-[70px] w-[70px] rounded-[100px] ml-[70px] relative bg-[#93b5f770]">
                                <div
                                    class="h-[55px] w-[55px] rounded-[100px] absolute right-[7px] bottom-[9px] bg-[#4f84eab3] flex justify-center items-center text-[23px]">
                                    <i class="fa-solid fa-bus"></i>
                                </div>
                            </div>
                            <h3 class="ml-[11px] text-[24px] font-[600] mt-[16px] text-[#3f70d0] w-[200px]">Choose Your
                                Trip</h3>
                            <p class="text-[23px] mt-[7px] text-center font-[500] text-[#004de5bf]">After you <br>search
                                for your trip, <br> choose the best trip <br> for you. </p>

                        </div>
                    </div>




                    <div class="h-[330px] my-3 md:my-0 w-[300px] bg-transparent backdrop-blur-[20px] text-[#fff] rounded-[40px] py-[16px] px-[40px] mr-[15px] duration-[0.5s] hover:scale-110 z-[2]  "
                        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">

                        <div class="pay">

                            <div class="h-[70px] w-[70px] rounded-[100px] ml-[70px] relative bg-[#93b5f770]">
                                <div
                                    class="h-[55px] w-[55px] rounded-[100px] absolute right-[7px] bottom-[9px] bg-[#4f84eab3] flex justify-center items-center text-[23px]">
                                    <i class="fa-solid fa-money-bill-1-wave"></i>
                                </div>
                            </div>
                            <h3 class="ml-[21px] text-[25px] mt-[16px] font-[600] text-[#3f70d0] w-[200px]">Pay for the
                                trip</h3>
                            <p class="text-[23px] mt-[7px] text-center font-[500] text-[#004de5bf]">After you
                                <br>choose, get your data to be packed<br> and then pay.
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </section>


        <hr>



        <section id="company" class="bg-cover bg-no-repeat h-[117vh]" style="background-image: url({{ asset('images/Section33.png') }})">

            <section id="tranding">
                <div class="container1">

                    <h1 class="text-center font-bold section-heading">- Bus Companies -</h1>
                    <h3 class="text-center font-[600] mb-[32px] section-subheading">View Recent Companies</h3>
                </div>
                <div class="container1">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/compaphoto2.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$20</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Al-waseem Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/companyphoto3.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$20</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Al-qadmous Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/compaphoto2.png') }}"alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$40</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Tarwada Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/companyphoto3.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$15</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Al-ahlia Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/compaphoto2.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$15</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Al-dahi Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/companyphoto3.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$20</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Ali AL-Seraj Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="{{ asset('images/compaphoto2.png') }}" alt="Tranding">
                                </div>
                                <div class="tranding-slide-content">
                                    <!-- <h1 class="food-price">$8</h1> -->
                                    <div class="tranding-slide-content-bottom">
                                        <h2 class="food-name">
                                            Al-majed Company
                                        </h2>
                                        <a href="CompanyProfile.html"><button class="btn_comp" type="submit">Company
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


        <section class="bg-cover bg-no-repeat h-[93vh] flex justify-center items-center"
        style="background-image: url({{ asset('images/section4.png') }})">


            <div class="center">
                <h2 class="text-[61px] font-bold mt-[-150px] pb-[20px] pl-[175px] border-b-2 border-solid border-[#13709a] text-[#3f70d0] relative left-[32px] "
                    style="text-shadow: 1px 1px 3px #ababab;">
                    Trips
                </h2>

                <p class="text-[42px] font-medium mt-[33px] pb-[50px] text-[#3f70d0] relative left-[36px] "
                    style="text-shadow: 1px 1px 3px #ababab;">search for your great trip !</p>


                <div class="viewww">
                    <a href="busticket.html"> <button type="submit"
                            class="w-[239px] h-[40px] text-[#fff] border-none rounded-[40px] inline-block ml-[89px] text-[18px] font-bold cursor-pointer bg-[#3f70d0] relative left-[72px] transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:text-[#fff] hover:transition hover:duration-[.3s] hover:ease-in"
                            style="box-shadow: 0px 1px 5px #b3b3b3;">Go & search</button></a>
                </div>


            </div>

        </section>


    </main>



    <footer
        class="bg-[#3f70d0] bg-cover bg-no-repeat min-h-[50vh] flex justify-around items-center text-[#ffffffda] relative">
        <div class="ml-[-29px] mb-[30px]">
            <div class="relative left-[-10px]">
                <img src="{{ asset('images/travelit_logo3.png') }}" width="200px" height="128px" alt="">
            </div>
            <div class="column1">
                <!-- <h2>TRAVEL IT</h2> -->
                <P class="text-[#fff] font-[400] text-[15.5px] pb-[13px] leading-[19px]">A Website for organizing and
                    managing trips and reservations <br> throughout Syria between customers and transportation companies
                    <br>
                    to facilitate the reservation process, save time, <br>and achieve a unique experience for users.
                </P>
                <ul class="mt-[10px] m-[0px]">
                    <a class="decoration-[none] pt-[20px] p-[10px] bg-[#fff] m-[10px] rounded-[50%] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-facebook text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                    <a class="decoration-[none] pt-[20px] p-[10px] bg-[#fff] m-[10px] rounded-[50%] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-instagram text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                    <a class="decoration-[none] pt-[20px] p-[10px] bg-[#fff] m-[10px] rounded-[50%] hover:bg-[#3f70d0] hover:transition hover:duration-[0.5s]"
                        href=""><i
                            class="fa-brands fa-twitter text-[2em] text-[#3f70d0] opacity-[0.9e] hover:text-[#fff]"></i></a>
                </ul>
            </div>
        </div>
        <div class="ml-[-106px] mr-[78px]">
            <h4 class="footer-col">Information</h4>
            <ol style="list-style: none;">
                <li class="text-[17px] mb-[6px]"><a class="text-[#fff] hover:text-[#0f239b] hover:text-[16px]"
                        href="#">About Us</a></li>
                <li class="text-[17px] mb-[6px]"><a class="text-[#fff] hover:text-[#0f239b] hover:text-[16px]"
                        href="#">Customer Service</a></li>
                <li class="text-[17px] mb-[6px]"><a class="text-[#fff] hover:text-[#0f239b] hover:text-[16px]"
                        href="#">Our Sitemap</a></li>
                <li class="text-[17px] mb-[6px]"><a class="text-[#fff] hover:text-[#0f239b] hover:text-[16px]"
                        href="#">Terms &amp; Conditions</a></li>
                <li class="text-[17px] mb-[6px]"><a class="text-[#fff] hover:text-[#0f239b] hover:text-[16px]"
                        href="#">Privacy Policy</a></li>
                <!-- <li><a href="#">Delivery Information</a></li> -->
            </ol>
        </div>
        <div class="relative right-[178px] bottom-[31px] ">
            <h4 class="footer-col">Contact Us</h4>
            <ol style="list-style: none;">
                <li class="text-[17px] mb-[6px]">
                    <p><i class="fas fa-map-marker-alt"></i>
                        "Address: Damascus"
                    </p>
                </li>
                <li class="text-[17px] mb-[6px]">
                    <p> <i class="fas fa-envelope"></i>
                        Email:
                        <a class="text-[#fff] hover:text-[#0f239b]"
                            href="sedrashawish43@gmail.com">Travelit@gmail.com</a>
                    </p>
                </li>
                <li class="text-[17px] mb-[6px]">
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
