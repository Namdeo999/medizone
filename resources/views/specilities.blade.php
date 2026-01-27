@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
  

<!-- Specialties Section -->
  <section id="featured-departments" class="featured-departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Specialties & Treatments</h2>
            <p>Explore our specialized medical departments and comprehensive treatment services.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">
                <!-- General Surgery -->
                <!-- General Surgery -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Surgical Excellence</span>
                            </div>

                            <h3>General Surgery Department</h3>

                            <p>
                                Comprehensive surgical care including advanced diagnostics, minimally invasive laparoscopic
                                procedures, and open surgeries performed by highly experienced surgeons using modern
                                operation theaters and safety protocols.
                            </p>

                            <div class="specialty-features">
                                <span>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Minimally Invasive & Laparoscopic Surgery
                                </span>
                                <span>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Advanced Post-Operative Care
                                </span>
                            </div>

                            {{-- <a href="/services" class="specialty-link">
                                View General Surgery Services <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>

                        <div class="specialty-visual">
                            <img src="assets/img/specialties/general-surgery.jpg" alt="General Surgery Department"
                                class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-hospital"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Specialty Card -->



                <!-- Trauma Care -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Critical Care</span>
                            </div>
                            <h3>Trauma Care</h3>
                            <p>
                                24/7 trauma and emergency care with rapid response teams, equipped with the latest
                                life-support
                                systems and ICU backup. Ensuring immediate and effective treatment for accidents and
                                emergencies.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Round-the-clock Emergency Care</span>
                                <span><i class="bi bi-check-circle-fill"></i>ICU & Critical Care Support</span>
                            </div>
                            {{-- <a href="#" class="specialty-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/trauma-care.jpg" alt="Trauma Care" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-activity"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orthopedics -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Musculoskeletal Care</span>
                            </div>
                            <h3>Orthopedics</h3>
                            <p>
                                Expert care for bone, joint, and muscle conditions including fractures, arthritis, and
                                sports injuries.
                                We also provide post-trauma rehabilitation and physiotherapy programs for complete recovery.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Joint Replacement & Arthroscopy</span>
                                <span><i class="bi bi-check-circle-fill"></i>Sports Injury Management</span>
                            </div>
                            {{-- <a href="#" class="specialty-link">
                                Learn More <i class="bi bi-arrow-right"></i>
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

                <!-- Urology -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Urological Care</span>
                            </div>
                            <h3>Urology</h3>
                            <p>
                                Advanced treatments for kidney stones, urinary infections, prostate disorders, and other
                                urological conditions.
                                We provide minimally invasive procedures with personalized patient care.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Kidney & Prostate Care</span>
                                <span><i class="bi bi-check-circle-fill"></i>Minimally Invasive Procedures</span>
                            </div>
                            {{-- <a href="#" class="specialty-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/urology.jpg" alt="Urology" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-vial"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ENT Services -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">ENT & Hearing</span>
                            </div>
                            <h3>ENT Services</h3>
                            <p>
                                Diagnosis and treatment of ear, nose, and throat conditions including sinus issues, hearing
                                loss,
                                and voice disorders. Our team ensures effective and safe ENT interventions.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Sinus & Hearing Treatments</span>
                                <span><i class="bi bi-check-circle-fill"></i>Advanced ENT Procedures</span>
                            </div>
                            {{-- <a href="#" class="specialty-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a> --}}
                        </div>
                        <div class="specialty-visual">
                            <img src="assets/img/specialties/ent.jpg" alt="ENT Services" class="img-fluid">
                            <div class="visual-overlay">
                                <i class="bi bi-ear"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Physiotherapy -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="specialty-card">
                        <div class="specialty-content">
                            <div class="specialty-meta">
                                <span class="specialty-label">Rehabilitation Care</span>
                            </div>
                            <h3>Physiotherapy</h3>
                            <p>
                                Personalized physiotherapy and rehabilitation programs designed to improve mobility,
                                strength,
                                and recovery after injury or surgery. Our expert physiotherapists ensure full functional
                                recovery.
                            </p>
                            <div class="specialty-features">
                                <span><i class="bi bi-check-circle-fill"></i>Post-Surgery Rehabilitation</span>
                                <span><i class="bi bi-check-circle-fill"></i>Mobility & Strength Programs</span>
                            </div>
                            {{-- <a href="#" class="specialty-link">
                                Learn More <i class="bi bi-arrow-right"></i>
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


    <!-- End Tab Based Specialties -->
@endsection
