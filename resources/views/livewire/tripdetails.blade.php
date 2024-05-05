<div>
    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Tripdetails.css')}}">
        <link rel="stylesheet" type="text/css" href="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.0/maps/maps.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    </x-slot:css>

    <x-slot:title>
        Tripdetails
        </x-slot:title>
    <div class="card-details">
        <h2 class="text-[60px] m-[0px] absolute top-[-50px] font-bold font-['Raleway'] text-[#3f70d0] " style="text-shadow: 2px 2px 6px #ababab;" >Trip details</h2>

        <P class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Origin:<span>{{ $trip->Starting_place }}</span> </P>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Destination:<span>{{ $trip->Destination_place }}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Trip Date:<span>{{ $trip->date }}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Departure Time:<span>{{ $trip->starting_time }}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Access Time:<span>{{ $trip->Access_time }}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Number Of Seats:<span>{{ $trip->Number_of_seat }}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Driver name:<span>{{ $trip->Driver_name}}</span> </p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Price: <span>{{ $trip->Trip_price }}sp</span></p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] relative top-[13px]">Company: <span>{{ $trip->bus->Company->Company_Name }}</span></p>
        <p class="text-[24px] font-['Raleway'] font-bold text-[#3f70d0] absolute left-[410px] top-[51px] leading-[31px] ">Details of the trip:<span>{{ $trip->Details }} </span> </p>
            <a href="{{ route('app.bookingconfirm',['trip' => $trip->id]) }}   ">

            <button class="btn_book" type="submit">Book now</button></a>
            <button class="btn_back" type="submit">Back</button>

      </div>

      <div id="map" style="width: 546px ;height: 70vh; " ></div>

     <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.0/maps/maps-web.min.js"></script>
        <script>
            const map = tt.map({
              key: "{{ config('tomtom.key') }}",
              container: "map",
              zoom: 5,
            })


            map.easeTo({
                center: @js($startPlaceLatLng),
                zoom: 5,
                bearing: 0,
                pitch: 0,
                duration: 2000,
            })
            var marker = new tt.Marker()
          .setLngLat( @js($startPlaceLatLng))
         .addTo(map);


         map.easeTo({
                center: @js($DestinationplaceLatLng),
                zoom: 8,
                bearing: 0,
                pitch: 0,
                duration: 2000,
            })
            var marker = new tt.Marker()
          .setLngLat( @js($DestinationplaceLatLng))
         .addTo(map);
          </script>
</div>
