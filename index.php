<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">

 <title>Service Sphere</title>
</head>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">Service Sphere</a>
  <span class="navbar-text">Customer's Happiness is our Aim</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
   <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
   </ul>
  </div>
 </nav> <!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg);">
  <div class="myclass mainHeading">
   <h1 class="text-uppercase text-dark font-weight-bold">Welcome to Service Sphere</h1>
   <p class="font-italic">Customer's Happiness is our Aim</p>
   <a href="Requester/RequesterLogin.php" class="btn btn-warning mr-4">Login</a>
   <a href="#registration" class="btn btn-primary mr-4">Sign Up</a>
  </div>
 </header> <!-- End Header Jumbotron-->

 <!-- Start Introduction Section -->
 <div class="container">
  <div class="jumbotron">
   <h3 class="text-center">Service Sphere Services</h3>
   <p>
   Welcome to Service Sphere, where your electronic appliances receive the care they deserve, and your satisfaction is our priority. As India's premier chain of multi-brand Electronics and Electrical service workshops, we are committed to elevating your user experience through our world-class maintenance services.

At Service Sphere, we don't just fix appliances; we nurture them to keep them fit, healthy, and functioning at their best. Our mission is simple yet profound: to provide Electronic Appliances care services that not only preserve the longevity of your devices but also leave our customers happy and smiling.
   </p>
  </div>
 </div> <!-- End Introduction Section Container -->

 <!-- Start Services Section -->
 <div class="container text-center border-bottom" id="Services">
  <h2>Our Services</h2>
  <div class="row mt-4">
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
    <h4 class="mt-4">Electronic Appliances</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
    <h4 class="mt-4">Preventive Maintenance</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
    <h4 class="mt-4">Fault Repair</h4>
   </div>
  </div>
 </div> <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form Container -->

 <!-- Start Happy Customer -->
 <div class="jumbotron bg-dark">
   <div class="container">
    <h2 class="text-center text-white">Happy Customers</h2>
    <div class="row mt-5">
     <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius:100px;width:300px;height:250px;" alt="avt1" >
        <h4 class="card-title">Keerthana</h4>
        <p class="card-text">Outstanding service! The team at Service Sphere truly exceeded my expectations. They were prompt, professional, and took great care of my electronic appliance. I highly recommend them for their top-notch maintenance services.</p>
       </div>
      </div>
     </div> <!-- End 1st Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius:100px;width:300px;height:250px;" alt="avt2">
        <h4 class="card-title">Juvaid</h4>
        <p class="card-text">I've been using Service Sphere for all my appliance repairs, and I couldn't be happier. Their technicians are highly skilled and always go above and beyond to ensure my devices are in perfect condition. Plus, their online booking system makes scheduling a breeze!</p>
       </div>
      </div>
     </div> <!-- End 2nd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius:100px;width:300px;height:250px;" alt="avt3">
        <h4 class="card-title">Muzammil</h4>
        <p class="card-text">Service Sphere is a lifesaver! When my appliance broke down unexpectedly, I was worried about the hassle of getting it fixed. But Service Sphere made the process seamless and stress-free. Thank you for your exceptional service!</p>
       </div>
      </div>
     </div> <!-- End 3rd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius:100px;width:300px;height:250px;" alt="avt4">
        <h4 class="card-title">Shahabaz</h4>
        <p class="card-text">I'm impressed with the professionalism and expertise of the Service Sphere team. They diagnosed the issue with my appliance quickly and efficiently, and the repair was completed in no time. I'll definitely be using their services again in the future.</p>
       </div>
      </div>
     </div> <!-- End 4th Column -->
    </div>
   </div>
 </div> <!-- End Happy Customer -->

 <!-- Start Contact US -->
 <div class="container" id="Contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
   <!-- Start 1st Column -->
    <?php include('contactform.php') ?>
   <!-- End 1st Column -->
   <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
    <strong>Headquarter:</strong><br>
    Service Sphere pvt Ltd,<br>
    Pallikera, Kasaragod<br>
    Kerala - 671316<br>
    Phone: +91 9496703880<br>
    <a href="#" target="_blank">www.ServiceSphere.com</a><br>
    <br> <br>
    <strong>Branch:</strong><br>
    Sevice Sphere pvt Ltd,<br>
    Pandeshwar, Manglore<br>
    karnataka - 564567<br>
    Phone: +91 7907268457<br>
    <a href="#" target="_blank">www.ServiceSphere.com</a><br>    
   </div> <!-- End 2nd Column -->
  </div>
 </div> <!-- End Contact US -->

 <!-- Start Footer -->
 <footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
   <div class="row py-3">
    <div class="col-md-6"> <!-- Start 1st Column -->
     <span class="pr-2">Follow Us: </span>
     <a href="https://www.instagram.com/shahabazzz_/?hl=en" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
     <a href="https://twitter.com/Shahabazzzzz" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
     <a href="https://www.youtube.com/channel/UCsuM9iBGfzdZowFP-C_jzUg" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
    </div> <!-- End 1st Column -->
    <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
     <small>Designed by Shahabaz&Muzammil &copy; 2024</small>
     <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div> <!-- End 2nd Column -->
   </div>
  </div>
 </footer>

 <!-- JavaScript -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
</body>
</html>