<header>
    <div class="hidden md:block">
        <nav class="navbar">
            <div id="navbar" {{-- class=" navbar flex justify-between items-center m-[0px 20px]" --}}>
                <img class="rotate-div" src="{{ asset('images/logoBus-removebg-preview.png') }}" alt="bus_logo">
                <nav class="menu">
                    <ul class="mt-[-4px] flex justify-center items-center">
                        <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a
                                href="#">Companies</a></li>
                        <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a
                                href="{{ route('app.Search') }}">Search Trip</a></li>
                        <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a href="#">About
                                Us</a></li>
                        <li class=" menuu text-[15.5px] ml-[27px] mt-[17px] mr-[17px] mb-[2px]"><a
                                href="{{ route('app.contactus') }}">Contact Us</a></li>
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
    </div>
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
    </div>




    <div class="content">
        <h1>BUS TICKETS </h1><br>
        <h3>ONLINE SERVICE</h3><br>
        <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
            At molestias, perspiciatis sit consequuntur quos libero <br>
            asperiores ipsa quia nisi id nobis porro. Id voluptas officiis <br>
            ratione vel quo fuga delectus quam natus nulla ad,<br> earum quis neque minima mollitia? Voluptatem
            officiis <br>
            nostrum numquam nulla odio.</p>
        <button class="cn"><a href="{{ route('app.Register') }}">Sign Up</a></button>
    </div>
</header>
