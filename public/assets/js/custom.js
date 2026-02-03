
// header
 AOS.init();

document.addEventListener("DOMContentLoaded", function () {

  const header = document.getElementById("myHeader");
  if (!header) return;

  const stickyOffset = 120;

  window.addEventListener("scroll", function () {
    if (window.scrollY >= stickyOffset) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });

});


  document.addEventListener('DOMContentLoaded', function () {

  const buttons = document.querySelectorAll('.custom-dropdown-2 .dropdown-btn');
  const menus   = document.querySelectorAll('.dropdown-menu-2');

  buttons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();

      const menu = this.nextElementSibling;

      menus.forEach(m => {
        if (m !== menu) m.style.display = 'none';
      });

      menu.style.display =
        menu.style.display === 'block' ? 'none' : 'block';
    });
  });

  document.addEventListener('click', function () {
    menus.forEach(menu => menu.style.display = 'none');
  });

});


$('.image-banner-carousel').owlCarousel({
  items: 1,
  loop: true,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  navText: [
    "<span>&#10094;</span>",
    "<span>&#10095;</span>"
  ]
});


$(document).ready(function(){

    $('.icon-owl').owlCarousel({

      loop:true,

      margin:8,

      nav:true,

      dots:false,

      autoplay:true,

      responsive:{

        0:{

          nav:false,

          stagePadding: 35,

          dots:false,

          items:3

          

        },

        600:{

          items:6

        },

        1000:{

          items:12

        }

      }

    });

  });



  $('.offer-carousel').owlCarousel({
  items: 1,
  loop: true,
  dots: true,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3500
});


$('.product-carousel').owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  stagePadding: 40,
  responsive: {
    0: {
      items: 1,
      stagePadding: 20
    },
    576: {
      items: 2
    },
    768: {
      stagePadding: 0,
      items: 2.5
    },
    1200: {
      items: 4
    }
  }
});

$('.countdown-carousel').owlCarousel({
  loop: true,
  margin: 20,
  dots: false,
  nav: false,
  stagePadding: 40,
  responsive: {
    0: {
      items: 1,
      stagePadding: 20
    },
    576: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});


/* ===============================
   PRODUCT THUMBNAILS (OWL)
================================ */
$(document).ready(function () {

  $('.product-thumbs').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,   // 3 sec
    autoplayHoverPause: true,

    responsive: {
      0: {
        items: 3      // mobile
      },
      768: {
        items: 4      // tablet & desktop
      }
    }
  });

});



/* ===============================
   COLOR SELECT
================================ */
document.querySelectorAll('.color').forEach(color => {
  color.addEventListener('click', () => {
    document.querySelectorAll('.color').forEach(c => c.classList.remove('active'));
    color.classList.add('active');
    document.getElementById('selectedColor').innerText = color.dataset.color;
  });
});


/* ===============================
   SIZE SELECT
================================ */
document.querySelectorAll('.size-options span').forEach(size => {
  size.addEventListener('click', () => {
    document.querySelectorAll('.size-options span').forEach(s => s.classList.remove('active'));
    size.classList.add('active');
    document.getElementById('selectedSize').innerText = size.dataset.size;
  });
});




/* ===============================
   DRIFT ZOOM (FINAL & SAFE)
================================ */
document.addEventListener('DOMContentLoaded', function () {

  let driftInstance;

  function initDrift() {

    if (driftInstance) {
      driftInstance.destroy(); // remove old instance
    }

    const trigger = document.querySelector('.drift-trigger');
    if (!trigger) return;

    driftInstance = new Drift(trigger, {
      paneContainer: document.querySelector('.product-image-box'),
      inlinePane: false,
      hoverBoundingBox: true,
      containInline: true
    });
  }

  initDrift();

  // Thumbnail click → change image + reinit zoom
  document.querySelectorAll('.slideshow-items').forEach(img => {
    img.addEventListener('click', function () {
      const mainImg = document.getElementById('mainProductImage');
      mainImg.src = this.src;
      mainImg.setAttribute('data-zoom', this.src);
      initDrift();
    });
  });

});


/* ===============================
   PRICE RANGE
================================ */
const range = document.getElementById("priceRange");
const priceValue = document.getElementById("priceValue");

if (range && priceValue) {
  range.addEventListener("input", function () {
    priceValue.innerText = "₹" + this.value;
  });
}


let rating = 0;
const stars = document.querySelectorAll('.rating-stars span');

stars.forEach(star => {
  star.addEventListener('click', () => {
    rating = star.dataset.value;
    stars.forEach(s => {
      s.classList.toggle('active', s.dataset.value <= rating);
    });
  });
});



document.querySelector(".shop-toggle").addEventListener("click", function () {
    this.closest(".mega-hover").classList.toggle("active");
});

document.querySelectorAll(".accordion-title").forEach(btn => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("active");

        const content = btn.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
});


/* ===============================
   QUANTITY
================================ */
let qtyInput = document.getElementById('qtyInput');

document.querySelector('.qty-plus').addEventListener('click', () => {
  qtyInput.value = parseInt(qtyInput.value) + 1;
});

document.querySelector('.qty-minus').addEventListener('click', () => {
  if (qtyInput.value > 1) {
    qtyInput.value = parseInt(qtyInput.value) - 1;
  }
});


