<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Our Team - Great People Build Great Solutions" />
    <title>Our Team | Great People Build Great Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="our team.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php include '../header.php'; ?>
    <main class="ot-page">
        <!-- HERO -->
        <section class="ot-team-hero ot-section">
            <img class="ot-hero-bg" src="../assets/our-team-hero.png" alt="Team working together" />
            <div class="ot-container ot-hero-grid">
                <div class="ot-hero-copy">
                    <span class="ot-eyebrow">OUR TEAM <i></i></span>
                    <h1>Great People<br />Build Great <span>Solutions.</span></h1>
                    <p>
                        A passionate team of designers, developers, strategists and
                        problem-solvers working together to turn ideas into digital
                        success.
                    </p>
                    <div class="ot-actions">
                        <a href="#ot-members" class="ot-btn ot-btn-primary">Meet Our Team <b>→</b></a>
                        <button class="ot-btn ot-btn-video" type="button" data-ot-open-video>
                            <span class="ot-play">▶</span> Watch Our Team Story
                        </button>
                    </div>
                    <div class="ot-stats">
                        <div><strong>25+</strong><small>Team Members</small></div>
                        <div><strong>100+</strong><small>Projects Delivered</small></div>
                        <div><strong>1+</strong><small>Years Together</small></div>
                        <div>
                            <strong>100%</strong><small>Passion &amp; Dedication</small>
                        </div>
                    </div>
                </div>

                <div class="ot-hero-art">
                    <img class="ot-hero-ring" src="../assets/cl-hero.png" alt="" />
                    <img class="ot-hero-img" src="../assets/OUR TEAM (1).png" alt="Team illustration" />
                </div>

                <aside class="ot-values">
                    <div class="ot-value-card">
                        <span class="ot-icon">👥</span>
                        <div>
                            <b>Collaborative<br />Culture</b><small>We grow together</small>
                        </div>
                    </div>
                    <div class="ot-value-card">
                        <span class="ot-icon">💡</span>
                        <div>
                            <b>Continuous<br />Learning</b><small>Always improving</small>
                        </div>
                    </div>
                    <div class="ot-value-card">
                        <span class="ot-icon">🚀</span>
                        <div>
                            <b>Meaningful<br />Impact</b><small>Solutions that matter</small>
                        </div>
                    </div>
                    <div class="ot-value-card">
                        <span class="ot-icon">♥</span>
                        <div>
                            <b>People<br />First</b><small>Because people build possibilities</small>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- MEMBERS -->
        <section id="ot-members" class="ot-members ot-section">
            <div class="ot-container">
                <div class="ot-section-heading">
                    <span class="ot-eyebrow">MEET OUR AWESOME TEAM <i></i></span>
                    <h2>The People Behind <span>Our Success</span></h2>
                    <p>
                        Talented individuals. Shared values. A stronger tomorrow. Get to
                        know the amazing people who make it all happen.
                    </p>
                </div>

                <!-- FILTER NAVIGATION -->
                <div class="ot-team-filters">
                    <button class="ot-filter-btn active" data-filter="all" onclick="filterTeam('all')">All</button>
                    <button class="ot-filter-btn" data-filter="leadership" onclick="filterTeam('leadership')">Leadership</button>
                    <button class="ot-filter-btn" data-filter="domain" onclick="filterTeam('domain')">Domain Experts</button>
                    <button class="ot-filter-btn" data-filter="management" onclick="filterTeam('management')">Management</button>
                    <button class="ot-filter-btn" data-filter="development" onclick="filterTeam('development')">Development</button>
                    <button class="ot-filter-btn" data-filter="creative" onclick="filterTeam('creative')">Creative</button>
                    <button class="ot-filter-btn" data-filter="rnd" onclick="filterTeam('rnd')">R & D</button>
                </div>

                <div id="ot-team-list">
                    <!-- Leadership -->
                    <div class="ot-team-group" data-category="leadership">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR LEADERSHIP</span>
                            <h3>Leadership Team</h3>
                            <p>Visionaries who guide our journey and inspire us every day.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-blue-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/chirag-malviya.jpg" alt="Chirag Malviya" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Chirag Malviya</h4>
                                    <strong>Founder</strong>
                                    <p>Leads with a vision to build innovative digital solutions for a better tomorrow.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-purple-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/ceo.jpg" alt="Bhavana Rajpurohit" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Bhavana Rajpurohit</h4>
                                    <strong>CEO</strong>
                                    <p>Drives strategy, operations and people growth across the organization.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Domain Experts -->
                    <div class="ot-team-group" data-category="domain">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR DOMAIN EXPERTS</span>
                            <h3>Domain-Specific Experts</h3>
                            <p>Experts ensuring our solutions meet the highest industry standards.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-green-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/kamalesh-vn.webp" alt="Prof. Kamalesh V.N." />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Prof. Kamalesh V.N.</h4>
                                    <strong>Computer Sciences</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-pink-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/pk-upadhyay.webp" alt="Prof. P K Upadhyay" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Prof. P K Upadhyay</h4>
                                    <strong>Adviser Agricultural Sciences & AI</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-yellow-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/rajesh-rathore.png" alt="Prof. Rajesh Rathore" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Prof. Rajesh Rathore</h4>
                                    <strong>Commerce & Management</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-blue-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/dr-manoj.jpg" alt="Dr. Manoj K Behera" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Dr. Manoj K Behera</h4>
                                    <strong>Allied Health Sciences</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-purple-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/bharat-c.png" alt="Dr. Bharat Chaudhari" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Dr. Bharat Chaudhari</h4>
                                    <strong>Physical Education</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-green-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/vishal-singh.jpeg" alt="Vishal Singh Parihar" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Vishal Singh Parihar</h4>
                                    <strong>Network & Security</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-pink-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/hemanth.jpeg" alt="Hemanth Shenoy" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Hemanth Shenoy</h4>
                                    <strong>Project Quality Manager</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-yellow-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/kamlesh.jpg" alt="Ar Kamlesh Ghanchi" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Ar Kamlesh Ghanchi</h4>
                                    <strong>Planning and Architecture</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-blue-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/deeksha.jpeg" alt="Deeksha Kapil" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Deeksha Kapil</h4>
                                    <strong>QCI Certified</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-purple-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/hemant-kashyap.jpg" alt="Dr. Hemant Kashyap" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Dr. Hemant Kashyap</h4>
                                    <strong>Clinical Psychology</strong>
                                    <p>Specialized domain expert providing critical insights.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Management -->
                    <div class="ot-team-group" data-category="management">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR MANAGEMENT TEAM</span>
                            <h3>Management Team</h3>
                            <p>The support system that keeps everything running smoothly.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-green-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/ashish-rawal1.jpg" alt="Ashish Rawal" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Ashish Rawal</h4>
                                    <strong>Assistant Manager</strong>
                                    <p>Ensures timely delivery and client success.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-pink-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/digvijay.png" alt="Digvijay Pundir" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Digvijay Pundir</h4>
                                    <strong>Legal & Compliance Executive</strong>
                                    <p>Ensures timely delivery and client success.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-yellow-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/manish.jpg" alt="Mohammad Kamil" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Mohammad Kamil</h4>
                                    <strong>Business Development Manager</strong>
                                    <p>Ensures timely delivery and client success.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Development -->
                    <div class="ot-team-group" data-category="development">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR DEVELOPMENT TEAM</span>
                            <h3>Development Team</h3>
                            <p>The builders who turn ideas into powerful digital experiences.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-blue-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/Mujasim.jpeg" alt="Shaik Mujasim" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Shaik Mujasim</h4>
                                    <strong>Senior Web Developer</strong>
                                    <p>Loves clean code and scalable solutions.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-purple-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/manish.jpg" alt="Vijay Kumar" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Vijay Kumar</h4>
                                    <strong>Web Developer</strong>
                                    <p>Focuses on performance and robust systems.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-green-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/chirag-malviya.jpg" alt="Chetan Lohar" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Chetan Lohar</h4>
                                    <strong>Frontend Developer</strong>
                                    <p>Creates responsive and interactive user interfaces.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-pink-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/shaik-rahman.jpg" alt="Shaik Rahman" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Shaik Rahman</h4>
                                    <strong>Frontend Developer</strong>
                                    <p>Creates responsive and interactive user interfaces.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- Creative -->
                    <div class="ot-team-group" data-category="creative">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR DESIGN TEAM</span>
                            <h3>Creative Team</h3>
                            <p>Creative minds who bring ideas to life with beautiful designs.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-yellow-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/nilesh-mali.jpg" alt="Nilesh Mali" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Nilesh Mali</h4>
                                    <strong>Graphic Designer</strong>
                                    <p>Designs intuitive and user-friendly experiences.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-blue-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/rutika.jpeg" alt="Rutika Kohli" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Rutika Kohli</h4>
                                    <strong>Graphic Designer</strong>
                                    <p>Creates impactful visual stories for brands.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-purple-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/sakshi.jpeg" alt="Sakshi Pundir" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>Sakshi Pundir</h4>
                                    <strong>Social Media Manager</strong>
                                    <p>Brings ideas to life through motion and visuals.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- R & D -->
                    <div class="ot-team-group" data-category="rnd">
                        <div class="ot-group-header">
                            <span class="ot-group-eyebrow">— OUR R&D TEAM</span>
                            <h3>R & D Cell</h3>
                            <p>Innovators who research and develop future-ready technologies.</p>
                        </div>
                        <div class="ot-new-grid">
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-green-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/sakshi.jpeg" alt="R & D Team 1" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>R & D Team 1</h4>
                                    <strong>Research & Innovation</strong>
                                    <p>Driving future innovations and deep research.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="ot-new-card">
                                <div class="ot-card-image-wrapper bg-pink-light">
                                    <div class="ot-quote-icon"><i class="fa-solid fa-quote-right"></i></div>
                                    <img src="../assets/team/female-dummy.png" alt="R & D Team 2" />
                                </div>
                                <div class="ot-card-content">
                                    <h4>R & D Team 2</h4>
                                    <strong>Product Development</strong>
                                    <p>Driving future innovations and deep research.</p>
                                    <div class="ot-new-social">
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <script>
                function filterTeam(category) {
                    const buttons = document.querySelectorAll('.ot-filter-btn');
                    buttons.forEach(btn => btn.classList.remove('active'));
                    event.target.classList.add('active');

                    const groups = document.querySelectorAll('.ot-team-group');
                    groups.forEach(group => {
                        if(category === 'all' || group.getAttribute('data-category') === category) {
                            group.style.display = 'block';
                        } else {
                            group.style.display = 'none';
                        }
                    });
                }
                </script>
            </div>
        </section>

        <!-- CULTURE -->
        <section class="ot-culture ot-section">
            <div class="ot-container ot-culture-grid">
                <div class="ot-culture-copy">
                    <span class="ot-eyebrow">OUR CULTURE <i></i></span>
                    <h2>More Than Work.<br /><span>A Place to Grow.</span></h2>
                    <p>
                        We believe in a positive, inclusive and growth-driven culture
                        where everyone's ideas matter.
                    </p>
                    <a href="#ot-members" class="ot-btn ot-btn-primary">Join Our Team <b>→</b></a>
                </div>
                <div class="ot-culture-items">
                    <div class="ot-culture-item">
                        <span>👥</span><b>Work Together</b><small>Collaboration makes us stronger</small>
                    </div>
                    <div class="ot-culture-item">
                        <span>🏆</span><b>Celebrate Wins</b><small>Big or small, we celebrate all</small>
                    </div>
                    <div class="ot-culture-item">
                        <span>🌱</span><b>Keep Learning</b><small>New skills, better opportunities</small>
                    </div>
                    <div class="ot-culture-item">
                        <span>🎯</span><b>Make an Impact</b><small>Create solutions that matter</small>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <div class="ot-modal" data-ot-modal aria-hidden="true">
        <div class="ot-modal-box">
            <button class="ot-modal-close" data-ot-close>×</button>
            <div class="ot-modal-play">▶</div>
            <h3>Our Team Story</h3>
            <p>
                Great work starts with great people. This demo modal can be connected
                to your team video.
            </p>
        </div>
    </div>
    <?php include '../footer.php'; ?>
    <script src="our team.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>