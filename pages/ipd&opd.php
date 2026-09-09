<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="IPD/OPD Management System for streamlined hospital operations." />
    <title>IPD/OPD Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="ipd&opd.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php include '../header.php'; ?>

    <main>
        <section class="hero">
            <div class="blob blob-a"></div>
            <div class="blob blob-b"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow reveal" style="transition-delay: 0.1s;"><i class="fa-solid fa-sparkles"></i>
                        SMART HOSPITAL
                        SOLUTION</span>
                    <h1 class="reveal" style="transition-delay: 0.2s;"><span>IPD/OPD Management</span><br />System</h1>
                    <p class="reveal" style="transition-delay: 0.3s;">
                        Simplify patient care with a unified IPD &amp; OPD management
                        system. From registration to discharge, manage everything in one
                        place with accuracy, speed and efficiency.
                    </p>
                    <div class="benefits reveal" style="transition-delay: 0.4s;">
                        <div>
                            <i class="fa-solid fa-stethoscope"></i><span>Faster<br />Patient Care</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-users"></i><span>Streamlined<br />Workflow</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-chart-column"></i><span>Better<br />Hospital Efficiency</span>
                        </div>
                    </div>
                    <div class="actions reveal" style="transition-delay: 0.5s;">
                        <a class="btn primary" href="#contact">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                        <a class="btn outline" href="#contact"><i class="fa-regular fa-calendar"></i> Request Demo</a>
                    </div>
                </div>

                <div class="hero-visual">
                    <img class="hero-main-img" src="../assets/ipo-opd-hero.png" alt="IPD OPD Management System">
                </div>
            </div>
        </section>

        <section class="management" id="services">
            <div class="container management-grid">
                <article class="manage-card opd">
                    <div class="manage-copy">
                        <span class="round-icon blue"><i class="fa-solid fa-stethoscope"></i></span>
                        <h2>OPD Management</h2>
                        <small>Efficient Outpatient Care</small>
                        <ul>
                            <li>Patient Registration &amp; Appointment</li>
                            <li>Doctor Consultation Management</li>
                            <li>Prescription &amp; Diagnosis</li>
                            <li>Lab &amp; Radiology Integration</li>
                            <li>Billing &amp; Payment Management</li>
                        </ul>
                        <a href="#features" class="small-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="manage-art">
                        <img src="../assets/opd.jpg" alt="OPD Doctor"
                            style="width: 200px; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
                    </div>
                </article>

                <article class="manage-card ipd">
                    <div class="manage-copy">
                        <span class="round-icon teal"><i class="fa-solid fa-bed"></i></span>
                        <h2>IPD Management</h2>
                        <small>Complete Inpatient Care</small>
                        <ul>
                            <li>Admission, Transfer &amp; Discharge</li>
                            <li>Bed &amp; Ward Management</li>
                            <li>Treatment &amp; Nurse Management</li>
                            <li>Medication &amp; Inventory Tracking</li>
                            <li>Discharge Summary &amp; Reports</li>
                        </ul>
                        <a href="#features" class="small-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="manage-art">
                        <img src="../assets/ipd.jpg" alt="IPD Management"
                            style="width: 200px; height: 200px; object-fit: contain; mix-blend-mode: multiply;">
                    </div>
                </article>
            </div>
        </section>

        <section class="stats" id="stats">
            <div class="container stats-grid">
                <div>
                    <i class="fa-solid fa-users"></i><strong><span class="counter"
                            data-target="10000">0</span>+</strong><span>Patients Managed</span>
                </div>
                <div>
                    <i class="fa-solid fa-bed"></i><strong><span class="counter"
                            data-target="500">0</span>+</strong><span>Beds Handled</span>
                </div>
                <div>
                    <i class="fa-solid fa-user-doctor"></i><strong><span class="counter"
                            data-target="100">0</span>+</strong><span>Doctors Using</span>
                </div>
                <div>
                    <i class="fa-solid fa-shield-halved"></i><strong><span class="counter" data-target="99.9"
                            data-decimal="true">0</span>%</strong><span>Uptime &amp; Security</span>
                </div>
            </div>
        </section>

        <section class="features section" id="features">
            <div class="container">
                <div class="section-title reveal">
                    <span class="kicker">KEY FEATURES</span>
                    <h2>Everything You Need for Smooth Hospital Operations</h2>
                    <p>
                        A comprehensive IPD/OPD management solution designed for modern
                        healthcare facilities.
                    </p>
                </div>
                <div class="feature-grid">
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-user-plus blue"></i>
                        <div>
                            <h3>Patient Registration</h3>
                            <p>Quick and easy registration process</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-calendar-days teal"></i>
                        <div>
                            <h3>Appointment Scheduling</h3>
                            <p>Manage appointments with ease</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-file-medical purple"></i>
                        <div>
                            <h3>EMR Integration</h3>
                            <p>Complete electronic medical records</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-indian-rupee-sign teal"></i>
                        <div>
                            <h3>Billing &amp; Invoicing</h3>
                            <p>Accurate and transparent billing</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-flask purple"></i>
                        <div>
                            <h3>Lab &amp; Radiology</h3>
                            <p>Integrated test management</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-pills orange"></i>
                        <div>
                            <h3>Pharmacy Management</h3>
                            <p>Track medicines and prescriptions</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-chart-simple cyan"></i>
                        <div>
                            <h3>Reports &amp; Analytics</h3>
                            <p>Real-time insights and reports</p>
                        </div>
                    </article>
                    <article class="feature-card reveal">
                        <i class="fa-solid fa-user-shield blue"></i>
                        <div>
                            <h3>Role-based Access</h3>
                            <p>Secure and controlled access for all users</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="cta" id="contact">
            <div class="container cta-grid">
                <div class="reveal">
                    <span class="kicker light">READY TO TRANSFORM YOUR HOSPITAL?</span>
                    <h2>Streamline Your IPD/OPD Operations Today</h2>
                    <p>
                        Join hundreds of healthcare facilities already using our system.
                    </p>
                    <div class="actions">
                        <a class="btn white" href="mailto:hello@example.com">Get Started <i
                                class="fa-solid fa-arrow-right"></i></a><a class="watch" href="#"><i
                                class="fa-solid fa-circle-play"></i> Watch Video</a>
                    </div>
                </div>
                <div class="ipo-opd-operaction reveal"><img src="../assets/IPD-OPD Operations.jpg"
                        alt="IPD-OPD Operations"></div>

            </div>
        </section>
    </main>
    <?php include '../footer.php'; ?>
    <script src="ipd&opd.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>