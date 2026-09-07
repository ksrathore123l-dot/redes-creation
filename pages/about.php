<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | Redes Creation</title>
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
    <link rel="stylesheet" href="../pages/about.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <?php include '../header.php'; ?>

    <main>
      <section class="hero section">
        <div class="hero-glow glow-a"></div>
        <div class="hero-glow glow-b"></div>
        <div class="container hero-grid reveal">
          <div class="hero-copy">
            <div class="eyebrow">ABOUT US <i></i></div>
            <h1>Your Trusted Partner in<br /><span>Digital Growth</span></h1>
            <p>
              With years of experience and a team of creative minds, our digital marketing agency specializes in helping businesses thrive in the digital age. We combine innovation, data-driven insights, and a personalized approach to craft strategies that resonate with your audience and achieve your goals.
            </p>
            <div class="hero-actions">
              <a class="btn primary" href="#journey"
                >Learn More <span>→</span></a
              >
              <button class="story-btn" id="storyBtn">
                <span class="play">▶</span><span>Watch Our<br />Story</span>
              </button>
            </div>

            <div class="stats">
              <div><b>1st</b><small>Working Process</small></div>
              <div><b>SEO</b><small>Optimization</small></div>
              <div><b>360°</b><small>Digital Marketing</small></div>
            </div>
          </div>

          <div class="hero-visual">
            <div class="scribble">
              Ideas<br />Execute<br />Grow <span>↗</span>
            </div>
            <div class="circle-art"></div>
            <div class="person-card">
              <img src="../assets/about hero.png" alt="Creative team member" />
            </div>
            <div class="floating-note">
              A team<br />that builds<br /><b>the future.</b>
            </div>
          </div>
        </div>
      </section>

      <section class="values section" id="journey">
        <div class="container">
          <div class="value-grid reveal">
            <article class="value-card">
              <div class="icon">◎</div>
              <h3>Data-Driven Approach</h3>
              <p>We harness advanced analytics and insights to craft strategies that ensure impactful and efficient digital marketing solutions.</p>
            </article>
            <article class="value-card">
              <div class="icon">◉</div>
              <h3>Competitive Pricing</h3>
              <p>Our services combine premium quality with affordability, offering exceptional value to help businesses thrive on any budget.</p>
            </article>
            <article class="value-card">
              <div class="icon">◇</div>
              <h3>Ethical Practices</h3>
              <p>We uphold the highest standards of integrity, professionalism, and ethical practices in every aspect of our work for our clients.</p>
            </article>
            <article class="value-card">
              <div class="icon">♟</div>
              <h3>Creative Thinking</h3>
              <p>We think beyond templates. Every solution we build is fresh and tailored uniquely to your brand.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="team section">
        <div class="container">
          <div class="section-heading reveal">
            <span class="eyebrow">WHY CHOOSE US</span>
            <h2>Why We're <span>Different</span></h2>
            <p>
              We don't just market your brand; we create lasting impressions that drive results. Our team of seasoned experts blends creativity with cutting-edge technology to design your unique goals.
            </p>
          </div>

          <div class="team-grid reveal">
            <article class="member">
              <div class="avatar avatar-1"><img src="../assets/Reliable Execution-1.avif" alt="Reliable Execution" /></div>
              <h3>Reliable Execution</h3>
              <p>We deliver what we promise—on time, every time—so your project never loses momentum.</p>
            </article>
            <article class="member">
              <div class="avatar avatar-2"><img src="../assets/Human-Centered.jpg" alt="Human-Centered" /></div>
              <h3>Human-Centered</h3>
              <p>We build for people, not machines—ensuring real users love your digital experience.</p>
            </article>
            <article class="member">
              <div class="avatar avatar-3"><img src="../assets/Marketing Agency.avif" alt="Marketing Agency" /></div>
              <h3>Marketing Agency</h3>
              <p>Our digital marketing agency specializes in helping businesses thrive in the digital age.</p>
            </article>
            <article class="member">
              <div class="avatar avatar-4"><img src="../assets/SEO Optimization.jpg" alt="SEO Optimization" /></div>
              <h3>SEO Optimization</h3>
              <p>Maximize your visibility and reach your target audience with our comprehensive SEO strategies.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="cta section">
        <div class="container">
          <div class="cta-box reveal">
            <div>
              <span class="eyebrow light">A NOTE FROM OUR FOUNDER</span>
              <h2>Building Lasting Experiences</h2>
              <p>"Redes Creation began with a belief that beautiful, functional websites can truly transform businesses. We're here to build not just code, but lasting digital experiences. And we're honored to help you grow."</p>
            </div>
            <a class="btn white" href="#">Contact Us <span>→</span></a>
          </div>
        </div>
      </section>
    </main>

    <div class="modal" id="storyModal" aria-hidden="true">
      <div class="modal-box">
        <button id="closeModal" class="close">×</button>
        <div class="modal-play">▶</div>
        <h3>Our Story</h3>
        <p>
          We combine strategy, technology and creative design to help businesses
          grow digitally.
        </p>
      </div>
    </div>

  <?php include '../footer.php'; ?>

    <script src="../js/script.js"></script>
    <script src="../pages/about.js"></script>
  </body>
</html>
