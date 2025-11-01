<?php
// ---------- Database Connection ----------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleet_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ---------- Handle Form Submission ----------
$success_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $service = mysqli_real_escape_string($conn, $_POST['service']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO inquiries (name, email, mobile, service, message)
          VALUES ('$name', '$email', '$mobile', '$service', '$message')";

  if ($conn->query($sql) === TRUE) {
    $success_message = "✅ Thank you! Your inquiry has been submitted successfully.";
  } else {
    $success_message = "❌ Error: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inquiry Form | Fleet Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f6f8fa;
      margin: 0;
      padding-top: 80px;
    }

    /* Center the card */
    .form-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 120px);
      padding: 20px;
    }

    /* Card container */
    .form-container {
      background: #fff;
      padding: 40px 50px;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 600px;  /* increased width */
      transition: all 0.3s ease;
    }

    .form-container:hover {
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #007bff;
      font-size: 26px;
    }

    input, select, textarea {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 18px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
      transition: border-color 0.2s ease;
    }

    input:focus, select:focus, textarea:focus {
      border-color: #007bff;
      outline: none;
    }

    button {
      width: 100%;
      padding: 14px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #0056b3;
    }

    .success {
      text-align: center;
      color: green;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .error {
      text-align: center;
      color: red;
      font-weight: bold;
      margin-bottom: 15px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .form-container {
        padding: 30px 25px;
        max-width: 90%;
      }
    }

    @media (max-width: 480px) {
      h2 {
        font-size: 22px;
      }
      input, select, textarea, button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
 <?php include '../includes/header.php'; ?>
  

  <div class="form-wrapper">
    <div class="form-container">
      <h2>Inquiry Form</h2>

      <?php if ($success_message): ?>
        <div class="<?php echo strpos($success_message, '✅') !== false ? 'success' : 'error'; ?>">
          <?php echo $success_message; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="mobile" placeholder="Mobile Number" required>

        <select name="service" required>
          <option value="">-- Select Service Interested In --</option>
          <option value="Fleet Tracking">Fleet Tracking</option>
          <option value="Vehicle Maintenance">Vehicle Maintenance</option>
          <option value="Fuel Management">Fuel Management</option>
          <option value="Route Optimization">Route Optimization</option>
        </select>

        <textarea name="message" rows="4" placeholder="Your Message"></textarea>

        <button type="submit">Submit Inquiry</button>
      </form>
    </div>
  </div>
  <?php include '../includes/footer.php'; ?>

</body>
</html>
