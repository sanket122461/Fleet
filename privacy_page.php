<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Privacy Policy | FleetManage</title>
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

    /* Content */
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
 <?php include '../includes/header.php'; ?>
      
  <!-- Hero Section -->
  <section class="hero">
    <div class="container" data-aos="fade-up">
        
      <h1>Privacy Policy</h1>
      <p>We value your privacy and are committed to protecting your personal information.</p>
    </div>
  </section>

  <!-- Privacy Content -->
  <section>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="100">
        <p>This Privacy Policy describes how <strong>FleetManage</strong> collects, uses, and protects your information when you use our website and services. By using our platform, you consent to the practices described in this policy.</p>

        <h3>1. Information We Collect</h3>
        <p>We may collect the following types of information:</p>
        <ul>
          <li><strong>Personal Information:</strong> Name, email address, phone number, and contact details.</li>
          <li><strong>Fleet Data:</strong> Vehicle details, driver information, and GPS tracking data.</li>
          <li><strong>Usage Data:</strong> IP address, browser type, operating system, and website usage statistics.</li>
        </ul>

        <h3>2. How We Use Your Information</h3>
        <p>We use your information to:</p>
        <ul>
          <li>Provide, improve, and personalize our services.</li>
          <li>Process service requests and manage fleet operations.</li>
          <li>Send important updates, alerts, and notifications.</li>
          <li>Ensure compliance with legal and security requirements.</li>
        </ul>

        <h3>3. Data Security</h3>
        <p>We implement appropriate security measures to protect your personal and operational data against unauthorized access, alteration, disclosure, or destruction. However, no internet-based service is completely secure, and we cannot guarantee absolute protection.</p>

        <h3>4. Sharing of Information</h3>
        <p>We do not sell, trade, or rent users’ personal information. We may share information only with trusted partners who help us operate our business or provide services to you, under strict confidentiality agreements.</p>

        <h3>5. Cookies and Tracking Technologies</h3>
        <p>Our website uses cookies to enhance your experience, analyze site traffic, and improve functionality. You may choose to disable cookies through your browser settings, though some site features may not function properly as a result.</p>

        <h3>6. Data Retention</h3>
        <p>We retain your personal and fleet data only as long as necessary to fulfill the purposes outlined in this policy or as required by law.</p>

        <h3>7. Your Rights</h3>
        <ul>
          <li>Access, correct, or delete your personal information.</li>
          <li>Withdraw consent for data processing.</li>
          <li>Request details of how your information is used.</li>
        </ul>

        <h3>8. Third-Party Links</h3>
        <p>Our website may contain links to external sites. We are not responsible for the privacy practices or content of these third-party websites.</p>

        <h3>9. Updates to This Policy</h3>
        <p>FleetManage reserves the right to modify this Privacy Policy at any time. Updates will be posted on this page along with the “Last Updated” date below.</p>

        <h3>10. Contact Us</h3>
        <p>If you have any questions or concerns about this Privacy Policy or how we handle your data, please contact us at <a href="mailto:privacy@fleetmanage.com" class="text-decoration-none">privacy@fleetmanage.com</a>.</p>

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
