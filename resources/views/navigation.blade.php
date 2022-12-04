<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="{{ route('home') }}" class="logo m-0">Tour Apurímac <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }} "><a href="{{ route('home') }}">Inicio</a></li>
                <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="elements.html">Elementos</a></li>
                        <li><a href="#">Menu One</a></li>
                        <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('elements') ? 'active' : '' }} "><a href="{{ route('elements') }}">Elementos</a></li>
                <li class="{{ request()->routeIs('services') ? 'active' : '' }} "><a href="{{ route('services') }}">Servicios</a></li>
                <li class="{{ request()->routeIs('about') ? 'active' : '' }} "><a href="{{ route('about') }}">Acerca de</a></li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }} "><a href="{{ route('contact') }}">Contacto</a></li>
            </ul>

            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>