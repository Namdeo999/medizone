@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
    <section id="doctors-tabs" class="section">
        <div class="container">

            <div class="section-title text-center">
                <h2>Our Doctors</h2>
                <p>Experienced specialists providing trusted care</p>
            </div>

            <ul class="nav nav-pills doctor-tabs justify-content-center flex-wrap gap-3" id="doctorTab" role="tablist">


                <li class="nav-item" role="presentation">
                    <button class="nav-link doctor-tab show active" data-bs-toggle="pill" data-bs-target="#dr-rohit"
                        type="button">
                        <img src="assets/img/doctors/dr-rohit-chaturvedi.png" alt="Dr Rohit Chaturvedi">
                        <div class="doctor-meta">
                            <span class="doctor-name">Dr. Rohit Chaturvedi</span>
                            <small class="doctor-dept">Orthopaedics</small>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link doctor-tab" data-bs-toggle="pill" data-bs-target="#dr-chandan" type="button"
                        role="tab" aria-selected="false">

                        <img src="assets/img/doctors/dr-chandan-kushwaha.png" alt="Dr Chandan Kushwaha">

                        <div class="doctor-meta">
                            <span class="doctor-name">Dr. Chandan Kushwaha</span>
                            <small class="doctor-dept">Medicine</small>
                        </div>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link doctor-tab" data-bs-toggle="pill" data-bs-target="#dr-prashant" type="button">
                        <img src="assets/img/doctors/dr-prashant-kushwaha.png" alt="Dr Prashant Kushwaha">
                        <div class="doctor-meta">
                            <span class="doctor-name">Dr. Prashant Kushwaha</span>
                            <small class="doctor-dept">Neurosurgery</small>
                        </div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link doctor-tab" data-bs-toggle="pill" data-bs-target="#dr-sakshi" type="button">
                        <img src="assets/img/doctors/dr-sakshi-mishra.png" alt="Dr. Sakshi Mishra">
                        <div class="doctor-meta">
                            <span class="doctor-name">Dr. Sakshi Mishra</span>
                            <small class="doctor-dept">OBS & Gynaecology</small>
                        </div>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link doctor-tab" data-bs-toggle="pill" data-bs-target="#dr-sudin" type="button"
                        role="tab" aria-selected="false">

                        <img src="assets/img/doctors/dr-sudin-nag.png" alt="Dr Sudin Nag">

                        <div class="doctor-meta">
                            <span class="doctor-name">Dr. Sudin Nag</span>
                            <small class="doctor-dept">General Surgery</small>
                        </div>
                    </button>
                </li>

            </ul>


        </div>
    </section>

    <section id="doctor-details" class="section bg-light">
        <div class="container">
            <div class="tab-content" id="doctorTabContent">
                <!-- Doctor 1 -->
                <div class="tab-pane fade show active" id="dr-rohit">

                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center">
                            <img src="assets/img/doctors/dr-rohit-chaturvedi.png" class="img-fluid doctor-photo">
                        </div>

                        <div class="col-lg-9">
                            <h2>Dr. Rohit Chaturvedi</h2>
                            <h5 class="text-primary">MBBS, MS (Orthopaedic Surgeon)</h5>

                            <p>
                                Expert orthopaedic surgeon specializing in joint replacement
                                and spine-related disorders.
                            </p>

                            <ul class="doctor-points">
                                <li>Joint, Knee & Hip Pain</li>
                                <li>Slip Disc & Sciatica</li>
                                <li>Arthritis & Osteoporosis</li>
                                <li>Joint Replacement Surgery</li>
                            </ul>

                            <p><strong>OPD:</strong> Mon–Sat | 11AM–4PM</p>

                            <a href="https://wa.me/917617617080?text=Hello%20I%20would%20like%20to%20book%20an%20appointment"
                                class="btn btn-primary">Book Appointment</a>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="dr-chandan" role="tabpanel">

                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center">
                            <img src="assets/img/doctors/dr-chandan-kushwaha.png" class="img-fluid doctor-photo"
                                alt="Dr. Chandan Kushwaha">
                        </div>

                        <div class="col-lg-9">
                            <h2>Dr. Chandan Kushwaha</h2>
                            <h5 class="text-primary">MBBS, MD (Medicine)</h5>

                            <p>
                                Experienced physician specializing in diagnosis and treatment
                                of chronic and acute medical conditions.
                            </p>

                            <ul class="doctor-points">
                                <li>Diabetes & Hypertension</li>
                                <li>Fever, Infection & Viral Diseases</li>
                                <li>Thyroid & Lifestyle Disorders</li>
                                <li>General Internal Medicine</li>
                            </ul>

                            <p><strong>OPD:</strong> Mon–Sat | 10AM–2PM</p>

                            <a href="https://wa.me/917617617080?text=Hello%20I%20would%20like%20to%20book%20an%20appointment%20with%20Dr.%20Chandan"
                                class="btn btn-primary">
                                Book Appointment
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Doctor 2 -->
                <div class="tab-pane fade" id="dr-prashant">

                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center">
                            <img src="assets/img/doctors/dr-prashant-kushwaha.png" class="img-fluid doctor-photo">
                        </div>

                        <div class="col-lg-9">
                            <h2>Dr. Prashant Kushwaha</h2>
                            <h5 class="text-primary">MBBS, MS, MCH (Neurosurgeon)</h5>

                            <p>
                                Specialized in brain and spine surgeries with advanced
                                neurovascular expertise.
                            </p>

                            <ul class="doctor-points">
                                <li>Brain & Spine Surgery</li>
                                <li>Stroke & Paralysis</li>
                                <li>Slip Disc & Migraine</li>
                                <li>Spinal Cord Injury</li>
                            </ul>

                            <p><strong>OPD:</strong> Mon–Sat | 12PM–5PM</p>

                            <a href="https://wa.me/917617617080?text=Hello%20I%20would%20like%20to%20book%20an%20appointment"
                                class="btn btn-primary">Book Appointment</a>
                        </div>
                    </div>

                </div>
                <!-- Doctor 3 -->
                <div class="tab-pane fade" id="dr-sakshi">

                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center">
                            <img src="assets/img/doctors/dr-sakshi-mishra.png" class="img-fluid doctor-photo"
                                alt="Dr. Sakshi Mishra">
                        </div>

                        <div class="col-lg-9">
                            <h2>Dr. Sakshi Mishra</h2>
                            <h5 class="text-primary">MBBS, MS (OBS & Gynaec)</h5>

                            <p>
                                Experienced Obstetrician & Gynecologist specializing in comprehensive
                                women’s health, pregnancy care, and reproductive medicine.
                            </p>

                            <ul class="doctor-points">
                                <li>PCOD/PCOS & Menstrual Irregularities</li>
                                <li>Pregnancy Care & Delivery (Normal/Cesarean)</li>
                                <li>Infertility & Reproductive Health</li>
                                <li>Menopause Management</li>
                            </ul>

                            <p><strong>OPD:</strong> Mon–Sat | 10AM–3PM</p>

                            <a href="https://wa.me/917617617080?text=Hello%20I%20would%20like%20to%20book%20an%20appointment%20with%20Dr.%20Sakshi"
                                class="btn btn-primary">Book Appointment</a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="dr-sudin" role="tabpanel">

                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center">
                            <img src="assets/img/doctors/dr-sudin-nag.png" class="img-fluid doctor-photo"
                                alt="Dr. Sudin Nag">
                        </div>

                        <div class="col-lg-9">
                            <h2>Dr. Sudin Nag</h2>
                            <h5 class="text-primary">
                                MBBS, MS (General & Laparoscopic Surgeon)
                            </h5>

                            <p>
                                Experienced general and laparoscopic surgeon specializing in
                                minimally invasive procedures with safe and effective outcomes.
                            </p>

                            <ul class="doctor-points">
                                <li>Laparoscopic (Keyhole) Surgery</li>
                                <li>Gallbladder & Appendix Surgery</li>
                                <li>Hernia Treatment</li>
                                <li>General Surgical Procedures</li>
                            </ul>

                            <p><strong>OPD:</strong> Mon–Sat | 11AM–3PM</p>

                            <a href="https://wa.me/917617617080?text=Hello%20I%20would%20like%20to%20book%20an%20appointment%20with%20Dr.%20Sudin"
                                class="btn btn-primary">
                                Book Appointment
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <script>
        document.addEventListener('shown.bs.tab', function(event) {

            // Only on mobile
            if (window.innerWidth <= 768) {
                const detailsSection = document.getElementById('doctor-details');
                if (detailsSection) {
                    detailsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }

        });
    </script>
@endsection
