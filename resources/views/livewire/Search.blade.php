

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
        <form action="departurelist2.html" method="POST">
           <div class="sta">
            <input id="status" type="radio" name="tripstatus"><label  class="T_S" for="status">One Way</label>
            <input id="statuss" type="radio" name="tripstatus"><label class="T_S" for="statuss">Round-Trip</label>
           </div>
            <!-- <br>
            <br>
            <br> -->

            <select name="origin" id="" required>
                <option value="">Origin</option>
                 <option value="">damascus</option>
                 <option value="">Allepo</option>
            </select>

            <select name="Destination" id="" required>
              <option value="">destination</option>
               <option value="">damascus</option>
               <option value="">Allepo</option>
          </select>
          <br>
          <br>
          <br>
          <input id="T_D" type="date" placeholder="Trip date" >


          <select name="companies" id="">
              <option value="">Company</option>
               <option value="">Tarwada</option>
               <option value="">alqadmous</option>
          </select>
          <br><br>
         <button type="submit">Search</button>
        </form>
    </div>

