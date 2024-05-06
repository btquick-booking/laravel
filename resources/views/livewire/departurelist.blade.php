
 <div class="body">

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/departurelist.css')}}">
    </x-slot:css>

    <x-slot:title>
        Departure List
    </x-slot:title>

    <nav>
        <h2 class="h2" >Departure List</h2>
      </nav>

      @foreach ($data as $trip)

      <table class="table">
          <tr>
          <th  class="th">Origin</th>
          <th class="th">Destination</th>
          <th class="th" >Date & Time</th>
          <th class="th" >Seats</th>
          <th class="th" >Price</th>
          <th class="th" >Action</th>
          </tr>

            <tr>
                <td class="td" >{{ $trip->Starting_place }}</td>
                <td class="td"  >{{ $trip->Destination_place }}</td>
                <td class="td"  >{{ $trip->date }} {{ $trip->starting_time }}</td>
                <td class="td"  >{{ $trip->availableSeats}}</td>
                <td class="td"  >{{ $trip->Trip_price }}sp</td>
                <td class="td"  ><button ><a href="{{ route('app.Tripdetails', ['trip' => $trip->id]) }}">Details</a></button></td>
            </tr>


      </table>
      <br>
      @endforeach
      <br>

 </div>

