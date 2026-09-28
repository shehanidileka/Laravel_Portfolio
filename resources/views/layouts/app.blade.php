<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') | Shehani De Silva</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='22' fill='%23ff3b30'/><text x='50' y='68' font-size='52' font-weight='bold' font-family='Arial' fill='white' text-anchor='middle'>SD</text></svg>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <style>
        :root { --brand: #ff3b30; --brand2: #ff8a3d; --bg: #0a0a0a; --card: #121212; --line: #232323; }
        html { scroll-behavior: smooth; }
        body { background: var(--bg); color: #e5e5e5; font-family: 'Segoe UI', system-ui, sans-serif; }
        [id] { scroll-margin-top: 90px; }

        .bg-light { background: #0f0f10 !important; }
        .card { background: var(--card); border: 1px solid var(--line) !important; }
        .text-muted { color: #9ca3af !important; }
        .form-control { background: #0f0f10; border-color: #2a2a2a; }
        .form-control:focus { background: #0f0f10; border-color: var(--brand); box-shadow: 0 0 0 .2rem rgba(255,59,48,.2); }

        .text-brand { color: var(--brand); }
        .bg-brand { background: linear-gradient(135deg, var(--brand), var(--brand2)); }
        .text-gradient { background: linear-gradient(90deg, var(--brand), var(--brand2)); -webkit-background-clip: text; background-clip: text; color: transparent; }
        .btn-brand { background: linear-gradient(135deg, var(--brand), #ff5a3d); color: #fff; border: 0; box-shadow: 0 6px 24px rgba(255,59,48,.35); font-weight: 600; }
        .btn-brand:hover { color: #fff; opacity: .92; }
        .btn-dark-outline { background: #0f0f10; color: #fff; border: 1px solid #2f2f2f; font-weight: 600; }
        .btn-dark-outline:hover { border-color: var(--brand); color: #fff; }

        .eyebrow { color: var(--brand); font-weight: 700; }
        .section-label { letter-spacing: .12em; font-size: .8rem; font-weight: 700; color: var(--brand); text-transform: uppercase; }
        .icon-box { font-size: 2rem; }
        .tag { background: rgba(255,59,48,.12); color: #ff8a80; font-size: .75rem; padding: .25rem .6rem; border-radius: 999px; font-weight: 600; }
        .card-hover { transition: transform .2s, border-color .2s, box-shadow .2s; }
        .card-hover:hover { transform: translateY(-4px); border-color: var(--brand) !important; box-shadow: 0 10px 30px rgba(255,59,48,.15) !important; }
        .progress { height: .5rem; background: #1f1f1f; }
        .progress-bar { background: linear-gradient(90deg, var(--brand), var(--brand2)); }

        .site-nav { background: rgba(10,10,10,.92); backdrop-filter: blur(8px); border-bottom: 1px solid var(--line); }
        .logo-badge { width: 40px; height: 40px; border-radius: 12px; background: linear-gradient(135deg, var(--brand), #c62828); display: inline-flex; align-items: center; justify-content: center; font-weight: 800; color: #fff; box-shadow: 0 0 18px rgba(255,59,48,.5); }
        .site-nav .nav-link { color: #e5e5e5; padding: .5rem .9rem; }
        .site-nav .nav-link:hover { color: var(--brand); }
        .site-nav .nav-link.active { color: var(--brand); border-bottom: 2px solid var(--brand); }

        .hero { background: radial-gradient(circle at 75% 50%, rgba(255,59,48,.22), transparent 55%), var(--bg); }
        .hero-title { font-family: 'Archivo Black', Impact, sans-serif; text-transform: uppercase; line-height: 1.05; font-size: clamp(2.2rem, 6vw, 4rem); }
        .photo-ring { width: min(320px, 78vw); aspect-ratio: 1; padding: 22px; border-radius: 50%; border: 2px solid rgba(255,90,70,.6); box-shadow: 0 0 60px rgba(255,59,48,.35); position: relative; }
        .photo-ring img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 2px solid #333; background: #1a1a1a; }
        .sd-avatar { width: 100%; height: 100%; border-radius: 50%; background: #1a1a1a; border: 2px solid #333; display: flex; align-items: center; justify-content: center; font-family: 'Archivo Black', Impact, sans-serif; font-size: clamp(3rem, 12vw, 5rem); color: var(--brand); }
        .float-badge { position: absolute; right: -12px; bottom: 8px; background: #111; border: 1px solid #2a2a2a; border-radius: 14px; padding: .6rem .9rem; text-align: center; font-size: .8rem; font-weight: 700; }
        .float-badge span { display: block; color: var(--brand); font-size: 1rem; }
        .stack-pill { background: #111; border: 1px solid #2a2a2a; color: #ddd; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>