@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <p class="section-label mb-1">About Me</p>
                <h1 class="fw-bold">Web Developer Intern &amp; HNDIT Undergraduate</h1>
                <p class="lead text-muted mt-3">
                    I'm G.W.S.D. Shehani De Silva, a dedicated and motivated HNDIT undergraduate currently pursuing my
                    diploma at SLIATE, with a strong passion for software engineering and modern web technologies.
                    I build clean backend systems, mobile apps, and interactive desktop applications — and I'm always
                    looking to grow as a developer.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Quick Info</h5>
                        @foreach ([
                            'Role' => 'Web Developer | Intern',
                            'Education' => 'HNDIT — SLIATE',
                            'Location' => 'Monaragala, Sri Lanka',
                            'Email' => 'shehanidileka264@gmail.com',
                            'Phone' => '075 377 9823',
                            'Status' => 'Available Immediately',
                        ] as $label => $value)
                            <div class="d-flex justify-content-between gap-3 border-bottom py-2">
                                <span class="text-muted">{{ $label }}</span>
                                <span class="fw-semibold text-end text-break">{{ $value }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-4">
                <p class="section-label mb-1">My Values</p>
                <h2 class="fw-bold">What I Stand For</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['🤝', 'Integrity', 'Honest communication, clear expectations and deadlines I can keep.'],
                    ['🌱', 'Growth', 'Always learning new tools, frameworks and better engineering practices.'],
                ] as [$icon, $title, $desc])
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="card border-0 shadow-sm h-100 card-hover text-center">
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

    @php
        $frontend = [
            'JavaScript' => 70, 'React / Next.js' => 65, 'HTML / CSS' => 85,
            'Bootstrap' => 75, 'Kotlin' => 85,
        ];
        $backend = [
            'Java' => 90, 'PHP' => 50, 'Python' => 50, 'Node.js' => 60,
            'MongoDB' => 55, 'MySQL' => 78, 'SQLite' => 70,
        ];
    @endphp

    <section class="container py-5" id="skills">
        <div class="text-center mb-4">
            <p class="section-label mb-1">My Capabilities</p>
            <h2 class="fw-bold">My Technical Expertise</h2>
        </div>
        <div class="row g-4">
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Frontend Skills</h5>
                        <div style="position: relative; height: {{ count($frontend) * 46 + 60 }}px;">
                            <canvas id="frontendChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Backend &amp; Database Skills</h5>
                        <div style="position: relative; height: {{ count($backend) * 46 + 60 }}px;">
                            <canvas id="backendChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5" id="education">
        <div class="container">
            <div class="text-center mb-4">
                <p class="section-label mb-1">Education &amp; Certifications</p>
                <h2 class="fw-bold">Academic Background</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['🎓', 'Higher National Diploma in Information Technology (HNDIT) — Currently Pursuing', 'SLIATE, Sri Lanka Institute of Advanced Technological Education'],
                    ['📘', 'G.C.E. Advanced Level — Arts Stream', 'Nissanka Central College · Pass'],
                    ['🏅', 'Certificate Courses — ICT & English', 'SIBA Campus, plus a Diploma in Tamil Language'],
                ] as [$icon, $title, $sub])
                    <div class="col-12 col-lg-10">
                        <div class="card border-0 shadow-sm card-hover">
                            <div class="card-body d-flex align-items-start gap-3 p-4">
                                <div class="icon-box">{{ $icon }}</div>
                                <div>
                                    <h5 class="fw-bold mb-1">{{ $title }}</h5>
                                    <p class="text-muted mb-0">{{ $sub }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <script>
        Chart.defaults.color = '#9ca3af';
        Chart.defaults.font.family = "'Segoe UI', system-ui, sans-serif";

        function skillChart(canvasId, labels, values) {
            new Chart(document.getElementById(canvasId), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        data: values,
                        borderRadius: 8,
                        barThickness: 18,
                        backgroundColor: function (context) {
                            const chart = context.chart;
                            const area = chart.chartArea;
                            if (!area) return '#ff3b30';
                            const g = chart.ctx.createLinearGradient(area.left, 0, area.right, 0);
                            g.addColorStop(0, '#ff3b30');
                            g.addColorStop(1, '#ff8a3d');
                            return g;
                        }
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: { duration: 1200, easing: 'easeOutQuart' },
                    scales: {
                        x: {
                            min: 0,
                            max: 100,
                            grid: { color: '#232323' },
                            ticks: { callback: v => v + '%' }
                        },
                        y: {
                            grid: { display: false },
                            ticks: { color: '#e5e5e5', font: { weight: '600' } }
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: '#111',
                            borderColor: '#ff3b30',
                            borderWidth: 1,
                            callbacks: { label: c => ' ' + c.parsed.x + '%' }
                        }
                    }
                }
            });
        }

        skillChart('frontendChart', @json(array_keys($frontend)), @json(array_values($frontend)));
        skillChart('backendChart', @json(array_keys($backend)), @json(array_values($backend)));
    </script>

@endsection