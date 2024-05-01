<div >

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Bookingconfirm.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </x-slot:css>

    <x-slot:title>
        Bookingconfirm
    </x-slot:title>

    <h2  class="h2" >Booking confirmation</h2>
    <h3 class="h3" > Insert your information to confirm Booking </h3>
    <div class="info_card"><p>Sedra Nizar Shawish</p>
        <button class="btn_card" type="submit">Edit</button> <button class="btn_card" type="submit">Delete</button>
    </div>
    <!-- <h3>book now to get the best trip</h3> -->
    <form  wire:submit.prevent="submit">
        <input class="data" type="text" placeholder="Full Name" name="Name"  required wire:model="FullName">
        <input class="data" type="text" placeholder="Mother Name" name="Name" required wire:model="MotherName" >

        <br>
        <input class="data" type="text" placeholder="Father Name" name="Name"  required wire:model="FatherName" >
        <input class="data" type="number" placeholder="ID Number" name="Id"  required wire:model="ID_Number" >

        <br>
        <input class="data" type="date" placeholder="Birthdate" name="Birth_date" required wire:model="Birth_date" >
        <input class="data" type="text" placeholder="Gander" name="gander"  required wire:model="gander" >
        <br>
        <button id="plus" type="submit">+</button>

      <a  href="{{route('app.home')}}" >
      <button id="con" type="submit">confirm

        </button></a>

    </form>
    <x-slot:js>
<script src="book.js"></script></div>
</x-slot:js>
