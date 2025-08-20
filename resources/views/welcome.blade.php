@extends('layout')
@section('content')
    <x-seo-meta
        title="Home – Anja Marković Portfolio"
        description="Welcome to Anja Marković’s portfolio website, showcasing projects and skills."
    />

    <section class="hero-section py-5" style="min-height: 80vh; position: relative;">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5">

            <section class="hero-section py-5" style="min-height: 80vh; position: relative;">
                <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5">

                    <div class="hero-text parallax" data-speed="0.2">
                        <h1 class="fw-bold mb-3" style="color: #f0c040;">Hi, I'm Anja Marković</h1>
                        <p class="text-muted fs-5 mb-4">
                            I build clean, modern, and responsive websites using <strong>HTML, CSS, Bootstrap, PHP, and Laravel</strong>.<br>
                            Currently expanding my skills in <strong>JavaScript</strong> to create interactive and dynamic web experiences.<br>
                            Passionate about coding, learning new technologies, and creating solutions that make a difference.<br>
                            Open to full-time opportunities or freelance collaborations.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="/about" class="btn btn-warning btn-lg text-dark px-4 shadow-sm">My Story</a>
                        </div>
                    </div>

                    <div class="hero-image parallax" data-speed="0.35">
                        <img src="{{ asset('images/woman-1459220_640.png') }}"
                             alt="Anja Markovic"
                             class="img-fluid rounded shadow"
                             style="max-width: 320px;">
                    </div>

                </div>
            </section>

        </div>
    </section>

    <section id="projects" class="projects-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-5" style="color: #f0c040;" data-aos="fade-up">Featured Projects</h2>
            <div class="row g-4">

                <div class="text-center my-4">
                    <a class="btn btn-outline-warning btn-lg px-4" href="https://github.com/AnnaMmcc" target="_blank">
                        <i class="fab fa-github me-2"></i> GitHub Profile
                    </a>
                </div>

                @foreach ($projects as $project)
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="card h-100 shadow-lg border-0 w-100">
                            <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">{{ $project['title'] }}</h5>
                                <p class="card-text">{{ $project['description'] }}</p>
                                <p class="text-muted"><strong>Technologies:</strong> {{ $project['technologies'] }}</p>
                            </div>

                            @if (!empty($project['link-demo']))
                                <div class="card-footer bg-white border-0 text-center">
                                    <a href="{{ $project['link-demo'] }}" class="btn btn-outline-warning btn-lg" target="_blank">Open Site</a>
                                </div>
                            @endif

                            @if (!empty($project['link']))
                                <div class="card-footer bg-white border-0 text-center">
                                    <a href="{{ $project['link'] }}" class="btn btn-outline-warning btn-lg" target="_blank">GitHub Link</a>
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact-cta py-5" data-aos="fade-up">
        <div class="container text-center">
            <h2 class="fw-bold mb-3" style="color: #f0c040;">Let’s Work Together!</h2>
            <p class="text-muted fs-5 mb-4">Have a project in mind or want to collaborate? Feel free to reach out.</p>
            <a href="/contact" class="btn btn-warning btn-lg text-dark px-4 shadow-sm" data-aos="fade-up" data-aos-delay="100">Contact Me</a>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true, easing: 'ease-in-out' });
    </script>

    <script>
        document.addEventListener('scroll', function() {
            const parallaxElements = document.querySelectorAll('.parallax');
            parallaxElements.forEach(el => {
                const speed = parseFloat(el.getAttribute('data-speed')) || 0.2;
                const offset = window.pageYOffset * speed;
                el.style.transform = `translateY(${offset}px) translateX(${offset * 0.05}px)`;
            });
        });
    </script>
@endpush


