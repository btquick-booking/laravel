<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    @vite('resources/css/filament/admin/theme.css')
    <title>HOME</title>
    @livewireStyles
</head>

<body>
    <x-home.navbar />

    <main>
        <section id="about">
            <div class="container">
                <div class="title">
                    <h1>Get Your Ticket With 3 Steps</h1>
                    <p>get a ticket for your great journey. !</p>
                </div>
                <div class="about-content">

                    <div class="cardd">

                        <div class="search">

                            <div class="scuare">
                                <div class="scuare2">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <h3>Search Your Trip</h3>
                            <p class="pa">choose your <br> origin,destination, <br> dates and search for <br> trip.
                            </p>

                        </div>
                    </div>

                    <div class="cardd">

                        <div class="choose">

                            <div class="scuare">
                                <div class="scuare2">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <h3>Choose Your Trip</h3>
                            <p class="pa">After you <br>search for your trip, <br> choose the best trip <br> for
                                you. </p>

                        </div>
                    </div>

                    <div class="cardd">

                        <div class="pay">

                            <div class="scuare">
                                <div class="scuare2">
                                    <img src="logo" alt="">
                                </div>
                            </div>
                            <h3 class="pay2">Pay for the trip</h3>
                            <p class="pa">After you <br>choose, get your data to be packed and<br> then pay. </p>

                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="slide2">

            <div class="left">
                <h2>Companies</h2>
                <br>
                <a href=""> <button type="submit" class="btn1">View all</button></a>

            </div>
            <p class="com">View Recent Companies </p>

            <div class="cards">


                <div class="Containe">


                    <div class="card">


                        <!-- First img2222_______________________________________________ -->




                        <figure>

                            <img class="CardImg" src="{{ asset('images/companyphoto3.png') }}" alt=""
                                width="200px">

                        </figure>

                        <!-- <figcaption style="background-color: gray;">
                        sadasdasdda
                    </figcaption> -->

                    </div>
                    <p class="company">Alqadmous company</p>
                    <button class="btn_comp" type="submit">Company profile</button>
                </div>
                <!-- Second img2222_______________________________________________ -->



                <div class="Containe">

                    <div class="card">

                        <figure>

                            <img class="CardImg" src="{{ asset('images/compphoto.png') }}" alt=""
                                width="200px">

                        </figure>

                        <!-- <figcaption style="background-color: gray;">
                    sadasdasdda
                </figcaption> -->
                    </div>
                    <p class="company">Alahliah company</p>
                    <button class="btn_comp" type="submit">Company profile</button>
                </div>

                <!--    Third img 3333 ____________________________________-->


                <div class="Containe">

                    <div class="card">
                        <figure>

                            <img class="CardImg" src="{{ asset('images/companyphoto3.png') }}" alt=""
                                width="200px">

                        </figure>

                        <!-- <figcaption style="background-color: gray;">
                    sadasdasdda
                </figcaption> -->

                    </div>
                    <p class="company">Al-ali company</p>
                    <button class="btn_comp" type="submit">Company profile</button>
                </div>

                <div class="Containe">

                    <div class="card">
                        <figure>

                            <img class="CardImg" src="{{ asset('images/compaphoto2.png') }}" alt=""
                                width="200px">

                        </figure>

                        <!-- <figcaption style="background-color: gray;">
                        sadasdasdda
                    </figcaption> -->

                    </div>
                    <p class="company">Al-Dahi company</p>
                    <button class="btn_comp" type="submit">Company profile</button>
                </div>

                <div class="Containe">

                    <div class="card">
                        <figure>

                            <img class="CardImg" src="{{ asset('images/compphoto.png') }}" alt=""
                                width="200px">

                        </figure>

                        <!-- <figcaption style="background-color: gray;">
                            sadasdasdda
                        </figcaption> -->

                    </div>
                    <p class="company">Tarwada company</p>
                    <button class="btn_comp" type="submit">Company profile</button>
                </div>

            </div>







            <hr>


            <div class="vieww">
                <a href="#"> <button type="submit" class="btn2">tarwada company</button></a>
            </div>

            </div>
            </div>

            </div>

        </section>



        <section class="slide3">

            <div class="center">
                <h2 class="h2">
                    Trips
                </h2>

                <p class="parg">search for your great trip!</p>


                <div class="viewww">
                    <a href="busticket.html"> <button type="submit" class="btn3">Go & search</button></a>
                </div>


            </div>

        </section>


    </main>

    <x-home.footer />
    @livewireScripts
</body>

</html>
