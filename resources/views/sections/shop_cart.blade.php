@extends('index')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $totalPrice = 0; ?>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{asset('malefashion-master/img/product/' . $order->products->image_source)}}" width="auto" height="100px" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{$order->products->name}}</h6>
                                                <h5>${{$order->products->price}}</h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" class="quantity-input" data-order-id="{{ $order->id }}" value={{$order->quantity}}>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price" id="total-price-{{ $order->id }}">$ {{$order->products->price * $order->quantity }}</td>
                                        <td class="cart__close"><i class="fa fa-close"></i></td>
                                    </tr>

                                    <?php 
                                        $totalPrice += $order->products->price * $order->quantity;
                                    ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ <?php echo $totalPrice ?></span></li>
                            <li>Total <span>$ <?php echo $totalPrice ?></span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection

<script>
    $(document).ready(function() {
        $('.quantity-input').on('input', function() {
            var quantity = $(this).val();
            var orderId = $(this).data('order-id');
            var pricePerUnit = parseFloat($('#price-per-unit-' + orderId).data('price'));
            var totalPrice = quantity * pricePerUnit;
            $('#total-price-' + orderId).text('$ ' + totalPrice.toFixed(2));
        });
    });
</script>