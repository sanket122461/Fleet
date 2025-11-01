<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terms & Conditions | FleetManage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
      padding-top: 80px;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #007bff, #00b4d8);
      color: #fff;
      text-align: center;
      padding: 100px 20px 80px;
      border-bottom-left-radius: 80px;
      border-bottom-right-radius: 80px;
    }
    .hero h1 {
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .hero p {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Content Section */
    section {
      padding: 60px 0;
    }
    h3 {
      color: #007bff;
      margin-top: 40px;
      margin-bottom: 15px;
    }
    p, li {
      color: #555;
      line-height: 1.7;
    }
    ul {
      padding-left: 20px;
    }

    /* Scroll to Top Button */
    #scrollTopBtn {
      display: none;
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      padding: 12px 16px;
      border-radius: 50%;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: 0.3s ease;
    }
    #scrollTopBtn:hover {
      background-color: #0056b3;
    }

    footer {
      background: #fff;
      border-top: 1px solid #ddd;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <!-- Hero Section -->
 <?php include '../includes/header.php'; ?>
   
  <section class="hero">
    <div class="container" data-aos="fade-up">
      <h1>Terms & Conditions</h1>
      <p>Understand your rights and responsibilities when using FleetManage.</p>
    </div>
  </section>

  <!-- Main Content -->
  <section>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="100">
        <p>Welcome to <strong>FleetManage</strong>. By using our website and services, you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully before using our services.</p>

        <h3>1. Acceptance of Terms</h3>
        <p>By accessing or using our platform, you confirm that you have read, understood, and agree to these Terms. If you do not agree, you may not use our services.</p>

        <h3>2. Services Provided</h3>
        <p>FleetManage provides fleet tracking, maintenance management, and route optimization services. We reserve the right to modify, suspend, or discontinue any service without prior notice.</p>

        <h3>3. User Responsibilities</h3>
        <ul>
          <li>You agree to provide accurate information while using our services.</li>
          <li>You are responsible for maintaining the confidentiality of your account details.</li>
          <li>You agree not to misuse or attempt to disrupt our website or services.</li>
        </ul>

        <h3>4. Data Privacy</h3>
        <p>Your personal information is collected and processed according to our <a href="privacy.html" class="text-decoration-none text-primary">Privacy Policy</a>. We ensure your data is handled securely and used only for service-related purposes.</p>

        <h3>5. Payment and Billing</h3>
        <p>All payments must be made according to the pricing and billing policies mentioned on our website or service agreement. Failure to pay may result in service suspension or termination.</p>

        <h3>6. Limitation of Liability</h3>
        <p>FleetManage is not liable for any indirect, incidental, or consequential damages resulting from the use or inability to use our services.</p>

        <h3>7. Modifications to Terms</h3>
        <p>We reserve the right to modify these Terms & Conditions at any time. Updates will be posted on this page with the “Last Updated” date.</p>

        <h3>8. Governing Law</h3>
        <p>These Terms shall be governed by and construed in accordance with the laws of India, and any disputes shall be subject to the jurisdiction of local courts.</p>

        <h3>9. Contact Us</h3>
        <p>If you have any questions about these Terms & Conditions, please contact us at <a href="mailto:support@fleetmanage.com" class="text-decoration-none">support@fleetmanage.com</a>.</p>

        <p class="text-muted mt-4"><em>Last Updated: October 31, 2025</em></p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <p class="mb-0">&copy; 2025 FleetManage. All Rights Reserved.</p>
  </footer>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn" title="Go to top">↑</button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });

    // Scroll to top button
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    window.onscroll = function() {
      scrollTopBtn.style.display = (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) ? "block" : "none";
    };
    scrollTopBtn.addEventListener("click", function() {
      window.scrollTo({top: 0, behavior: 'smooth'});
    });
  </script>
  <?php include '../includes/footer.php'; ?>
</body>
</html>
