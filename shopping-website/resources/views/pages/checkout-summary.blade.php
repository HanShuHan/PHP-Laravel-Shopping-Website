<x-new-layout>

    <div>

        <form action="/process-order" method="POST">
            @csrf
            <div>
                <h1>Order Info</h1>
                <table>
                    <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td><img src="{{ '/images/' . $item->product->photo }}" alt="" width="50px" height="50px">{{ $item->product->name }}</td>
                            <td>x{{ $item->quantity }}</td>
                            <td>${{ $item->quantity * $item->product->price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @php
                    $totalBeforeTax = 0;
                    foreach($cartItems as $item) {
                        $totalBeforeTax += $item->quantity * $item->product->price;
                    }
                    $tax = round($totalBeforeTax * 0.13, 2, PHP_ROUND_HALF_UP);
                    $estShipping = ($totalBeforeTax > 80) ? "Free" : "$" . round($totalBeforeTax * 0.2, 2, PHP_ROUND_HALF_DOWN);
                    $orderTotal = ($estShipping == "Free") ? ($totalBeforeTax + $tax) : (round($totalBeforeTax + $tax + round($totalBeforeTax * 0.2, 2, PHP_ROUND_HALF_DOWN), 2, PHP_ROUND_HALF_UP));
                @endphp

                <h3>Item Total: ${{ $totalBeforeTax }}</h3>
                <h3>Tax: $input</h3>
                <h3>Est Shipping: {{ $estShipping }}</h3>
                <h1>Order Total: ${{ $orderTotal }}</h1>
            </div>
            <div>
                <h1>Shipping Info</h1>

                @error('first_name')
                <p class="validation-error text-danger">{{$message}}</p>
                @enderror
                <label for="first_name">First Name: </label>
                <input type="text" name="first_name" id="first_name" value="{{ auth()->user()->first_name }}">

                @error('last_name')
                <p class="validation-error text-danger">{{$message}}</p>
                @enderror
                <label for="last_name">Last Name: </label>
                <input type="text" name="last_name" id="last_name" value="{{ auth()->user()->last_name }}">

                <div>
                    @error('email')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}">
                </div>

                <div>
                    @error('phone')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="phone">Phone Number: </label>
                    <input type="tel" name="phone" id="phone" value="{{ auth()->user()->phone_number }}">
                </div>

                <div>
                    @error('address1')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="address1">Address Line 1: </label>
                    <input type="text" name="address1" id="address1" value="{{ auth()->user()->address_line1 }}">
                </div>

                <div>
                    @error('address2')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="address2">Address Line 2: </label>
                    <input type="text" name="address2" id="address2" value="{{ auth()->user()->address_line2 }}">
                </div>

                <div>
                    @error('city')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="city">City: </label>
                    <input type="text" name="city" id="city" value="{{ auth()->user()->city }}">

                    @error('province')
                    <p class="validation-error text-danger">{{$message}}</p>
                    @enderror
                    <label for="province">Province: </label>
                    <input type="text" name="province" id="province" value="{{ auth()->user()->province }}">
                </div>

                @error('postalCode')
                <p class="validation-error text-danger">{{$message}}</p>
                @enderror
                <label for="postalCode">Postal Code: </label>
                <input type="text" name="postalCode" id="postalCode" value="{{ auth()->user()->postal_code }}">

            </div>
            <div>
                <h1>Billing Info:</h1>
                <p>This is for demonstration purposes, no actual credit card information will be stored.</p>
                <label for="cc">Card Number: </label>
                <input type="text" name="cc" id="cc">
                <div>
                    <label for="ed">Expiry Date: </label>
                    <input type="date" name="ed" id="ed">

                    <label for="cvc">CVC: </label>
                    <input type="text" name="cvc" id="cvc">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-dark">Pay Now</button>
                <a href="/" class="btn btn-dark">Continue Shopping</a>
            </div>
        </form>
    </div>
</x-new-layout>
