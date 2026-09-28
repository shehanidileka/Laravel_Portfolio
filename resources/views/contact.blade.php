@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <section class="container py-5">
        <div class="text-center mb-5">
            <p class="section-label mb-1">Let's Build Something Amazing</p>
            <h1 class="fw-bold">Start Your Next Project</h1>
            <p class="lead text-muted mx-auto" style="max-width: 640px;">
                Have an idea, project, or feature request? Drop me a line! I'm available for freelance jobs,
                full-time roles, and technical consultations.
            </p>
        </div>

        {{-- Contact cards (side by side) --}}
        <div class="row g-4 justify-content-center">
            @foreach ([
                ['📞', 'Call Me', '075 377 9823'],
                ['✉️', 'Email Me', 'shehanidileka264@gmail.com'],
                ['📍', 'Find Me', 'Uva Province, Monaragala'],
            ] as [$icon, $title, $value])
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 card-hover text-center">
                        <div class="card-body p-4">
                            <div class="icon-box mb-2">{{ $icon }}</div>
                            <h6 class="fw-bold mb-1">{{ $title }}</h6>
                            <span class="text-muted text-break">{{ $value }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Contact form --}}
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-center mb-4">Send Me a Message</h4>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can I help?" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-brand btn-lg w-100">Send Message</button>
                            <p class="text-muted small text-center mt-3 mb-0">This opens your email app with the message pre-filled.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            const subject = encodeURIComponent('Portfolio message from ' + name);
            const body = encodeURIComponent(message + '\n\nFrom: ' + name + ' (' + email + ')');
            window.location.href = 'mailto:shehanidileka264@gmail.com?subject=' + subject + '&body=' + body;
        });
    </script>
@endsection