@extends('layout')
@section('content')
    <section class="about-section py-5">
        <div class="container">
            <div class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-between gap-5">

                <div class="about-text">
                    <h2 class="fw-bold mb-3" style="color: #f0c040;">
                        Zdravo, ja sam Anja Marković – Web Developer
                    </h2>
                    <p class="text-muted fs-5 mb-4">
                        Samostalni frontend i backend developer sa iskustvom u izradi web stranica koristeći
                        <strong>HTML</strong>, <strong>CSS</strong>, <strong>Bootstrap</strong>, <strong>PHP</strong> i <strong>Laravel</strong>.<br>
                        Strastvena sam prema pisanju čistog koda i učenju novih tehnologija.<br>
                        Tražim priliku za posao u IT industriji gde mogu doprineti znanjem i nastaviti da rastem.
                    </p>
                    <a href="/about" class="btn btn-warning btn-lg px-4 text-dark shadow-sm">
                        Priča o meni
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

