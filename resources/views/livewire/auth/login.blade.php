<div class="flex min-h-screen items-center justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: url(../images/login.png)">
    <div class="w-[420px] rounded-[40px] bg-transparent px-[30px] py-[40px] text-[#54A9BE] backdrop-blur-[20px]"
        style="border: 2px solid rgba(255, 255, 255, .2); box-shadow: 0 0 10px rgba(0, 0, 0, .2);">
        <form wire:submit.prevent="submit">
            <h2 class="mb-10 text-center text-5xl">Login</h2>
            <div class="relative my-[30px] h-[50px] w-full">
                <input type="email" placeholder="Email" required wire:model="email"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none">
                <i class='bx bxs-user absolute right-8 top-1/2 -translate-y-1/2 transform text-2xl'></i>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                @if (Session::has('email_error'))
                    <span class="text-red-500">{{ Session::get('email_error') }}</span>
                @endif
            </div>
            <div x-data="{ isPasswordShown: false }" class="relative my-[30px] h-[50px] w-full">
                <input x-bind:type="isPasswordShown ? 'text' : 'password'" placeholder="Password" required
                    wire:model="password"
                    class="h-full w-full rounded-full border-2 border-blue-500 bg-transparent px-8 text-base text-blue-500 placeholder-blue-500 outline-none">
                <i @click="isPasswordShown = !isPasswordShown"
                    class="bx bxs-lock-alt absolute right-8 top-1/2 -translate-y-1/2 transform cursor-pointer text-2xl"></i>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="forget-pass mb-5 flex justify-between text-sm">
                <label><input type="checkbox" wire:model="rememberMe" class="mr-1"> Remember me</label>
                <a href="#" class="text-blue-500 hover:underline">Forget password?!</a>
            </div>
            <button type="submit"
                class="btn flex h-12 w-full cursor-pointer items-center justify-center rounded-full border-none bg-blue-500 text-lg font-semibold text-white shadow-md outline-none transition duration-300 ease-in-out hover:bg-blue-700">
                Login
                <x-filament::loading-indicator wire:loading class="ml-2 h-5 w-5" />
            </button>
            <div class="register-link mt-8 text-center">
                <p>Don't have an account?! <a href="{{ route('app.Register') }}"
                        class="font-semibold text-blue-500 hover:underline">Register</a></p>
            </div>
        </form>
    </div>
</div>
