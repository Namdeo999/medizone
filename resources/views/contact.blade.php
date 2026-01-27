@extends('layouts.app')
{{-- @section('page_title', 'contact') --}}

@section('content')
    < <!-- Start Contact Us -->
        <section class="contact-us section">
            <div class="container">

                <div class="row align-items-center gy-5">

                    <!-- Map Section -->

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-us-left">
                            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.4435699789137!2d79.91009677531886!3d23.19050007905644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981b1f4aa307365%3A0x7d740acecde81328!2sMedizone%20Multi-Speciality%20Hospital%20%26%20Trauma%20Centre!5e0!3m2!1sen!2sin!4v1769111279257"
                                    style="border:0;" allowfullscreen loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Form Section -->

                    <div class="col-lg-6 col-md-12">
                        <div class="contact-us-form p-4 p-lg-5 shadow-sm rounded">
                            <h2 class="mb-2">Contact With Us</h2>
                            <p class="text-muted mb-4">
                                If you have any questions, please feel free to contact us.
                            </p>


                            <form method="post" action="mail/mail.php" id="whatsappForm">
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required>
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">
                                            Send Message
                                        </button>
                                    </div>

                                    {{-- <div class="col-12">
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" id="newsletter">
                                            <label class="form-check-label small" for="newsletter">
                                                Subscribe to our Newsletter
                                            </label>
                                        </div>
                                    </div> --}}

                                </div>
                            </form>

                            {{-- script --}}

                            <script>
                                document.getElementById("whatsappForm").addEventListener("submit", function(e) {
                                    e.preventDefault(); // form submit stop

                                    let name = document.querySelector('[name="name"]').value;
                                    let email = document.querySelector('[name="email"]').value;
                                    let phone = document.querySelector('[name="phone"]').value;
                                    let subject = document.querySelector('[name="subject"]').value;
                                    let message = document.querySelector('[name="message"]').value;

                                    let whatsappNumber = "919754799646"; // country code ke saath

                                   let whatsappMessage =
`🌟 *New Enquiry Received* 🌟%0A%0A
👤 *Name:* ${name}%0A
📧 *Email:* ${email}%0A
📞 *Phone:* ${phone}%0A
📌 *Subject:* ${subject}%0A%0A
💬 *Message:*%0A${message}%0A%0A
🙏 Thank you for reaching out! Looking forward to your response.`;


                                    let whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

                                    window.open(whatsappURL, "_blank");
                                });
                            </script>


                        </div>


                    </div>

                </div>

                <div class="contact-info">
                    <div class="row">
                        <!-- single-info -->
                        <div class="col-lg-4 col-12 ">
                            <div class="single-info">
                                <i class="icofont icofont-ui-call"></i>
                                <div class="content">
                                    <h3> 0761 - 4070333, 9302789333</h3>
                                    <p>medizonehospitaljbp@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!--/End single-info -->
                        <!-- single-info -->
                        <div class="col-lg-4 col-12 ">
                            <div class="single-info">
                                <i class="icofont-google-map"></i>
                                <div class="content">
                                    <h3>3036, Near SBI Chowk, behind PF Office,</h3>
                                    <p>Vijay Nagar, Jabalpur, Madhya Pradesh - 482002</p>

                                </div>
                            </div>
                        </div>
                        <!--/End single-info -->
                        <!-- single-info -->
                        <div class="col-lg-4 col-12 ">
                            <div class="single-info">
                                <i class="icofont icofont-wall-clock"></i>
                                <div class="content">
                                    <h3>Mon - Sat: 8am - 5pm</h3>
                                    <p>Sunday Closed</p>
                                </div>
                            </div>
                        </div>
                        <!--/End single-info -->
                    </div>
                </div>
            </div>
        </section>
    @endsection
