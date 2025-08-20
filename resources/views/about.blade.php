@extends('layout')
@section('content')
    <x-seo-meta
        title="About Me – Anja Marković"
        description="Learn about Anja Marković’s journey as a web developer skilled in Laravel, PHP, frontend technologies, and currently learning JavaScript."
        keywords="Anja Marković, Web Developer, About Me, Laravel, PHP, JavaScript"
        og-title="About Anja Marković"
        og-description="Discover Anja’s story, passion for coding, and dedication to learning new technologies."
        og-image="{{ asset('images/about-image.jpg') }}"
        twitter-title="About Anja Marković"
        twitter-description="Discover Anja’s story, passion for coding, and dedication to learning new technologies."
        twitter-image="{{ asset('images/about-image.jpg') }}"
    />

    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="col-md-4 text-center mb-4">
                <img class="img-fluid rounded-3 parallax" data-speed="0.2" style="max-width: 100%;" src="{{ asset('images/ProfileImageAnja.jpg') }}" alt="Profile picture">
                <p class="mt-2 fw-bold parallax" data-speed="0.1">Anja Marković</p>
            </div>

            <div class="col-md-8">
                <p class="parallax" data-speed="0.1">
                    I am a Web Developer who enjoys creating websites. Although I graduated from a medical high school, I discovered my passion for programming and now work on frontend and backend development using <strong>HTML</strong>, <strong>CSS</strong>, <strong>Bootstrap</strong>, <strong>PHP</strong>, and <strong>Laravel</strong>.
                </p>

                <p class="parallax" data-speed="0.1">
                    I am constantly learning new technologies to stay up-to-date in the fast-changing web development world. Currently, I am expanding my skills in <strong>JavaScript</strong> to build dynamic and interactive web experiences.
                </p>

                <p class="parallax" data-speed="0.1">
                    My programming journey began during my third year of dental school when I realized I was forcing myself to study material that didn’t inspire me. Even back then, I loved informatics courses in the first and second year, studying eagerly and passing with high grades.
                </p>

                <p class="parallax" data-speed="0.1">
                    After becoming a wife and a mother, and working in a private clinic as a nurse, I realized that medicine wasn’t the right path for me. While thinking about what I truly love and what job I would approach with excitement, I came to the answer — programming, which also lets me express my creative side.
                </p>

                <p class="parallax" data-speed="0.1">
                    I independently researched which programming languages to learn and where to start. My first step was the <strong>The Odin Project</strong>, where I mastered HTML and CSS basics. Later, with the help of mentor Tomislav Nikolić through the IT Mentorship program, I dove into <strong>PHP</strong> and <strong>Laravel</strong>.
                </p>

                <p class="parallax" data-speed="0.1">
                    I am passionate about problem-solving, building clean and efficient code, and continuously improving my skills. My goal is to contribute to a team where I can keep learning and create high-quality web solutions.
                </p>

                <a href="/contact" class="btn btn-warning btn-lg mt-4 text-dark shadow-sm parallax" data-speed="0.1">Contact Me</a>
            </div>
        </div>
    </div>

    <!-- Optional JS for parallax/fade-in effect -->
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const parallaxElements = document.querySelectorAll('.parallax');

                window.addEventListener('scroll', () => {
                    const scrollTop = window.pageYOffset;

                    parallaxElements.forEach(el => {
                        const speed = parseFloat(el.getAttribute('data-speed')) || 0.2;
                        el.style.transform = `translateY(${scrollTop * speed}px)`;

                        // Fade-in efekat
                        const elementTop = el.getBoundingClientRect().top;
                        const windowHeight = window.innerHeight;
                        if(elementTop < windowHeight - 100){
                            el.style.opacity = 1;
                            el.style.transition = 'opacity 1s ease-out, transform 0.3s ease-out';
                        } else {
                            el.style.opacity = 0;
                        }
                    });
                });
            });
        </script>
    @endpush

@endsection

