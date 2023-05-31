@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <h1 class="mb-0">Examenes disponibles de {{$curso->name}}:</h2>
        </div>
        @if($curso->name == 'Matematicas')
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/matematicasImagen.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="{{ url('/estudiantes/'.$curso->id.'/quiz') }}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="opcion" value="1">
                        <button type="submit" class="btn btn-primary">Responder</button>
                    </form>
                </div>
            </div>
        </div>
        @elseif($curso->name == 'Inglés')
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/inglesImagen.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="{{ url('/estudiantes/'.$curso->id.'/quiz') }}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="opcion" value="1">
                        <button type="submit" class="btn btn-primary">Responder</button>
                    </form>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/inglesImagen.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="{{ url('/estudiantes/'.$curso->id.'/quiz') }}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="opcion" value="2">
                        <button type="submit" class="btn btn-primary">Responder</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection