
@extends('template.user')
@section('products-active')
active
@endsection
@section('body')



      <!-- Product List Start -->
      <div class="product-view">
          <div class="container">
              <div class="row">
                  <div class="col-md-9">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="row">
                                  <div class="col-md-8">
                                      <div class="product-search">
                                          <form action="/search" method="get">
                                              <input type="text" name="search" placeholder="Search">
                                              <button type="submit"><i class="fa fa-search"></i></button>
                                          </form>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="product-short">
                                          <div class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product short by</a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a href="#" class="dropdown-item">Newest</a>
                                                  <a href="#" class="dropdown-item">Popular</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          @foreach($productList as $item)

                          <div class="col-lg-4">
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
                                      <div class="title"><a href="#">{{ $item->name }}</a></div>
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
                      <div>
                        {{ $productList->links() }}
                    </div>

                  </div>



                  <div class="col-md-3">
                      <div class="sidebar-widget category">
                          <h2 class="title">Category</h2>

                          <ul>
                          @foreach ( $categoryList as $item )

                              <li><a href="/product_category/{{ $item->id }}">{{ $item->name }}</a></li>

                          @endforeach

                          </ul>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <!-- Product List End -->

@endsection
