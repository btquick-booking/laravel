<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>HOME</title>
</head>
<body>
    <header>

        <div id="navbar">
            <img src="{{ asset('images/logoBus-removebg-preview.png') }}" alt="bus_logo">
            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('app.Searchtrip') }}">Search Trip</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <div class="login">
                    @if (auth()->check())
                        <a href="{{ route('app.login') }}"> <button type="submit" class="btn">Login</button></a>
@else
<a href="{{ route('app.login') }}"> <button type="submit" class="btn">Login</button></a>
                        @endif
                </div>
            </nav>
        </div>

         <div class="content">
             <h1>BUS TICKETS </h1><br> <h3>ONLINE SERVICE</h3><br><p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> At molestias, perspiciatis sit consequuntur quos libero <br> asperiores ipsa quia nisi id nobis  porro. Id voluptas officiis <br> ratione vel quo fuga delectus quam natus nulla ad,<br> earum quis neque minima mollitia? Voluptatem officiis <br> nostrum numquam nulla odio.</p>
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

                    <div class="all">

                    <div class="search">

                        <div class="scuare">
                            <div class="scuare2">
                                <img src="logo" alt="">
                            </div>
                        </div>
                        <h3>search your bus</h3>
                        <p class="pa">choose your <br> origin,destination,just <br> choose a bus journey <br>dates and search for<br> buses</p>

                    </div>   </div>

                     <div class="all">

                    <div class="choose">

                        <div class="scuare">
                            <div class="scuare2">
                                <img src="logo" alt="">
                            </div>
                        </div>
                        <h3>search your bus</h3>
                        <p class="pa">choose your <br> origin,destination,just <br> choose a bus journey <br>dates and search for<br> buses</p>

                    </div>   </div>

                    <div class="all">

                    <div class="pay">

                        <div class="scuare">
                            <div class="scuare2">
                                <img src="logo" alt="">
                            </div>
                        </div>
                        <h3>search your bus</h3>
                        <p class="pa">choose your <br> origin,destination,just <br> choose a bus journey <br>dates and search for<br> buses</p>

                    </div>  </div>

                </div>
            </div>

        </section>

        <section id="slide2">
            <div id="navbarr">
                <div class="left">
                    <h2>Companies</h2>
                    <p>View recent COMPANIES </p>
                </div>

                </nav>

                <div class="view">
                    <a href="#"> <button type="submit" class="btn1">View all</button></a>
                 </div>
            </div>





            <div class="alll">

                <div class="rectangle1">

                    <div class="scuare">
                        <div class="scuare2">
                            <img src="logo" alt="">
                        </div>
                    </div>
                    <h3>tarwada company</h3>
                    <div class="vieww">
                        <a href="#"> <button type="submit" class="btn2">company profile</button></a>
                     </div>

                </div>   </div>

                 <div class="alll">

                <div class="rectangle2">

                    <div class="scuare">
                        <div class="scuare2">
                            <img src="logo" alt="">
                        </div>
                    </div>
                    <h3>al-qadmous company</h3>
                    <div class="vieww">
                        <a href="#"> <button type="submit" class="btn2">company profile</button></a>
                     </div>

                </div>   </div>

                <div class="alll">

                <div class="rectangle3">

                    <div class="scuare">
                        <div class="scuare2">
                            <img src="logo" alt="">
                        </div>
                    </div>
                    <h3>search your bus</h3>
                    <div class="vieww">
                        <a href="#"> <button type="submit" class="btn2">tarwada company</button></a>
                     </div>

                </div>  </div>

            </div>


        </section>

        <section class="slide3">

            <div class="center">
                <h2 class="h2">
                    Trips
                </h2>

                <p class="parg">search for your great trip</p>


                <div class="viewww">
                    <a href="busticket.html"> <button type="submit" class="btn3">Go & search</button></a>
                 </div>


            </div>

        </section>


    </main>


    <footer>

    </footer>



</body>
</html>
