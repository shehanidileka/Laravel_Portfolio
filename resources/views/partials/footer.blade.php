<footer class="text-light pt-5 pb-3 mt-5" style="background:#050505; border-top:1px solid #232323;">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <a class="d-flex align-items-center gap-2 fw-bold text-uppercase text-white text-decoration-none mb-3" href="{{ route('home') }}">
                    <span class="logo-badge">SD</span> Shehani De Silva
                </a>
                <p class="text-secondary">As an HNDIT undergraduate and web developer intern</p>
            </div>
            <div class="col-6 col-md-2">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('home') }}" class="text-secondary text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-secondary text-decoration-none">About</a></li>
                    <li><a href="{{ route('contact') }}" class="text-secondary text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h6 class="fw-bold">Technologies</h6>
                <ul class="list-unstyled text-secondary mb-0">
                    <li>Java / Kotlin</li>
                    <li>React / Next.js</li>
                    <li>MySQL / SQLite</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h6 class="fw-bold">Contact Info</h6>
                <ul class="list-unstyled text-secondary mb-0">
                    <li>📞 075 377 9823 / 070 420 1423</li>
                    <li class="text-break">✉️ shehanidileka264@gmail.com</li>
                    <li>📍 Wegarathanna, Meegahayaya, Badalkumbura</li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-center text-secondary small mb-0">&copy; {{ date('Y') }} Shehani De Silva. All Rights Reserved.</p>
    </div>
</footer>