@extends('layout')
@section('content')
    <section class="about-section py-5">
        <div class="container">
            <div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-between gap-5">

                <div class="about-text">
                    <h2 class="fw-bold mb-3" style="color: #f0c040;">
                        Hello, I'm Anja Marković – Web Developer
                    </h2>
                    <p class="text-muted fs-5 mb-4">
                        A self-taught frontend and backend developer with experience in building websites using
                        <strong>HTML</strong>, <strong>CSS</strong>, <strong>Bootstrap</strong>, <strong>PHP</strong>, and <strong>Laravel</strong>.<br>
                        I’m passionate about writing clean code and learning new technologies.<br>
                        I’m looking for a job opportunity in the IT industry where I can contribute my knowledge and continue to grow.
                    </p>
                    <a href="/about" class="btn btn-warning btn-lg px-4 text-dark shadow-sm">
                        My Story
                    </a>
                </div>

                <div class="about-image text-center">
                    <img src="{{ asset('storage/images/woman-1459220_640.png') }}"
                         alt="Anja Markovic"
                         class="img-fluid rounded shadow"
                         style="max-width: 320px;">
                </div>

            </div>
        </div>
    </section>

@endsection

