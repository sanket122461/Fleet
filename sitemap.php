<?php
// ---------- Dynamic Sitemap Generator ----------

// Base URL (change to your live site URL when deployed)
$base_url = "http://localhost/fleet/"; 

// Directory to scan (current folder)
$directory = __DIR__;

// Get all .php files in the /pages directory
$files = glob($directory . "/*.php");

// Exclude unwanted files (like includes or config)
$excludes = ['sitemap.php']; // exclude itself if needed

$pages = [];
foreach ($files as $file) {
  $filename = basename($file);
  if (!in_array($filename, $excludes)) {
    $pages[] = $filename;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sitemap | FleetManage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
      padding-top: 90px;
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
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Sitemap List */
    .sitemap-section {
      padding: 60px 0;
    }

    .sitemap-list a {
      text-decoration: none;
      color: #007bff;
      font-weight: 500;
      transition: color 0.3s;
    }

    .sitemap-list a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .sitemap-card {
      background: #fff;
      border-radius: 12px;
      padding: 25px 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    footer {
      background: #fff;
      border-top: 1px solid #ddd;
      padding: 20px 0;
    }
  </style>
</head>
<body>

  <!-- ✅ Correct path for includes -->
  <?php include '../includes/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Sitemap</h1>
      <p>Quickly navigate through all pages of the FleetManage website.</p>
    </div>
  </section>

  <!-- Sitemap Content -->
  <section class="sitemap-section">
    <div class="container">
      <div class="sitemap-card">
        <h3 class="mb-4 text-primary">Website Pages</h3>
        <ul class="sitemap-list list-unstyled">
          <?php foreach ($pages as $page): ?>
            <li class="mb-2">
              <a href="<?php echo $base_url . 'pages/' . $page; ?>" target="_blank">
                <?php echo ucfirst(str_replace(['.php', '_', '-'], ['', ' ', ' '], $page)); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>

        <hr>

        <h5 class="mt-4 text-secondary">Additional Links</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo $base_url; ?>includes/header.php" target="_blank">Header Template</a></li>
          <li><a href="<?php echo $base_url; ?>assets/images/" target="_blank">Media / Images Folder</a></li>
          <li><a href="<?php echo $base_url; ?>pages/admin_dashboard.php" target="_blank">Admin Dashboard</a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ✅ Footer -->
  <?php include '../includes/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
