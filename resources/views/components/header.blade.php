<header class="container header">
    <div class="logoHero">
        <a href="{{ route('index') }}">
            <img src="{{ asset('img/separafilt.png') }}" alt="Logo Separafilt">
        </a>
        <nav class="navBar">
            <ul>
                <li><a class="active" href="{{ route('index') }}">Inicio</a> </li>
                <li><a href="{{ route('filtracion') }}" target="_blank" rel="noopener noreferrer">Productos Filtración</a></li>
                <li><a href="{{ route('separacion') }}" target="_blank" rel="noopener noreferrer">Productos Separación</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a> </li>
            </ul>
        </nav>
    </div>
</header>