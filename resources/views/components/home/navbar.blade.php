<header class="relative h-screen">

    <img src="{{ asset('images/Slice2.jpg') }}" alt="navbar image" class="absolute bottom-0 right-0 top-0 h-screen">

    <div class="absolute">
        <nav class="hidden md:block">
            <div class="mx-[20px] flex items-center">
                <img class="mb-[22px] mr-[-15px] w-[130px]" src="{{ asset('images/logoBus-removebg-preview.png') }}"
                    alt="bus_logo">
                <nav class="mx-[200px] h-[70px] w-[50vw]">
                    <ul style="text-shadow: 1px 2px 4px #ababab;"
                        class="mb-[2px] ml-[27px] mr-[17px] mt-[17px] flex items-center justify-between font-[Dosis] text-[20px] font-bold text-[#156082]">
                        <li><a href="#" class="hover:text-[#4dbacb]">Companies</a></li>
                        <li><a href="{{ route('app.Search') }}" class="hover:text-[#4dbacb]">Search Trip</a></li>
                        <li><a href="#" class="hover:text-[#4dbacb]">About Us</a></li>
                        <li><a href="{{ route('app.contactus') }}" class="hover:text-[#4dbacb]">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="login">
                    @if (auth()->check())
                        @livewire('logout-componant')
                    @else
                        <x-forms.button name="Login" as="link" :href="route('app.login')" />
                    @endif
                </div>
        </nav>

        <nav class="absolute bg-white md:hidden" x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen"
                class="block text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M21 5H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2zM3 11h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2zm18 6H3a1 1 0 1 1 0-2h18a1 1 0 0 1 0 2z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <div x-show="isOpen" class="h-screen w-screen">
                <ul class="px-4 py-2" style="text-shadow: 1px 2px 4px #ababab;">
                    <li><a href="#"
                            class="block py-2 text-center font-[Dosis] text-[20px] font-bold text-[#156082] hover:bg-[#13709a] hover:text-white">Companies</a>
                    </li>
                    <li><a href="{{ route('app.Search') }}"
                            class="block py-2 text-center font-[Dosis] text-[20px] font-bold text-[#156082] hover:bg-[#13709a] hover:text-white">Search
                            Trip</a></li>
                    <li><a href="#"
                            class="block py-2 text-center font-[Dosis] text-[20px] font-bold text-[#156082] hover:bg-[#13709a] hover:text-white">About
                            Us</a>
                    </li>
                    <li><a href="{{ route('app.contactus') }}"
                            class="block py-2 text-center font-[Dosis] text-[20px] font-bold text-[#156082] hover:bg-[#13709a] hover:text-white">Contact
                            Us</a></li>
                    @if (auth()->check())
                        <li class="bg-transparent">@livewire('logout-componant')</li>
                    @else
                        <li><a href="{{ route('app.login') }}"
                                class="block py-2 text-center font-[Dosis] text-[20px] font-bold text-[#156082] hover:bg-[#13709a] hover:text-white">Login</a>
                        </li>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="mx-[50px] mb-[54px] mt-[150px] w-screen md:mx-[150px]">
            <h1 class="mb-6 text-5xl text-blue-600">BUS TICKETS</h1>
            <p class="mb-4">At molestias, perspiciatis sit consequuntur quos libero</p>
            <h3 class="mb-4 text-xl text-blue-400">ONLINE SERVICE</h3>
            <p class="text-base font-medium leading-8 text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                asperiores ipsa quia nisi id nobis porro. Id voluptas officiis <br>
                ratione vel quo fuga delectus quam natus nulla ad,<br> earum quis neque minima mollitia? Voluptatem
                officiis <br>
                nostrum numquam nulla odio.
            </p>
            <a href="{{ route('app.Register') }}"
                class="mt-3 inline-block rounded-full bg-blue-500 px-6 py-3 text-lg font-bold text-white shadow-md transition duration-300 hover:bg-blue-600">Sign
                Up</a>

        </div>
    </div>
</header>
