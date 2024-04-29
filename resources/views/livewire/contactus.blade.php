<x-slot:title>
    Contact Us
</x-slot:title>

<div class="flex min-h-screen w-full flex-col justify-between bg-cover bg-center md:flex-row"
    style="background-image: url({{ asset('images/contactUs.png') }})">
    <div
        class="mt-[200px] w-[420px] rounded-[40px] bg-transparent px-[15px] py-[40px] text-[#54A9BE] backdrop-blur-[20px] md:px-[30px]">
        <form wire:submit.prevent="submit">
            <h2 class="-mt-20 ml-6 font-[Dosis] text-5xl text-blue-700 md:ml-12"
                style="text-shadow: 3px 3px 7px #ababab;">
                Contact
                Us</h2>
            <div class="my-[30px] ml-6 w-full md:ml-12">
                <input type="text" placeholder="Enter your Name" required wire:model="name"
                    class="ease h-[53px] w-full rounded-[40px] border-none bg-transparent p-[20px] text-[16px] text-[#54A9BE] outline-none transition-all duration-500"
                    style="border: 2px solid #54A9BE; box-shadow: 2px 2px 7px #ababab;">
            </div>
            <div class="my-[30px] ml-6 w-full md:ml-12">
                <input type="email" placeholder="Enter Your Email" required wire:model="email"
                    class="ease h-[53px] w-full rounded-[40px] border-none bg-transparent p-[20px] text-[16px] text-[#54A9BE] outline-none transition-all duration-500"
                    style="border: 2px solid #54A9BE; box-shadow: 2px 2px 7px #ababab;">
            </div>
            <div class="my-[30px] ml-6 w-full md:ml-12">
                <textarea type="text" placeholder="Enter Your Message" required wire:model="message"
                    class="ease h-[200px] w-full rounded-[40px] border-none bg-transparent p-[20px] text-center text-[16px] text-[#54A9BE] outline-none transition-all duration-500"
                    style="border: 2px solid #54A9BE; box-shadow: 2px 2px 7px #ababab;">
                </textarea>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="ml-10 flex h-12 w-1/2 cursor-pointer items-center justify-center rounded-full border-none bg-blue-500 text-lg font-semibold text-white shadow-md outline-none transition duration-300 ease-in-out hover:bg-blue-700 md:ml-14">Send
                    <x-filament::loading-indicator wire:loading class="ml-2 h-5 w-5" /></button>
            </div>
        </form>
    </div>
    <div class="flex items-center justify-center md:mr-20 md:mt-14 md:block">
        <a href="{{ route('app.home') }}"
            class="duration-400 mb-3 w-1/2 rounded-full bg-blue-500 px-4 py-2 text-center font-semibold text-white shadow-md transition ease-in-out hover:bg-blue-600">Back
            To Home</a>

    </div>
</div>
