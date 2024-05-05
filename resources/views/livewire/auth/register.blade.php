<x-slot:css>
    <link rel="stylesheet" href="{{asset('css/signUp.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</x-slot:css>



<div class="flex justify-center items-center min-h-[100vh] m-[0%] p-[0%] bg-cover bg-no-repeat bg-center" style="background :url(../images/signup.png);">
    <div class="cc">
        <form wire:submit.prevent="submit">
    <h2>Sign Up</h2>

    <div class="input-box">
        <input type="text" placeholder="Full Name" required wire:model="name">
        <i class='bx bxs-user'></i>
    </div>
      <div class="input-box">
        <input type="email" placeholder="examble@gmail.com" required wire:model="email">
        <i class='bx bxs-lock-alt' ></i>
        @error('email')
        <span style="color: red">{{ $message }}</span>
        @enderror


      </div>
      <div class="input-box">
        <input type="password" placeholder="password" required wire:model="password">
        @error('password')
        <span style="color: red">{{ $message }}</span>
        @enderror
        <i class='bx bxs-lock-alt' ></i>
      </div>

      <div class="input-box">
        <input type="password" name="password_confirmation" placeholder="confirm password" wire:model="confirmPassword" required>
        @error('confirmPassword')
        <span style="color: red">{{ $message }}</span>
        @enderror
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn" style="display: flex; justify-content: center; align-items: center;">Sign Up

        <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
      </button>


    </form>
</div>
</div>

