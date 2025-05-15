<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Louve Skincare</title>
  <!-- Bootstrap CSS (në <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      background-color: #fffaf6;
      color: #333;
    }
    .hero {
     background: url('assets/images/banner.png') no-repeat center center;
      background-size: cover;
      color: white;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
      padding: 100px 20px;
    }
    .hero h1 {
      font-size: 3rem;
    }
    .highlight-list li::before {
      content: '✓';
      margin-right: 0.5rem;
      color: green;
    }
    .navbar-brand img {
      height: 40px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="assets/images/logo_ls.png" alt="Louve Skincare Logo" width="150" height="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#highlights">Highlights</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero text-center mt-5 pt-5">
    <h1>Glow Naturally. Love Endlessly.</h1>
    <p class="lead">100% Organic Skincare made with Albanian-grown lychee extract.</p>
    <a href="#products" class="btn btn-light mt-3">Explore Products</a>
  </header>

 <!-- About the Brand -->
<section class="container py-5" id="about">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h2>About Louve Skincare</h2>
      <p>
        Louve is a premium Albanian skincare brand focused on organic, cruelty-free, and eco-conscious skincare. Our star ingredient is lychee fruit from the Albanian Riviera — rich in antioxidants, vitamins, and natural hydration. <br><br>
        At Louve, we believe that skincare should be simple, effective, and aligned with nature. Every product is thoughtfully formulated to nourish your skin without harsh chemicals, using clean beauty principles and botanical extracts. <br><br>
        Our mission is to empower women through gentle rituals that enhance natural beauty, while staying true to our roots, respecting animals, and caring for the planet.
      </p>

    </div>
    <div class="col-md-6">
      <img src="assets/images/about.png" class="img-fluid rounded" alt="Lychee">
    </div>
  </div>
</section>

  <!-- Product Categories -->
<section class="bg-light py-5" id="products">
  <div class="container">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row">
      <!-- Face Care -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="assets/images/face.png" class="card-img-top" alt="Face Care">
          <div class="card-body">
            <h4 class="card-title">Face Care</h4>
            <ul class="list-unstyled">
              <li>Cleanser</li>
              <li>Moisturizer</li>
              <li>Toner</li>
              <li>Vitamin C Serum</li>
              <li>SPF 30</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Body Care -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="assets/images/body.png" class="card-img-top" alt="Body Care">
          <div class="card-body">
            <h4 class="card-title">Body Care</h4>
            <ul class="list-unstyled">
              <li>Body Lotion</li>
              <li>Body Mist</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Hair Care -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="assets/images/hair.png" class="card-img-top" alt="Hair Care">
          <div class="card-body">
            <h4 class="card-title">Hair Care</h4>
            <ul class="list-unstyled">
              <li>Amabilis Hair Perfume</li>
              <li>Bestia Hair Perfume</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Highlights -->
  <section class="container py-5" id="highlights">
    <h2 class="text-center mb-4">Why Louve?</h2>
    <ul class="highlight-list list-unstyled text-center">
      <li>100% Organic</li>
      <li>Dermatologist-Tested</li>
      <li>Cruelty-Free</li>
      <li>Made in Albania</li>
      <li>Free Delivery over 4,000 Lek</li>
    </ul>
  </section>

  <!-- Testimonials -->
<section class="bg-light py-5" id="testimonials">
  <div class="container">
    <h2 class="text-center mb-5">Testimonials</h2>
    <div class="row justify-content-center">
      
      <!-- Testimonial 1 -->
      <div class="col-md-5 d-flex mb-4">
        <img src="assets/images/user1.png" class="rounded-circle me-3" alt="Sara M." width="80" height="80">
        <div>
          <p class="mb-1">"Louve is my new obsession!"</p>
          <div class="text-warning mb-1">
            ★★★★★
          </div>
          <small class="text-muted">Sara M.</small>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-md-5 d-flex mb-4">
        <img src="assets/images/user2.png" class="rounded-circle me-3" alt="Elira D." width="80" height="80">
        <div>
          <p class="mb-1">"The hair perfume is out of this world."</p>
          <div class="text-warning mb-1">
            ★★★★★
          </div>
          <small class="text-muted">Elira D.</small>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- Contact Form -->
  <section class="container py-5" id="contact">
    <h2 class="text-center mb-4">Get in Touch</h2>
    <form action="https://formspree.io/f/moqgzrkn" method="POST" class="mx-auto" style="max-width: 600px;">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-dark">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
<footer class="text-center text-md-start py-4 bg-dark text-light">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <img src="assets/images/logo_ls.png" alt="Louve Logo" style="height: 40px;" class="mb-3 mb-md-0">

    <p class="mb-0 d-flex align-items-center gap-3">
      <span><i class="bi bi-envelope-fill"></i> info@louve.al</span>
      <span><i class="bi bi-instagram"></i> 
        <a href="https://instagram.com/louve.club" class="text-light">@louve.club</a>
      </span>
    </p>
  </div>
</footer>


  <!-- Dummy Analytics -->
  <script>
    console.log("Dummy analytics initialized");
    document.addEventListener("DOMContentLoaded", function () {
      console.log("Page viewed at", new Date().toISOString());
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Dummy Google Analytics snippet -->
<script>
  (function(){
    console.log('Dummy Analytics Loaded: Pageview sent to GA');
  })();
</script>
</body>
</html>
