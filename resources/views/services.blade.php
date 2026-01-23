@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section-padding">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Healthcare Services</h2>
            <p>Providing advanced, patient-centered medical services across multiple specialties for your health and
                well-being.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <section id="featured-services" class="featured-services section-padding">

                    <!-- Section Title -->

                    {{-- <div class="container section-title text-center" data-aos="fade-up">
                        <h2>Comprehensive Healthcare Services</h2>
                        <p>
                            Trusted medical expertise, advanced technology, and compassionate care —
                            all under one roof at Medizone Multi-Speciality Hospital.
                        </p>
                    </div> --}}

                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-4 align-items-stretch">

                         
                            <!-- Main Featured Service -->
                            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                                <div class="featured-service-main h-100">
                                    <div class="service-image-wrapper">
                                        <img src="assets/img/service-1.avif" alt="Emergency & Critical Care"
                                            class="img-fluid" loading="lazy">
                                        <div class="service-overlay">
                                            <div class="service-badge">
                                                <i class="bi bi-heart-pulse"></i>
                                                <span>24/7 Emergency</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-details">
                                        <h2>Excellence in Every Aspect of Care</h2>
                                        <p>
                                            At Medizone Hospital, we deliver holistic healthcare through
                                            emergency services, advanced surgeries, diagnostics, and
                                            specialized treatments. Our experienced doctors, modern
                                            infrastructure, and patient-first approach ensure safe,
                                            effective, and compassionate care at every stage.
                                        </p>

                                        <div class="d-flex gap-3 mt-4">
                                            <a href="/services" class="btn btn-primary">
                                                View All Services
                                            </a>
                                            <a href="/contact" class="btn btn-outline-primary">
                                                Book Appointment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Services Sidebar -->
                            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                                <div class="services-sidebar">

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-bandaid"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>General Surgery</h4>
                                            <p>Safe and effective surgical procedures with modern techniques and expert
                                                post-operative care.</p>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-activity"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>Trauma & Critical Care</h4>
                                            <p>24/7 emergency response, ICU support, and rapid trauma management.</p>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>Orthopedics</h4>
                                            <p>Advanced treatment for bone, joint, spine, and sports-related injuries.</p>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-vial"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>Urology</h4>
                                            <p>Comprehensive care for kidney, bladder, and prostate conditions.</p>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-ear"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>ENT Services</h4>
                                            <p>Diagnosis and treatment for ear, nose, throat, hearing, and voice disorders.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="service-item">
                                        <div class="service-icon-wrapper">
                                            <i class="bi bi-person-walking"></i>
                                        </div>
                                        <div class="service-info">
                                            <h4>Physiotherapy</h4>
                                            <p>Personalized rehabilitation programs to restore strength, mobility, and
                                                confidence.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Additional Highlights -->
                        <div class="specialties-grid mt-5" data-aos="fade-up">
                            <div class="row g-4">

                                <div class="col-lg-3 col-md-6">
                                    <div class="specialty-card">
                                        <h5>Maternal Care</h5>
                                        <span>Safe pregnancy & delivery support</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="specialty-card">
                                        <h5>Vaccination</h5>
                                        <span>Complete immunization programs</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="specialty-card">
                                        <h5>Emergency Care</h5>
                                        <span>Round-the-clock medical support</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="specialty-card">
                                        <h5>Advanced Technology</h5>
                                        <span>Modern equipment & diagnostics</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                       

                    </div>
                </section>

            </div>

        </div>

    </section><!-- /Featured Services Section -->
@endsection
