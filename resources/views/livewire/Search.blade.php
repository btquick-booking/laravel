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
        <h2 id="h22">Booking Tickets</h2>
        <h4>Search For Your Trip</h4>


        <br>
        <form action="{{ route('app.departurelist') }}">
           <div class="sta">
            <input id="status" type="radio" name="status"><label  class="T_S" for="status">One Way</label>
            <input id="statuss" type="radio" name="status"><label class="T_S" for="statuss">Round-Trip</label>
           </div>

            <select name="origin" id="">
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

            <select name="destination" id="" >
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
          <input id="T_D" name="date" type="date" placeholder="Trip date" >


          <select name="company" id="">
              <option value="">Company</option>
              @foreach (  $companies   as  $key=> $item)
               <option value="{{$key}}">{{$item ->Company_Name}}  </option>
               @endforeach

          </select>
          <br><br>
          <button type="submit">Search</button>
        </form>
    </div>


</div>
