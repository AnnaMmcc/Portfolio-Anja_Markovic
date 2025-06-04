@extends('layout')
@section('content')
<div class="d-flex flex-column-reverse flex-md-row align-items-center p-3 container">
    <div class="p-2">
        <img src="{{ asset('storage/images/woman-1459220_640.png') }}" alt="Anja Markovic slika" class="img-thumbnail rounded float-left m-3" style="width: 300px; height: 350px">
    </div>
    <div class="p-2">
        <h3 class="m-4">Zdravo, ja sam Anja Marković - Web Developer</h3>
        <h5><i>Samostalni frontend i backend developer sa iskustvom u izradi web stranica koristeći HTML, CSS,<br>
                Bootstrap, PHP i Laravel. Strastvena prema pisanju čistog koda i učenju novih tehnologija.<br>
                Tražim priliku za posao u IT industriji gde bih mogla da doprinesem svojim znanjem i nastavim da učim.
            </i></h5>
        <a href="/about" type="button" class="btn btn-outline-secondary fs-3 text-dark mt-4">Priča o meni</a>
    </div>

</div>
@endsection

