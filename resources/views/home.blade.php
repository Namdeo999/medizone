@extends('layouts.app')
{{-- @section('page_title', 'Home') --}}

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">

                        <!-- Trust Badges -->
                        <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="badge-item">
                                <i class="bi bi-shield-check"></i>
                                <span>Trusted Healthcare</span>
                            </div>
                            <div class="badge-item">
                                <i class="bi bi-clock"></i>
                                <span>24/7 Emergency & Trauma</span>
                            </div>
                            <div class="badge-item">
                                <i class="bi bi-star-fill"></i>
                                <span>Patient-Centered Care</span>
                            </div>
                        </div>

                        <!-- Heading -->
                        <h1 data-aos="fade-right" data-aos-delay="300">
                            Advanced <span class="highlight">Multi-Speciality Healthcare</span><br>
                            With Compassion & Care
                        </h1>

                        <!-- Description -->
                        <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                            Medizone Multi-Speciality Hospital & Trauma Centre, Jabalpur, is committed to
                            delivering high-quality medical care with modern infrastructure, expert doctors,
                            and round-the-clock emergency services for patients of all age groups.
                        </p>

                        <!-- Stats -->
                        <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                            <div class="stat-item">
                                <h3>
                                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                                        class="purecounter"></span>+
                                </h3>
                                <p>Years of Excellence</p>
                            </div>
                            <div class="stat-item">
                                <h3>
                                    <span data-purecounter-start="0" data-purecounter-end="20000"
                                        data-purecounter-duration="2" class="purecounter"></span>+
                                </h3>
                                <p>Patients Treated</p>
                            </div>
                            <div class="stat-item">
                                <h3>
                                    <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="2"
                                        class="purecounter"></span>+
                                </h3>
                                <p>Specialist Doctors</p>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                            <a href="/contact" class="btn btn-primary">Book Appointment</a>
                            <a href="/services" class="btn btn-outline glightbox">
                                <i class="bi bi-play-circle me-2"></i>
                                Explore Our Services
                            </a>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                            <div class="emergency-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="emergency-info">
                                <small>Emergency Helpline</small>
                                <strong>0761 - 4070333, 9302789333</strong>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                        <div class="main-image">
                            <img src="assets/img/hero.jpg" alt="Medizone Multi-Speciality Hospital" class="img-fluid">

                            <div class="floating-card appointment-card">
                                <div class="card-icon">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="card-content">
                                    <h6>Quick Appointment</h6>
                                    <p>Same Day Available</p>
                                    <small>Expert Specialists</small>
                                </div>
                            </div>

                            <div class="floating-card rating-card">
                                <div class="card-content">
                                    <div class="rating-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <h6>Trusted Care</h6>
                                    <small>Thousands of Happy Patients</small>
                                </div>
                            </div>
                        </div>

                        <div class="background-elements">
                            <div class="element element-1"></div>
                            <div class="element element-2"></div>
                            <div class="element element-3"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- Home About Section -->
    <section id="home-about" class="home-about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-content">
                        <h2 class="section-heading">Trusted Healthcare with a Human Touch</h2>

                        <p class="lead-text">
                            At Medizone, we are committed to delivering compassionate, patient-focused healthcare supported
                            by modern
                            medical advancements and experienced professionals.
                        </p>

                        <p>
                            Our hospital brings together a multidisciplinary team of doctors, surgeons, and therapists who
                            work
                            collaboratively to provide accurate diagnosis, effective treatment, and complete recovery care.
                            Whether it
                            is routine consultation or advanced surgical intervention, we ensure safety, comfort, and
                            quality at every
                            step.
                        </p>

                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="15000"
                                    data-purecounter-duration="1"></div>
                                <div class="stat-label">Happy Patients</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="25"
                                    data-purecounter-duration="1"></div>
                                <div class="stat-label">Years of Experience</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="50"
                                    data-purecounter-duration="1"></div>
                                <div class="stat-label">Expert Doctors</div>
                            </div>
                        </div>

                        <div class="cta-section">
                            <a href="/about" class="btn-primary">Know More About Medizone</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-visual">
                        <div class="main-image">
                            <img src="assets/img/health/facilities-9.webp" alt="Medizone Hospital Facility"
                                class="img-fluid">
                        </div>

                        <div class="floating-card">
                            <div class="card-content">
                                <div class="icon">
                                    <i class="bi bi-heart-pulse"></i>
                                </div>
                                <div class="card-text">
                                    <h4>24×7 Emergency Services</h4>
                                    <p>Immediate care when every second matters</p>
                                </div>
                            </div>
                        </div>

                        <div class="experience-badge">
                            <div class="badge-content">
                                <span class="years">25+</span>
                                <span class="text">Years of Medical Excellence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- Featured Departments Section -->
    <section id="featured-departments" class="featured-departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Featured Departments</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Specialized Care</span>
                            </div>
                            <h3>Cardiovascular Medicine</h3>
                            <p>Advanced diagnostic imaging and interventional procedures for comprehensive heart health
                                management
                                with personalized treatment protocols.</p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>24/7 Emergency Cardiac Care</span>
                                <span><i class="bi bi-check-circle-fill"></i>Minimally Invasive Procedures</span>
                            </div>
                            <a href="department-details.html" class="specialty-link">
                                Explore Cardiology <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/health/cardiology-1.webp" alt="Cardiovascular Medicine"
                                class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-heart-pulse"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Specialty Card -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Expert Care</span>
                            </div>
                            <h3>Neurological Sciences</h3>
                            <p>Cutting-edge neuroimaging and neurosurgical expertise for complex brain and spinal cord
                                conditions
                                with innovative treatment approaches.</p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Advanced Brain Imaging</span>
                                <span><i class="bi bi-check-circle-fill"></i>Robotic Surgery</span>
                            </div>
                            <a href="department-details.html" class="specialty-link">
                                Explore Neurology <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/health/neurology-4.webp" alt="Neurological Sciences" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-cpu"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Specialty Card -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="bi bi-shield-plus"></i>
                        </div>
                        <h4>Orthopedic Surgery</h4>
                        <p>Comprehensive musculoskeletal care utilizing advanced arthroscopic techniques and joint
                            replacement
                            procedures.</p>
                        <ul class="highlight-list">
                            <li>Sports Medicine</li>
                            <li>Joint Replacement</li>
                            <li>Spine Surgery</li>
                        </ul>
                        <a href="department-details.html" class="highlight-cta">Learn More</a>
                    </div>
                </div><!-- End Department Highlight -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>Pediatric Care</h4>
                        <p>Child-centered healthcare services from newborn to adolescence with family-focused treatment
                            approaches.</p>
                        <ul class="highlight-list">
                            <li>Neonatal Intensive Care</li>
                            <li>Developmental Pediatrics</li>
                            <li>Pediatric Surgery</li>
                        </ul>
                        <a href="department-details.html" class="highlight-cta">Learn More</a>
                    </div>
                </div><!-- End Department Highlight -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="department-highlight">
                        <div class="highlight-icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h4>Cancer Treatment</h4>
                        <p>Multidisciplinary oncology program offering personalized cancer care with latest therapeutic
                            innovations.</p>
                        <ul class="highlight-list">
                            <li>Precision Medicine</li>
                            <li>Immunotherapy</li>
                            <li>Radiation Oncology</li>
                        </ul>
                        <a href="department-details.html" class="highlight-cta">Learn More</a>
                    </div>
                </div><!-- End Department Highlight -->

            </div>

            <div class="emergency-banner" data-aos="fade-up" data-aos-delay="400">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="emergency-content">
                            <h3>Emergency Services Available 24/7</h3>
                            <p>Our emergency department is equipped with state-of-the-art technology and staffed by
                                board-certified
                                emergency physicians ready to provide immediate care.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="tel:+15551234567" class="emergency-btn">
                            <i class="bi bi-telephone-fill"></i>
                            Call Emergency: (555) 123-4567
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Featured Departments Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Featured Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                    <div class="featured-service-main">
                        <div class="service-image-wrapper">
                            <img src="assets/img/health/consultation-4.webp" alt="Premier Healthcare Services"
                                class="img-fluid" loading="lazy">
                            <div class="service-overlay">
                                <div class="service-badge">
                                    <i class="bi bi-heart-pulse"></i>
                                    <span>Emergency Care</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-details">
                            <h2>Comprehensive Healthcare Excellence</h2>
                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in
                                faucibus
                                orci luctus et ultrices posuere cubilia curae donec velit neque.</p>
                            <a href="#!" class="main-cta">Explore Our Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                    <div class="services-sidebar">

                        <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-capsule"></i>
                            </div>
                            <div class="service-info">
                                <h4>Dermatology Clinic</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas.</p>
                                <a href="#!" class="service-link">Learn More</a>
                            </div>
                        </div>

                        <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-bandaid"></i>
                            </div>
                            <div class="service-info">
                                <h4>Surgery Center</h4>
                                <p>Donec rutrum congue leo eget malesuada curabitur arcu erat accumsan id imperdiet et
                                    porttitor at
                                    sem.</p>
                                <a href="#!" class="service-link">Learn More</a>
                            </div>
                        </div>

                        <div class="service-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div class="service-info">
                                <h4>Diagnostics Lab</h4>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui cras ultricies
                                    ligula sed
                                    magna.</p>
                                <a href="#!" class="service-link">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="specialties-grid" data-aos="fade-up" data-aos-delay="300">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/maternal-2.webp" alt="Maternal Care" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Maternal Care</h5>
                                <span>Expert pregnancy &amp; delivery support</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/vaccination-3.webp" alt="Vaccination" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Vaccination</h5>
                                <span>Complete immunization programs</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/emergency-1.webp" alt="Emergency Care" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Emergency Care</h5>
                                <span>24/7 critical care services</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/facilities-6.webp" alt="Advanced Tech" class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Advanced Technology</h5>
                                <span>State-of-the-art medical equipment</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- Find A Doctor Section -->
    <section id="find-a-doctor" class="find-a-doctor section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Find A Doctor</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-8 text-center">
                    <div class="search-section">
                        <h3 class="search-title">Find Your Perfect Healthcare Provider</h3>
                        <p class="search-subtitle">Search through our comprehensive directory of experienced medical
                            professionals
                        </p>
                        <form class="search-form" action="#!" method="#">
                            <div class="search-input-group">
                                <div class="input-wrapper">
                                    <i class="bi bi-person"></i>
                                    <input type="text" class="form-control" name="doctor_name"
                                        placeholder="Enter doctor name">
                                </div>
                                <div class="select-wrapper">
                                    <i class="bi bi-heart-pulse"></i>
                                    <select class="form-select" name="specialty">
                                        <option value="">All Specialties</option>
                                        <option value="cardiology">Cardiology</option>
                                        <option value="neurology">Neurology</option>
                                        <option value="orthopedics">Orthopedics</option>
                                        <option value="pediatrics">Pediatrics</option>
                                        <option value="dermatology">Dermatology</option>
                                        <option value="oncology">Oncology</option>
                                    </select>
                                </div>
                                <button type="submit" class="search-btn">
                                    <i class="bi bi-search"></i>
                                    Find Doctors
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="doctors-grid" data-aos="fade-up" data-aos-delay="300">

                <!-- Dr. Puneet Bhalla -->
                <div class="doctor-profile" data-aos="zoom-in">
                    <div class="profile-header">
                        <div class="doctor-avatar">
                            <img src="assets/img/doctors/dr-puneet-bhalla.png" alt="Dr. Puneet Bhalla" class="img-fluid">
                            <div class="status-indicator available"></div>
                        </div>
                        <div class="doctor-details">
                            <h4>Dr. Puneet Bhalla</h4>
                            <span class="specialty-tag">General Medicine & Diabetology</span>
                            <div class="experience-info">
                                <i class="bi bi-award"></i>
                                <span>15+ years experience</span>
                            </div>
                        </div>
                    </div>

                    <div class="rating-section">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <span class="rating-score">4.8</span>
                        <span class="review-count">(320+ patients)</span>
                    </div>

                    <div class="action-buttons">
                        <a href="/doctors#dr-puneet" class="btn-secondary">View Profile</a>
                        <a href="#!" class="btn-primary">Book Appointment</a>
                    </div>
                </div>

                <!-- Dr. Rohit Chaturvedi -->
                <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="150">
                    <div class="profile-header">
                        <div class="doctor-avatar">
                            <img src="assets/img/doctors/dr-rohit-chaturvedi.png" alt="Dr. Rohit Chaturvedi"
                                class="img-fluid">
                            <div class="status-indicator available"></div>
                        </div>
                        <div class="doctor-details">
                            <h4>Dr. Rohit Chaturvedi</h4>
                            <span class="specialty-tag">Orthopaedic Surgeon</span>
                            <div class="experience-info">
                                <i class="bi bi-award"></i>
                                <span>12+ years experience</span>
                            </div>
                        </div>
                    </div>

                    <div class="rating-section">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(280+ surgeries)</span>
                    </div>

                    <div class="action-buttons">
                        <a href="/doctors#dr-rohit" class="btn-secondary">View Profile</a>
                        <a href="#!" class="btn-primary">Consult Now</a>
                    </div>
                </div>

                <!-- Dr. Prashant Kushwaha -->
                <div class="doctor-profile" data-aos="zoom-in" data-aos-delay="300">
                    <div class="profile-header">
                        <div class="doctor-avatar">
                            <img src="assets/img/doctors/dr-prashant-kushwaha.png" alt="Dr. Prashant Kushwaha"
                                class="img-fluid">
                            <div class="status-indicator busy"></div>
                        </div>
                        <div class="doctor-details">
                            <h4>Dr. Prashant Kushwaha</h4>
                            <span class="specialty-tag">Neurosurgery & Neurology</span>
                            <div class="experience-info">
                                <i class="bi bi-award"></i>
                                <span>18+ years experience</span>
                            </div>
                        </div>
                    </div>

                    <div class="rating-section">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <span class="rating-score">4.9</span>
                        <span class="review-count">(400+ cases)</span>
                    </div>

                    <div class="action-buttons">
                        <a href="/doctors#dr-prashant" class="btn-secondary">View Profile</a>
                        <a href="#!" class="btn-primary">Book Consultation</a>
                    </div>
                </div>

            </div>


            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
                <a href="doctors.html" class="btn-view-all">
                    View All Doctors
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>

    </section><!-- /Find A Doctor Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="hero-content">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                            <h1>Excellence in Medical Care, Every Day</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                            <div class="cta-wrapper">
                                <a href="appointment.html" class="primary-cta">
                                    <span>Schedule Consultation</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="services.html" class="secondary-cta">
                                    <span>Explore Services</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                            <img src="assets/img/health/facilities-9.webp" alt="Medical Excellence" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>

            <div class="features-section">

                <div class="row g-0">

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3>Advanced Technology</h3>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est
                                laborum.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>24/7 Availability</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur
                                excepteur.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="feature-block" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3>Expert Team</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium
                                totam rem.</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="contact-block">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="contact-content" data-aos="fade-up" data-aos-delay="200">
                            <h2>Need Immediate Medical Assistance?</h2>
                            <p>Our emergency response team is available around the clock to provide immediate medical
                                support when
                                you need it most.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="contact-actions" data-aos="fade-up" data-aos-delay="300">
                            <a href="tel:5551234567" class="emergency-call">
                                <i class="bi bi-telephone"></i>
                                <span>(555) 123-4567</span>
                            </a>
                            <a href="contact.html" class="contact-link">Find Location</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->
@endsection
