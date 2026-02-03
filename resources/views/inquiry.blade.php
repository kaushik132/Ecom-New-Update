@extends('dashboard.layout.main')
@section('content')


<!-- bread cum section  -->
<section class="bread-cum">

  <div class="container">
    <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
    <div class="row text-center">
      <h1>Get Inquiry</h1>
      <ul class="list-unstyled d-flex text-center justify-content-center">
        <li><a href="index.php">Home /</a></li>
        <li>Get Inquiry</li>
      </ul>
    </div>
  </div>

</section>

<!-- form section  -->

<section class="inquiry-form">
  <div class="container">

    <form class="bulk-order-form">
      <!-- Full Name & Email -->
      <div class="row mb-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Enter full name" name="fullname" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Email Address" name="email" required>
        </div>
      </div>

      <!-- Phone & Company -->
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="input-group">
            <select name="country-code" class="form-select flex-shrink-0" style="max-width : 100px;">
              <option value="+91">🇮🇳 +91</option>
              <option value="+1">🇺🇸 +1</option>
              <option value="+44">🇬🇧 +44</option>
            </select>
            <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
          </div>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Company/Firm name" name="company">
        </div>
      </div>

      <!-- Address, Country, State -->
      <div class="row mb-3">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <div class="col-md-4">
          <select name="country" class="form-select">
            <option>Select Country</option>
            <option>India</option>
            <option>USA</option>
          </select>
        </div>
        <div class="col-md-4">
          <select name="state" class="form-select">
            <option>Select State</option>
            <option>Maharashtra</option>
            <option>California</option>
          </select>
        </div>
      </div>

      <!-- Delivery, City, Pincode -->
      <div class="row mb-3">
        <div class="col-md-4">
          <select name="delivery" class="form-select">
            <option>Select Delivery Timeline</option>
            <option>1 Week</option>
            <option>2 Weeks</option>
          </select>
        </div>
        <div class="col-md-4">
          <select name="city" class="form-select">
            <option>Select City</option>
            <option>Mumbai</option>
            <option>Delhi</option>
          </select>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Pincode" name="pincode">
        </div>
      </div>

      <!-- Quantity & Categories -->
      <div class="row mb-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Total Quantity" name="quantity">
        </div>
        <div class="col-md-6">
          <select name="categories" class="form-select">
            <option>Select Categories</option>
            <option>Category 1</option>
            <option>Category 2</option>
          </select>
        </div>
      </div>

      <!-- Message -->
      <div class="row mb-3">
        <div class="col-12">
          <textarea class="form-control" placeholder="Message here..." name="message" rows="4"></textarea>
        </div>
      </div>

      <!-- Checkbox -->
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="terms" required>
        <label class="form-check-label" for="terms">
          I have read and agree to the Bulk Booking <a href="#">Terms & Conditions</a>.
        </label>
      </div>

      <!-- Submit -->
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <button type="submit" class="btn btn-dark px-5">Submit Inquiry</button>
        </div>
      </div>

    </form>

  </div>

</section>


@endsection
