<div>
    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Tripdetails.css')}}">
    </x-slot:css>

    <x-slot:title>
        Tripdetails
        </x-slot:title>
    <div class="card-details">
        <h2>Trip details</h2>

        <P>Origin:<span>{{ $trip->Starting_place }}</span> </P>
        <p>Destination:<span>{{ $trip->Destination_place }}</span> </p>
        <p>Trip Date:<span>{{ $trip->date }}</span> </p>
        <p>Departure Time:<span>{{ $trip->starting_time }}</span> </p>
        <p>Access Time:<span>{{ $trip->Access_time }}</span> </p>
        <p>Number Of Seats:<span>{{ $trip->Number_of_seat }}</span> </p>
        <p>Driver name:<span>{{ $trip->Driver_name}}</span> </p>
        <p>Price: <span>{{ $trip->Trip_price }}sp</span></p>
        <p>Company: <span>{{ $trip->bus->Company->Company_Name }}</span></p>
        <p class="details">Details of the trip:<span>{{ $trip->Details }} </span> </p>
            <a href="{{ route('app.Tripdetails',['trip' => $trip->id]) }}   ">
            <button type="submit">Book now</button>
            </a>
      </div>
</div>
