@extends('template.user')

@section('body')

<!-- Product Detail Start -->
  <div class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row align-items-center product-detail-top">
                    <div class="col-md-5">
                        <div class="product-slider-single">
                            <img src="{{ asset('img/'.$product->image) }}" alt="Product Image">
                            {{-- <img src="img/product-2.png" alt="Product Image">
                            <img src="img/product-3.png" alt="Product Image"> --}}
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-content">
                            <div class="title"><h2>{{ $product->name }}</h2></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">${{ $product->price }}</div>
                            <div class="details">
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>

                            <div class="quantity">
                                <h4>Quantity:</h4>
                                <div class="qty">
                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                    <input type="text" value="1">
                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="action">
                                <a href="/cart/{{ $product->id }}"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active"><br>
                                <h4>{{ $product->name }}</h4>
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                            <div id="specification" class="container tab-pane fade"><br>
                                <h4>Product specification</h4>
                                <ul>
                                   <?php
                                    $mota = explode(",", $product->description);
                                    foreach ($mota as $item) {
                                        echo "<li>$item</li>";
                                    }
                                    ?>
                                    {{-- <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Lorem ipsum dolor sit amet</li> --}}
                                </ul>
                            </div>
                            <div id="reviews" class="container tab-pane fade"><br>
                                <div class="reviews-submitted">
                                    <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                    </p>
                                </div>
                                <div class="reviews-submit">
                                    <h4>Give your Review:</h4>
                                    <div class="ratting">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="row form">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea placeholder="Review"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="section-header">
                        <h3>Related Products</h3>

                    </div>
                </div>

                <div class="row align-items-center product-slider product-slider-3">
                    @foreach($productRelated as $item)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="/product-detail/{{ $item->id }}">
                                    <img src="{{ asset('img/'.$item->image) }}" alt="{{ $item->name }}">
                                </a>
                                <div class="product-action">
                                    <a href="/cart/{{ $item->id }}"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="title"><a href="#">Phasellus Gravida</a></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">$22 <span>$25</span></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-3">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <ul>
                        @foreach($category as $item)
                        <li><a href="#">{{ $item->name }}</a></li>
                        @endforeach

                    </ul>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Product Detail End -->


@endsection
