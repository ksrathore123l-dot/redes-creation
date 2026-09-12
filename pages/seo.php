<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Services | Redes Creation - Ideas | Solutions | Growth</title>
    <meta name="description"
        content="At Redes Creation, we help businesses rank higher on search engines, attract the right audience and turn visitors into loyal customers with result-driven SEO strategies.">

    <!-- Google Fonts: Plus Jakarta Sans for main UI & Kalam / Caveat for hand-drawn annotations -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Kalam:wght@400;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="seo.css" />
</head>

<body>

    <?php include '../header.php'; ?>
    <main>
        <!-- ==================== 1. HERO SECTION ==================== -->
        <section class="hero-section" id="hero">
            <div class="container hero-container">
                <!-- Hero Left Content -->
                <div class="hero-content">
                    <div class="section-tag hero-tag" id="hero-kicker">BE SEEN. BE CHOSEN. BE AHEAD.</div>
                    <h1 class="hero-title" id="hero-main-heading">SEO Services</h1>
                    <h2 class="hero-subtitle">More Visibility. More Traffic. More Business.</h2>
                    <p class="hero-desc">
                        At Redes Creation, we help businesses rank higher on search engines, attract the right audience
                        and turn
                        visitors into loyal customers with result-driven SEO strategies.
                    </p>

                    <div class="hero-cta-group">
                        <button class="seo-btn seo-btn-primary seo-btn-pill hero-btn-main" id="hero-audit-cta"
                            onclick="openAuditModal()">
                            <span>Get a Free SEO Audit</span>
                            <span class="seo-btn-arrow">→</span>
                        </button>
                        <button class="seo-btn seo-btn-outline-pill hero-btn-secondary" id="hero-video-cta"
                            onclick="openVideoModal()">
                            <span class="play-icon-circle">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="play-svg">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </span>
                            <span>See How It Works</span>
                        </button>
                    </div>

                    <!-- Metrics / Stats Strip -->
                    <div class="hero-stats-strip" id="hero-stats">
                        <div class="stat-card">
                            <div class="stat-icon-wrap stat-purple">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="stat-svg">
                                    <path d="M18 20V10M12 20V4M6 20v-6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="stat-details">
                                <div class="stat-number" data-target="100">100+</div>
                                <div class="stat-label">Happy Clients</div>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon-wrap stat-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="stat-svg">
                                    <path d="M23 6l-9.5 9.5-5-5L1 18" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 6h6v6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="stat-details">
                                <div class="stat-number" data-target="300">300%</div>
                                <div class="stat-label">Average Traffic Growth</div>
                            </div>
                        </div>

                        <div class="stat-card">
                            <div class="stat-icon-wrap stat-orange">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="stat-svg">
                                    <path
                                        d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17c0 .55-.45 1-1 1H8c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h8c.55 0 1-.45 1-1v-1c0-.55-.45-1-1-1h-1c-.55 0-1-.45-1-1v-2.34M18 4H6v6a6 6 0 0 0 12 0V4z"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="stat-details">
                                <div class="stat-number">#1</div>
                                <div class="stat-label">Goal Higher Rankings</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Right Visual: Realistic Laptop Scene with Doodles & Notes -->
                <div class="hero-visual" id="hero-visual-container">
                    <img src="../assets/seo hiro.png" alt="SEO Hero" class="hero-image">
                </div>
            </div>
        </section>

        <!-- ==================== 2. WHY SEO MATTERS SECTION ==================== -->
        <section class="why-section" id="why-seo">
            <div class="container why-container">
                <!-- Left Text Box -->
                <div class="why-left">
                    <div class="section-tag" id="why-kicker">WHY SEO MATTERS?</div>
                    <h2 class="section-heading" id="why-heading">
                        Because Your<br>Customers Are Searching.
                    </h2>
                    <p class="section-desc">
                        Every day, thousands of people search for products and services like yours. SEO ensures your
                        business shows
                        up at the right time, in front of the right people.
                    </p>
                    <a href="#cta-section" class="seo-btn seo-btn-primary seo-btn-pill" id="why-btn">
                        <span>Let's Grow Your Business</span>
                        <span class="seo-btn-arrow">→</span>
                    </a>
                </div>

                <!-- Right 4 Benefit Cards Grid -->
                <div class="why-cards-grid">
                    <!-- Card 1: Traffic -->
                    <div class="benefit-card">
                        <div class="benefit-icon-box bg-soft-blue">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2" class="benefit-svg">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <circle cx="9" cy="7" r="4" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="benefit-title">Increases Website Traffic</h3>
                        <p class="benefit-desc">Get more relevant visitors to your site.</p>
                    </div>

                    <!-- Card 2: Credibility -->
                    <div class="benefit-card">
                        <div class="benefit-icon-box bg-soft-pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#e11d48" stroke-width="2" class="benefit-svg">
                                <circle cx="12" cy="12" r="10" stroke-linecap="round" />
                                <circle cx="12" cy="12" r="6" stroke-linecap="round" />
                                <circle cx="12" cy="12" r="2" fill="#e11d48" />
                                <path d="M19 5l-4 4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="benefit-title">Builds Credibility</h3>
                        <p class="benefit-desc">Rank higher and build trust.</p>
                    </div>

                    <!-- Card 3: Leads & Sales -->
                    <div class="benefit-card">
                        <div class="benefit-icon-box bg-soft-teal">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" class="benefit-svg">
                                <path d="M6 3h12M6 8h12M6 13h7M6 18h12M13 13c3 0 5-2 5-5H6M10 13l6 8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="benefit-title">More Leads & Sales</h3>
                        <p class="benefit-desc">Turn traffic into paying customers.</p>
                    </div>

                    <!-- Card 4: Long-Term Growth -->
                    <div class="benefit-card">
                        <div class="benefit-icon-box bg-soft-orange">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" class="benefit-svg">
                                <path d="M3 3v18h18" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 16l5-5 4 4 6-7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18 8h4v4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="benefit-title">Long-Term Growth</h3>
                        <p class="benefit-desc">Sustainable results for your business.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== 3. OUR SEO SERVICES SECTION ==================== -->
        <section class="services-section" id="services">
            <div class="container services-outer-wrapper">
                <div class="services-navy-card">
                    <!-- Left Header Area -->
                    <div class="services-header-col">
                        <div class="section-tag tag-cyan">OUR SEO SERVICES</div>
                        <h2 class="services-heading">Complete SEO Solutions for Real Results</h2>
                        <p class="services-lead">
                            From strategy to execution, we offer end-to-end SEO services tailored to your business
                            goals.
                        </p>
                        <a href="#services-grid" class="seo-btn seo-btn-outline-white seo-btn-pill services-cta"
                            id="explore-services-btn">
                            <span>Explore All Services</span>
                            <span class="seo-btn-arrow">→</span>
                        </a>
                    </div>

                    <!-- Right 10 Services Grid (2x5 layout) -->
                    <div class="services-cards-grid" id="services-grid">

                        <!-- 1. Keyword Research -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2.2"
                                    class="srv-svg">
                                    <circle cx="11" cy="11" r="7" />
                                    <path d="M21 21l-4.5-4.5" stroke-linecap="round" />
                                    <path d="M11 8v6M8 11h6" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">Keyword<br>Research</h3>
                        </div>

                        <!-- 2. On-Page SEO -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2.2"
                                    class="srv-svg">
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <path d="M3 9h18M9 21V9" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">On-Page<br>SEO</h3>
                        </div>

                        <!-- 3. Technical SEO -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-purple">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2.2"
                                    class="srv-svg">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                                </svg>
                            </div>
                            <h3 class="service-title">Technical<br>SEO</h3>
                        </div>

                        <!-- 4. Content Optimization -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2.2"
                                    class="srv-svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                                        stroke-linecap="round" />
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">Content<br>Optimization</h3>
                        </div>

                        <!-- 5. Local SEO -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-orange">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2.2"
                                    class="srv-svg">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke-linecap="round" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke-linecap="round" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">Local<br>SEO</h3>
                        </div>

                        <!-- 6. Link Building -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-green">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.2"
                                    class="srv-svg">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
                                        stroke-linecap="round" />
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">Link<br>Building</h3>
                        </div>

                        <!-- 7. E-commerce SEO -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-cyan">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2.2"
                                    class="srv-svg">
                                    <circle cx="9" cy="21" r="1" />
                                    <circle cx="20" cy="21" r="1" />
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">E-commerce<br>SEO</h3>
                        </div>

                        <!-- 8. SEO Audit & Reporting -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-blue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2.2"
                                    class="srv-svg">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                        stroke-linecap="round" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" stroke-linecap="round" />
                                    <line x1="16" y1="17" x2="8" y2="17" stroke-linecap="round" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <h3 class="service-title">SEO Audit<br>& Reporting</h3>
                        </div>

                        <!-- 9. Competitor Analysis -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-orange">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2.2"
                                    class="srv-svg">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                                        stroke-linecap="round" />
                                    <line x1="9" y1="12" x2="15" y2="12" stroke-linecap="round" />
                                    <line x1="12" y1="9" x2="12" y2="15" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h3 class="service-title">Competitor<br>Analysis</h3>
                        </div>

                        <!-- 10. Google Business Optimization -->
                        <div class="service-tile">
                            <div class="service-icon-wrap icon-teal">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#0d9488" stroke-width="2.2"
                                    class="srv-svg">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linecap="round" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <h3 class="service-title">Google Business<br>Optimization</h3>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== 4. OUR SEO PROCESS SECTION ==================== -->
        <section class="process-section" id="process">
            <div class="container process-container">

                <!-- Header & Top Right Handwritten Note -->
                <div class="process-top-row">
                    <div class="process-headings">
                        <div class="section-tag" id="process-kicker">OUR SEO PROCESS</div>
                        <h2 class="section-heading" id="process-heading">A Proven Process for Higher Rankings</h2>
                    </div>


                </div>

                <!-- 5 Steps Connected Flow -->
                <div class="process-steps-track">
                    <!-- Background Curved Connected Dashed Path -->
                    <svg class="process-connector-svg" viewBox="0 0 1000 120" preserveAspectRatio="none" fill="none">
                        <path
                            d="M 100 50 C 200 80, 250 20, 320 50 C 400 80, 450 20, 520 50 C 600 80, 650 20, 720 50 C 800 80, 850 20, 900 50"
                            stroke="#38bdf8" stroke-width="2.5" stroke-dasharray="6 6" stroke-linecap="round" />
                    </svg>

                    <!-- Step 01 -->
                    <div class="process-step-node" id="step-01">
                        <div class="step-circle bg-node-blue">
                            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="step-svg">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18M9 21V9" />
                                <circle cx="6" cy="6" r="1" fill="white" />
                            </svg>
                        </div>
                        <div class="step-badge badge-blue">01</div>
                        <h3 class="step-name">Website Audit</h3>
                        <p class="step-desc">We analyze your website in detail.</p>
                    </div>

                    <!-- Step 02 -->
                    <div class="process-step-node" id="step-02">
                        <div class="step-circle bg-node-teal">
                            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="step-svg">
                                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
                            </svg>
                        </div>
                        <div class="step-badge badge-teal">02</div>
                        <h3 class="step-name">Strategy</h3>
                        <p class="step-desc">We create a customized SEO plan.</p>
                    </div>

                    <!-- Step 03 -->
                    <div class="process-step-node" id="step-03">
                        <div class="step-circle bg-node-pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="step-svg">
                                <path
                                    d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
                                <path
                                    d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
                                <path d="M9 12H4s.55-3.03 2-4.5c1.47-1.48 4-2 4-2" />
                                <path d="M12 9V4s3.03.55 4.5 2c1.48 1.47 2 4 2 4" />
                            </svg>
                        </div>
                        <div class="step-badge badge-pink">03</div>
                        <h3 class="step-name">Implementation</h3>
                        <p class="step-desc">Our experts execute the strategy.</p>
                    </div>

                    <!-- Step 04 -->
                    <div class="process-step-node" id="step-04">
                        <div class="step-circle bg-node-orange">
                            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="step-svg">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
                            </svg>
                        </div>
                        <div class="step-badge badge-orange">04</div>
                        <h3 class="step-name">Monitoring</h3>
                        <p class="step-desc">We track performance and make improvements.</p>
                    </div>

                    <!-- Step 05 -->
                    <div class="process-step-node" id="step-05">
                        <div class="step-circle bg-node-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="step-svg">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <div class="step-badge badge-purple">05</div>
                        <h3 class="step-name">Better Rankings</h3>
                        <p class="step-desc">You get higher visibility and more business.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==================== 5. REAL RESULTS & CTA SECTION ==================== -->
        <section class="results-cta-section" id="results">
            <!-- Curved Wave Background Shape -->
            <div class="results-wave-bg" aria-hidden="true"></div>

            <div class="container results-cta-grid">

                <!-- Left Column: Real Results Testimonials & Case Study -->
                <div class="real-results-col">
                    <div class="results-header-wrap">
                        <div>
                            <div class="section-tag" id="results-kicker">REAL RESULTS</div>
                            <h2 class="section-heading">Businesses That Grew with Us</h2>
                        </div>
                        <div class="results-more-dots" aria-hidden="true">⋮</div>
                    </div>

                    <!-- Testimonial Slider Container -->
                    <div class="testimonials-slider-wrap" id="testimonial-slider">

                        <!-- Slide 1 (Active) -->
                        <div class="case-study-card active" data-index="0">
                            <div class="case-media-box">
                                <img src="../assets/hotel.jpg" alt="The Grand Stay Hotel Resort" class="case-img"
                                    id="case-img-hotel" loading="lazy">
                                <span class="case-badge">Hospitality Industry</span>
                            </div>

                            <div class="case-content-box">
                                <!-- 3 Metric Numbers -->
                                <div class="case-metrics-row">
                                    <div class="case-metric">
                                        <span class="metric-val">+320%</span>
                                        <span class="metric-title">Organic Traffic</span>
                                    </div>
                                    <div class="case-metric">
                                        <span class="metric-val">+180%</span>
                                        <span class="metric-title">Booking Inquiries</span>
                                    </div>
                                    <div class="case-metric">
                                        <span class="metric-val">#1</span>
                                        <span class="metric-title">for Target Keywords</span>
                                    </div>
                                </div>

                                <!-- Testimonial Quote -->
                                <p class="case-quote">
                                    “Redes Creation helped us rank on the first page for our key search terms. We’ve
                                    seen a huge increase
                                    in website traffic and direct bookings.”
                                </p>

                                <!-- Author & Star Rating -->
                                <div class="case-author-rating">
                                    <span class="author-name">— The Grand Stay Hotel</span>
                                    <div class="star-rating" aria-label="5 out of 5 stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="case-study-card" data-index="1">
                            <div class="case-media-box">
                                <img src="../assets/hotel.jpg" alt="UrbanBite Restaurants" class="case-img" loading="lazy">
                                <span class="case-badge">Food & Beverage</span>
                            </div>
                            <div class="case-content-box">
                                <div class="case-metrics-row">
                                    <div class="case-metric">
                                        <span class="metric-val">+410%</span>
                                        <span class="metric-title">Local Searches</span>
                                    </div>
                                    <div class="case-metric">
                                        <span class="metric-val">+220%</span>
                                        <span class="metric-title">Online Orders</span>
                                    </div>
                                    <div class="case-metric">
                                        <span class="metric-val">Top 3</span>
                                        <span class="metric-title">Google Maps Pack</span>
                                    </div>
                                </div>
                                <p class="case-quote">
                                    “Our foot traffic and online orders skyrocketed within 4 months. Redes Creation’s
                                    local SEO strategy
                                    is a total game changer!”
                                </p>
                                <div class="case-author-rating">
                                    <span class="author-name">— UrbanBite Restaurants</span>
                                    <div class="star-rating">
                                        <span class="star">★</span><span class="star">★</span><span
                                            class="star">★</span><span class="star">★</span><span class="star">★</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Carousel Controls -->
                    <div class="slider-controls">
                        <button class="slider-arrow prev-arrow" id="prev-slide-btn" aria-label="Previous testimonial">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                class="arrow-svg">
                                <polyline points="15 18 9 12 15 6" />
                            </svg>
                        </button>
                        <div class="slider-dots" id="slider-dots-container">
                            <span class="dot active" data-slide="0"></span>
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                        </div>
                        <button class="slider-arrow next-arrow" id="next-slide-btn" aria-label="Next testimonial">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                class="arrow-svg">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </button>
                    </div>

                </div>

                <!-- Center Transition Handwritten Doodle -->
                <div class="handwritten-annotation center-transition-doodle" id="center-doodle">

                </div>

                <!-- Right Column: Conversion CTA Card -->
                <div class="cta-navy-box" id="cta-section">
                    <!-- Rising bar chart watermark background -->
                    <div class="cta-watermark-chart" aria-hidden="true">
                        <div class="wm-bar wm-1"></div>
                        <div class="wm-bar wm-2"></div>
                        <div class="wm-bar wm-3"></div>
                        <div class="wm-bar wm-4"></div>
                        <div class="wm-bar wm-5"></div>
                    </div>

                    <h2 class="cta-card-heading">Let's Take Your Business to the Next Level</h2>
                    <p class="cta-card-desc">
                        Get a free SEO audit and discover new opportunities to grow your online presence.
                    </p>

                    <button class="seo-btn seo-btn-white seo-btn-pill cta-card-btn" id="cta-card-audit-btn"
                        onclick="openAuditModal()">
                        <span>Get a Free SEO Audit</span>
                        <span class="seo-btn-arrow">→</span>
                    </button>

                    <ul class="cta-checklist">
                        <li>
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>No Obligation</span>
                        </li>
                        <li>
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Expert Recommendations</span>
                        </li>
                        <li>
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span>Customized Strategy</span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- ==================== 6. TRUSTED BY GROWING BRANDS ==================== -->
        <section class="brands-section" id="brands">
            <div class="container brands-container">

                <div class="brands-left-wrapper">
                    <div class="section-tag" id="brands-tag">Trusted by Growing Brands</div>

                    <!-- Logos Row -->
                    <div class="brands-logo-row">

                        <!-- Logo 1: The Grand Stay -->
                        <div class="brand-logo-item">
                            <svg class="brand-svg-icon" viewBox="0 0 32 32" fill="none">
                                <circle cx="16" cy="16" r="14" stroke="#475569" stroke-width="1.5" />
                                <path d="M16 6 L20 16 L16 26 L12 16 Z" stroke="#475569" stroke-width="1.2" />
                                <circle cx="16" cy="16" r="2.5" fill="#475569" />
                            </svg>
                            <div class="brand-name-group">
                                <span class="b-main">THE GRAND STAY</span>
                                <span class="b-sub">HOTELS & RESORTS</span>
                            </div>
                        </div>

                        <!-- Logo 2: UrbanBite -->
                        <div class="brand-logo-item">
                            <svg class="brand-svg-icon" viewBox="0 0 32 32" fill="none">
                                <path d="M8 12 L16 6 L24 12 L24 24 L8 24 Z" stroke="#1e293b" stroke-width="1.8" />
                                <path d="M14 24 L14 16 L18 16 L18 24" stroke="#1e293b" stroke-width="1.5" />
                                <path d="M16 11 L16 13" stroke="#1e293b" stroke-width="1.5" />
                            </svg>
                            <div class="brand-name-group">
                                <span class="b-main b-bold">UrbanBite</span>
                                <span class="b-sub">RESTAURANTS</span>
                            </div>
                        </div>

                        <!-- Logo 3: HealthCare+ -->
                        <div class="brand-logo-item">
                            <svg class="brand-svg-icon" viewBox="0 0 32 32" fill="none">
                                <path d="M16 4 L26 8 V16 C26 22 16 28 16 28 C16 28 6 22 6 16 V8 L16 4 Z"
                                    stroke="#1e293b" stroke-width="1.8" />
                                <path d="M16 11 V19 M12 15 H20" stroke="#1e293b" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                            <div class="brand-name-group">
                                <span class="b-main b-bold">HealthCare+</span>
                            </div>
                        </div>

                        <!-- Logo 4: EduSmart -->
                        <div class="brand-logo-item">
                            <svg class="brand-svg-icon" viewBox="0 0 32 32" fill="none">
                                <path d="M16 8 L27 14 L16 20 L5 14 Z" stroke="#1e293b" stroke-width="1.8" />
                                <path d="M9 16.5 V22 C9 22 12 25 16 25 C20 25 23 22 23 22 V16.5" stroke="#1e293b"
                                    stroke-width="1.5" />
                            </svg>
                            <div class="brand-name-group">
                                <span class="b-main b-bold">EduSmart</span>
                                <span class="b-sub">Learning for a Better Tomorrow</span>
                            </div>
                        </div>

                        <!-- Logo 5: BuildRight -->
                        <div class="brand-logo-item">
                            <svg class="brand-svg-icon" viewBox="0 0 32 32" fill="none">
                                <path d="M7 26 V10 L16 6 L25 10 V26" stroke="#1e293b" stroke-width="1.8" />
                                <rect x="11" y="14" width="3" height="3" fill="#1e293b" />
                                <rect x="18" y="14" width="3" height="3" fill="#1e293b" />
                                <rect x="11" y="19" width="3" height="3" fill="#1e293b" />
                                <rect x="18" y="19" width="3" height="3" fill="#1e293b" />
                            </svg>
                            <div class="brand-name-group">
                                <span class="b-main b-bold">BuildRight</span>
                                <span class="b-sub">CONSTRUCTIONS</span>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </section>

        <!-- ==================== 7. FOOTER VALUE HIGHLIGHTS ==================== -->
        <footer class="footer-highlights" id="footer-badges">
            <div class="container footer-highlights-row">

                <!-- Badge 1 -->
                <div class="footer-pill-item">
                    <div class="f-icon-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2" class="f-svg">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <polyline points="9 12 11 14 15 10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="f-text">Result-Driven Strategies</span>
                </div>

                <!-- Badge 2 -->
                <div class="footer-pill-item">
                    <div class="f-icon-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2" class="f-svg">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke-linecap="round" />
                            <line x1="8" y1="17" x2="8" y2="13" stroke-linecap="round" />
                            <line x1="12" y1="17" x2="12" y2="9" stroke-linecap="round" />
                            <line x1="16" y1="17" x2="16" y2="11" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span class="f-text">Transparent Reporting</span>
                </div>

                <!-- Badge 3 -->
                <div class="footer-pill-item">
                    <div class="f-icon-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2" class="f-svg">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6" stroke-linecap="round" />
                            <path
                                d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="f-text">Dedicated Support</span>
                </div>

                <!-- Badge 4 -->
                <div class="footer-pill-item">
                    <div class="f-icon-circle">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#1677ff" stroke-width="2" class="f-svg">
                            <path d="M17 11V6a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v5" stroke-linecap="round" />
                            <rect x="3" y="11" width="18" height="10" rx="2" />
                            <circle cx="12" cy="16" r="1" />
                        </svg>
                    </div>
                    <span class="f-text">Long-Term Partnership</span>
                </div>

            </div>
        </footer>
    </main>

    <!-- ==================== MODALS ==================== -->

    <!-- 1. Audit Form Modal -->
    <div class="modal-overlay" id="audit-modal" aria-hidden="true">
        <div class="modal-container">
            <button class="modal-close" onclick="closeAuditModal()" aria-label="Close modal">×</button>
            <div class="modal-header">
                <div class="section-tag tag-cyan">FREE CONSULTATION</div>
                <h3 class="modal-title">Get Your Free SEO Audit</h3>
                <p class="modal-desc">Discover what’s holding your website back and how to outrank your competitors.</p>
            </div>
            <form class="modal-form" id="audit-form" onsubmit="handleAuditSubmit(event)">
                <div class="form-group">
                    <label for="audit-name">Full Name</label>
                    <input type="text" id="audit-name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="audit-email">Business Email</label>
                    <input type="email" id="audit-email" required placeholder="john@company.com">
                </div>
                <div class="form-group">
                    <label for="audit-url">Website URL</label>
                    <input type="url" id="audit-url" required placeholder="https://yourwebsite.com">
                </div>
                <button type="submit" class="seo-btn seo-btn-primary seo-btn-pill seo-btn-block">
                    <span>Request Free Audit Now</span>
                    <span class="seo-btn-arrow">→</span>
                </button>
            </form>
        </div>
    </div>

    <!-- 2. Video How It Works Modal -->
    <div class="modal-overlay" id="video-modal" aria-hidden="true">
        <div class="modal-container modal-video-container">
            <button class="modal-close" onclick="closeVideoModal()" aria-label="Close video">×</button>
            <div class="video-mockup-wrapper">
                <div class="video-screen-content">
                    <div class="video-play-banner">
                        <div class="large-play-icon">▶</div>
                        <h3>How Redes Creation Powers #1 Rankings</h3>
                        <p>Our 5-step data-driven SEO strategy explained in 90 seconds.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Notification Toast -->
    <div class="toast-notification" id="toast-msg">
        <span>Audit Request Received! Our SEO team will analyze your website.</span>
    </div>

    <?php include '../footer.php'; ?>
    <script src="seo.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
