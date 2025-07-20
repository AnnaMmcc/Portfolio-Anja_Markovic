@extends('layout')
@section('content')
    <div class="text-center my-4">
        <a class="btn btn-outline-warning btn-lg px-4" href="https://github.com/AnnaMmcc" target="_blank">
            <i class="fab fa-github me-2"></i> GitHub Profile
        </a>
    </div>

    <section class="container my-5">
        <h2 class="mb-5 text-center fw-bold" style="color: #f0c040;">My Projects</h2>
        <div class="row justify-content-center">
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
    </section>
@endsection

