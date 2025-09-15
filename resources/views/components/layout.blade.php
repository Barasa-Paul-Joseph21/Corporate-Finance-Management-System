<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Welcome to CFMS - Corporate Finance Management System</title>
  <meta name="description" content="A simple and secure system to manage finances, reports, and dashboards">
  <meta name="keywords" content="corporate finance, management system, financial reports, dashboards, secure finance">

  <!-- Favicons -->
  {{-- <link href="/public/images/CFMS-story.png" rel="icon"> --}}
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  @stack('styles')
</head>

<body class="index-page">

 <!-- Mobile Navigation Overlay -->
 <div class="mobile-nav-overlay"></div>

 <x-header />  //navbar component

  <main> {{ $slot }} </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">CFMS</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Corporate Finance Management System</p>
            <p class="mt-3"><strong>Support:</strong> <span>support@cfms.com</span></p>
            <p><strong>Help:</strong> <span>Need assistance? Contact our support team</span></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="/contact">Contact</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Help</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="">Login</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">CFMS</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

  @stack('scripts')

</body>

</html>