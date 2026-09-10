<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Creation | QR Code Menus & Contactless Dining</title>
    <meta name="description"
        content="A safer, smarter and more convenient way to serve your customers. We create digital QR code menu solutions that enhance the dining experience and help your restaurant grow.">
    <meta name="keywords"
        content="QR code menu, contactless dining, digital menu, restaurant technology, Redes Creation, smart menu">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230066ff'/><text x='50%' y='68%' font-size='60' font-family='sans-serif' font-weight='900' fill='white' text-anchor='middle'>R</text></svg>">

    <!-- Google Fonts: Plus Jakarta Sans for UI + Caveat for handwritten accents -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="QR.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <?php include '../header.php'; ?>

    <main>
        <!-- ==========================================
         2. HERO SECTION
         ========================================== -->
        <section class="hero-section" id="hero">
            <div class="qr-container hero-container">
                <!-- Hero Left Content -->
                <div class="hero-content">
                    <div class="badge-subtitle">MODERN DINING. SMARTER SOLUTIONS.</div>
                    <h1 class="hero-title">
                        QR Code Menus &amp; <br>
                        <span class="text-highlight">Contactless Dining</span>
                    </h1>
                    <p class="hero-desc">
                        A safer, smarter and more convenient way to serve your customers. We create digital menu
                        solutions that enhance the dining experience and help your restaurant grow.
                    </p>

                    <div class="hero-cta-group">
                        <button class="btn btn-primary consultation-trigger" id="heroDigitalMenuBtn">
                            Get Your Digital Menu <span class="arrow">&rarr;</span>
                        </button>
                        <button class="btn btn-outline" id="watchVideoBtn">
                            <span class="play-circle-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </span>
                            Watch Video
                        </button>
                    </div>

                    <!-- 4 Circular Feature Badges -->
                    <div class="feature-badges-grid">
                        <div class="badge-item">
                            <div class="badge-icon-outer halo-green">
                                <div class="badge-icon-circle icon-green">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="svg-icon">
                                        <path
                                            d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A9.68 9.68 0 0 0 10 20c7 0 11-8 11-8s-1-4-4-4zm-5 8c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="badge-label">Hygienic<br>&amp; Safe</span>
                        </div>

                        <div class="badge-item">
                            <div class="badge-icon-outer halo-orange">
                                <div class="badge-icon-circle icon-orange">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"
                                        stroke-linecap="round" stroke-linejoin="round" class="svg-icon">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <span class="badge-label">Easy<br>to Use</span>
                        </div>

                        <div class="badge-item">
                            <div class="badge-icon-outer halo-purple">
                                <div class="badge-icon-circle icon-purple">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="svg-icon">
                                        <path
                                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="badge-label">Fully<br>Customizable</span>
                        </div>

                        <div class="badge-item">
                            <div class="badge-icon-outer halo-pink">
                                <div class="badge-icon-circle icon-pink">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="svg-icon">
                                        <path d="M5 19h2v-6H5v6zm4 0h2v-9H9v9zm4 0h2V5h-2v14zm4 0h2v-4h-2v4z" />
                                        <path
                                            d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="badge-label">Boosts<br>Your Sales</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Right Visual Scene -->
                <div class="hero-visual" id="about">
                    <div class="hero-image-wrapper">
                        <img src="../assets/hiro.png"
                            alt="Contactless QR code menu dining experience with FoodVilla mobile menu and wooden stand"
                            class="hero-main-img" width="559" height="392">
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
         3. METRICS / STATS BAR
         ========================================== -->
        <section class="stats-section">
            <div class="qr-container">
                <div class="stats-card">
                    <!-- Stat 1: 500+ Restaurants Served -->
                    <div class="stat-item">
                        <div class="stat-glyph-icon text-blue">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="500" data-suffix="+">500+</div>
                            <div class="stat-label">Restaurants Served</div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="stat-divider"></div>

                    <!-- Stat 2: 1M+ Menus Scanned -->
                    <div class="stat-item">
                        <div class="stat-glyph-icon text-cyan">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zm-5 0h3v5h-3v-5zm3 3h2v2h-2v-2zm2 2h3v4h-3v-4zm-2 2h2v2h-2v-2zm-3-2h3v4h-3v-4z" />
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="1" data-prefix="" data-suffix="M+">1M+</div>
                            <div class="stat-label">Menus Scanned</div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="stat-divider"></div>

                    <!-- Stat 3: 98% Customer Satisfaction -->
                    <div class="stat-item">
                        <div class="stat-glyph-icon text-blue">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="98" data-suffix="%">98%</div>
                            <div class="stat-label">Customer Satisfaction</div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="stat-divider"></div>

                    <!-- Stat 4: 40% Average Sales Increase -->
                    <div class="stat-item">
                        <div class="stat-glyph-icon text-blue">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 19h2v-6H5v6zm4 0h2v-9H9v9zm4 0h2V5h-2v14zm4 0h2v-4h-2v4z" />
                                <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z" />
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="40" data-suffix="%">40%</div>
                            <div class="stat-label">Average Sales Increase</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
         4. WHY QR MENUS SECTION
         ========================================== -->
        <section class="qr-why-section" id="why-qr">
            <div class="qr-container qr-why-container">
                <!-- Left: Benefits List -->
                <div class="why-left">
                    <div class="badge-subtitle">WHY QR MENUS?</div>
                    <h2 class="section-title">
                        More Than Just a Menu<br>
                        <span class="text-highlight">A Smarter Dining Experience</span>
                    </h2>
                    <p class="section-desc">
                        We help restaurants, cafes, hotels and food chains go digital with interactive QR code menus and
                        contactless solutions.
                    </p>

                    <ul class="benefits-list">
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Reduce physical contact</span>
                        </li>
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Update menu anytime, instantly</span>
                        </li>
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Show attractive food images &amp; offers</span>
                        </li>
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Support multiple languages</span>
                        </li>
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Get real-time analytics</span>
                        </li>
                        <li class="benefit-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span class="benefit-text">Build a modern brand image</span>
                        </li>
                    </ul>

                    <div class="why-cta-wrap">
                        <button class="btn btn-primary consultation-trigger">
                            Let's Go Digital <span class="arrow">&rarr;</span>
                        </button>
                    </div>
                </div>

                <!-- Center: Interactive Feature Pills Stack -->
                <div class="why-middle">
                    <div class="feature-pills-list">
                        <button class="feature-pill active" data-feature="digital-menu">
                            <div class="pill-glow-wrap glow-green">
                                <span class="pill-icon pill-green">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                    </svg>
                                </span>
                            </div>
                            <span class="pill-title">Digital Menu</span>
                        </button>

                        <button class="feature-pill" data-feature="live-updates">
                            <div class="pill-glow-wrap glow-orange">
                                <span class="pill-icon pill-orange">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7l-2 3v1h8v-1l-2-3h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H3V4h18v10z" />
                                        <path d="M13 5h-2v4H7l5 5 5-5h-4z" />
                                    </svg>
                                </span>
                            </div>
                            <span class="pill-title">Live Updates</span>
                        </button>

                        <button class="feature-pill" data-feature="special-offers">
                            <div class="pill-glow-wrap glow-purple">
                                <span class="pill-icon pill-purple">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </span>
                            </div>
                            <span class="pill-title">Special Offers</span>
                        </button>

                        <button class="feature-pill" data-feature="multi-language">
                            <div class="pill-glow-wrap glow-pink">
                                <span class="pill-icon pill-pink">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12.87 15.07l-2.54-2.51.03-.08c1.74-1.94 2.98-4.17 3.71-6.49H17V4h-7V2H8v2H1v2h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7l1.62-4.33L19.12 17h-3.24z" />
                                    </svg>
                                </span>
                            </div>
                            <span class="pill-title">Multi-Language</span>
                        </button>

                        <button class="feature-pill" data-feature="analytics">
                            <div class="pill-glow-wrap glow-blue">
                                <span class="pill-icon pill-blue">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                                    </svg>
                                </span>
                            </div>
                            <span class="pill-title">Analytics Report</span>
                        </button>
                    </div>
                </div>

                <!-- Right: Smartphone Food Preview -->
                <div class="why-right">
                    <div class="phone-specials-wrapper">
                        <div class="phone-card-preview">
                            <img src="../assets/phone-specials.png"
                                alt="Interactive digital QR menu on smartphone showing Today's Special Grilled Paneer with Herbs"
                                class="phone-specials-img" width="300" height="330">

                            <!-- Interactive Add To Order overlay trigger -->
                            <button class="interactive-order-hotspot" id="orderDemoBtn"
                                title="Click to test order interaction" aria-label="Add to Order demo"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
         5. HOW IT WORKS SECTION
         ========================================== -->
        <section class="steps-section" id="how-it-works">
            <div class="qr-container steps-container">
                <div class="steps-header">
                    <div class="badge-subtitle">HOW IT WORKS</div>
                    <h2 class="section-title">Get Started in 4 Simple Steps</h2>




                    <!-- 4 Steps Horizontal Flow Grid -->
                    <div class="steps-flow-grid">
                        <!-- Step 1 -->
                        <div class="step-flow-item">
                            <div class="step-icon-glow glow-step-blue">
                                <div class="step-icon-inner bg-step-blue">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="step-text-wrap">
                                <div class="step-number-title">
                                    <span class="step-num text-step-blue">01</span>
                                    <h3 class="step-title">Share Your Menu</h3>
                                </div>
                                <p class="step-desc">We design and digitize your menu.</p>
                            </div>
                            <div class="step-arrow-divider">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step-flow-item">
                            <div class="step-icon-glow glow-step-teal">
                                <div class="step-icon-inner bg-step-teal">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M3 3h8v8H3V3zm2 2v4h4V5H5zm8-2h8v8h-8V3zm2 2v4h4V5h-4zM3 13h8v8H3v-8zm2 2v4h4v-4H5zm13-2h3v2h-3v-2zm-5 0h3v5h-3v-5zm3 3h2v2h-2v-2zm2 2h3v4h-3v-4zm-2 2h2v2h-2v-2zm-3-2h3v4h-3v-4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="step-text-wrap">
                                <div class="step-number-title">
                                    <span class="step-num text-step-teal">02</span>
                                    <h3 class="step-title">Get Your QR Code</h3>
                                </div>
                                <p class="step-desc">We generate a unique QR code for your business.</p>
                            </div>
                            <div class="step-arrow-divider">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step-flow-item">
                            <div class="step-icon-glow glow-step-purple">
                                <div class="step-icon-inner bg-step-purple">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="step-text-wrap">
                                <div class="step-number-title">
                                    <span class="step-num text-step-purple">03</span>
                                    <h3 class="step-title">Customize &amp; Launch</h3>
                                </div>
                                <p class="step-desc">Add branding, images, offers and go live.</p>
                            </div>
                            <div class="step-arrow-divider">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="step-flow-item">
                            <div class="step-icon-glow glow-step-pink">
                                <div class="step-icon-inner bg-step-pink">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M5 19h2v-6H5v6zm4 0h2v-9H9v9zm4 0h2V5h-2v14zm4 0h2v-4h-2v4z" />
                                        <path
                                            d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="step-text-wrap">
                                <div class="step-number-title">
                                    <span class="step-num text-step-pink">04</span>
                                    <h3 class="step-title">Grow Your Business</h3>
                                </div>
                                <p class="step-desc">Track performance and attract more customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- ==========================================
         6. PERFECT FOR EVERY BUSINESS / INDUSTRIES
         ========================================== -->
        <section class="industries-section" id="industries">
            <div class="qr-container industries-container">
                <!-- Left: Table 5 Stand Photo with Angled Cut -->
                <div class="industries-left">
                    <div class="table-stand-wrapper">
                        <img src="../assets/table5-stand.png" alt="Table 5 QR menu stand in restaurant dining area"
                            class="table-stand-img" width="452" height="190">
                    </div>
                </div>

                <!-- Right: Business Types Badges (Horizontal Row) -->
                <div class="industries-right">
                    <div class="badge-subtitle">PERFECT FOR EVERY BUSINESS</div>
                    <h2 class="section-title">Ideal for All Types of Food Businesses</h2>

                    <div class="categories-row">
                        <!-- 1. Restaurants & Cafes -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-coral">
                                <div class="category-icon-circle cat-coral">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Restaurants<br>&amp; Cafes</span>
                        </div>

                        <!-- 2. Coffee Shops -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-purple">
                                <div class="category-icon-circle cat-purple">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.89 2-2V5c0-1.11-.89-2-2-2zm0 5h-2V5h2v3zM4 19h16v2H4z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Coffee Shops</span>
                        </div>

                        <!-- 3. Hotels & Resorts -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-mint">
                                <div class="category-icon-circle cat-mint">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M19 7h-8v8H3V3H1v18h22v-2h-4V7zM7 19H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm4 8H9v-2h2v2zm0-4H9v-2h2v2zm0-4H9V9h2v2zm8 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Hotels &amp; Resorts</span>
                        </div>

                        <!-- 4. Food Trucks -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-orange">
                                <div class="category-icon-circle cat-orange">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M20 8h-3V4H1v13h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Food Trucks</span>
                        </div>

                        <!-- 5. Food Courts -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-blue">
                                <div class="category-icon-circle cat-blue">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Food Courts</span>
                        </div>

                        <!-- 6. Cloud Kitchens -->
                        <div class="category-item">
                            <div class="category-icon-outer halo-pink">
                                <div class="category-icon-circle cat-pink">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="cat-svg">
                                        <path
                                            d="M12 2C8.43 2 5.23 3.54 3.01 6L12 22l8.99-16C18.78 3.55 15.57 2 12 2zM7.05 6.09c.81-.46 1.7-.8 2.65-1.01L7.05 6.09zm4.95-.09c.67 0 1.32.06 1.95.17l-1.95 3.38-1.95-3.38c.63-.11 1.28-.17 1.95-.17zm2.3 8c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                                    </svg>
                                </div>
                            </div>
                            <span class="category-name">Cloud Kitchens</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
         7. TESTIMONIALS SECTION
         ========================================== -->
        <section class="testimonials-section" id="testimonials">
            <div class="qr-container">
                <div class="testimonials-header">
                    <div class="badge-subtitle">WHAT OUR CLIENTS SAY</div>
                    <h2 class="section-title">Trusted by Restaurant Owners</h2>
                </div>

                <div class="testimonials-grid">
                    <!-- Card 1: Rahul Mehta -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"Our customers love the new QR menu! It's easy, fast and looks
                            amazing."</p>
                        <div class="testimonial-footer">
                            <div class="testimonial-author">
                                <img src="../assets/avatar-rahul.png" alt="Rahul Mehta" class="author-avatar" width="44"
                                    height="44">
                                <div class="author-info">
                                    <h4 class="author-name">Rahul Mehta</h4>
                                    <span class="author-role">Restaurant Owner</span>
                                </div>
                            </div>
                            <div class="star-rating" aria-label="5 stars rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Priya Sharma -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"Great support and quick setup. Highly recommended!"</p>
                        <div class="testimonial-footer">
                            <div class="testimonial-author">
                                <img src="../assets/avatar-priya.png" alt="Priya Sharma" class="author-avatar" width="44"
                                    height="44">
                                <div class="author-info">
                                    <h4 class="author-name">Priya Sharma</h4>
                                    <span class="author-role">Cafe Owner</span>
                                </div>
                            </div>
                            <div class="star-rating" aria-label="5 stars rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Amit Verma -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"It has improved our customer experience and increased our sales."
                        </p>
                        <div class="testimonial-footer">
                            <div class="testimonial-author">
                                <img src="../assets/avatar-amit.png" alt="Amit Verma" class="author-avatar" width="44"
                                    height="44">
                                <div class="author-info">
                                    <h4 class="author-name">Amit Verma</h4>
                                    <span class="author-role">Hotel Manager</span>
                                </div>
                            </div>
                            <div class="star-rating" aria-label="5 stars rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
         8. BOTTOM CTA BANNER
         ========================================== -->
        <section class="cta-banner-section">
            <div class="qr-container">
                <div class="cta-banner-card">
                    <!-- Left Banner Text -->
                    <div class="cta-banner-content">
                        <div class="cta-subtitle">READY TO TRANSFORM YOUR DINING EXPERIENCE?</div>
                        <h2 class="cta-title">Get Your QR Menu Today</h2>
                        <p class="cta-desc">Go contactless. Go digital. Grow with Redes Creation.</p>
                    </div>

                    <!-- Right Banner Actions & Handwritten Script -->
                    <div class="cta-banner-actions">
                        <button class="btn btn-white consultation-trigger" id="footerCtaBtn">
                            Get a Free Consultation <span class="arrow">&rarr;</span>
                        </button>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ==========================================
       MODALS & NOTIFICATIONS
       ========================================== -->

    <!-- Consultation Request Modal -->
    <div class="modal-overlay" id="consultationModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <button class="modal-close" id="modalCloseBtn" aria-label="Close dialog">&times;</button>
            <div class="modal-header">
                <div class="badge-subtitle">LET'S CONNECT</div>
                <h3 class="modal-title" id="modalTitle">Get Your Free Consultation</h3>
                <p class="modal-desc">Fill in your restaurant details and our QR menu specialist will get in touch
                    within 24 hours.</p>
            </div>
            <form class="modal-form" id="consultationForm">
                <div class="form-group">
                    <label for="restaurantName">Restaurant / Business Name *</label>
                    <input type="text" id="restaurantName" required placeholder="e.g. FoodVilla Restaurant">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="contactName">Your Name *</label>
                        <input type="text" id="contactName" required placeholder="e.g. Rahul Mehta">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" required placeholder="e.g. +91 98765 43210">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="e.g. rahul@foodvilla.com">
                </div>
                <div class="form-group">
                    <label for="businessType">Business Type</label>
                    <select id="businessType">
                        <option value="restaurant">Restaurant &amp; Cafe</option>
                        <option value="coffee">Coffee Shop</option>
                        <option value="hotel">Hotel &amp; Resort</option>
                        <option value="foodtruck">Food Truck</option>
                        <option value="foodcourt">Food Court</option>
                        <option value="cloudkitchen">Cloud Kitchen</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Submit Request <span class="arrow">&rarr;</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Video Demo Modal -->
    <div class="modal-overlay" id="videoModal" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
        <div class="modal-dialog modal-dialog-video">
            <button class="modal-close" id="videoModalCloseBtn" aria-label="Close video">&times;</button>
            <div class="modal-video-wrap">
                <h3 class="sr-only" id="videoModalTitle">Contactless QR Menu Demo Video</h3>
                <div class="video-simulation">
                    <div class="video-mock-screen">
                        <div class="video-play-pulse">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="video-play-icon">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <h4>Contactless Dining in Action</h4>
                        <p>Scan QR &bull; Browse Food Menu &bull; Order Instantly &bull; Boost Revenue</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Toast Notification -->
    <div class="qr-toast-notification" id="toastNotification">
        <div class="qr-toast-icon">✓</div>
        <div class="qr-toast-content">
            <div class="qr-toast-title" id="toastTitle">Added to Order!</div>
            <div class="qr-toast-body" id="toastBody">Grilled Paneer with Herbs added to your demo cart.</div>
        </div>
    </div>

    <?php include '../footer.php'; ?>
    <script src="QR.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>