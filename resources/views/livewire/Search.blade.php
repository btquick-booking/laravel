<div>

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Search.css')}}">
    </x-slot:css>

    <x-slot:title>
        Search
    </x-slot:title>
    <nav>.</nav>

    <div>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('app.home') }}">Home</a></li>

                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <h2 class=" h22 text-[45px] text-['Segoe UI', Tahoma, Geneva, Verdana, sans-serif] text-[#195E82]  ml-[18px]  my-[0px]  mr-[30px] ">Booking Tickets</h2>
        <h4 class=" h4  text-[28px] ml-[15px] my-[0px] mr-[30px]  text-[#195E82]" >Search For Your Trip</h4>


        <br>
        <form action="{{ route('app.departurelist') }}">
           <div class=" sta ml-[-7px] my-[0px] mr-[35px]">
            {{-- <input id="status" type="radio" name="status"><label  class="T_S" for="status">One Way</label> --}}
            {{-- <input id="statuss" type="radio" name="status"><label class="T_S" for="statuss">Round-Trip</label> --}}
           </div>

            <select name="origin" class="s" >
                <option value="">Origin</option>
                @foreach ([
                    'Damascus' => 'Damascus',
                    'Homs' => 'Homs',
                    'Daraa' => 'Daraa',
                    'Latakia' => 'Latakia',
                    'Aleppo' => 'Aleppo',
                    'Hama' => 'Hama',
                    'Tartous' => 'Tartous',
                    'Quneitra' => 'Quneitra',
                    'Tadmur' => 'Tadmur',
                    'Al-Hasakah' => 'Al-Hasakah',
                    'As-Suwayda' => 'As-Suwayda',
                    'Deir ez-Zor' => 'Deir ez-Zor',
                    'Idlib' => 'Idlib',
                    'Rif Dimashq' => 'Rif Dimashq',
                    'Ar-Raqqah' => 'Ar-Raqqah',
                ] as $key=> $item)

<option value="{{$key}}">{{$item}}</option>
                @endforeach
            </select>

            <select name="destination"   class="s">
              <option value="">destination</option>
              @foreach ([
                'Damascus' => 'Damascus',
                'Homs' => 'Homs',
                'Daraa' => 'Daraa',
                'Latakia' => 'Latakia',
                'Aleppo' => 'Aleppo',
                'Hama' => 'Hama',
                'Tartous' => 'Tartous',
                'Quneitra' => 'Quneitra',
                'Tadmur' => 'Tadmur',
                'Al-Hasakah' => 'Al-Hasakah',
                'As-Suwayda' => 'As-Suwayda',
                'Deir ez-Zor' => 'Deir ez-Zor',
                'Idlib' => 'Idlib',
                'Rif Dimashq' => 'Rif Dimashq',
                'Ar-Raqqah' => 'Ar-Raqqah',
            ] as $key=> $item)

          <option value="{{$key}}">{{$item}}</option>
            @endforeach

          </select>
          <br>
          <br>
          <br>

          <input class="T_D" name="date" type="date" placeholder="Trip date" >


          <select name="company"   class="s" >
              <option value="">Company</option>
              @foreach (  $companies   as  $key=> $item)
               <option value="{{$key}}">{{$item}}  </option>
               @endforeach

          </select>


          <input  name="min_price" type="number" placeholder="Min Price" >
          <input  name="max_price" type="number" placeholder="Max Price" >
          <br><br>
          <button type="submit" class="bt"  >Search</button>
        </form>
    </div>


</div>
