<x-slot:title>
        Bookingconfirm
    </x-slot:title>

    <x-slot:css>
        <link rel="stylesheet" href="{{asset('css/Bookingconfirm.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </x-slot:css>
<div x-data="data()" x-init="init()">

    <h1 x-text="totalPrice"></h1>

    <h2  class="h2" >Booking confirmation</h2>
    <h3 class="h3" > Insert your information to confirm Booking </h3>
    <template x-for="(customer, index) in customers">
        <div class="info_card"
         :key="customer">
         <div
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90">

         <p x-text="customer.FullName"></p>
         <button class="btn_card" type="submit" @click="editElement(index)">Edit</button>
         <button class="btn_card" type="button" @click="deleteElement(index)">Delete</button>
         </div>
        </div>
    </template>

    <!-- <h3>book now to get the best trip</h3> -->
    <form  wire:submit.prevent="submit">
        <input class="data" type="text" placeholder="Full Name" name="Name"  required x-model="FullName">
        <input class="data" type="text" placeholder="Mother Name" name="Name" required x-model="MotherName" >

        <br>
        <input class="data" type="text" placeholder="Father Name" name="Name"  required x-model="FatherName" >
        <input class="data" type="number" placeholder="ID Number" name="Id"  required x-model="ID_Number" >

        <br>
        <input class="data" type="date" placeholder="Birthdate" name="Birth_date" required x-model="Birth_date" >
        <input class="data" type="text" placeholder="Gander" name="gander"  required x-model="Gander" >
        <br>
        <button id="plus" type="button" x-show="selectedIndex == null" @click="add()">+</button>
        <button id="plus" type="button" x-show="selectedIndex != null" @click="add()">Save</button>

      <button id="con" type="button" @click="confirm()">confirm

        <x-filament::loading-indicator wire:loading style="height: 10px; width: 10px;" />
        </button>

    </form>
    <div>
    <div id="card">
    </div>
    </div>

    <x-slot:js>
<script src="book.js"></script>
</x-slot:js>

<script src="https://js.stripe.com/v3/"></script>

<script>
    function data() {
        return {
            FullName: '',
            MotherName: '',
            FatherName:'',
            ID_Number:'',
            Birth_date:'',
            Gander:'',
            selectedIndex:null,
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
            add(){
                const data = {
                    FullName: this.FullName,
                    MotherName: this.MotherName,
                    FatherName:this.FatherName,
                    ID_Number:this.ID_Number,
                    Birth_date:this.Birth_date,
                    Gander:this.Gander,
                }

                if (this.selectedIndex != null) {
                    this.customers[this.selectedIndex] = data
                }else{

                    this.customers.push(data)
                }


                this.clear()
                this.calcTotalPrice()
            },
            editElement(index){
                this.clear()

                this.selectedIndex = index

                const  {
                    FullName,
                    MotherName,
                    FatherName,
                    ID_Number,
                    Birth_date,
                    Gander,
                } = this.customers[index]

                this.FullName = FullName
                this.MotherName= MotherName
                this.FatherName=FatherName
                this.ID_Number=ID_Number
                this.Birth_date=Birth_date
                this.Gander =Gander

            },
            deleteElement(index){
                this.customers.splice(index, 1)
                this.calcTotalPrice()
            },
            clear(){
                this.selectedIndex = null
                this.FullName = ''
                this.MotherName= ''
                this.FatherName=''
                this.ID_Number=''
                this.Birth_date=''
                this.Gander =''
            },
            calcTotalPrice(){
                this.totalPrice = this.price * this.customers.length
            },
            confirm(){
                this.processPayment().then(() => {
                    this.$wire.submit(this.customers,  this.payment_method_id,
                        this.totalPrice,
                        @js(auth()->user()->email),)
                })

            },
            // totalPrice: $wire.entangle('totalPrice'),
        }
    }
</script>
</div>
