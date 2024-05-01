<div x-init="init()">


    <div>
        <input type="email" x-model="form.email">
        <input type="number" x-model="form.amount">
        <div id="card">
        </div>
        <button @click="processPayment">Save</button>
    </div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    function data() {
        return {
            elements: {},
            cardElement: {},
            cardError: '',
            stripe: '',
            form: {
                email: 'test@test.com',
                amount: 1400,
            },
            init() {
                console.log('dsajodpjsao');
                this.stripe = Stripe('{{ config('cashier.key') }}')
                this.elements = this.stripe.elements()
                this.cardElement = this.elements.create("card", {
                    hidePostalCode: true,
                })
                this.cardElement.mount("#card")
            },
            processPayment() {
                this.stripe.createPaymentMethod({
                    type: 'card',
                    card: this.cardElement,
                    billing_details: {
                        email: this.email,
                    }
                }).then(({
                    paymentMethod,
                    error
                }) => {
                    this.form.payment_method_id = paymentMethod.id
                    console.log(paymentMethod.id);
                    this.checkout()
                })
            },
            checkout() {
                axios.post('/checkout', this.form)
                    .then((resp) => {
                        // make an alert that it succeeded
                    })
            }
        }
    }
</script>


</div>
