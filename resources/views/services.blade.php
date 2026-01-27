@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
    <!-- Featured Services Section -->

    <section id="featured-services" class="featured-services section-padding">

        <!-- Section Title -->
        <div class="container section-title text-center" data-aos="fade-up">
            <h2 class="fw-bold">Our Healthcare Services</h2>
            <p class="text-muted">
                Advanced, patient-centered medical services delivered with expertise,
                compassion, and modern infrastructure.
            </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 align-items-stretch">
                <!-- Main Featured Service -->
                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="200">
                    <div class="featured-service-main h-100">

                        <div class="service-image-wrapper">
                            <img src="assets/img/service-1.avif" alt="Emergency & Critical Care" class="img-fluid"
                                loading="lazy">

                            <div class="service-overlay">
                                <div class="service-badge">
                                    <i class="bi bi-heart-pulse"></i>
                                    <span>24×7 Emergency & ICU</span>
                                </div>
                            </div>
                        </div>

                        <div class="service-details">
                            <span class="text-primary fw-semibold small">
                                Trusted Multi-Speciality Care
                            </span>

                            <h2 class="mt-2">Excellence in Every Aspect of Care</h2>

                            <p>
                                Medizone Multi-Speciality Hospital provides complete healthcare solutions —
                                from emergency response and critical care to advanced surgeries, diagnostics,
                                and rehabilitation. Our expert doctors, modern technology, and patient-first
                                approach ensure safe and effective treatment at every stage.
                            </p>

                            <div class="d-flex flex-wrap gap-3 mt-4">
                                {{-- <a href="/services" class="btn btn-primary">
                                    Explore All Services
                                </a> --}}
                                <a href="/contact" class="btn btn-outline-primary">
                                    Book Appointment
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <section id="featured-departments" class="featured-departments section">

                <!-- Page Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Our Medical Services</h2>
                    <p>
                        We offer comprehensive healthcare services across multiple specialties,
                        delivered by experienced doctors using advanced medical technology.
                    </p>
                </div>

                <div class="container">
                    <div class="row g-5">

                        <!-- Cardiology -->
                        <div class="col-lg-4" data-aos="zoom-in">
                            <div class="specialty-card">
                                <div class="specialty-content">
                                    <div class="specialty-meta">
                                        <span class="specialty-label">Specialized Care</span>
                                    </div>
                                    <h3>Cardiology Department</h3>
                                    <p>
                                        Our Cardiology Department provides complete heart care services including
                                        prevention, diagnosis, treatment, and rehabilitation of cardiovascular diseases.
                                        We are equipped with advanced cardiac labs and emergency response systems.
                                    </p>
                                    <div class="specialty-features">
                                        <span><i class="bi bi-check-circle-fill"></i>24/7 Cardiac Emergency Services</span>
                                        <span><i class="bi bi-check-circle-fill"></i>ECG, Echo, TMT & Holter
                                            Monitoring</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Angiography & Angioplasty</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Preventive & Lifestyle
                                            Cardiology</span>
                                    </div>
                                    {{-- <a href="/services/cardiology" class="specialty-link">
                                        View Cardiology Services <i class="bi bi-arrow-right"></i>
                                    </a> --}}
                                </div>
                                <div class="specialty-visual">
                                    <img src="assets/img/health/cardiology-1.webp" alt="Cardiology Department"
                                        class="img-fluid">
                                    <div class="visual-overlay">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- General Surgery -->
                        <div class="col-lg-4" data-aos="zoom-in">
                            <div class="specialty-card">
                                <div class="specialty-content">
                                    <div class="specialty-meta">
                                        <span class="specialty-label">Surgical Excellence</span>
                                    </div>
                                    <h3>General Surgery Department</h3>
                                    <p>
                                        The General Surgery Department offers a wide range of elective and emergency
                                        surgical procedures using minimally invasive and conventional techniques.
                                        Patient safety and fast recovery are our top priorities.
                                    </p>
                                    <div class="specialty-features">
                                        <span><i class="bi bi-check-circle-fill"></i>Laparoscopic & Open Surgeries</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Hernia, Appendix & Gallbladder
                                            Surgery</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Emergency & Trauma Surgeries</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Advanced Post-Operative Care</span>
                                    </div>
                                    {{-- <a href="/services/general-surgery" class="specialty-link">
                                        View Surgery Services <i class="bi bi-arrow-right"></i>
                                    </a> --}}
                                </div>
                                <div class="specialty-visual">
                                    <img src="assets/img/specialties/general-surgery.jpg" alt="General Surgery"
                                        class="img-fluid">
                                    <div class="visual-overlay">
                                        <i class="bi bi-hospital"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Orthopedics -->
                        <div class="col-lg-4" data-aos="zoom-in">
                            <div class="specialty-card">
                                <div class="specialty-content">
                                    <div class="specialty-meta">
                                        <span class="specialty-label">Bone & Joint Care</span>
                                    </div>
                                    <h3>Orthopedics Department</h3>
                                    <p>
                                        We provide comprehensive orthopedic care for bone, joint, muscle,
                                        and spine-related conditions including trauma, arthritis, and sports injuries.
                                    </p>
                                    <div class="specialty-features">
                                        <span><i class="bi bi-check-circle-fill"></i>Joint Replacement Surgery</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Fracture & Trauma Management</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Arthroscopy & Sports Injuries</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Post-Surgery Rehabilitation</span>
                                    </div>
                                    {{-- <a href="/services/orthopedics" class="specialty-link">
                                        View Orthopedic Services <i class="bi bi-arrow-right"></i>
                                    </a> --}}
                                </div>
                                <div class="specialty-visual">
                                    <img src="assets/img/specialties/orthopedics.jpg" alt="Orthopedics" class="img-fluid">
                                    <div class="visual-overlay">
                                        <i class="bi bi-bandaid"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency & Trauma -->
                        <div class="col-lg-4" data-aos="zoom-in">
                            <div class="specialty-card">
                                <div class="specialty-content">
                                    <div class="specialty-meta">
                                        <span class="specialty-label">Critical Care</span>
                                    </div>
                                    <h3>Emergency & Trauma Care</h3>
                                    <p>
                                        Our Emergency Department operates 24/7 with fully equipped trauma bays,
                                        ICU support, and trained emergency physicians for immediate critical care.
                                    </p>
                                    <div class="specialty-features">
                                        <span><i class="bi bi-check-circle-fill"></i>24/7 Emergency Services</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Advanced Life Support Ambulance</span>
                                        <span><i class="bi bi-check-circle-fill"></i>ICU & Ventilator Support</span>
                                        <span><i class="bi bi-check-circle-fill"></i>Rapid Trauma Response Team</span>
                                    </div>
                                    {{-- <a href="/services/emergency" class="specialty-link">
                                        View Emergency Services <i class="bi bi-arrow-right"></i>
                                    </a> --}}
                                </div>
                                <div class="specialty-visual">
                                    <img src="assets/img/specialties/trauma-care.jpg" alt="Emergency Care"
                                        class="img-fluid">
                                    <div class="visual-overlay">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
 <!-- Neurology -->
                <div class="col-lg-4" data-aos="zoom-in">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Brain & Nerve Care</span>
                            </div>
                            <h3>Neurology Department</h3>
                            <p>
                                Comprehensive diagnosis and treatment of neurological disorders involving
                                the brain, spine, and nervous system using advanced neuro-diagnostic facilities.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Stroke & Epilepsy Care</span>
                                <span><i class="bi bi-check-circle-fill"></i>Migraine & Headache Treatment</span>
                                <span><i class="bi bi-check-circle-fill"></i>EEG, EMG & NCV Tests</span>
                                <span><i class="bi bi-check-circle-fill"></i>Neuro-Rehabilitation</span>
                            </div>
                            {{-- <a href="/services/neurology" class="specialty-link">
                                View Neurology Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/neurology.jpg" alt="Neurology" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-brain"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pediatrics -->
                <div class="col-lg-4" data-aos="zoom-in">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Child Care</span>
                            </div>
                            <h3>Pediatrics Department</h3>
                            <p>
                                Dedicated healthcare services for infants, children, and adolescents,
                                focusing on growth, development, immunization, and childhood illnesses.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Newborn & Infant Care</span>
                                <span><i class="bi bi-check-circle-fill"></i>Vaccination & Immunization</span>
                                <span><i class="bi bi-check-circle-fill"></i>Nutrition & Growth Monitoring</span>
                                <span><i class="bi bi-check-circle-fill"></i>Pediatric Emergency Care</span>
                            </div>
                            {{-- <a href="/services/pediatrics" class="specialty-link">
                                View Pediatric Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/pediatrics.jpg" alt="Pediatrics" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-emoji-smile"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Urology -->
                <div class="col-lg-4" data-aos="zoom-in">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Urological Care</span>
                            </div>
                            <h3>Urology Department</h3>
                            <p>
                                Advanced urological care for kidney, bladder, prostate, and urinary tract
                                conditions using minimally invasive and laser-based procedures.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Kidney Stone Treatment</span>
                                <span><i class="bi bi-check-circle-fill"></i>Prostate Disorders</span>
                                <span><i class="bi bi-check-circle-fill"></i>Urinary Tract Infections</span>
                                <span><i class="bi bi-check-circle-fill"></i>Endoscopic Procedures</span>
                            </div>
                            {{-- <a href="/services/urology" class="specialty-link">
                                View Urology Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/urology.jpg" alt="Urology" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-droplet-half"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ENT -->
                <div class="col-lg-4" data-aos="zoom-in">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">ENT & Hearing</span>
                            </div>
                            <h3>ENT Department</h3>
                            <p>
                                Diagnosis and treatment of ear, nose, and throat disorders including
                                sinus problems, hearing loss, voice disorders, and allergies.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Sinus & Allergy Treatment</span>
                                <span><i class="bi bi-check-circle-fill"></i>Hearing Evaluation</span>
                                <span><i class="bi bi-check-circle-fill"></i>Endoscopic ENT Surgery</span>
                                <span><i class="bi bi-check-circle-fill"></i>Voice & Speech Care</span>
                            </div>
                            {{-- <a href="/services/ent" class="specialty-link">
                                View ENT Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/ent.jpg" alt="ENT" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-ear"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Physiotherapy -->
                <div class="col-lg-4" data-aos="zoom-in">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Rehabilitation Care</span>
                            </div>
                            <h3>Physiotherapy & Rehabilitation</h3>
                            <p>
                                Personalized physiotherapy programs designed to restore movement,
                                strength, and function after surgery, injury, or chronic conditions.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Post-Surgery Rehabilitation</span>
                                <span><i class="bi bi-check-circle-fill"></i>Sports Injury Recovery</span>
                                <span><i class="bi bi-check-circle-fill"></i>Pain Management Therapy</span>
                                <span><i class="bi bi-check-circle-fill"></i>Mobility & Strength Training</span>
                            </div>
                            {{-- <a href="/services/physiotherapy" class="specialty-link">
                                View Physiotherapy Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/physiotherapy.jpg" alt="Physiotherapy" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-person-walking"></i>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
               

            </section>


            <!-- Additional Highlights -->
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
                                <span>Safe pregnancy, delivery & postnatal care</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/vaccination-3.webp" alt="Vaccination Services"
                                    class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Vaccination</h5>
                                <span>Complete immunization for all age groups</span>
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
                                <span>Round-the-clock critical medical support</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="specialty-card">
                            <div class="specialty-image">
                                <img src="assets/img/health/facilities-6.webp" alt="Advanced Medical Technology"
                                    class="img-fluid" loading="lazy">
                            </div>
                            <div class="specialty-content">
                                <h5>Advanced Technology</h5>
                                <span>Modern equipment for precise diagnosis & care</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
@endsection
