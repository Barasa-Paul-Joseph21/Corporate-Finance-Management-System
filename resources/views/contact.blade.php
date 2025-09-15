@push('styles')
    
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

@endpush

<x-layout>

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

  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</x-layout>    



@push('scripts')
<script>
  // Initialize AOS
  AOS.init();

  // Handle form submission
  document.querySelector('.contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your message! We\'ll get back to you within 24 hours.');
  });
</script>
@endpush
