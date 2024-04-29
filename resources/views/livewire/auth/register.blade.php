<x-slot:title>
    Sign up
</x-slot:title>
<div class="flex min-h-screen items-center justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: url(../images/login.png)">
    <div class="w-[420px] rounded-[40px] bg-transparent px-[30px] py-[40px] text-[#54A9BE] backdrop-blur-[20px]"
        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">
        <form wire:submit.prevent="submit">
            <h2 class="mb-10 text-center text-5xl">Sign Up</h2>

            <div class="relative my-[30px] h-[50px] w-full">
                <input type="text" placeholder="Full Name"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none"
                    required wire:model="name">
                <i class='bx bxs-user absolute right-8 top-1/2 -translate-y-1/2 transform text-2xl'></i>
            </div>
            <div class="relative my-[30px] h-[50px] w-full">
                <input type="email" placeholder="examble@gmail.com"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none"
                    required wire:model="email">
                <i class='bx bxs-user absolute right-8 top-1/2 -translate-y-1/2 transform text-2xl'></i>
                @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror


            </div>
            <div x-data="{ isPasswordShown: false }" class="relative my-[30px] h-[50px] w-full">
                <input x-bind:type="isPasswordShown ? 'text' : 'password'" placeholder="password"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none"
                    required wire:model="password">
                @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <i @click="isPasswordShown = !isPasswordShown"
                    class='bx bxs-lock-alt absolute right-8 top-1/2 -translate-y-1/2 transform cursor-pointer text-2xl'></i>
            </div>

            <div x-data="{ isPasswordShown: false }" class="relative my-[30px] h-[50px] w-full">
                <input x-bind:type="isPasswordShown ? 'text' : 'password'" name="password_confirmation"
                    placeholder="confirm password" wire:model="confirmPassword"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none"
                    required>
                @error('confirmPassword')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                <i @click="isPasswordShown = !isPasswordShown"
                    class='bx bxs-lock-alt absolute right-8 top-1/2 -translate-y-1/2 transform cursor-pointer text-2xl'></i>
            </div>
            <button type="submit"
                class="btn flex h-12 w-full cursor-pointer items-center justify-center rounded-full border-none bg-blue-500 text-lg font-semibold text-white shadow-md outline-none transition duration-300 ease-in-out hover:bg-blue-700">Sign
                Up

                <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
            </button>


        </form>
    </div>
</div>
