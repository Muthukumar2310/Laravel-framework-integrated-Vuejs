<table id="card" class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:22%" class="text-center">Subtotal</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('uploads') }}/416w5-NmTCL._AC_UF226,226_FMjpg_.jpg" width="100" height="100" class="img-responsive"/></div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">Asus Vivobook 17 Laptop - Intel Core 10th</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">$6</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="1" class="form-control quantity cart_update" min="1" />
                                    </td>
                                    <td data-th="Subtotal" class="text-center">$6</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <td colspan="5" style="text-align:right;"><h3><strong>Total $6</strong></h3></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:right;">
                                            <form>
                                                <a href="{{ url('dashboard') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type='hidden' name="total" value="6">
                                                <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                                                <button type="submit" name="checkout" id="checkout" class="btn btn-success">CheckOut</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tfooter>
                            </table>


                            $('#checkout').on('click', function() {
                        const stripe = Stripe("your_stripe_publishable_key"); // Replace with your actual Stripe publishable key
                        const elements = stripe.elements();

                        const cardElement = elements.create('card');
                        cardElement.mount('#card-element');

                        const form = document.getElementById('payment-form');
                        const paymentButton = document.getElementById('submit');

                        form.addEventListener('submit', function (event) {
                            event.preventDefault();

                            stripe.createPaymentMethod({
                                type: 'card',
                                card: cardElement,
                            }).then(function (result) {
                                if (result.error) {
                                    // Handle and display the error to the user
                                    console.error(result.error.message);
                                } else {
                                    // Send the payment method ID to your server for processing
                                    const paymentMethodId = result.paymentMethod.id;
                                    $.ajax({
                                        url : "{{ route('stripePost') }}",
                                        method: 'POST',
                                        success:function(response){
                                            console.log('Payment Successfully');
                                        },
                                        error:function(xhr,status,error){
                                            console.error(result.error.message);
                                        }
                                    });
                                }
                            });
                        });
                    });