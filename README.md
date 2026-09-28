# Laravel Portfolio (`laravel-blade-onboarding`)

A fully responsive personal portfolio website built with **Laravel 13** and **Blade**, styled with **Bootstrap 5** and a custom dark red/orange theme. 

This project demonstrates the **Blade Master Layout strategy**: one shared layout, reusable partials for the navbar and footer, and three child pages, ensuring zero HTML repetition (**DRY principle**).

---

## 🚀 Features

* **Master Layout Architecture:** Utilizes `@extends`, `@section`, `@yield`, and `@include`.
* **Dynamic Page Titles:** Powered via `@yield('title')`.
* **Global Navigation & Footer:** Shared across every page—edit once, update everywhere.
* **Home Page:** Features a hero section, tech stack highlights, statistics, services, and recent projects with GitHub links.
* **About Us Page:** Includes a personal biography, core values, skill proficiency charts powered by **Chart.js**, and education background.
* **Contact Us Page:** Features contact cards and an interactive Name / Email / Message form.
* **Clean Routing:** Clean, named routes configured in `routes/web.php`.
* **Mobile Responsive:** Fully optimized with a collapsible navbar, Bootstrap grid system, and fluid typography.
* **Clean Implementation:** Zero modifications made to core Laravel framework files.

---

## 🛠️ Tech Stack

| Layer | Technology |
| :--- | :--- |
| **Framework** | Laravel 13 |
| **Language** | PHP 8.3+ |
| **Templating** | Blade |
| **Styling** | Bootstrap 5.3 (CDN) |
| **Charts** | Chart.js (CDN) |
| **Typography** | Segoe UI, Archivo Black (Google Fonts) |

---

## 📄 Pages and Routes

| Page | URL | Route Name |
| :--- | :--- | :--- |
| **Home** | `/` | `home` |
| **About Us** | `/about` | `about` |
| **Contact Us** | `/contact` | `contact` |

```php
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
