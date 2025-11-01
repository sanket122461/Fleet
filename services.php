<?php include '../includes/header.php'; ?>

<!-- Services Hero Section -->
<section class="services-hero text-white d-flex align-items-center justify-content-center"
  style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../assets/images/fleet_services_banner.webp') center/cover no-repeat; height: 300px;">
  <div class="container text-center">
    <h1 class="fw-bold">Our Services</h1>
    <p class="lead">Smart Solutions for Smarter Fleet Management</p>
  </div>
</section>

<!-- Services List -->
<section class="services-list py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4 text-primary">Fleet Management Solutions We Offer</h2>
    <p class="text-muted mb-5">Our comprehensive range of services ensures your fleet operates efficiently, safely, and cost-effectively.</p>

    <div class="row g-4">

      <!-- Common CSS for images -->
      <style>
        .card-img-top {
          width: 100%;
          height: 250px; /* Equal height for all images */
          object-fit: cover; /* Ensures proper fit */
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
        }
      </style>

      <!-- Service 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://images.unsplash.com/photo-1600431521340-491eca880813?auto=format&fit=crop&w=800&q=80"
               class="card-img-top" alt="GPS Tracking">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">GPS Tracking & Telematics</h5>
            <p class="card-text">Monitor your fleet in real-time, view route history, and receive alerts for unauthorized usage or route deviations.</p>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="../assets/images/fuel_management.jpg" class="card-img-top" alt="Fuel Management">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Fuel Management</h5>
            <p class="card-text">Track fuel usage, detect theft, and improve fuel efficiency with real-time monitoring and reports.</p>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="../assets/images/maintenance_Sheduling.jpg" class="card-img-top" alt="Maintenance Scheduling">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Maintenance Scheduling</h5>
            <p class="card-text">Receive automatic service reminders to minimize breakdowns and extend vehicle life.</p>
          </div>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="../assets/images/driver_behaviour_analysis.jpg" class="card-img-top" alt="Driver Behavior Analysis">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Driver Behavior Analysis</h5>
            <p class="card-text">Get insights on driver performance, speed, and safety compliance to reduce risks and accidents.</p>
          </div>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="../assets/images/reporting_management.jpg" class="card-img-top" alt="Reporting Dashboard">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Reporting Dashboard</h5>
            <p class="card-text">Access detailed reports and analytics for performance tracking, cost control, and decision-making.</p>
          </div>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="../assets/images/route_optimization.jpg" class="card-img-top" alt="Route Optimization">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Route Optimization</h5>
            <p class="card-text">Plan the most efficient routes for deliveries and reduce overall travel time and fuel usage.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Inquiry CTA -->
<section class="cta-section bg-primary text-white py-5 text-center">
  <div class="container">
    <h2 class="fw-bold">Need a Custom Fleet Solution?</h2>
    <p class="lead mb-4">Let’s discuss your requirements and help you design the perfect fleet management strategy.</p>
    <a href="../pages/inquiry_form.php" class="btn btn-light btn-lg">Request a Consultation</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
