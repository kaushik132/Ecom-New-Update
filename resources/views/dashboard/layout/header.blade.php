<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eccomerce</title>

    <link rel="icon" type="image/png" href="assets/images/logo/logo.png">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/aos.css" type="text/css">
    <link rel="stylesheet" href="assets/webfonts" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="">



        <!-- ===== BOTTOM ROW ===== -->


        <div id="myHeader">
            <div class="container-fluid p-0">
                <!-- ===== TOP ROW ===== -->
                <div class="header-top py-2 border-bottom">
                    <div class="container">
                        <div class="row align-items-center">

                            <!-- Logo -->
                            <div class="col-lg-3 col-5">
                                <a href="{{url('/')}}" target="blank">
                                    <img src="assets/images/logo.png" class="logo" alt="Logo">
                                </a>
                            </div>

                            <!-- Search -->
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="search-bar">
                                    <form class="search-form" action="" method="get">
                                        <input type="search" name="s" placeholder="Search products..." class="search-input">

                                        <button type="submit" class="search-btn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>

                                </div>
                            </div>

                            <!-- Icons -->
                            <div class="col-lg-3 col-7 text-end">
                                <div class="header-icons">

                                    <!-- Language -->
                                    <div class="custom-dropdown-2">
                                        <button class="dropdown-btn">
                                            EN <i class="arrow"></i>
                                        </button>
                                        <ul class="dropdown-menu-2">
                                            <li onclick="changeLanguage('en')">English</li>
                                            <li onclick="changeLanguage('hi')">Hindi</li>
                                            <li onclick="changeLanguage('fr')">French</li>
                                        </ul>
                                    </div>

                                    <!-- Currency -->
                                    <div class="custom-dropdown-2">
                                        <button class="dropdown-btn">
                                            INR <i class="arrow"></i>
                                        </button>
                                        <ul class="dropdown-menu-2">
                                            <li onclick="changeCurrency('INR')">INR</li>
                                            <li onclick="changeCurrency('USD')">USD</li>
                                            <li onclick="changeCurrency('EUR')">EUR</li>
                                        </ul>
                                    </div>

                                    <!-- Wishlist -->
                                    {{-- <a href="wishlist.php" class="icon-btn" title="Wishlist">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 21s-7-4.6-9.5-8.2C.4 9.6 2.4 5.5 6.6 5.5c2 0 3.4 1.2 4.4 2.5 1-1.3 2.4-2.5 4.4-2.5 4.2 0 6.2 4.1 4.1 7.3C19 16.4 12 21 12 21z" />
                                        </svg>
                                    </a> --}}

                                    <!-- Cart -->
                                    {{-- <a href="cart.php" class="icon-btn" title="Cart">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M7 18c-1.1 0-2 .9-2 2s.9 2
                 2 2 2-.9 2-2-.9-2-2-2zm10
                 0c-1.1 0-2 .9-2 2s.9 2
                 2 2 2-.9 2-2-.9-2-2-2zM7.2
                 14h9.5c.8 0 1.5-.5
                 1.8-1.2l2.9-6.3c.3-.7-.2-1.5-1-1.5H6.1L5.6
                 2H2v2h2l3.6 7.6-1.3 2.4c-.6
                 1.1.2 2.4 1.4 2.4z" />
                                        </svg>
                                    </a> --}}

                                    <!-- Login -->
                                    {{-- <a href="account.php" class="icon-btn" title="Login">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 12c2.8 0 5-2.2 5-5s-2.2-5-5-5-5
                 2.2-5 5 2.2 5 5 5zm0
                 2c-3.3 0-10 1.7-10
                 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                                        </svg>
                                    </a> --}}

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="headermn">
                    <nav class="navbar navbar-expand-lg p-0 align-items-center">


                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

                            <img src="assets/images/menu.png" alt="Menu" class="menu-icon">
                        </button>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <img src="assets/images/logo.png" alt="">
                                </h5>
                                <a class="offcanvas-close-btn" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <img src="assets/images/remove.png" alt="">
                                </a>
                            </div>

                            <div class="offcanvas-body align-items-center">
                                <ul class="navbar-nav mx-auto">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>






                                    <!-- Mega Menu -->
                                    <li class="nav-item mega-hover">

                                        <a class="nav-link shop-toggle" href="javascript:void(0)">
                                            Shop <i class="fa-solid fa-caret-down"></i>
                                        </a>

                                        <!-- ===== DESKTOP MEGA MENU ===== -->
                                        <div class="mega-menu-ecom desktop-mega">
                                            <div class="container">
                                                <div class="row g-4">

                                                    <div class="col-md-3">
                                                        <h6>Men</h6>
                                                        <a href="#">T-Shirts</a>
                                                        <a href="#">Shirts</a>
                                                        <a href="#">Jeans</a>
                                                        <a href="#">Jackets</a>
                                                        <a href="#">Shoes</a>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h6>Women</h6>
                                                        <a href="#">Dresses</a>
                                                        <a href="#">Tops</a>
                                                        <a href="#">Handbags</a>
                                                        <a href="#">Heels</a>
                                                        <a href="#">Jewellery</a>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h6>Electronics</h6>
                                                        <a href="#">Mobiles</a>
                                                        <a href="#">Laptops</a>
                                                        <a href="#">Headphones</a>
                                                        <a href="#">Smart Watches</a>




                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="promo-card"> <img src="assets/images/mega-menu.jpg" alt="">
                                                            <div class="promo-content"> <span>NEW ARRIVAL</span>
                                                                <h5>Winter Collection</h5> <a href="#" class="btn btn-dark btn-sm">Shop Now</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- ===== MOBILE ACCORDION MENU ===== -->
                                        <div class="mobile-mega">

                                            <div class="accordion-item">
                                                <button class="accordion-title">Men</button>
                                                <div class="accordion-content">
                                                    <a href="#">T-Shirts</a>
                                                    <a href="#">Shirts</a>
                                                    <a href="#">Jeans</a>
                                                    <a href="#">Jackets</a>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <button class="accordion-title">Women</button>
                                                <div class="accordion-content">
                                                    <a href="#">Dresses</a>
                                                    <a href="#">Tops</a>
                                                    <a href="#">Handbags</a>
                                                    <a href="#">Jewellery</a>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <button class="accordion-title">Kids</button>
                                                <div class="accordion-content">
                                                    <a href="#">Boys Wear</a>
                                                    <a href="#">Girls Wear</a>
                                                    <a href="#">Footwear</a>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <button class="accordion-title">Electronics</button>
                                                <div class="accordion-content">
                                                    <a href="#">Mobiles</a>
                                                    <a href="#">Laptops</a>
                                                    <a href="#">Accessories</a>
                                                </div>
                                            </div>

                                        </div>

                                    </li>


                                    {{-- <!-- Best Sellers -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Best Sellers</a>
                                    </li>

                                    <!-- Offers -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Offers</a>
                                    </li> --}}

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>

                                </ul>


                            </div>

                        </div>
                        <!-- Search -->
                        <div class="d-block d-lg-none col-md-11">
                            <div class="search-bar">
                                <form class="search-form" action="" method="get">
                                    <input type="search" name="s" placeholder="Search products..." class="search-input">

                                    <button type="submit" class="search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>

                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>


    </header>
