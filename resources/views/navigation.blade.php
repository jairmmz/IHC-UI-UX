<nav class="site-nav" style="background: #1A374D">
    <div class="container">
        <div class="site-navigation">
            <a href="{{ route('home') }}" class="logo m-0">Tour Apurímac <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }} "><a href="{{ route('home') }}">Inicio</a></li>
                <li class="{{ request()->routeIs('services') ? 'active' : '' }} "><a href="{{ route('services') }}">Servicios</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }} "><a href="{{ route('about') }}">Acerca de</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }} "><a href="{{ route('contact') }}">Contacto</a></li>
                <li class="{{ request()->routeIs('login') ? 'active' : '' }} "><a href="{{ route('login') }}">Login</a></li>
                <li class="{{ request()->routeIs('perfil') ? 'active' : '' }} "><a href="{{ route('perfil') }}">Mi Perfil</a></li>
            </ul>

            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>