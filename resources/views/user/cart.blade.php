
@extends('template.user')

@section('body')

<!-- Cart Start -->
<div class="cart-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach($cart as $cart => $item)
                            <tr>
                                <td><a href="#"><img src="{{ 'img/'.$item['image'] }}" alt="{{ $item['name'] }}"></a></td>
                                <td><a href="#">{{ $item['name'] }}</a></td>
                                <td>${{ $item['price'] }}</td>
                                <td>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="{{ $item['quantity'] }}">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td>${{ $item['price']*$item['quantity'] }}</td>
                                <td><a href="/cart_delete/{{ $item['id'] }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {{-- <div class="coupon">
                    <input type="text" placeholder="Coupon Code">
                    <button>Apply Code</button>
                </div> --}}
            </div>
            <div class="col-md-6">
                <div class="cart-summary">
                    <div class="cart-content">
                        <h3>Cart Summary</h3>
                        <p>Sub Total<span>${{ $total }}</span></p>
                        <p>Shipping Cost<span>${{ $shippingCost }}</span></p>
                        <h4>Grand Total<span>${{ $totalWithShipping }}</span></h4>
                    </div>
                    <div class="cart-btn">
                        <button><a class="btn" href="/product-list">Continue shopping</a></button>
                        <button><a class="btn" href="/checkout">Checkout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

@endsection
