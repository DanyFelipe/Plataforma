<!-- Heading -->
<h6 class="navbar-heading text-muted">Gestionar</h6>
<ul class="navbar-nav">

    @if(auth()->user()->role == 'admin')
    <li class="nav-item  active ">
        <a class="nav-link  active " href="./home">
            <i class="ni ni-tv-2 text-primary"></i> Menú principal
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{url('/materias')}}">
            <i class="ni ni-collection text-blue"></i> Agregar Materias
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/estudiantes">
            <i class="ni ni-hat-3 text-orange"></i> Gestionar Alumnos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./examples/tables.html">
            <i class="ni ni-bullet-list-67 text-red"></i> Tablas
        </a>
    </li>
    @elseif(auth()->user()->role == 'estudiante')
    <li class="nav-item  active ">
        <a class="nav-link  active " href="/home">
            <i class="ni ni-tv-2 text-primary"></i> Menú principal
        </a>
    </li>
    <li class="nav-item">
        <form action="{{ url('/estudiantes/'.auth()->id()) }}" method="GET">
            @csrf
            @method('DELETE')
            <a class="nav-link " href="{{ url('/estudiantes/'.auth()->id().'/cursos') }}">
            <i class="ni ni-collection text-blue"></i> Mis materias
        </a>
        </form>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="/estudiantes">
            <i class="ni ni-hat-3 text-orange"></i> Alumnos
        </a>
    </li>
    <li class="nav-item">
        <form action="{{ url('/estudiantes/'.auth()->id()) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="nav-link " href="{{ url('/estudiantes/'.auth()->id().'/edit') }}">
            <i class="ni ni-single-02 text-yellow"></i> Perfil del usuario
        </a>
        </form>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
        </a>
        <form action="{{route('logout')}}" method="POST" style="display:none;" id="formLogout">
            @csrf
        </form>
    </li>
</ul>

@if(auth()->user()->role == 'admin')
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-spaceship"></i> Getting started
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
            <i class="ni ni-palette"></i> Foundation
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
            <i class="ni ni-ui-04"></i> Components
        </a>
    </li>
</ul>
@endif