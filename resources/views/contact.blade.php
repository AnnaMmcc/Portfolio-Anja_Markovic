@extends('layout')
@section('content')
    <div class="container py-5">

    <h2>Kontaktiraj me</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ime</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email adresa</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Poruka</label>
            <textarea name="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Pošalji</button>
    </form>

    </div>
@endsection
