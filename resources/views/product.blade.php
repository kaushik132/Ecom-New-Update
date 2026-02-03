@extends('dashboard.layout.main')
@section('content')


<!-- bread cum section  -->
<section class="bread-cum">

  <div class="container">
    <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    <div class="row text-center">
      <h1>Shop</h1>
      <ul class="list-unstyled d-flex text-center justify-content-center">
        <li><a href="index.php">Home /</a></li>
        <li>Trending Products</li>
      </ul>
    </div>
  </div>

</section>

<!-- products  -->


<section class="all-products-section py-4">
  <div class="container">
    <div class="row g-4">

      <!-- FILTER SIDEBAR -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

      <div class="col-lg-3">
        <div class="filter-box">

          <h6 class="filter-title">Filter</h6>

          <!-- CATEGORY -->
          <div class="filter-group">
            <h6>Category</h6>

            <label class="custom-check">
              <input type="checkbox" name="category[]" value="men">
              <span class="checkmark"></span>
              Men
            </label>

            <label class="custom-check">
              <input type="checkbox" name="category[]" value="women">
              <span class="checkmark"></span>
              Women
            </label>

            <label class="custom-check">
              <input type="checkbox" name="category[]" value="kids">
              <span class="checkmark"></span>
              Kids
            </label>
          </div>

          <!-- PRICE -->
          <div class="filter-group">
            <h6>Prize</h6>

            <label class="custom-check">
              <input type="checkbox" value="under-999">
              <span class="checkmark"></span>
              Under ₹999
            </label>

            <label class="custom-check">
              <input type="checkbox" value="1000-2999">
              <span class="checkmark"></span>
              ₹1000 - ₹2999
            </label>

            <label class="custom-check">
              <input type="checkbox" value="3000+">
              <span class="checkmark"></span>
              ₹3000 & above
            </label>

            <!-- RANGE -->
            <div class="price-range-box">
             <input type="range" id="priceRange" min="0" max="3000" value="1500" step="100">

              <div class="price-values">
                <span>₹0</span>
                <span id="priceValue">₹1500</span>
                <span>₹3000</span>
              </div>
            </div>
          </div>

          <!-- RATING -->
          <div class="filter-group">
            <h6>Customer Rating</h6>

            <label class="custom-check">
              <input type="checkbox" value="4">
              <span class="checkmark"></span>
              <span class="rating-stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </span>
              &nbsp; & above
            </label>

            <label class="custom-check">
              <input type="checkbox" value="3">
              <span class="checkmark"></span>
              <span class="rating-stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </span>
              &nbsp; & above
            </label>

            <label class="custom-check">
              <input type="checkbox" value="2">
              <span class="checkmark"></span>
              <span class="rating-stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </span>
              &nbsp; & above
            </label>
          </div>


          <!-- SIZE -->
          <div class="filter-group">
            <h6>Size</h6>
            <div class="size-grid">

              <label class="size-check">
                <input type="checkbox" value="xs">
                <span>XS</span>
              </label>

              <label class="size-check">
                <input type="checkbox" value="s">
                <span>S</span>
              </label>

              <label class="size-check">
                <input type="checkbox" value="m">
                <span>M</span>
              </label>

              <label class="size-check">
                <input type="checkbox" value="l">
                <span>L</span>
              </label>

              <label class="size-check">
                <input type="checkbox" value="xl">
                <span>XL</span>
              </label>

              <label class="size-check">
                <input type="checkbox" value="xxl">
                <span>XXL</span>
              </label>

            </div>
          </div>

          <!-- trend  -->
          <div class="filter-group">
            <h6>Trend type</h6>

            <label class="custom-check">
              <input type="checkbox" name="" value="men">
              <span class="checkmark"></span>New Arrivals</label>

            <label class="custom-check">
              <input type="checkbox" name="" value="">
              <span class="checkmark"></span>Best Sellers</label>

            <label class="custom-check">
              <input type="checkbox" name="" value="kids">
              <span class="checkmark"></span>
              Viral on Social Media
            </label>
          </div>


          <div class="filter-group">
            <h6>Discount</h6>

            <label class="custom-check">
              <input type="checkbox" name="" value="men">
              <span class="checkmark"></span>20% or more</label>

            <label class="custom-check">
              <input type="checkbox" name="" value="women">
              <span class="checkmark"></span>
              40% or more
            </label>

            <label class="custom-check">
              <input type="checkbox" name="" value="kids">
              <span class="checkmark"></span>
              60% or more
            </label>
          </div>

          <!-- APPLY -->
          <button class=" apply-filter-btn w-100">Apply Filter</button>

        </div>
      </div>


      <!-- PRODUCT AREA -->
      <div class="col-lg-9">

        <!-- TOP BADGES ROW -->
        <div class="product-topbar mb-3">
          <div class="d-flex flex-wrap align-items-center gap-2">
            <span class="badge-custom">Total Items: 120</span>
            <span class="badge-custom">Men</span>
            <span class="badge-custom">Under ₹999</span>
            <span class="badge-custom">Best Seller</span>
            <span class="badge-custom">XL</span>

            <div class="ms-auto">
              <select class="form-select sort-dropdown">
                <option>Sort By</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest</option>
              </select>
            </div>
          </div>
        </div>

        <!-- PRODUCTS GRID (BLANK) -->
        <div class="row">

          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- Card -->
            <a class="text-decoration-none text-dark" href="{{url('product-detail')}}">
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
                    <button class="btn btn-dark btn-sm rounded-pill">
                      Add to cart
                    </button>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
@endsection
