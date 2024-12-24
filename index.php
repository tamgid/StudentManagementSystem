<?php
include 'Includes/dbcon.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
  <title>SMS - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: white;
    }

    .background-image {
      background-image: url('./img/home_banner.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
    }

    .background-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .login-form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 85%;
      max-width: 350px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      padding: 1.2rem;
      border-radius: 10px;
      z-index: 2;
    }

    .navbar {
      background-color: #054D95;
      display: flex;
    }

    .navbar h1 {
      color: #F5F5F7;
      margin: 0;
      font-size: 1.2rem;
      margin-left: 20px;
    }

    .intro-text-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 3rem;
      background-color: #f8f9fa;
      padding: 0 1rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .intro-text {
      color: #2D2E32;
      text-align: center;
      margin: 0;
      font-size: 0.9rem;
    }

    .form-control {
      font-size: 0.85rem;
      height: calc(1.5em + 0.75rem + 2px);
    }

    .btn {
      font-size: 0.85rem;
      padding: 0.4rem 0.75rem;
    }

    img {
      width: 60px;
      height: 60px;
    }

    .gallery-section {
      margin: 2rem auto;
      text-align: center;
      padding: 1rem 0;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-width: 75%;
    }

    .gallery-container {
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    .gallery {
      display: flex;
      gap: 10px;
      overflow-x: auto;
      scroll-behavior: smooth;
      max-width: 80%;
      padding: 0.5rem;
    }

    .gallery img {
      flex-shrink: 0;
      width: 200px;
      height: 150px;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
      border-radius: 5px;
    }

    .gallery img:hover {
      transform: scale(1.2);
      cursor: pointer;
    }

    .arrow {
      font-size: 2rem;
      cursor: pointer;
      color: #348681;
      position: absolute;
      z-index: 10;
      background: rgba(255, 255, 255, 0.8);
      padding: 2px 8px;
      border-radius: 60%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .arrow-left {
      left: 50px;
    }

    .arrow-right {
      right: 50px;
    }

    .arrow:hover {
      background: #348681;
      color: white;
    }

    /* Media Queries */
    @media (max-width: 768px) {
      .navbar h1 {
        font-size: 1.2rem;
      }

      .gallery img {
        width: 120px;
        height: 90px;
      }

      .arrow {
        font-size: 1.5rem;
        padding: 5px;
      }
    }

    @media (max-width: 576px) {
      .navbar h1 {
        font-size: 1rem;
      }

      .login-form-container {
        width: 95%;
      }

      .gallery img {
        width: 100px;
        height: 75px;
      }
    }

    /* Additional Styles for Gallery */
    .gallery-container {
      max-width: 100%;
    }

    .gallery-img {
      width: 100%;
      max-width: 200px;
      height: auto;
      transition: all 0.3s ease;
    }

    .gallery-container .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2rem;
      color: #002D5B;
      cursor: pointer;
    }

    .arrow-left {
      left: 10px;
    }

    .arrow-right {
      right: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .gallery-container {
        height: 100px;
      }

      .gallery-img {
        max-width: 100%;
        height: 200px;
      }

      .gallery-container .arrow {
        font-size: 1.5rem;
      }
    }

    @media (min-width: 576px) and (max-width: 768px) {
      .gallery-container {
        height: 350px;
      }

      .gallery-img {
        max-width: 100%;
        height: 250px;
      }
    }

    .custom-container {
      max-width: 1200px;
      padding: 0 15px;
    }

    a {
      display: inline-block;
    }
  </style>

</head>

<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="d-flex align-items-center">
      <!-- Logo on the left side -->
      <img src="img/logo.jpg" style="width:65px;height:60px" class="me-3">
      <h1>NPI University of Bangladesh</h1>
    </div>
  </div>


  <div class="intro-text-container">
    <div class="intro-text">
      Admin and Student Login Portal
    </div>
  </div>

  <!-- Background Image Section -->
  <div class="background-image">
    <div class="background-overlay"></div>
    <div class="login-form-container">
      <div class="card shadow-sm">
        <div class="card-body">
          <h6 align="center">STUDENT MANAGEMENT SYSTEM</h6>
          <div class="text-center">
            <img src="img/logo.jpg" style="width:75px;height:70px">
            <h6 class="text-gray-900 mb-4">Login Panel</h6>
          </div>
          <form class="user" method="Post" action="">
            <div class="form-group">
              <select required name="userType" class="form-control mb-3">
                <option value="">--Select User Roles--</option>
                <option value="Administrator">Teacher</option>
                <option value="Student">Student</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" required name="username" id="exampleInputEmail" placeholder="Enter Student Id for Student or Email for Admin ">
            </div>
            <div class="form-group">
              <input type="password" name="password" required class="form-control" id="exampleInputPassword" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block" value="Login" name="login" style="background-color: #054D95;" />
            </div>
          </form>

          <!-- Forgot Password Section -->
          <div class="text-center mt-3">
            <span>Forgot your password? </span>
            <a href="#" style="color: #054D95; text-decoration: none;" onmouseover="this.style.color='#348681'" onmouseout="this.style.color='#054D95'">Check Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['login'])) {
    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($userType == "Administrator") {
      $query = "SELECT * FROM admin WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if ($num > 0) {
        $_SESSION['userId'] = $rows['id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];

        echo "<script type = \"text/javascript\">
                window.location = (\"Admin/index.php\")
                </script>";
      } else {
        echo "<div class='alert alert-danger' role='alert'>
                Invalid Username/Password!
                </div>";
      }
    } else if ($userType == "Student") {
      // Query to get the student record based on studentId
      $query = "SELECT * FROM student WHERE studentId = '$username'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      // Check if the student exists
      if ($num > 0) {
        // Retrieve the stored hashed password
        $storedHashedPassword = $rows['studentPassword'];

        // Hash the entered password using MD5
        $enteredPasswordHash = md5($password);

        // Compare the entered password hash with the stored hash
        if ($enteredPasswordHash === $storedHashedPassword) {
          // Password is correct, set session variables
          $_SESSION['userId'] = $rows['id'];
          $_SESSION['studentId'] = $rows['studentId'];
          $_SESSION['firstName'] = $rows['firstName'];
          $_SESSION['middleName'] = $rows['middleName'];
          $_SESSION['lastName'] = $rows['lastName'];
          $_SESSION['emailAddress'] = $rows['email'];
          $_SESSION['dateOfBirth'] = $rows['dob'];
          $_SESSION['fatherName'] = $rows['fatherName'];
          $_SESSION['motherName'] = $rows['motherName'];

          // Redirect to the student dashboard
          echo "<script type='text/javascript'>
                  window.location = ('Student/index.php');
                </script>";
        } else {
          // Invalid password
          echo "<div class='alert alert-danger' role='alert'>
                  Invalid Username/Password!
                </div>";
        }
      } else {
        // No student found with the given username
        echo "<div class='alert alert-danger' role='alert'>
                Invalid Username/Password!
              </div>";
      }
    } else {
      echo "<div class='alert alert-danger' role='alert'>
              Invalid Username/Password!
              </div>";
    }
  }
  ?>

  <!-- Gallery Section -->
  <div class="gallery-section">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <!-- Gallery Section (Two-thirds width) -->
        <div class="col-md-8 d-flex justify-content-center align-items-center position-relative">
          <span class="arrow arrow-left" onclick="scrollGallery(-1)">&#8592;</span>
          <div class="gallery d-flex flex-nowrap overflow-auto">
            <img src="img/gallery1.jpg" alt="Gallery Image 1" class="img-fluid gallery-img">
            <img src="img/gallery2.jpg" alt="Gallery Image 2" class="img-fluid gallery-img">
            <img src="img/gallery3.jpg" alt="Gallery Image 3" class="img-fluid gallery-img">
            <img src="img/gallery4.jpg" alt="Gallery Image 4" class="img-fluid gallery-img">
            <img src="img/gallery5.jpg" alt="Gallery Image 5" class="img-fluid gallery-img">
            <img src="img/gallery6.jpg" alt="Gallery Image 6" class="img-fluid gallery-img">
            <img src="img/gallery7.jpg" alt="Gallery Image 7" class="img-fluid gallery-img">
            <img src="img/gallery8.jpg" alt="Gallery Image 8" class="img-fluid gallery-img">
          </div>
          <span class="arrow arrow-right" onclick="scrollGallery(1)">&#8594;</span>
        </div>

        <!-- Static Content Section (One-third width) -->
        <div class="col-md-4 d-flex flex-column justify-content-start align-items-center">
          <img src="img/logo.jpg" style="width:75px;height:70px" alt="Logo">
          <p class="university-name">North Pacific International University of Bangladesh (NPIUB)</p>
          <p class="welcome-message font-weight-bold">Welcome to North Pacific International University Student portal</p>
          <ul class="instructions list-unstyled d-flex flex-column align-items-start">
            <li><i class="bi bi-check-circle" style="font-size: 1rem; color: #002D5B;"></i> Username is student id.</li>
            <li><i class="bi bi-check-circle" style="font-size: 1rem; color: #002D5B;"></i> Type your password carefully.</li>
            <li><i class="bi bi-check-circle" style="font-size: 1rem; color: #002D5B;"></i> Press login button to login.</li>
          </ul>

        </div>
      </div>
    </div>
  </div>


  <script>
    function scrollGallery(direction) {
      const gallery = document.querySelector('.gallery');
      gallery.scrollBy({
        left: direction * 150,
        behavior: 'smooth'
      });
    }
  </script>

  <!-- Footer Section -->
  <div style="background-color: #0A192F; width: 100%; padding: 1rem 0; color: #F5F5F7;">
    <div class="container">
      <div class="container-fluid custom-container">
        <div class="row justify-content-center">

          <!-- Left Section -->
          <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
            <h6>Siddeswari Campus</h6>
            <hr style="border-color: white;">
            <img src="img/map.jpg" alt="Campus Map" style="width: 100%; height: 140px; border-radius: 5px;">
          </div>

          <!-- Middle Section -->
          <div class="col-12 col-md-8 text-center mb-4 mb-md-0">
            <h6 style="font-size: 1rem; text-align: center;">Quick Links</h6>
            <hr style="border-color: white;">
            <div class="row">
              <!-- First Column -->
              <div class="col-4">
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Our Campus</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Academic Calendar</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Exam Schedule</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Download</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Important Services</a>
              </div>

              <!-- Second Column -->
              <div class="col-4">
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Contact Us</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Application</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Career of NPIUB</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Online Services</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Help and Support</a>
              </div>

              <!-- Third Column -->
              <div class="col-4">
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Admission FAQs</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Site Map</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Back to Home</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">Online Support</a><br>
                <a href="#" style="color: #B0B0B0; text-decoration: none; font-size: 0.9rem;"
                  onmouseover="this.style.color='#002D5B'" onmouseout="this.style.color='#B0B0B0'">About Us</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Copyright Section -->
      <div style="text-align: center; margin-top: 1.5rem; border-top: 1px solid white; padding-top: 1rem;">
        <p style="margin: 0; font-size: 0.8rem;">Copyright @ 2024</p>
        <p style="margin: 0; font-size: 0.8rem;">Developed & Powered by: Fahmid</p>
      </div>
    </div>
  </div>
</body>

</html>