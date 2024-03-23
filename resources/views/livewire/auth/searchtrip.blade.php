<div>
    <h2 id="h22">Booking Tickets</h2>
    <h4>Search For Your Trip</h4>
    <!-- <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Search Trip</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>   -->

    <br>
    <form wire:submit.prevent="submit">
        <input  type="radio" name="tripstatus"><label  class="T_S" for="">One Way</label>
        <input  type="radio" name="tripstatus"><label class="T_S" for="">Round-Trip</label>
        <br>
        <br>

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
