@extends('layout')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div class="m-3">
            <a class="btn" style="color: #bb8c16; " href="https://github.com/AnnaMmcc" target="_blank">
                <i class="fab fa-github fa-lg"></i> GitHub
            </a>
        </div>
        <div class="m-3">
            <a class="btn" style="color: #bb8c16" href="https://github.com/AnnaMmcc/Onlline-prodavnica-Ikona.git" target="_blank">
                <i class="fab fa-github fa-lg"></i> Online prodavnica ikona
            </a>
        </div>
        <div class="m-3">
            <a class="btn" style="color: #bb8c16" href="https://github.com/AnnaMmcc/domaci_projekat.git" target="_blank">
                <i class="fab fa-github fa-lg"></i> Web Shop example
            </a>
        </div>
    </div>
    <div>
            <section class="container my-5">
                <h2 class="mb-4 text-center">Moji Projekti</h2>
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('images/projects/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project['title'] }}</h5>
                                    <p class="card-text">{{ $project['description'] }}</p>
                                    <p class="text-muted"><strong>Tehnologije:</strong> {{ $project['technologies'] }}</p>
                                </div>
                                @if(!empty($project['link']))
                                    <div class="card-footer text-center">
                                        <a href="{{ $project['link'] }}" class="btn btn-primary" target="_blank">Pogledaj projekat</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
    </div>

@endsection
