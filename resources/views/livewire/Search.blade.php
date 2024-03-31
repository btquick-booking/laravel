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
                <li><a href="#">Home</a></li>

                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <h2 id="h22">Booking Tickets</h2>
        <h4>Search For Your Trip</h4>


        <br>
        <form action="{{ route('app.departurelist') }}">
           <div class="sta">
            <input id="status" type="radio" name="tripstatus"><label  class="T_S" for="status">One Way</label>
            <input id="statuss" type="radio" name="tripstatus"><label class="T_S" for="statuss">Round-Trip</label>
           </div>

            <select name="origin" id="" required>
                <option value="">Origin</option>
                 <option value="damascus">damascus</option>
                 <option value="Allepo">Allepo</option>
            </select>

            <select name="destination" id="" required>
              <option value="">destination</option>
               <option value="damascus">damascus</option>
               <option value="Allepo">Allepo</option>
          </select>
          <br>
          <br>
          <br>
          <input id="T_D" name="date" type="date" placeholder="Trip date" >


          <select name="companies" id="">
              <option value="">Company</option>
               <option value="Tarwada">Tarwada</option>
               <option value="alqadmous">alqadmous</option>
          </select>
          <br><br>
          <button type="submit">Search</button>
        </form>
    </div>


</div>
