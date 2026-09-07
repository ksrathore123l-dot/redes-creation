<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Redes Creation</title>
    <meta
      name="description"
      content="Contact Redes Creation for digital solutions, websites, apps, software, AI and marketing services."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <?php include '../header.php'; ?>

    <main>
      <section class="hero">
        <div class="hero-lines"></div>
        <div class="container hero-content">
          <div>
            <span class="eyebrow light">CONTACT US</span>
            <h1>Let's Build Something <span>Great Together.</span></h1>
            <p>
              Have a project in mind or need expert advice? We'd love to hear
              from you. Tell us what you need and our team will get back to you.
            </p>
          </div>

          <div class="hero-visual" aria-hidden="true">
            <div class="hero-art-wrapper">
              <img src="../assets/contact -hero.png" alt="contact-hero">
              <div class="float-card card-a">
                <i>◉</i><strong>Quick Response</strong
                ><small>We reply within<br />24 hours</small>
              </div>
              <div class="float-card card-b">
                <i>◷</i><strong>Schedule a Call</strong
                ><small>Book a free consultation<br />with our expert</small>
              </div>
            </div>
          </div>
        </div>
      </section>

     <!-- CONTACT -->
      <section class="contact-section section-light" id="contact">
        <div class="container contact-layout">
          <!-- Contact Form -->
          <div class="contact-form-wrap">
            <h2>Get in Touch</h2>
            <p>
              Have a project in mind or want to learn more about our services?
              Fill out the form below, and our team will get back to you as soon
              as possible.
            </p>
            <form class="contact-form">
              <div class="form-row">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" placeholder="Chirag Malviya" required />
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input
                    type="email"
                    placeholder="redescreation@gmail.com"
                    required
                  />
                </div>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" placeholder="+919676659153" />
              </div>
              <div class="form-group">
                <label>Service Interested In</label>
                <select required>
                  <option value="">Select a service</option>
                  <option value="web">Web Development</option>
                  <option value="app">App Development</option>
                  <option value="marketing">Digital Marketing</option>
                  <option value="design">UI/UX Design</option>
                </select>
              </div>
              <div class="form-group">
                <label>Your Message</label>
                <textarea
                  rows="4"
                  placeholder="Tell us about your project..."
                  required
                ></textarea>
              </div>
              <div class="form-group checkbox-group">
                <input type="checkbox" id="terms" required />
                <label for="terms"
                  >I agree to the <a href="#">Privacy Policy</a> and
                  <a href="#">Terms of Service</a>.</label
                >
              </div>
              <button type="submit" class="btn btn-primary mt-3">
                Send Message
              </button>
            </form>
          </div>

          <!-- Contact Info -->
          <div class="contact-info-wrap">
            <h3>Contact Information</h3>

            <div class="info-item">
              <div class="info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="info-text">
                <strong>Office Address</strong>
                <span
                  >2nd Floor, Maruti Complex,<br />Abu Road, Rajasthan 307026,
                  India</span
                >
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="info-text">
                <strong>Phone Number</strong>
                <span>+91 96766-59153<br />+91 90570-71463</span>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="info-text">
                <strong>Email Address</strong>
                <span>info@redescreation.in<br />redescreation@gmail.com</span>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
              <div class="info-text">
                <strong>Business Hours</strong>
                <span
                  >Monday - Friday: 9:00 AM - 6:00 PM<br />Saturday: 10:00 AM -
                  2:00 PM<br />Sunday: Closed</span
                >
              </div>
            </div>

            <div class="connect-with-us">
              <h4>Connect With Us</h4>
              <div class="social-links">
                <a href="https://www.instagram.com/redescreation"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/redescreation/"><i class="fa-brands fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    

        <div class="container map">
          <iframe src="https://maps.google.com/maps?q=Maruti%20Complex,%20Abu%20Road,%20Rajasthan%20307026&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map of Redes Creation Office"></iframe>
        </div>

        <div class="container project-cta">
          <div class="mail-circle">✉</div>
          <div>
            <h3>Have a project in mind?</h3>
            <p>Let's discuss how we can help you achieve your goals.</p>
          </div>
          <a class="white-btn" href="#contact-form"
            >Let's Talk <span>→</span></a
          >
        </div>
      </section>
    </main>

    <script src="../js/script.js"></script>
    <script src="../pages/contact.js"></script>
   <?php include '../footer.php'; ?>
  </body>
</html>
