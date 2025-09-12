
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - CFMS Corporate Finance Management System</title>
  <meta name="description" content="Get in touch with CFMS support team for help with your financial management needs">
  <meta name="keywords" content="CFMS contact, support, help, corporate finance">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <!-- Custom Contact Styles -->
  <style>
    .contact-hero {
      background: linear-gradient(135deg, var(--accent-color) 0%, #1e3c72 100%);
      color: white;
      padding: 100px 0 50px;
      margin-top: 80px;
    }
    .contact-form-section {
      padding: 80px 0;
      background: #f8f9fa;
    }
    .contact-card {
      background: white;
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 10px 40px rgba(0,0,0,0.08);
      border: none;
    }
    .contact-info-card {
      background: var(--accent-color);
      color: white;
      border-radius: 20px;
      padding: 3rem;
      height: 100%;
    }
    .contact-info-item {
      display: flex;
      align-items-center;
      margin-bottom: 2rem;
    }
    .contact-info-item .icon {
      width: 48px;
      height: 48px;
      background: rgba(255,255,255,0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
    }
    .form-control {
      border: 2px solid #e9ecef;
      border-radius: 12px;
      padding: 1rem;
      margin-bottom: 1.5rem;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.25rem rgba(47, 136, 195, 0.15);
    }
    .btn-submit {
      background: var(--accent-color);
      border: none;
      border-radius: 12px;
      padding: 1rem 2rem;
      font-weight: 600;
      color: white;
      transition: all 0.3s ease;
      width: 100%;
    }
    .btn-submit:hover {
      background: #1e5a87;
      transform: translateY(-2px);
      color: white;
    }
  </style>
</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">CFMS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <!-- <li><a href="index.html#about">About</a></li> -->
          <!-- <li><a href="index.html#features">Features</a></li> -->
          <li><a href="/contact" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted">Login</a>

    </div>
  </header>

  <!-- Mobile Navigation Overlay -->
  <div class="mobile-nav-overlay"></div>

  <!-- Contact Hero Section -->
  <section class="contact-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
          <h1 class="mb-3">Need help? Get in touch with us.</h1>
          <p class="lead mb-0">Our support team is ready to assist you with any questions about CFMS.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="contact-form-section">
    <div class="container">
      <div class="row gy-4">
        
        <div class="col-lg-8" data-aos="fade-up">
          <div class="contact-card">
            <h3 class="mb-4">Send us a message</h3>
            <form action="#" method="post" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <label for="name" class="form-label">Full Name *</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-control" id="subject" name="subject">
                  <option value="">Select a topic</option>
                  <option value="general">General Inquiry</option>
                  <option value="support">Technical Support</option>
                  <option value="billing">Billing Question</option>
                  <option value="feature">Feature Request</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="message" class="form-label">Message *</label>
                <textarea class="form-control" id="message" name="message" rows="6" required placeholder="How can we help you?"></textarea>
              </div>
              <button type="submit" class="btn btn-submit">
                Send Message <i class="bi bi-arrow-right ms-2"></i>
              </button>
            </form>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info-card">
            <h4 class="mb-4">Alternative Contact Info</h4>
            
            <div class="contact-info-item">
              <div class="icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <h6 class="mb-1">Email Support</h6>
                <p class="mb-0">support@cfms.com</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="icon">
                <i class="bi bi-headset"></i>
              </div>
              <div>
                <h6 class="mb-1">Live Chat</h6>
                <p class="mb-0">Available 24/7 for premium users</p>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div>
                <h6 class="mb-1">Response Time</h6>
                <p class="mb-0">We typically respond within 24 hours</p>
              </div>
            </div>

            <div class="contact-info-item mb-0">
              <div class="icon">
                <i class="bi bi-question-circle-fill"></i>
              </div>
              <div>
                <h6 class="mb-1">FAQ</h6>
                <p class="mb-0">Check our help center for common questions</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>


  <script>
    // Initialize AOS
    AOS.init();

    // Handle form submission
    document.querySelector('.contact-form').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Thank you for your message! We\'ll get back to you within 24 hours.');
    });
  </script>

</body>

</html>
