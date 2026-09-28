@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="hero py-5">
        <div class="container py-4 py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <p class="eyebrow mb-3">Hello, I'm Shehani 👋</p>
                    <h1 class="hero-title">
                        I Build &amp; Develop<br>
                        <span class="text-gradient">Software Solutions</span>
                    </h1>
                    <p class="lead text-muted mt-3">
                        As an HNDIT undergraduate and web developer intern — with a passion for solving real problems through code.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-lg-start mt-4">
                        <a href="#projects" class="btn btn-brand btn-lg px-4">View My Work →</a>
                    </div>

                    <div class="mt-5">
                        <span class="section-label d-block mb-2">Tech Stack</span>
                        @foreach (['HTML', 'Python', 'Java', 'Kotlin', 'PHP', 'React / Next.js', 'Bootstrap', 'MySQL'] as $tech)
                            <span class="badge rounded-pill stack-pill me-1 mb-1 px-3 py-2">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5 d-flex justify-content-center">
                    <div class="photo-ring">
                        <div class="sd-avatar">SD</div>
                        <div class="float-badge"><span>&lt;/&gt;</span>Web<br>Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-3 text-center">
            @foreach ([
                ['🚀', '2+', 'Years of Experience'],
                ['💻', '8+', 'Languages & Tools'],
                ['🎓', 'HNDIT', 'Undergraduate, SLIATE'],
                ['✅', '100%', 'Availability — Immediate'],
            ] as [$icon, $value, $label])
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body">
                            <div class="icon-box">{{ $icon }}</div>
                            <h3 class="fw-bold text-brand mb-0">{{ $value }}</h3>
                            <small class="text-muted">{{ $label }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-4">
                <p class="section-label mb-1">What I Do</p>
                <h2 class="fw-bold">Where I Add Value</h2>
            </div>
            <div class="row g-4">
                @foreach ([
                    ['🌐', 'Web Development', 'Full stack web apps using Flask, Node.js, React and Next.js with clean, responsive UI.'],
                    ['📱', 'Mobile App Development', 'Native Android apps in Kotlin with clean, intuitive user interfaces.'],
                    ['🗄️', 'Desktop Applications', 'Java desktop tools for inventory, registration and record management.'],
                    ['🗃️', 'Database Design', 'Designing and managing relational and NoSQL databases with MySQL, SQLite and MongoDB.'],
                ] as [$icon, $title, $desc])
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100 card-hover">
                            <div class="card-body p-4">
                                <div class="icon-box mb-2">{{ $icon }}</div>
                                <h5 class="fw-bold">{{ $title }}</h5>
                                <p class="text-muted mb-0">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container py-5" id="projects">
        <div class="text-center mb-4">
            <p class="section-label mb-1">Recent Projects</p>
            <h2 class="fw-bold">Things I've Built</h2>
        </div>
        <div class="row g-4">
            @foreach ([
                ['🖼️', 'Portfolio Website', 'This personal portfolio — a fully responsive React and Vite site showcasing my projects, skills and background.', ['React', 'Vite', 'Node.js'], 'https://github.com/shehanidileka/my-portfolio'],
                ['🧑‍💼', 'Employee Directory — Crew Roster CRUD', 'A colorful, badge-style employee management system with full CRUD, live dashboard stats and charts, department filtering, and a real SQLite database.', ['Next.js', 'TypeScript', 'Tailwind CSS', 'SQLite'], 'https://github.com/shehanidileka/my-portfolio'],
                ['🛒', 'E-Commerce Store', 'A complete PHP online store with product browsing, cart and checkout, user login and registration, order history, invoice generation, and an admin panel.', ['PHP', 'MySQL', 'Bootstrap'], 'https://github.com/shehanidileka/my-portfolio'],
                ['✈️', 'AI Travel Recommendation System', 'Flask travel-planning platform with a destination recommender, booking, ratings and an admin dashboard.', ['Python', 'Flask', 'SQLite'], 'https://github.com/shehanidileka/AI-Travel-Recommendation-System'],
                ['📦', 'Smart Inventory System', 'Java desktop application for managing inventory operations, stock tracking and product records.', ['Java', 'NetBeans'], 'https://github.com/shehanidileka/Smart-Inventory-System'],
                ['🎓', 'Class Registration System', 'Java desktop application to manage student class registrations and enrollment records.', ['Java', 'NetBeans'], 'https://github.com/shehanidileka/Class-Registration-System'],
                ['📷', 'Scanner App', 'Native Android application for scanning and processing documents and codes.', ['Kotlin', 'Android Studio'], 'https://github.com/shehanidileka/Scanner_App'],
                ['📚', 'LMS App', 'Learning management Android app built solo, focused on organizing course content for students.', ['Kotlin', 'Android Studio'], 'https://github.com/shehanidileka'],
            ] as [$icon, $title, $desc, $tags, $link])
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 card-hover">
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="icon-box mb-2">{{ $icon }}</div>
                            <h5 class="fw-bold">{{ $title }}</h5>
                            <p class="text-muted">{{ $desc }}</p>
                            <div class="mt-auto">
                                <div class="mb-3 d-flex flex-wrap gap-1">
                                    @foreach ($tags as $tag)
                                        <span class="tag">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ $link }}" target="_blank" rel="noopener" class="fw-semibold text-brand text-decoration-none">Code →</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="bg-brand text-white text-center py-5">
        <div class="container">
            <h2 class="fw-bold">Let's Build Something Amazing</h2>
            <p class="lead mb-4">Have an idea or project in mind? I'm available for freelance and full-time roles.</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Start Your Next Project</a>
        </div>
    </section>

@endsection