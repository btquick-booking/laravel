
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
              <td>Damascus</td>
              <td>Allepo</td>
              <td>01/02/2024 12:00 AM</td>
              <td>24</td>
              <td>12.000sp</td>
              <td><button ><a href="http:#">Details</a></button></td>
          </tr>
      </table>
      <br>

      <table>
          <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Date & Time</th>
          <th>Seats</th>
          <th>Price</th>
          <th>Action</th>
          </tr>
          <tr>
              <td>Damascus</td>
              <td>Allepo</td>
              <td>03/02/2024 09:00 AM</td>
              <td>20</td>
              <td>15.000sp</td>
              <td><button ><a href="http:">Details</a></button></td>
          </tr>
      </table>
  <br>
      <table >
          <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Date & Time</th>
          <th>Seats</th>
          <th>Price</th>
          <!-- <th>Company</th> -->
          <th>Action</th>
          </tr>
          <tr>
              <td>Damascus</td>
              <td>Allepo</td>
              <td>10/02/2024 12:00 AM</td>
              <td>24</td>
              <td>10.000sp</td>
              <!-- <td>Tarwada</td> -->
              <td><button ><a href="http:">Details</a></button></td>
          </tr>
      </table>

 </div>

