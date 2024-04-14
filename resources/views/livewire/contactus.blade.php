<div id ="body">

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/ContactUs.css')}}">
    </x-slot:css>

    <x-slot:title>
        ContactUs
    </x-slot:title>
    <div class="cc">

        <form wire:submit.prevent="submit">
    <h2>Contact Us</h2>


    <div class="input-box">
        <input type="text" placeholder="Enter your Name " required wire:model="name">
        <!-- <i class='bx bx-user'></i> -->

    </div>

    <div class="input-box">
        <input type="email" placeholder="Enter Your Email" required wire:model="email">
        <!-- <i class='bx bx-envelope bx-tada bx-flip-horizontal' ></i> -->

    </div>


<div class="input-box">
    <input type="text" class="txt" placeholder="Enter Your Message" required wire:model="message">
    <!-- <i class='bx bx-pencil bx-tada' ></i> -->

</div></div>

<button type="submit" class="btn" style="display: flex; justify-content: center; align-items: center;">Send

    <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
  </button>
    </form>
    <!-- </div> -->
    <div class="menu">
        <button class="back_home">Back To Home</button>
    </div>


</div>
