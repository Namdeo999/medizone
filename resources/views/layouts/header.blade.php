<div class="topbar d-flex align-items-center dark-background">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">medizonehospitaljbp@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>0761 - 4070333, 9302789333</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</div><!-- End Top Bar -->

<div class="branding d-flex align-items-cente">

    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.webp" alt=""> -->
            <h1 class="sitename"> <span class="text-primary">Medi</span>zone</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('doctors') }}"
                        class="{{ request()->routeIs('doctors') ? 'active' : '' }}">
                        Doctors
                    </a>
                </li>

                <li>
                    <a href="{{ route('specilities') }}"
                        class="{{ request()->routeIs('specilities') ? 'active' : '' }}">
                        Specilities
                    </a>
                </li>

                <li>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">
                        Services
                    </a>
                </li>
                 <li>
                    <a href="{{ route('facilities') }}" class="{{ request()->routeIs('facilities') ? 'active' : '' }}">
                        Facilities
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </li>
            </ul>


            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>

</div>
