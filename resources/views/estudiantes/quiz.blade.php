@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        </div>
        @if($curso->name == 'Matematicas' && $opcion == '1')
        <div>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeiZrHgkG0k72_MZgwPm79Q8yNJXaf2oYFgS3FZtL16LYZpYw/viewform?embedded=true" width="640" height="506" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
        @elseif($curso->name == 'Inglés' && $opcion == '1')
        <div>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeMNAYvcusyNsNcoLn35oVxwxboEnoWSw5BXeziKoxWU2rKMw/viewform?embedded=true" width="640" height="534" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
        @elseif($curso->name == 'Inglés' && $opcion == '2')
        <div>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe_CSOtNxZGEjAdFCnV2eCY_6XxMEQGqi0ynsbYiKofD2ERkA/viewform?embedded=true" width="640" height="577" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
        @else
        <div class="card">
            <div class="card-header">No se encontraron examenes</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('Pruebe en otro momento') }}
            </div>
        </div>
        @endif
    </div>
</div>

@endsection