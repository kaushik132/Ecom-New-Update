@extends('dashboard.layout.main')
@section('content')


<!-- hero section   -->
<section class="image-banner">
  <div class="owl-carousel image-banner-carousel">

    <div class="banner-slide">
      <img src="https://picsum.photos/id/1018/1920/700" alt="Banner 1">
    </div>

    <div class="banner-slide">
      <img src="https://picsum.photos/id/1015/1920/700" alt="Banner 2">
    </div>

    <div class="banner-slide">
      <img src="https://picsum.photos/id/1019/1920/700" alt="Banner 3">
    </div>

  </div>
</section>


<!-- icon catagory  -->
<section class="icon-slider">
  <div class="container">
    <div class="owl-carousel owl-theme icon-owl">
      <!-- Repeat for 10 items -->
      <div class="s-icon-item">
        <a href="#!"><img
            src="assets/images/cate-groy.png" alt="Royal Rajasthan"></a>
        <p>Men’s Fashion</p>
      </div>



    </div>
  </div>
</section>

<!-- offer banner  -->

<section class="offer-banner">
  <div class="container">

    <!-- Desktop Grid -->
    <div class="row d-none d-md-flex">

      <div class="col-md-6 mb-3">
        <a href="{{url('product')}}" class="offer-link">
          <div class="offer-item">
            <img src="assets/images/off-2.png" alt="Offer Banner 1">
          </div>
        </a>
      </div>

      <div class="col-md-6 mb-3">
        <a href="{{url('product')}}" class="offer-link">
          <div class="offer-item">
            <img src="assets/images/off-3.png" alt="Offer Banner 2">
          </div>
        </a>
      </div>

      <div class="col-md-6 mb-3">
        <a href="{{url('product')}}" class="offer-link">
          <div class="offer-item">
            <img src="assets/images/off-4.png" alt="Offer Banner 3">
          </div>
        </a>
      </div>

      <div class="col-md-6 mb-3">
        <a href="{{url('product')}}" class="offer-link">
          <div class="offer-item">
            <img src="assets/images/off-1.png" alt="Offer Banner 4">
          </div>
        </a>
      </div>

    </div>

    <!-- Mobile Slider -->
    <div class="owl-carousel offer-carousel d-md-none">

      <a href="{{url('product')}}" class="offer-link">
        <div class="offer-item">
          <img src="assets/images/off-2.png" alt="Offer Banner 1">
        </div>
      </a>

      <a href="{{url('product')}}" class="offer-link">
        <div class="offer-item">
          <img src="assets/images/off-3.png" alt="Offer Banner 2">
        </div>
      </a>

      <a href="{{url('product')}}" class="offer-link">
        <div class="offer-item">
          <img src="assets/images/off-4.png" alt="Offer Banner 3">
        </div>
      </a>

      <a href="{{url('product')}}" class="offer-link">
        <div class="offer-item">
          <img src="assets/images/off-1.png" alt="Offer Banner 4">
        </div>
      </a>

    </div>

  </div>
</section>

<!-- recent-view sec  -->

<section class="recent-view">
  <div class="container">

    <h4 class="mb-4 fw-semibold">Recent Viewed</h4>

    <div class="row g-3">

      <!-- Card 1 -->
      <div class="col-12 col-md-4 col-lg-2-4">
        <a href="{{url('product-detail')}}" class="recent-card">
          <div class="card shadow-sm">
            <img src="assets/images/recent-view.png" class="card-img-top" alt="Item 1">
            <h6 class="card-title">Men’s Shot-Sleeve T-shirt</h6>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-4 col-lg-2-4">
        <a href="{{url('product-detail')}}" class="recent-card">
          <div class="card shadow-sm">
            <img src="assets/images/recent-view.png" class="card-img-top" alt="Item 2">
            <h6 class="card-title">Men’s Shot-Sleeve T-shirt</h6>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-4 col-lg-2-4">
        <a href="{{url('product-detail')}}" class="recent-card">
          <div class="card shadow-sm">
            <img src="assets/images/recent-view.png" class="card-img-top" alt="Item 3">
            <h6 class="card-title">Men’s Shot-Sleeve T-shirt</h6>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-md-4 col-lg-2-4">
        <a href="{{url('product-detail')}}" class="recent-card">
          <div class="card shadow-sm">
            <img src="assets/images/recent-view.png" class="card-img-top" alt="Item 4">
            <h6 class="card-title">Men’s Shot-Sleeve T-shirt</h6>
          </div>
        </a>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-md-4 col-lg-2-4">
        <a href="{{url('product-detail')}}" class="recent-card">
          <div class="card shadow-sm">
            <img src="assets/images/recent-view.png" class="card-img-top" alt="Item 5">
            <h6 class="card-title">Men’s Shot-Sleeve T-shirt</h6>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- trending product  -->

<section class="product-slider">
  <div class="container">

    <div class="section-header mb-4">
      <h4 class="fw-semibold m-0">Trending Products</h4>

      <a href="{{url('product')}}" class="view-all-btn">
        View All
        <span class="arrow">→</span>
      </a>
    </div>


    <div class="owl-carousel product-carousel">

      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<!-- Men’s Fashion  -->

<section class="product-slider bg-transparent">
  <div class="container">

    <div class="section-header mb-4">
      <h4 class="fw-semibold m-0">Men’s Fashion</h4>

      <a href="{{url('product')}}" class="view-all-btn">
        View All
        <span class="arrow">→</span>
      </a>
    </div>

    <div class="owl-carousel product-carousel">

      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<!-- flash section  -->

<section class="product-slider countdown-section">
  <div class="container">

    <div class="section-header mb-4">
      <h4 class="fw-semibold m-0">Limited Time Deals</h4>

      <a href="{{url('product')}}" class="view-all-btn">
        View All
        <span class="arrow">→</span>
      </a>
    </div>
    <div class="owl-carousel countdown-carousel">

      <!-- Card -->
      <div class="product-card">
        <div class="product-img">

          <span class="badge discount">50% OFF</span>


          <img src="assets/images/recent-view-2.png" alt="">

          <!-- Countdown Strip -->
          <div class="countdown" data-time="2025-12-31T23:59:59">
            <span><b>02</b><small>Days</small></span>
            <span><b>10</b><small>Hrs</small></span>
            <span><b>45</b><small>Min</small></span>
            <span><b>30</b><small>Sec</small></span>
          </div>
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.5</span>
            <small>(10 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹799</strong>
              <del>₹1599</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<section class="simple-banner">
  <div class="container">
    <img src="assets/images/simple.png" alt="Banner" class="img-fluid w-100">

  </div>
</section>

<!-- trending Now  -->

<section class="product-slider">
  <div class="container">

  <div class="section-header mb-4">
      <h4 class="fw-semibold m-0">Trending Now</h4>

      <a href="{{url('product')}}" class="view-all-btn">
        View All
        <span class="arrow">→</span>
      </a>
    </div>

    <div class="owl-carousel product-carousel">

      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>
      <!-- Card -->
      <div class="product-card">
        <div class="product-img">
          <span class="badge discount">70% OFF</span>
          <span class="wishlist">❤</span>
          <img src="assets/images/recent-view.png" alt="">
        </div>

        <div class="product-body">
          <h6>Men’s Shot-Sleeve T-shirt</h6>

          <div class="rating">
            ★ <span>4.6</span>
            <small>(12 Reviews)</small>
          </div>

          <div class="price-cart">
            <div class="price">
              <strong>₹347.00</strong>
              <del>₹3470</del>
            </div>
            <a href="{{url('product-detail')}}" class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </a>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>


@endsection
