<x-layout>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to Corporate Finance Management System</h1>
            <p>A simple and secure system to manage finances, reports, and dashboards.</p>
            <div class="d-flex">
              <a href="login.html" class="btn-get-started">Get Started</a>
              <a href="#features" class="btn-watch-video d-flex align-items-center"><i class="bi bi-arrow-down-circle"></i><span>Learn More</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('images/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- Features Section -->
    <section id="features" class="section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Highlights</h2>
        <p>Trusted tools to manage your corporate finances with ease and security.</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
              <div class="d-flex align-items-center mb-3">
                <div class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                  <i class="bi bi-bar-chart-line-fill fs-4"></i>
                </div>
              </div>
              <h5 class="fw-semibold">Easy-to-use dashboards</h5>
              <p class="mb-0 text-secondary">Track KPIs and insights at a glance with modern charts.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
              <div class="d-flex align-items-center mb-3">
                <div class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                  <i class="bi bi-shield-lock-fill fs-4"></i>
                </div>
              </div>
              <h5 class="fw-semibold">Secure & role-based</h5>
              <p class="mb-0 text-secondary">Granular permissions to keep data safe and compliant.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
              <div class="d-flex align-items-center mb-3">
                <div class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                  <i class="bi bi-cash-coin fs-4"></i>
                </div>
              </div>
              <h5 class="fw-semibold">Transactions & reports</h5>
              <p class="mb-0 text-secondary">Manage payments, audits, and export detailed reports.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
              <div class="d-flex align-items-center mb-3">
                <div class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                  <i class="bi bi-cloud-check-fill fs-4"></i>
                </div>
              </div>
              <h5 class="fw-semibold">Work from anywhere</h5>
              <p class="mb-0 text-secondary">Cloud-ready access with responsive design on all devices.</p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Features Section -->

    <!-- About Section -->
    <section id="about" class="about section financial-pattern">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why CFMS exists</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/why-cfms.jpeg') }}" 
                 alt="Financial Dashboard" 
                 class="img-fluid rounded-4 shadow-lg" 
                 style="max-height: 400px; width: 100%; object-fit: cover;">
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <p class="lead">
              Managing corporate finances shouldn't be overwhelming. CFMS was built to simplify complex financial operations for modern businesses.
            </p>
            <p>
              We understand that finance teams need tools that are both powerful and intuitive. That's why CFMS combines enterprise-grade security with user-friendly interfaces, making financial management accessible to everyone in your organization.
            </p>
            <p>
              From small businesses to large corporations, CFMS scales with your needs while maintaining the highest standards of data protection and compliance. Our system empowers finance professionals to focus on strategic decisions rather than manual processes.
            </p>
            <a href="login.html" class="btn btn-primary px-4 py-2 rounded-pill">
              <span>Start Your Journey</span> <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->



    <!-- Showcase Section (replaces Contact form) -->
    <section id="showcase" class="section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Built for teams that move money with confidence</h2>
        <p>Discover why leading organizations choose Corporate Finance Management System to power their financial operations.</p>
      </div>

      <div class="container">
        <div class="row gy-4 align-items-stretch">

          <!-- Metric Cards -->
          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 border-0 rounded-4 p-4 text-center">
              <div class="mb-2 text-primary"><i class="bi bi-shield-check fs-2"></i></div>
              <h3 class="mb-1">99.99%</h3>
              <p class="mb-0 text-secondary">Platform uptime</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100 border-0 rounded-4 p-4 text-center">
              <div class="mb-2 text-primary"><i class="bi bi-graph-up-arrow fs-2"></i></div>
              <h3 class="mb-1">$5B+</h3>
              <p class="mb-0 text-secondary">Processed annually</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100 border-0 rounded-4 p-4 text-center">
              <div class="mb-2 text-primary"><i class="bi bi-people fs-2"></i></div>
              <h3 class="mb-1">1200+</h3>
              <p class="mb-0 text-secondary">Enterprise teams</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="card h-100 border-0 rounded-4 p-4 text-center">
              <div class="mb-2 text-primary"><i class="bi bi-globe2 fs-2"></i></div>
              <h3 class="mb-1">40+</h3>
              <p class="mb-0 text-secondary">Countries served</p>
            </div>
          </div>

        </div>

        <!-- Call to Action Banner -->
        <div class="row mt-5" data-aos="fade-up">
          <div class="col-12">
            <div class="p-5 rounded-4" style="background: var(--cfms-gradient); color: #fff;">
              <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                <div>
                  <h3 class="mb-2">Ready to modernize your financial operations?</h3>
                  <p class="mb-0">Speak with our team or start by signing in to explore the dashboard.</p>
                </div>
                <div class="d-flex gap-2">
                  <a href="login.html" class="btn btn-light px-4 py-2 rounded-pill fw-semibold">Login</a>
                  <a href="/contact" class="btn btn-outline-light px-4 py-2 rounded-pill fw-semibold">Contact Sales</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Showcase Section -->

  </main>

</x-layout>    