 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">CFMS</h1>
      </a>

      <!-- Desktop Navigation -->
      <nav id="navmenu" class="navmenu d-none d-xl-flex">
        <ul class="d-flex align-items-center mb-0">
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
      </nav>

      <!-- Mobile Navigation Toggle -->
      <button class="mobile-nav-toggle d-xl-none" type="button">
        <i class="bi bi-list"></i>
      </button>

      <a href="#" class="btn-getstarted d-none d-md-inline-block">Login</a>

    </div>

    <!-- Mobile Navigation Menu -->
    <nav class="mobile-nav d-xl-none">
      <ul>
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        <li><a href="#" class="d-md-none">Login</a></li>
      </ul>
    </nav>
  </header>
