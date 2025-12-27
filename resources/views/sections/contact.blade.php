<section id="contact" class="contact section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Contact Me</h2>
    <p>Have a project in mind? Let's build something awesome together! I’m currently open to new opportunities and collaborations.</p>
  </div>
  
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 g-lg-5">
      
      <div class="col-lg-5">
        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
          <h3>Let's Connect</h3>
          <p>I am available for freelance work and full-time positions. Reach out via email or phone, and let's discuss how I can help bring your ideas to life.</p>

          <div class="info-item" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="content">
              <h4>Location</h4>
              <p>Angeles City, Philippines</p>
            </div>
          </div>

          <div class="info-item" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="content">
              <h4>Phone</h4>
              <p>+63 994 630 8962</p>
            </div>
          </div>

          <div class="info-item" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="content">
              <h4>Email</h4>
              <p>brendonpanlaqui15@gmail.com</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
          <h3>Send a Message</h3>
          <p>Have an exciting project you need help with? Fill in the details below and I'll get back to you shortly.</p>

          <form action="https://formspree.io/f/xzdplqlo" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Tell me about your project..." required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit" class="btn btn-sm btn-secondary d-flex align-items-center justify-content-center mx-auto">
                  <i class="bi bi-send-fill" style="font-size: 0.9em;"></i>
                  <span class="ms-2">Send Message</span>
                </button>
              </div>

            </div>
          </form>

        </div>
      </div>

    </div>

  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.php-email-form');
    
    if (form) {
      form.addEventListener('submit', function(event) {
        event.preventDefault(); // Stop page reload

        const loading = form.querySelector('.loading');
        const sentMessage = form.querySelector('.sent-message');
        const button = form.querySelector('button[type="submit"]');

        // Visual updates
        loading.style.display = 'block';
        sentMessage.style.display = 'none';
        button.disabled = true;

        // Prepare data for Formspree
        const data = new FormData(form);

        fetch(form.action, {
          method: form.method,
          body: data,
          headers: {
              'Accept': 'application/json'
          }
        })
        .then(response => {
          if (response.ok) {
            loading.style.display = 'none';
            sentMessage.style.display = 'block';
            form.reset(); // Clear the form
          } else {
            return response.json().then(data => {
              if (Object.hasOwn(data, 'errors')) {
                throw new Error(data["errors"].map(error => error["message"]).join(", "));
              } else {
                throw new Error('Oops! There was a problem submitting your form');
              }
            })
          }
        })
        .catch(error => {
          loading.style.display = 'none';
          // Optional: Alert the user or show a specific error div if you have one
          alert("Error: " + error.message);
        })
        .finally(() => {
          button.disabled = false;
        });
      });
    }
  });
</script>