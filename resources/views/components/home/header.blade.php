<header>

    <nav class="navbar">
        <div class="mb-[37px] ml-[26px] mr-[26px] mt-[37px] flex items-end justify-between">
            <img class="mb-[-34px] ml-[20px] mr-[0px] mt-[23px] w-[126px]"
                src="{{ asset('images/logoBus-removebg-preview.png') }}" alt="bus_logo">
            <nav class="float-left h-[70px] w-[600px]">
                <ul class="float-left mt-[-10px] flex list-none items-center justify-center">
                    <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                            class="font-['Raleway'] text-[18px] font-bold text-[#053ead] decoration-[none] hover:text-[#87adf9]"
                            href="#">Companies</a></li>
                    <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                            class="font-['Raleway'] text-[18px] font-bold text-[#053ead] decoration-[none] hover:text-[#87adf9]"
                            href="{{ route('app.Search') }}">Search Trip</a></li>
                    <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                            class="font-['Raleway'] text-[18px] font-bold text-[#053ead] decoration-[none] hover:text-[#87adf9]"
                            href="{{ route('app.home') }}">About
                            Us</a></li>
                    <li class="mt-[29px] list-none p-[14px] pr-[26px] text-[15.5px]"><a
                            class="font-['Raleway'] text-[18px] font-bold text-[#053ead] decoration-[none] hover:text-[#87adf9]"
                            href="{{ route('app.contactus') }}">Contact Us</a></li>
                </ul>
            </nav>

            @if (auth()->check())
                @livewire('logout-componant')
            @else
                <a href="{{ route('app.login') }}"> <button type="submit"
                        class="mt-[-10px] inline-block h-[40px] w-[100px] cursor-pointer rounded-[40px] bg-[#fff] font-['Raleway'] text-[17px] font-bold text-[#3f70d0] transition duration-[.3s] ease-in hover:bg-[#3f70d0] hover:text-[#fff]"
                        style="border: 2px solid #fff; box-shadow: 0px 1px 10px;">Login</button></a>
            @endif
        </div>
    </nav>

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




    <div class="mb-[10px] ml-[54px] mr-[10px] mt-[10px] flex h-auto w-[1200px] flex-col justify-center">
        <h1 class="mt-[7%] pl-[20px] text-[60px] font-bold tracking-[2px] text-[#3f70d0]"
            style="text-shadow: 1px 1px 3px #ababab;">TRAVEL IT </h1><br>
        <h3 class="ml-[21px] font-[600px] text-[#3f70d099]">ONLINE SERVICE</h3><br>
        <p
            class="pb-[25px] pl-[20px] font-['Raleway'] text-[18px] font-[600px] leading-[30px] tracking-[1.5px] text-[#4e4d4d]">
            A Website for organizing and managing trips and<br>
            reservations throughout Syria between customers<br>
            and transportation companies to facilitate the<br>
            reservation process, save time,and achieve <br>
            a unique experience for users.</P>
        <button
            class="mb-[10px] ml-[20px] h-[40px] w-[160px] cursor-pointer rounded-[40px] border-none bg-[#3f70d0] font-['Raleway'] text-[18px] font-bold transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:shadow-slate-500"
            style=":hover{box-shadow:1px 2px 7px #ababab}">
            <a class="font-['Raleway'] tracking-[2px] text-[#fff] decoration-[none] transition duration-[.3s] ease-in"
                href="{{ route('app.Register') }}">Sign Up</a></button>
    </div>
</header>
