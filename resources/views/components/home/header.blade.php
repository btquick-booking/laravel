<header>

        <nav class="navbar">
            <div class="flex justify-between items-end mt-[37px] mb-[37px] ml-[26px] mr-[26px]" >
                <img class="w-[126px] mt-[23px] mr-[0px] mb-[-34px] ml-[20px]" src="{{ asset('images/logoBus-removebg-preview.png') }}" alt="bus_logo">
                <nav class="w-[600px] float-left h-[70px]">
                    <ul class="list-none mt-[-10px] flex justify-center items-center float-left">
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#053ead] hover:text-[#87adf9]"
                                href="#">Companies</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#053ead] hover:text-[#87adf9]"
                                href="{{ route('app.Search') }}">Search Trip</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#053ead] hover:text-[#87adf9]"  href="{{ route('app.companyprofile') }}">About
                                Us</a></li>
                        <li class="list-none text-[15.5px] mt-[29px] p-[14px] pr-[26px]"><a class="decoration-[none] text-[18px] font-['Raleway'] font-bold text-[#053ead] hover:text-[#87adf9]"
                                href="{{ route('app.contactus') }}">Contact Us</a></li>
                    </ul>
                </nav>

                    @if (auth()->check())
                        @livewire('logout-componant')
                    @else
                        <a href="{{ route('app.login') }}"> <button type="submit" class="mt-[-10px] w-[100px] h-[40px] bg-[#fff] rounded-[40px] text-[17px] font-['Raleway']
                            font-bold inline-block cursor-pointer text-[#3f70d0] transition duration-[.3s] ease-in hover:bg-[#3f70d0] hover:text-[#fff]  "
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




    <div class="w-[1200px] h-auto mt-[10px] mr-[10px] mb-[10px] ml-[54px] flex flex-col justify-center">
        <h1 class="text-[60px] text-[#3f70d0] font-bold pl-[20px] mt-[7%] tracking-[2px]" style="text-shadow: 1px 1px 3px #ababab;">TRAVEL IT </h1><br>
        <h3 class="font-[600px] ml-[21px] text-[#3f70d099]">ONLINE SERVICE</h3><br>
        <p class="tracking-[1.5px] pl-[20px] pb-[25px] font-['Raleway'] leading-[30px] text-[18px] font-[600px] text-[#4e4d4d]">A Website for organizing and managing trips and<br>
            reservations throughout Syria between customers<br>
            and transportation companies to facilitate the<br>
             reservation process, save time,and achieve <br>
             a unique experience for users.</P>
        <button  class="w-[160px] h-[40px] bg-[#3f70d0] border-none mb-[10px] ml-[20px] text-[18px] font-['Raleway'] font-bold rounded-[40px] cursor-pointer transition duration-[.4s] ease-in hover:bg-[#4784dc] hover:shadow-slate-500" style=":hover{box-shadow:1px 2px 7px #ababab}">
            <a class="decoration-[none] text-[#fff] transition duration-[.3s] ease-in  font-['Raleway'] tracking-[2px]" href="{{ route('app.Register') }}">Sign Up</a></button>
    </div>
</header>
