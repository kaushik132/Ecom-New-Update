@extends('dashboard.layout.main')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/drift-zoom/dist/drift-basic.min.css">



<!-- product detail -->
<section class="product-detail-section py-4">
  <div class="container">
    <a href="product.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> Back</a>

    <div class="row mt-3">

      <!-- LEFT : IMAGES -->
      <div class="col-lg-6 position-relative">

        <div class="product-image-box">
          <div class="main-image">
            <img
              id="mainProductImage"
              class="img-fluid drift-trigger slideshow-items.active"
              src="assets/images/detail-1.png"
              data-zoom="assets/images/detail-1.png">
          </div>

          <!-- THUMBNAILS -->
          <div class="owl-carousel product-thumbs mt-3">
            <img class="slideshow-items" src="assets/images/detail-1.png">
            <img class="slideshow-items" src="assets/images/detail-2.png">
            <img class="slideshow-items" src="assets/images/detail-3.png">
            <img class="slideshow-items" src="assets/images/detail-1.png">
          </div>
        </div>

      </div>



      <!-- RIGHT : DETAILS -->
      <div class="col-lg-6">

        <small class="category-text">T-Shirt</small>
        <h3 class="product-title">Men’s Shot-Sleeve T-shirt</h3>

        <!-- RATING -->
        <div class="rating-row">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <span class="rating-text">4.8 (127 reviews)</span>
          <a href="#!" class="review-link" data-bs-toggle="modal" data-bs-target="#reviewModal">Add Review</a>
        </div>

        <!-- PRICE -->
        <div class="price-row">
          <span class="price">₹347.00</span>
          <span class="old-price">₹347.00</span>
          <span class="stock">In Stock</span>
        </div>

        <!-- DESCRIPTION -->
        <p class="product-desc">
          An exquisite evening gown crafted from luxurious silk charmeuse with delicate hand-beaded embellishments.
        </p>

        <!-- COLOR -->
        <div class="option-group">
          <label>Color: <span id="selectedColor">Gray</span></label>
          <div class="color-options">
            <span class="color gray active" data-color="Gray"></span>
            <span class="color black" data-color="Black"></span>
            <span class="color peach" data-color="Peach"></span>
          </div>
        </div>

        <!-- SIZE -->
        <div class="option-group">
          <label class="size-label">Size:</label>

          <div class="size-qty-grid">

            <div class="size-qty-item">
              <span class="size-box">XS</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

            <div class="size-qty-item">
              <span class="size-box">S</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

            <div class="size-qty-item">
              <span class="size-box">M</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

            <div class="size-qty-item">
              <span class="size-box">L</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

            <div class="size-qty-item">
              <span class="size-box">XL</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

            <div class="size-qty-item">
              <span class="size-box">XXL</span>
              <input type="number" placeholder="Enter Quantity">
            </div>

          </div>
        </div>

        <div class="price-detail-card">

          <h5 class="price-title">Price detail</h5>

          <div class="price-table-wrapper">
            <table class="price-table">
              <thead>
                <tr>
                  <th>Quantity (Units)</th>
                  <th>Price / Unit</th>
                  <th>Total Price</th>
                  <th>Savings</th>
                </tr>
              </thead>
              <tbody>
                <tr class="highlight">
                  <td>50 – 99</td>
                  <td>₹420</td>
                  <td>₹42,000</td>
                  <td>
                    Save 7%
                    <span class="tag">Most Popular</span>
                  </td>
                </tr>
                <tr>
                  <td>100 – 499</td>
                  <td>₹420</td>
                  <td>₹42,000</td>
                  <td>Save 13%</td>
                </tr>
                <tr>
                  <td>500 – 999</td>
                  <td>₹420</td>
                  <td>₹42,000</td>
                  <td>Save 20%</td>
                </tr>
                <tr>
                  <td>1000+</td>
                  <td>₹420</td>
                  <td>₹42,000</td>
                  <td>—</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- ACTION LINKS -->
          <div class="price-actions">
            <a href="{{url('inquiry')}}" class="action-link primary">
              <i class="fa-solid fa-paper-plane"></i>
              Send Inquiry
            </a>

            <a href="#" class="action-link outline">
              <i class="fa-brands fa-whatsapp"></i>
              Chat Now
            </a>

          </div>

        </div>


        <!-- DELIVERY -->
        <div class="delivery-box mt-4">
          <h6>Delivery</h6>
          <input type="text" placeholder="Enter your pincode">
          <small>Get delivery estimate and availability.</small>
        </div>

      </div>

    </div>

  </div>
  </div>
  </div>
</section>

<!-- detail section  -->

<section class="product-tabs-section py-2">
  <div class="container">
    <div class="row">

      <!-- LEFT TABS -->
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="nav flex-column product-tabs" id="productTab" role="tablist">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#details" type="button">
            Details
          </button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured" type="button">
            Featured
          </button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews" type="button">
            Reviews
          </button>
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-9">
        <div class="tab-content product-tab-content">

          <!-- DETAILS -->
          <div class="tab-pane fade show active" id="details">
            <h5 class="mb-3">Product Details</h5>

            <h6>Specifications</h6>
            <ul class="spec-list">
              <li><span>Fabric:</span> 100% Silk Charmeuse</li>
              <li><span>Lining:</span> Polyester Blend</li>
              <li><span>Care:</span> Dry Clean Only</li>
              <li><span>Origin:</span> Made In Italy</li>
              <li><span>Fit:</span> True to size</li>
            </ul>

            <h6 class="mt-4">Description</h6>
            <p class="desc-text">
              Minus is placed on the left and plus on the right because users read left to right,
              and mentally associate left with decrease and right with increase.
              This matches natural number scales and reduces accidental deletions.
              <a href="#">Read more</a>
            </p>
          </div>

          <!-- FEATURED -->
          <div class="tab-pane fade" id="featured">

            <div class="container">
              <h5 class="mb-3">Featured</h5>
              <p class="text-muted mb-4">
                Premium quality fabric, modern fit, elegant design.
              </p>

              <!-- KEY FEATURES -->
              <div class="row">
                <div class="col-md-6">
                  <div class="key-features-box">
                    <h6 class="mb-3">Key Features</h6>

                    <ul class="key-features-list">
                      <li>
                        <span class="feature-icon">✓</span>
                        Premium breathable cotton fabric
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Tailored modern slim-fit design
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Fade-resistant & long-lasting color
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Easy care & wrinkle resistant
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Suitable for casual & formal wear
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="key-features-box">
                    <h6 class="mb-3">Key Features</h6>

                    <ul class="key-features-list">
                      <li>
                        <span class="feature-icon">✓</span>
                        Premium breathable cotton fabric
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Tailored modern slim-fit design
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Fade-resistant & long-lasting color
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Easy care & wrinkle resistant
                      </li>
                      <li>
                        <span class="feature-icon">✓</span>
                        Suitable for casual & formal wear
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <!-- REVIEWS -->
          <div class="tab-pane fade" id="reviews">
            <div class="container">

              <!-- HEADER -->
              <div class="reviews-header d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Customer Reviews</h4>
                <button class="btn btn-dark write-review-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                  Write Review
                </button>
              </div>

              <!-- SUMMARY -->
              <div class="row align-items-center mb-2 mb-md-5">

                <!-- LEFT RATING -->
                <div class="col-lg-3 text-center text-lg-start mb-4 mb-lg-0 rating-ghar">
                  <div class="rating-big">4.8</div>
                  <div class="stars mb-2">
                    ★ ★ ★ ★ <span class="muted">★</span>
                  </div>
                  <small class="text-muted">127 reviews</small>
                </div>

                <!-- RIGHT BARS -->
                <div class="col-lg-9">

                  <!-- 5 STAR -->
                  <div class="rating-row">
                    <span>5 Star</span>
                    <div class="progress">
                      <div class="progress-bar" style="width :85%"></div>
                    </div>
                    <span>85%</span>
                  </div>

                  <!-- 4 STAR -->
                  <div class="rating-row">
                    <span>4 Star</span>
                    <div class="progress">
                      <div class="progress-bar" style="width :30%"></div>
                    </div>
                    <span>30%</span>
                  </div>

                  <!-- 3 STAR -->
                  <div class="rating-row">
                    <span>3 Star</span>
                    <div class="progress">
                      <div class="progress-bar" style="width :20%"></div>
                    </div>
                    <span>20%</span>
                  </div>

                  <!-- 2 STAR -->
                  <div class="rating-row">
                    <span>2 Star</span>
                    <div class="progress">
                      <div class="progress-bar" style="width :10%"></div>
                    </div>
                    <span>10%</span>
                  </div>

                  <!-- 1 STAR -->
                  <div class="rating-row">
                    <span>1 Star</span>
                    <div class="progress">
                      <div class="progress-bar" style="width :10%"></div>
                    </div>
                    <span>10%</span>
                  </div>

                </div>
              </div>

              <!-- SINGLE REVIEW -->
              <div class="review-card">
                <div class="d-flex justify-content-between align-items-start">

                  <div class="d-flex gap-3">
                    <img src="https://i.pravatar.cc/80?img=32" class="review-avatar">
                    <div>
                      <h6 class="mb-0">Sarah Johnson</h6>
                      <div class="stars small-stars">★ ★ ★ ★ ★</div>
                      <p class="review-title">Absolutely Stunning!</p>
                    </div>
                  </div>

                  <span class="badge verified-badge">Verified Purchase</span>

                </div>

                <p class="review-text mt-2">
                  This gown exceeded all my expectations. The quality is impeccable and
                  I received so many compliments at the gala. Worth every penny!
                </p>
              </div>
              <div class="review-card">
                <div class="d-flex justify-content-between align-items-start">

                  <div class="d-flex gap-3">
                    <img src="https://i.pravatar.cc/80?img=32" class="review-avatar">
                    <div>
                      <h6 class="mb-0">Sarah Johnson</h6>
                      <div class="stars small-stars">★ ★ ★ ★ ★</div>
                      <p class="review-title">Absolutely Stunning!</p>
                    </div>
                  </div>

                  <span class="badge verified-badge">Verified Purchase</span>

                </div>

                <p class="review-text mt-2">
                  This gown exceeded all my expectations. The quality is impeccable and
                  I received so many compliments at the gala. Worth every penny!
                </p>
              </div>
              <div class="review-card">
                <div class="d-flex justify-content-between align-items-start">

                  <div class="d-flex gap-3">
                    <img src="https://i.pravatar.cc/80?img=32" class="review-avatar">
                    <div>
                      <h6 class="mb-0">Sarah Johnson</h6>
                      <div class="stars small-stars">★ ★ ★ ★ ★</div>
                      <p class="review-title">Absolutely Stunning!</p>
                    </div>
                  </div>

                  <span class="badge verified-badge">Verified Purchase</span>

                </div>

                <p class="review-text mt-2">
                  This gown exceeded all my expectations. The quality is impeccable and
                  I received so many compliments at the gala. Worth every penny!
                </p>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>



<!-- trending product  -->

<section class="product-slider">
  <div class="container">

    <h4 class="mb-4 fw-semibold">You May Also Like </h4>

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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
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
            <button class="btn btn-dark btn-sm rounded-pill">
              Add to cart
            </button>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>

<div class="modal fade" id="reviewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content review-modal">

      <div class="modal-header border-0">
        <h5 class="modal-title">Write a Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p class="text-muted small mb-3">
          Share your experience with other travelers
        </p>

        <!-- Rating -->
        <div class="rating-stars mb-3">
          <span data-value="1">★</span>
          <span data-value="2">★</span>
          <span data-value="3">★</span>
          <span data-value="4">★</span>
          <span data-value="5">★</span>
        </div>

        <!-- Review -->
        <textarea class="form-control mb-3" rows="4"
          placeholder="Write your review here..."></textarea>

        <!-- Submit -->
        <button class="btn btn-dark w-100 submit-review-btn">
          Submit Review
        </button>

      </div>
    </div>
  </div>
</div>
<script src="https://unpkg.com/drift-zoom/dist/Drift.min.js"></script>
@endsection
