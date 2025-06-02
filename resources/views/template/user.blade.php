

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Shop - Bootstrap Ecommerce Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">
        @vite([
            'resources/bootstrap-ecommerce-template/img/favicon.ico',
            'resources/bootstrap-ecommerce-template/lib/slick/slick.css',
            'resources/bootstrap-ecommerce-template/lib/slick/slick-theme.css',
            'resources/bootstrap-ecommerce-template/css/style.css',
        ])
        <!-- Favicon -->
        {{-- <link href="img/favicon.ico" rel="icon"> --}}

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        {{-- <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet"> --}}

        <!-- Template Stylesheet -->
        {{-- <link href="css/style.css" rel="stylesheet"> --}}
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('bootstrap-ecommerce-template/img/logomtech.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <form action="/search" method="get">
                                <input type="text" name="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <div class="dropdown-menu">
                                    @auth
                                        {{-- <a href="{{ url('home') }}" class="btn btn-outline-danger btn-sm logout-btn">
                                            {{ Auth::user()->full_name }}
                                        </a> --}}
                                        <a href="/account" class="dropdown-item">My Account</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Logout</button>
                                        </form>
                                    @else
                                        <a href="/login" class="dropdown-item">Login</a>
                                        <a href="/register" class="dropdown-item">Register</a>
                                    @endauth

                                </div>
                            </div>
                            <a class="cart" href="/cart">
                                <i class="fa fa-cart-plus"></i>
                                <span>({{ count(Session::get('cart', [])) }})</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->


        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="/" class="nav-item nav-link @yield('home-active')">Home</a>
                            <a href="/product-list" class="nav-item nav-link  @yield('products-active')">Products</a>
                            <div class="nav-item dropdown">
                                {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> --}}
                                <div class="dropdown-menu">
                                    <a href="product-list.html" class="dropdown-item">Product</a>
                                    <a href="product-detail.html" class="dropdown-item">Product Detail</a>
                                    <a href="cart.html" class="dropdown-item">Cart</a>
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="my-account.html" class="dropdown-item">My Account</a>
                                </div>
                            </div>
                            <a href="/contact" class="nav-item nav-link @yield('contact-active')">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        @yield('body')



        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h1>M Shop</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sollicitudin rutrum massa. Suspendisse sollicitudin rutrum massa. Vestibulum porttitor, metus sed pretium elementum, nisi nibh sodales quam, non lobortis neque felis id mauris.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Pages</h3>
                            <ul>
                                <li><a href="/product-list">Products</a></li>
                                <li><a href="/cart">Cart</a></li>
                                @auth
                                    <li><a href="/account">My Account</a></li>
                                @else
                                    <li><a href="/login">Login</a></li>

                                @endauth
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                                <li><a href="/product-list">Products</a></li>
                                <li><a href="/cart">Cart</a></li>
                                @auth
                                    <li><a href="/account">My Account</a></li>

                                @else
                                    <li><a href="/register">Register</a></li>

                                @endauth
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Shop, Los Angeles, CA, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row payment">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <p>We Accept:</p>
                            <img src="{{ asset('bootstrap-ecommerce-template/img/payment-method.png') }}" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <p>Secured By:</p>
                            <img src="{{ asset('bootstrap-ecommerce-template/img/godaddy.svg') }}" alt="Payment Security" />
                            <img src="{{ asset('bootstrap-ecommerce-template/img/norton.svg') }} " alt="Payment Security" />
                            <img src="{{ asset('bootstrap-ecommerce-template/img/ssl.svg') }}" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">TCM</a>. All Rights Reserved</p>
                    </div>

                    {{-- <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->


        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        {{-- <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script> --}}

        <!-- jQuery & Bootstrap CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        @vite([
            'resources/bootstrap-ecommerce-template/lib/easing/easing.min.js',
            'resources/bootstrap-ecommerce-template/lib/slick/slick.min.js',
            'resources/bootstrap-ecommerce-template/js/main.js'
        ])

    </body>
</html>
