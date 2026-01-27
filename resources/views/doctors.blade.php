@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
 
<section id="doctors-tabs" class="section">
  <div class="container">

    <div class="section-title text-center">
      <h2>Our Doctors</h2>
      <p>Experienced specialists providing trusted care</p>
    </div>

  <ul class="nav nav-pills doctor-tabs justify-content-center flex-wrap gap-3"
    id="doctorTab"
    role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link active doctor-tab"
            data-bs-toggle="pill"
            data-bs-target="#dr-puneet"
            type="button">
      <img src="assets/img/doctors/dr-puneet-bhalla.png" alt="Dr Puneet Bhalla">
      <div class="doctor-meta">
        <span class="doctor-name">Dr. Puneet Bhalla</span>
        <small class="doctor-dept">General Medicine</small>
      </div>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link doctor-tab"
            data-bs-toggle="pill"
            data-bs-target="#dr-rohit"
            type="button">
      <img src="assets/img/doctors/dr-rohit-chaturvedi.png" alt="Dr Rohit Chaturvedi">
      <div class="doctor-meta">
        <span class="doctor-name">Dr. Rohit Chaturvedi</span>
        <small class="doctor-dept">Orthopaedics</small>
      </div>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link doctor-tab"
            data-bs-toggle="pill"
            data-bs-target="#dr-prashant"
            type="button">
      <img src="assets/img/doctors/dr-prashant-kushwaha.png" alt="Dr Prashant Kushwaha">
      <div class="doctor-meta">
        <span class="doctor-name">Dr. Prashant Kushwaha</span>
        <small class="doctor-dept">Neurosurgery</small>
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
      <div class="tab-pane fade show active" id="dr-puneet">

        <div class="row align-items-center">
          <div class="col-lg-3 text-center">
            <img src="assets/img/doctors/dr-puneet-bhalla.png" class="img-fluid doctor-photo">
          </div>

          <div class="col-lg-9">
            <h2>Dr. Puneet Bhalla</h2>
            <h5 class="text-primary">MBBS, MD (Medicine), Diabetologist</h5>

            <p>
              Senior consultant with 15+ years of experience in treating
              lifestyle and chronic diseases with a holistic approach.
            </p>

            <ul class="doctor-points">
              <li>Diabetes (Type 1 & 2)</li>
              <li>Blood Pressure & Thyroid</li>
              <li>Cholesterol & Vitamin Deficiency</li>
              <li>Malaria, Dengue, Typhoid</li>
            </ul>

            <p><strong>OPD:</strong> Mon–Sat | 10AM–2PM & 6PM–9PM</p>

            <a href="https://wa.me/919754799646?text=Hello%20I%20would%20like%20to%20book%20an%20appointment" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>

      </div>

      <!-- Doctor 2 -->
      <div class="tab-pane fade" id="dr-rohit">

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

            <a href="https://wa.me/919754799646?text=Hello%20I%20would%20like%20to%20book%20an%20appointment" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>

      </div>

      <!-- Doctor 3 -->
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

            <a href="https://wa.me/919754799646?text=Hello%20I%20would%20like%20to%20book%20an%20appointment" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

@endsection