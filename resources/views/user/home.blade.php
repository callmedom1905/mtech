
@extends('template.user')
@section('home-active')
active
@endsection
@section('body')

 <!-- Main Slider Start -->
 <div class="home-slider">
    <div class="main-slider">
        @foreach($banner as $item)

            <div class="main-slider-item"><img src="{{ asset('img/'.$item->image) }} " alt="{{ $item->title }}"  height="400px"/></div>

        @endforeach
        {{-- <div class="main-slider-item"><img src="{{ asset('bootstrap-ecommerce-template/img/slider-2.jpg') }} " alt="Slider Image" /></div>
        <div class="main-slider-item"><img src="{{ asset('bootstrap-ecommerce-template/img/slider-3.jpg') }} " alt="Slider Image" /></div> --}}
    </div>
</div>
<!-- Main Slider End -->


<!-- Category Start-->
<div class="category">
    <div class="container-fluid">
        <div class="row">
            @foreach ($categoryList as $item)
            <div class="col-md-3">
                <div class="category-img">
                    <img src="{{ asset('img/'.$item->image) }}" />
                    <a class="category-name" href="">
                        <h2>{{ $item->name }}</h2>
                    </a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Category End-->


<!-- Featured Product Start -->
<div class="featured-product">
    <div class="container">
        <div class="section-header">
            <h3>Featured Product</h3>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            @foreach($productFeatures as $item)
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-image">
                        <a href="/product-detail/{{ $item->id }}">
                            <img src="{{ asset('img/'.$item->image) }}" alt="{{ $item->name }}e">
                        </a>
                        <div class="product-action">
                            <a href="/cart/{{ $item->id }}"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="title"><a href="/product-detail/{{ $item->id }}">{{ $item->name }}</a></div>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="price">${{ $item->price }}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Featured Product End -->


<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h3>Subscribe Our Newsletter</h3>
        </div>
        <div class="form">
            <input type="email" value="Your email here">
            <button>Submit</button>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Recent Product Start -->
<div class="recent-product">
    <div class="container">
        <div class="section-header">
            <h3>Recent Product</h3>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            @foreach($productNews as $item)

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
                        <div class="title"><a href="/product-detail/{{ $item->id }}">{{ $item->name }}</a></div>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="price">${{ $item->price }}</div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Recent Product End -->


<!-- Brand Start -->
<div class="brand">
    <div class="container">
        <div class="section-header">
            <h3>M Tech</h3>
        </div>
        <div class="brand-slider">
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-1.png') }}" alt=""></div>
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-2.png') }}" alt=""></div>
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-3.png') }}" alt=""></div>
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-4.png') }}" alt=""></div>
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-5.png') }}" alt=""></div>
            <div class="brand-item"><img src="{{ asset('bootstrap-ecommerce-template/img/brand-6.png') }}" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->

@endsection
