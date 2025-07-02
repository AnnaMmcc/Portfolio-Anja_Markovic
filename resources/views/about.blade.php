@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="row align-items-start">

            <div class="col-md-4 text-center mb-4">
                <img class="img-fluid rounded-3" style="max-width: 100%;" src="{{ asset('storage/images/ProfileImageAnja.jpg') }}" alt="Profile picture">
                <p>Anja Marković</p>
            </div>

            <div class="col-md-8">
                <h4 class="text-start">
                    I am a Web Developer who enjoys creating websites. Although I graduated from a medical high school,
                    I discovered my passion for programming and now work on frontend and backend development using
                    HTML, CSS, Bootstrap, PHP, and Laravel. <br><br>

                    I learn every day and love solving problems. My goal is to work in a team where I can contribute and learn even more.
                    My programming journey began during my third year of dental school when I realized I was forcing myself
                    to study that material. Even back then, I really enjoyed the informatics courses in my first and second year;
                    I studied them eagerly and passed with high grades. <br><br>

                    After becoming a wife and a mother, and working in a private clinic as a nurse, I realized that I had become
                    too sensitive and that medicine wasn’t the right path for me. <br><br>

                    While thinking about what I truly love doing and what kind of job I would approach with excitement and joy,
                    I came to the answer — considering my creative side — that it is definitely programming. <br><br>

                    I independently researched which programming language to learn, how, and why. My first step in that direction
                    was the website The Odin Project, where I mastered the basics of HTML and CSS. After that, I came across
                    the IT Mentorship website, where, with the help of mentor Tomislav Nikolić, I began learning PHP and Laravel.
                </h4>
            </div>

        </div>
    </div>

@endsection
