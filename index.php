<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fleet Management Services | Optimize Your Fleet Operations</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: "Poppins", sans-serif;
      line-height: 1.6;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(90deg, #004aad, #007bff);
      color: #fff;
      padding: 100px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-weight: 700;
      font-size: 2.5rem;
    }

    .hero-section p {
      font-size: 1.1rem;
      margin-top: 15px;
    }

    /* About Preview */
    .about-preview img {
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Services Section */
    .services .card {
      border: none;
      border-radius: 12px;
      transition: 0.3s;
    }

    .services .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Testimonials */
    .testimonials {
      background: #f8f9fa;
      padding: 60px 0;
    }

    .blockquote {
      font-style: italic;
      color: #333;
    }

    .blockquote-footer {
      margin-top: 10px;
      color: #6c757d;
    }

    /* CTA Section */
    .cta-section {
      background: linear-gradient(90deg, #007bff, #00b4d8);
      color: #fff;
      padding: 70px 0;
      text-align: center;
    }

    .cta-section .btn {
      background: #fff;
      color: #007bff;
      font-weight: 500;
    }

    .cta-section .btn:hover {
      background: #f1f1f1;
      color: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Header / Navbar -->
 <?php include '../includes/header.php'; ?>


  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Fleet Management Made Simple</h1>
      <p>Optimize your fleet operations, reduce costs, and gain real-time insights with India’s most reliable Fleet Management Services.</p>
      <a href="#inquiry" class="btn btn-light btn-lg mt-3">Request a Free Demo</a>
    </div>
  </section>

  <!-- About Preview -->
  <section class="about-preview py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80" alt="Fleet Management" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2>About Our Company</h2>
          <p>We are a leading <strong>Fleet Management Service Provider in India</strong>, offering smart solutions for logistics, transport, and corporate fleets. Our goal is to ensure every vehicle on the road runs efficiently, safely, and profitably.</p>
          <a href="#" class="btn btn-primary mt-3">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Top Services -->
  <section class="services py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Our Top Services</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">GPS Tracking & Telematics</h5>
              <p>Real-time vehicle tracking with live route and geofencing updates.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Fuel Management</h5>
              <p>Monitor fuel usage and prevent wastage with AI-based analytics.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Fleet Maintenance Scheduling</h5>
              <p>Get automated reminders for preventive maintenance and servicing.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <h2 class="fw-bold text-center mb-5">What Our Clients Say</h2>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active text-center">
            <blockquote class="blockquote">
              <p>"FleetManage helped us reduce fuel costs by 20%! Their GPS tracking is incredibly accurate."</p>
              <footer class="blockquote-footer">Rohit Sharma, <cite title="Source Title">LogiTrans Pvt. Ltd.</cite></footer>
            </blockquote>
          </div>
          <div class="carousel-item text-center">
            <blockquote class="blockquote">
              <p>"Our delivery operations are now smoother and more efficient. Highly recommended!"</p>
              <footer class="blockquote-footer">Anita Deshmukh, <cite title="Source Title">CargoX India</cite></footer>
            </blockquote>
          </div>
          <div class="carousel-item text-center">
            <blockquote class="blockquote">
              <p>"Excellent customer support and easy-to-use dashboard for managing multiple fleets."</p>
              <footer class="blockquote-footer">Vikram Patel, <cite title="Source Title">TransFleet Logistics</cite></footer>
            </blockquote>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- Inquiry Call-to-Action -->
  <section id="inquiry" class="cta-section">
    <div class="container">
      <h2 class="fw-bold">Ready to Optimize Your Fleet?</h2>
      <p class="lead mb-4">Let’s discuss how our technology can help you save time, money, and fuel.</p>
      <a href="inquiry_form.php" class="btn btn-light btn-lg">Contact Us Now</a>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php include '../includes/footer.php'; ?>
</body>
</html>
