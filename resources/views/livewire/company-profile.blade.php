<div>
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('css/CompanyProfile.css') }}">
        <link rel="stylesheet" type="text/css"
            href="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.0/maps/maps.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">

    </x-slot:css>

    <x-slot:title>
        CompanyProfile
    </x-slot:title>
    <div class="profile">
        <h2>Comapny Profile</h2>
        <div class="img">
          <img src="companyBus.jpg" alt="companyImage" />
        </div>
        <div class="company_info">
          <h3>Company Name: <span>Tarwada Company .</span></h3>
        </div>
        <div class="company_info">
          <h3>
            Comapny Address:<span
              >Al-Barameka office opposite the college of <br />civil engineering
              .</span
            >
            <!-- <span> Victoria office in the position of Victoria,<br> next to Al Bustan Hotel .</span> -->
          </h3>
        </div>
        <div class="company_info">
          <h3>Phone Number:<span>011 234 2022 </span></h3>
        </div>
        <div class="company_info">
          <h3>Email Address:<span>Tarwada@gmail.com .</span></h3>
        </div>
        <div class="company_info">
          <h3>
            Company Lines:
            <span>
              Homs --> Damascus <br />
              Damascus --> Allepo
            </span>
          </h3>
        </div>

        <div class="rating">
          <h4>Rating:</h4>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>
        <script
          type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
          nomodule
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <!-- <p>Number Of Seats:<span>24 seat</span> </p> -->
      </div>

</div>
