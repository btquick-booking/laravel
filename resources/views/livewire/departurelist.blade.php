
 <div >

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/departurelist.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </x-slot:css>

    <x-slot:title>
        Departure List
    </x-slot:title>

    <nav>
        <h2 class="text-3xl font-bold text-[45px] mt-[60px] mr-[0px] mb-[60px] ml-[30px]  text-[#3f70d0] " style="text-shadow: 1px 1px 3px #ababab;" >Departure List</h2>
      </nav>

      @foreach ($data as $trip)

      <table class="w-[98%] text-[20px] items-center mt-[20px] ml-[13px]  border border-gray-200 shadow-md " style="box-shadow: 1px 2px 15px #ababab;">
          <tr>
          <th  class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;">Origin</th>
          <th class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;">Destination</th>
          <th class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;" >Date & Time</th>
          <th class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;" >Seats</th>
          <th class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;" >Price</th>
          <th class="bg-blue-500 text-white h-[40px] p-[15px] w-10 " style="border: 2px solid #fff;" >Action</th>
          </tr>

            <tr>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;" >{{ $trip->Starting_place }}</td>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;"  >{{ $trip->Destination_place }}</td>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;" >{{ $trip->date }} {{ $trip->starting_time }}</td>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;"  >{{ $trip->availableSeats}}</td>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;"  >{{ $trip->Trip_price }}sp</td>
                <td class="bg-[#E5E5E5] font-medium h-10 w-[35px] p-[10px] text-center text-[#3f70d0]" style="border: 2px solid #fff;"  ><button class="bg-[#f0efefe8] border border-blue-700 rounded-[5px]  p-[7px] hover:bg-[#c6d7e4]"><a href="{{ route('app.Tripdetails', ['trip' => $trip->id]) }}" class="text-blue-700 decoration-[none] font-medium text-[20px] ">Details</a></button></td>
            </tr>


      </table>
      <br>
      @endforeach
      <br>

 </div>

