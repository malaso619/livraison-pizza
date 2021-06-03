@extends('ecommerce.layouts.base')

@section('content')


<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if(Session::has('cart'))

                                @foreach($products as $cart)
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="{{ route('retirerPanier',$cart['product_id']) }}"><span class="ion-ios-close"></span></a></td>

                                        <td class="image-prod"><div class="img" style="background-image:url({{ asset('storage/uploadsFichierss/ecommerce/imagess/'.$cart['product_image']) }});"></div></td>

                                        <td class="product-name">
                                            <h3>{{ $cart['product_name'] }}</h3>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                        </td>

                                        <td class="price">Ar {{ number_format($cart['product_price'] , 2 , ' , ' ,' ') }}</td>
                                        <form action="{{ route('modifierPanier',$cart['product_id']) }}" method="post">
                                            @csrf
                                            <td class="quantity">
                                                <div class="input-group mb-3">
                                                    <input type="number" name="quantity" class="quantity form-control input-number" value="{{ $cart['qty'] }}" min="1" max="100" onchange="">
                                                </div>
                                                <button class="btn btn-success" type="submit">Modifier</button>
                                        </form>


                                        </td>

                                        <td class="total">Ar {{ number_format(($cart['qty']*$cart['product_price']),2,',',' ') }}</td>
                                    </tr><!-- END TR-->

                                @endforeach


                            @else
                                    <tr  class="text-center">

                                           <td colspan="7"> <h1>Aucun produit est dans la cart </h1> </td>
                                    </tr>

                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Coupon Code</h3>
                    <p>Enter your coupon code if you have one</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Coupon code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Estimate shipping and tax</h3>
                    <p>Enter your destination to get a shipping estimate</p>
                    <form action="#" class="info">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">State/Province</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">Zip/Postal Code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4">Estimate</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>

                    @if(Session::has('cart'))
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>${{ $sous=number_format(Session::get('cart')->totalPrice,2,',',' ') }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery 10% </span>
                            <span>${{ $livraison =  number_format((Session::get('cart')->totalPrice * 10 / 100),2,',',' ') }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>$ {{  number_format((Session::get('cart')->totalPrice * 10 / 100 + Session::get('cart')->totalPrice ),2,',',' ') }}</span>
                        </p>
                    @else

                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>$ 000,00</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery 10% </span>
                            <span>$ 000,00</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$ 000,00</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>$ 000</span>
                        </p>


                    @endif



                </div>
                @if(Session::get('cart'))
                    <p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4" >Proceed to Checkout</a></p>
                @else
                    <p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4 disabled" disabled="disabled">Proceed to Checkout</a></p>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection



@section('custom-javascript')

    <script>
        $(document).ready(function(){

            var quantitiy=0;
            $('.quantity-right-plus').click(function(e){

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if(quantity>0){
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

@endsection

