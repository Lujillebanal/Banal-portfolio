@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

    
<nav class="navbar">
    <div class="container nav-container">
        <ul class="nav-links">
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>
        <p>An IT student and aspiring game developer committed to creating captivating and unforgettable player experiences. My interest in the creation of virtual worlds has driven me to pursue programming, concentrating on gameplay systems, level design, and game mechanics. I enjoy picking up new skills and pushing myself to solve challenging development problems. I am a committed and quick learner who is eager to use my technical expertise and artistic spirit to support the development of cutting-edge games.</p>
        <h2>Education</h2>
        <p>Bachelor of Science in Information Technology (BSIT)-Currently pursuing, with a focus on web delevepment and programming</p>
        <p> Computer Programming(IT)- Completed senior high school under the Computer Programming stand</p>
    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">Projects</h2>

        <div class="project">
            <p>
                <a href="https://lujillebanal.github.io/Personal/" target="_blank"><strong>Portfolio Website (HTML & CSS)</strong></a><br>
                My first-year project that introduced me to web development. Built with HTML and CSS, focusing on layout, design, and responsive structure.
            </p>
        </div>
        <div class="project">
            <p>
                <a href="https://lujillebanal.github.io/Calendar/" target="_blank">
                    <strong>Calendar Project (HTML & CSS)</strong>
                </a><br>
                A simple calendar application built with HTML and CSS. This project helped me practice layout, styling, and responsive design.
            </p>
        </div>
    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">

    <div class="container">

        <h2 class="section-title">Get In Touch</h2>

        <p>phone:+639126810872</p>
        <p>location' => 'PH, Manila</p>

        <div class="social-links">
            <a href="https://www.facebook.com/lujille.banal.2025" target="_blank" class="social-icon">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/nox.lujx/" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/Lujillebanal" target="_blank" class="social-icon">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>

</section>

@endsection