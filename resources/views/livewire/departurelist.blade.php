
 <div>

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/departurelist.css')}}">
    </x-slot:css>

    <x-slot:title>
        Departure List
    </x-slot:title>

    <nav>
        <h2>Departure List</h2>
      </nav>

      @foreach ($data as $trip)

      <table >
          <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Date & Time</th>
          <th>Seats</th>
          <th>Price</th>
          <th>Action</th>
          </tr>

            <tr>
                <td>{{ $trip->Starting_place }}</td>
                <td>{{ $trip->Destination_place }}</td>
                <td>{{ $trip->date }} {{ $trip->starting_time }}</td>
                <td>{{ $trip->Number_of_seat }}</td>
                <td>{{ $trip->Trip_price }}sp</td>
                <td><button ><a href="{{ route('app.Tripdetails', ['trip' => $trip->id]) }}">Details</a></button></td>
            </tr>


      </table>
      <br>
      @endforeach
      <br>

 </div>

