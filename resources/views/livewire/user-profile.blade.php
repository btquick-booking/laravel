<x-slot:css>
    <link rel="stylesheet" href="{{ asset('css/UserProfile.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fontawesome.com/icons/location-dot?f=classic&s=solid&pc=%23184aaf">
</x-slot:css>
<x-slot:title>
    User Profile
</x-slot:title>
<div>
    <div class="image">
        <img src="{{ asset('images/Manprofile2.jpg') }}" alt="">
        <a href="{{ route('app.home') }}"><button class="btn_home">Home</button></a>
        <button class="btn_logout">Logout</button>
    </div>
    <div class="line"></div>
    <h2 class="h2_profile">My Profile</h2>
    <div class="User_info">
        <h3>Full Name: <span>{{ auth()->user()->name }} .</span></h3>
    </div>
    <div class="User_info">
        <h3>User Name: <span>{{ auth()->user()->name }} .</span></h3>
    </div>

    <div class="User_info" style="
    position: relative;
    left: 775px;
    bottom: 313px;">
        <h3>Email Address: <span>{{ auth()->user()->email }} .</span></h3>
    </div>

    <!-- <div class="User_info" style="
    position: relative;
    left: 775px;
    bottom: 314px;"><h3>Phone Number: <span>+987 476 394 854 .</span></h3> </div> -->

    <!-- <div class="User_info" style="
    position: relative;
    bottom: 313px;"><h3>Birth Date: <span>10-2-2000.</span></h3> </div> -->

    <button class="btn_edit">Edit</button>
    <!-- <button class="btn_delete">Delete</button> -->

    <!-- <div class="line2"></div> -->
    <!-- <div class="User_info" ><h3>My Accounts: <span>facebook/google/instagram .</span></h3> </div> -->
    <h2 class="h2_trip">My Trips</h2>
    @foreach ($trips as $trip)
        <div class="my_trips">
            <div class="trip">
                <div class="top_part"></div>
                <div class="circle1">
                    <div class="circle2">
                        <i class="fa-solid fa-bus"></i>
                    </div>
                </div>
                <!-- <img src="arrow1 (1).png" width="80px" height="80px" alt="" style=" width: 57px;height: 59px;position: absolute;top: 126px;left: 107px; color: #1a4fb6;"> -->

                <i class="fa-solid fa-location-dot"
                    style="color: #4f84ea;position: absolute;left: 45px;top: 127px;font-size: 25px;"></i>
                <i class="fa-solid fa-location-dot"
                    style="color: #4f84ea;position: absolute;left: 204px;top: 127px;font-size: 25px;"></i>
                <h4 style="position: relative;left: 190px;bottom: 11px;">{{ $trip->Starting_place }}</h4>
                <p>{{ $trip->Access_time }} <br> {{ $trip->date }}</p>
                <h4 style="position: relative;left: 19px;bottom: 55px;">{{ $trip->Destination_place }}</h4>

                <!-- <h4 class="time_date">Date & Time:</h4> -->
                @if (Carbon\Carbon::parse("{$trip->date} {$trip->starting_time}")->isPast())
                    <button class="btn_status">
                        Previous trip
                    </button>
                @else
                    <button class="btn_status">
                        Current trip
                    </button>
                    <button class="btn_Edit_card" wire:click="cancel({{ $trip }})">Cancel</button>
                @endif



                <!-- <i class="fa-solid fa-bus" style=" position: relative; left: 153px;"></i> -->
            </div>
        </div>
    @endforeach
</div>
