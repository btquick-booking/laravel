<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite('resources/css/filament/admin/theme.css') --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
@vite('resources/js/app.js')
        <title>HOME</title>
</head>
<body>
    <header>

        <nav class="navbar">
             <div id="navbar"  {{--class=" navbar flex justify-between items-center m-[0px 20px]"--}}>
            <img src="{{ asset('images/logoBus-removebg-preview.png') }}" alt="bus_logo">
            <nav class="menu">
                <ul class="mt-[-4px] flex justify-center items-center">
                    <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a href="#">Companies</a></li>
                    <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a href="{{ route('app.Search') }}" >Search Trip</a></li>
                    <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a href="#" >About Us</a></li>
                    <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a href="{{ route('app.contactus') }}">Contact Us</a></li>
                </ul>
            </nav>
                <div class="login">
                    @if (auth()->check())
                       @livewire('logout-componant')
@else
<a href="{{ route('app.login') }}"> <button type="submit" class="btn">Login</button></a>
                        @endif
                </div>
            </nav>


         <div class="content">
             <h1>BUS TICKETS </h1><br>
             <h3>ONLINE SERVICE</h3><br>
             <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                At molestias, perspiciatis sit consequuntur quos libero <br>
                asperiores ipsa quia nisi id nobis  porro. Id voluptas officiis <br>
                ratione vel quo fuga delectus quam natus nulla ad,<br> earum quis neque minima mollitia? Voluptatem officiis <br>
                 nostrum numquam nulla odio.</p>
 <button class="cn"><a href="{{ route('app.Register') }}">Sign Up</a></button>
         </div>
    </header>

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
                        <p class="pa">choose your <br> origin,destination, <br> dates and search for <br> trip.</p>

                    </div>   </div>

                     <div class="cardd">

                    <div class="choose">

                        <div class="scuare">
                            <div class="scuare2">
                                <img src="" alt="">
                            </div>
                        </div>
                        <h3>Choose Your Trip</h3>
                        <p class="pa">After you  <br>search for your trip, <br> choose the best trip <br> for you. </p>

                    </div>   </div>

                    <div class="cardd">

                    <div class="pay">

                        <div class="scuare">
                            <div class="scuare2">
                                <img src="logo" alt="">
                            </div>
                        </div>
                        <h3 class="pay2">Pay for the trip</h3>
                        <p class="pa">After you  <br>choose, get your data to be packed and<br>   then pay. </p>

                    </div>  </div>

                </div>
            </div>

        </section>

        <section class="slide2">

                <div class="left">
                    <h2 class="text-[52px] text-[#13709a] ">Companies</h2>
                    <br>
                    <a href=""> <button type="submit" class="btn1 w-[100px] h-[40px] text-[#fff] text-[15px] bg-[#2DABCA]  inline-block font-[cursive]  cursor-pointer transition-all duration-[.4s] rounded-[40px]">View all</button></a>

                </div>
                <p class=" com text-[18px]  text-[#13709a] font-bold mb-[20px] drop-shadow-md  relative left-[8px] top-[14px] ">View Recent Companies </p>

                <div class=" cards flex justify-center mb-[57px]">


                    <div class="Containe">


                    <div class="card">


                    <!-- First img2222_______________________________________________ -->




                    <figure >

                            <img class="CardImg" src="{{asset("images/companyphoto3.png")}}" alt="" width="200px">

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

                    <figure >

                        <img class="CardImg" src="{{asset("images/compphoto.png")}}" alt="" width="200px">

                </figure>

                <!-- <figcaption style="background-color: gray;">
                    sadasdasdda
                </figcaption> -->
                </div>
                <p class="company">Alahliah  company</p>
                <button class="btn_comp" type="submit">Company profile</button>
                </div>

                    <!--    Third img 3333 ____________________________________-->


                <div class="Containe">

                <div class="card">
                    <figure >

                        <img class="CardImg" src="{{asset("images/companyphoto3.png")}}" alt="" width="200px">

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
                        <figure >

                            <img class="CardImg" src="{{asset("images/compaphoto2.png")}}" alt="" width="200px">

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
                            <figure >

                                <img class="CardImg" src="{{asset("images/compphoto.png")}}" alt="" width="200px">

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



    <footer>
        <div class="column1">
            <h2>TRAVEL IT</h2>
            <P>A Website for organizing and managing trips and reservations <br> throughout Syria between customers and transportation companies <br>
               to facilitate the reservation process, save time,  <br>and achieve a unique experience for users.</P>
               <ul class="icons">
                   <a href=""><i class="fa-brands fa-facebook"></i></a>
                   <a href=""><i class="fa-brands fa-instagram"></i></a>
                   <a href=""><i class="fa-brands fa-twitter"></i></a>
               </ul>
        </div>
        <div class="column2">
            <h4 class="footer-col">Information</h4>
            <ol style="list-style: none;">
               <li><a href="#">About Us</a></li>
               <li><a href="#">Customer Service</a></li>
               <li><a href="#">Our Sitemap</a></li>
               <li><a href="#">Terms &amp; Conditions</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <!-- <li><a href="#">Delivery Information</a></li> -->
           </ol>
        </div>
        <div class="column3">
            <h4 class="footer-col">Contact Us</h4>
            <ol style="list-style: none;">
                <li> <p><i class="fas fa-map-marker-alt"></i>
                           "Address: Damascus"
                     </p>
                </li>
                <li> <p> <i class="fas fa-envelope"></i>
                  Email:
                   <a href="sedrashawish43@gmail.com">Travelit@gmail.com</a>
               </p>
                </li>
                <!-- <li></li> -->
            </ol>
        </div>
    </footer>

    @filamentScripts

</body>
</html>
