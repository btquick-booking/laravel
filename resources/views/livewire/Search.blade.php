<div  class="min-h-[91vh] bg-cover bg-no-repeat bg-center font-['Raleway']" style="background-image: url('../images/Slice3.png')" >

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Search.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </x-slot:css>

    <x-slot:title>
        Search
    </x-slot:title>
    <nav>.</nav>

<div class="mt-[52px] mr-[0px] mb-[0px] ml-[44px] relative top-[26px]">
        <nav class="text-[#fff] mt-[0px] mr-[10px] mb-[45px] ml-[10px]">
            <ul class="float-right flex mr-[60px] justify-center items-center" >
                <li  class="list-none mt-[5px] mr-[40px] text-[20px]" ><a  class="decoration-[none] text-[23px] font-bold font-['Raleway'] text-[#3f70d0] duration-[0.4s] ease-in-out hover:text-[#87adf9]" href="{{ route('app.home') }}">Home</a></li>

                <li  class="list-none mt-[5px] mr-[40px] text-[20px]" ><a class="decoration-[none] text-[23px] font-bold font-['Raleway'] text-[#3f70d0] duration-[0.4s] ease-in-out hover:text-[#87adf9]"  href="#">About Us</a></li>
                <li class="list-none mt-[5px] mr-[40px] text-[20px]" ><a class="decoration-[none] text-[23px] font-bold font-['Raleway'] text-[#3f70d0] duration-[0.4s] ease-in-out hover:text-[#87adf9]" href="#">Contact Us</a></li>
            </ul>
        </nav>
        <h2  class="text-[50px] font-['Raleway'] font-bold text-[#3f70d0] my-[21.5px] mx-[0px]" style="text-shadow: 1px 1px 3px #ababab;">Searching Trips</h2>
        <h4 class="text-[26px] font-[600] text-[#3f70d0a6] mx-[0px] mt-[21.5px] mb-[31.5px]">Search For Your Trip</h4>


        <br>
        <form action="{{ route('app.departurelist') }}">
           {{-- <div class=" sta ml-[-7px] my-[0px] mr-[35px]">
            <input id="status" type="radio" name="status"><label  class="T_S" for="status">One Way</label>
            <input id="statuss" type="radio" name="status"><label class="T_S" for="statuss">Round-Trip</label>
           </div> --}}

    <select     class="text-[18px] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[5px] pb-[0px] pl-[7px] ml-[4px] mb-[11px] text-[#888888] bg-transparent "
    style=" border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7; :focus{ outline: none; border: #3c6981 solid 2px;}"
    name="origin"  >
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

            <select  class="text-[18px] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[5px] pb-[0px] pl-[7px] ml-[4px] mb-[11px] text-[#888888] bg-transparent "
            style=" border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7; :focus{ outline: none; border: #3c6981 solid 2px;}"
             name="destination"   >
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


          <input class="text-[18px] font-['Raleway'] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[4px] pb-[0px] pl-[10px] ml-[4px] mb-[11px] text-[#888888] " style="border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7;" name="date" type="date" placeholder="Trip date" >


          <select class="text-[18px] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[5px] pb-[0px] pl-[7px] ml-[4px] mb-[11px]
          text-[#888888] bg-transparent "
         style=" border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7; :focus{ outline: none; border: #3c6981 solid 2px;}"
          name="company"    >
              <option value="">Company</option>
              @foreach (  $companies   as  $key=> $item)
               <option value="{{$key}}">{{$item}}  </option>
               @endforeach

          </select>

          <input class="text-[18px] font-['Raleway'] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[4px] pb-[0px] pl-[10px] ml-[4px] mb-[11px] text-[#888888] " style="border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7; position: relative;  right: 397px;  top: 54px;" name="max_price" type="number" placeholder="Max Price" >
          <input class="text-[18px] font-['Raleway'] w-[389px] h-[45px] rounded-[40px] pt-[0px] pr-[4px] pb-[0px] pl-[10px] ml-[4px] mb-[11px] text-[#888888]  " style="border: 1.5px solid #388ab6; box-shadow: 1px 2px 2px #c7c7c7;" name="min_price" type="number" placeholder="Min Price" >

          <br><br>
          <button class="text-[19px] w-[156px] h-[41px] text-[#fff] mt-[18px] mr-[0px] mb-[0px] ml-[640px] border-none font-['Raleway'] rounded-[40px] cursor-pointer bg-[#3f70d0] font-[600] tracking-[0.5px] transition duration-[.4s] ease-in hover:bg-[#4784dc]" style="box-shadow: 0px 1px 5px #b3b3b3;" type="submit"   >Search</button>
        </form>
    </div>


</div>
