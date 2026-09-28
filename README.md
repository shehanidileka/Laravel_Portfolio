Laravel Portfolio (laravel-blade-onboarding)

A fully responsive personal portfolio website built with Laravel 13 and Blade, styled with Bootstrap 5 and a custom dark red/orange theme.

The project demonstrates the Blade Master Layout strategy: one shared layout, reusable partials for the navbar and footer, and three child pages, so no HTML is repeated (DRY).

Features
Master layout with @extends, @section, @yield and @include
Dynamic page titles through @yield('title')
Global navigation and footer shared by every page: edit once, updates everywhere
Home page with hero section, tech stack, statistics, services and recent projects (with GitHub links)
About Us page with biography, values, skills charts (Chart.js) and education
Contact Us page with contact cards and a Name / Email / Message form
Clean, named routes in routes/web.php
Mobile responsive: collapsible navbar, Bootstrap grid, fluid typography
No modification of Laravel core files
Tech Stack
Layer	Technology
Framework	Laravel 13
Language	PHP 8.3+
Templating	Blade
CSS	Bootstrap 5.3 (CDN)
Charts	Chart.js (CDN)
Fonts	Segoe UI, Archivo Black (Google Fonts)
Pages and Routes
Page	URL	Route name
Home	/	home
About Us	/about	about
Contact Us	/contact	contact
php
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Getting Started
Requirements
PHP 8.3 or higher
Composer
Laravel Herd (optional, installs PHP and Composer on Windows/Mac)
Installation
bash
git clone https://github.com/shehanidileka/Laravel_Portfolio.git
cd Laravel_Portfolio

composer install
copy .env.example .env        # macOS/Linux: cp .env.example .env
php artisan key:generate
php artisan migrate           # answer "yes" if asked to create the SQLite database

php artisan serve

Open http://127.0.0.1:8000 in your browser.

Project Structure

Only these files were added or edited; everything else is the default Laravel skeleton.

resources/views/
├── layouts/
│   └── app.blade.php        # master layout
├── partials/
│   ├── navbar.blade.php     # global navigation
│   └── footer.blade.php     # global footer
├── home.blade.php
├── about.blade.php
└── contact.blade.php

routes/web.php               # 3 named routes
How the Layout Works
blade
{{-- resources/views/layouts/app.blade.php --}}
<title>@yield('title', 'Home') | Shehani De Silva</title>
...
@include('partials.navbar')
<main>@yield('content')</main>
@include('partials.footer')
blade
{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    ...page content...
@endsection
Customization
To change	Edit
Navigation links	resources/views/partials/navbar.blade.php
Footer	resources/views/partials/footer.blade.php
Colors and global styles	<style> block in layouts/app.blade.php
Projects and services	Arrays in resources/views/home.blade.php
Skill percentages	@php block in resources/views/about.blade.php

Add a new page: create resources/views/newpage.blade.php with @extends('layouts.app'), add Route::view('/newpage', 'newpage')->name('newpage'); to routes/web.php, then link it in the navbar with route('newpage').

Verifying

Every page should return 200 OK. Quick check in PowerShell while the server is running:

powershell
foreach ($p in "/", "/about", "/contact") {
    $r = Invoke-WebRequest -Uri "http://127.0.0.1:8000$p" -UseBasicParsing
    "$p  ->  $($r.StatusCode)"
}
Known Limitations
The contact form opens the visitor's email app (mailto:) instead of sending mail from the server.
Emoji icons look different on each operating system.
Author

G.W.S.D. Shehani De Silva HNDIT undergraduate, SLIATE | Web Developer Intern GitHub: @shehanidileka

Built with Laravel, Blade and Bootstrap.
