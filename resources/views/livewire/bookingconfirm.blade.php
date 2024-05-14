<x-slot:title>
    Bookingconfirm
</x-slot:title>

<x-slot:css>
    <link rel="stylesheet" href="{{ asset('css/Bookingconfirm.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.seat-charts.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</x-slot:css>





<div x-data="data()" x-init="init()">


    <div class="Price">
        <h2 style="text-align: center">Total Price :</h2>
        <h1 x-text="totalPrice" style="text-align: center;">0</h1>
    </div>
    <h2 class="h2">Booking confirmation</h2>
    <h3 class="h3"> Insert your information to confirm Booking </h3>
    <div>
        <template x-for="(customer, index) in customers">
            <div class="info_card" :key="customer">
                {{-- <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
</div> --}}
                <p x-text="customer.FullName"></p>
                <button class="btn_card" type="submit" @click="editElement(index)">Edit</button>

                <button class="btn_card" type="button" @click="deleteElement(index)">Delete</button>

            </div>
        </template>

    </div>
    <!-- <h3>book now to get the best trip</h3> -->
    <form wire:submit.prevent="submit">
        <input class="data" type="text" placeholder="Full Name" name="Name" required x-model="FullName"
            style="border-radius: 40px;">
        <input class="data" type="text" placeholder="Mother Name" name="Name" required x-model="MotherName"
            style="border-radius: 40px;">

        <br>
        <input class="data" type="text" placeholder="Father Name" name="Name" required x-model="FatherName"
            style="border-radius: 40px;">
        <input class="data" type="number" placeholder="ID Number" name="Id" required x-model="ID_Number"
            style="border-radius: 40px;">

        <br>
        <input class="data" type="date" placeholder="Birthdate" name="Birth_date" required x-model="Birth_date"
            style="border-radius: 40px;" max="">
        <input class="data" type="text" placeholder="Gander" name="gander" required x-model="Gander"
            style="border-radius: 40px;">
        <br>
        <input class="data" type="text" placeholder="Phone Number" name="PhoneNumber" required=""
            x-model="PhoneNumber" style="border-radius: 40px;top: 67px;">
        <button id="plus" type="button" x-show="selectedIndex == null" @click="add()">+</button>
        {{-- <button id="plus" type="button" x-show="selectedIndex != null" @click="add()">Save</button> --}}
        <button id="plus" type="button" x-show="selectedIndex != null" @click="add()">
            <i class="fas fa-save"></i>
        </button>



        <button id="con" type="button" @click="confirm()">confirm

            <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
        </button>

    </form>

    <div class="Payment">
        <div>
            <div id="card">
            </div>
        </div>
    </div>





    <x-slot:js>
        <script src="book.js"></script>
        <script>
            document.getElementById('datePicker').max = new Date().toISOString().split("T")[0];
        </script>
        <script src="{{ asset('/resources/js/seat.js') }}"></script>
        <script src="{{ asset('/resources/js/jquery.seat-charts.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/jquery.seat-charts.js"></script>
    </x-slot:js>
    <script src="https://js.stripe.com/v3/"></script>


    <script>
        function data() {
            return {
                FullName: '',
                MotherName: '',
                FatherName: '',
                ID_Number: '',
                Birth_date: '',
                Gander: '',
                selectedIndex: null,
                totalPrice: 0,
                price: @js($price),
                elements: {},
                cardElement: {},
                cardError: '',
                stripe: '',
                payment_method_id: '',
                customers: [],
                init() {
                    this.stripe = Stripe('{{ config('cashier.key') }}')
                    this.elements = this.stripe.elements()
                    this.cardElement = this.elements.create("card", {
                        hidePostalCode: true,
                        style: {
                            base: {
                                iconColor: '#c4f0ff',
                                color: '#3f70d0',
                                fontWeight: '500',
                                fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                                fontSize: '16px',

                                fontSmoothing: 'antialiased',

                                ':-webkit-autofill': {
                                    color: '#fce883',
                                },
                                '::placeholder': {
                                    color: '#4784dc',
                                },
                            },
                            invalid: {
                                iconColor: '#3f70d0',
                                color: '#3f70d0',
                            },
                        },

                    })
                    this.cardElement.mount("#card")
                },
                async processPayment() {
                    await this.stripe.createPaymentMethod({
                        type: 'card',
                        card: this.cardElement,
                        billing_details: {
                            email: @js(auth()->user()->email),
                        }
                    }).then(({
                        paymentMethod,
                        error
                    }) => {
                        this.payment_method_id = paymentMethod.id
                    })
                },
                add() {
                    const data = {
                        FullName: this.FullName,
                        MotherName: this.MotherName,
                        FatherName: this.FatherName,
                        ID_Number: this.ID_Number,
                        Birth_date: this.Birth_date,
                        Gander: this.Gander,
                    }

                    if (this.selectedIndex != null) {
                        this.customers[this.selectedIndex] = data
                    } else {

                        this.customers.push(data)
                    }


                    this.clear()
                    this.calcTotalPrice()
                },
                editElement(index) {
                    this.clear()

                    this.selectedIndex = index

                    const {
                        FullName,
                        MotherName,
                        FatherName,
                        ID_Number,
                        Birth_date,
                        Gander,
                    } = this.customers[index]

                    this.FullName = FullName
                    this.MotherName = MotherName
                    this.FatherName = FatherName
                    this.ID_Number = ID_Number
                    this.Birth_date = Birth_date
                    this.Gander = Gander

                },
                deleteElement(index) {
                    this.customers.splice(index, 1)
                    this.calcTotalPrice()
                },
                clear() {
                    this.selectedIndex = null
                    this.FullName = ''
                    this.MotherName = ''
                    this.FatherName = ''
                    this.ID_Number = ''
                    this.Birth_date = ''
                    this.Gander = ''
                },
                calcTotalPrice() {
                    this.totalPrice = this.price * this.customers.length
                },
                confirm() {
                    this.processPayment().then(() => {
                        this.$wire.submit(this.customers, this.payment_method_id,
                            this.totalPrice,
                            @js(auth()->user()->email), )
                    })

                },
                // totalPrice: $wire.entangle('totalPrice'),
            }
        }
    </script>
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #5959c9;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #contentArea {
            width: 100%;
            height: calc(100% - 60px);
            /* Adjust height as needed */
        }

        #contentFrame {
            width: 100%;
            height: 100%;
        }

        .main {
            transition: margin-left .5s;
            padding: 16px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the side navigation take up the whole screen */
        @media screen and (max-height: 600px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    <!-- Side Navigation -->
    <div class="sidenav" id="mySidenav">
        <!-- Close button for the side navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Content iframe -->
        <div id="contentArea">
            <iframe id="contentFrame" src="" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        <button onclick="openJojo()">Choose chair</button>
    </div>

    <!-- JavaScript for handling the side navigation -->

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            // Reset iframe source when closing
            document.getElementById("contentFrame").src = "";
        }

        function openJojo() {
            // Set iframe source to jojo.html
            document.getElementById("contentFrame").src = @js(asset('../chair/jojo.html'));
            openNav();
        }
    </script>
</div>
