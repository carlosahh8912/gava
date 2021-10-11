        <!-- Remove .navbar-sticky class to detach .navbar from page scroll -->
        <header
            class="header navbar navbar-expand-md {{ Route::currentRouteName() == '/' ? 'navbar-dark navbar-floating' : 'navbar-light' }} navbar-sticky ">
            <div class="container px-0 px-xl-3">

                <a class="navbar-brand order-md-1 me-md-5 me-0 pe-lg-2" href="{{ route('/') }}">
                    <img class="navbar-brand-static" src="{{ asset(Route::currentRouteName() == '/' ? 'img/logo_dark.png' : 'img/logo.png') }}" alt="Gava Logo"
                        width="130">
                    <img class="navbar-brand-floating" src="{{ asset('img/logo.png') }}" alt="Gava Logo" width="130">
                </a>

                <div class="d-flex align-items-center order-md-3">

                    <a class="btn btn-primary rounded-pill d-sm-inline-block d-none ms-3"
                        href="{{ route('contacto') }}">Contactanos</a>
                    <button class="navbar-toggler ms-1 me-n3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse1" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <nav class="collapse navbar-collapse order-md-2" id="navbarCollapse1">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('/') }}" href="{{ route('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('nosotros') }}" href="{{ route('nosotros') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('marcas') }}" href="#">Marcas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('distribuidor') }}" href="#">Nuevo distribuidor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('comprar') }}" href="#">Dónde comprar</a>
                        </li>                
        
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Blog List</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Single Post</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item d-sm-none d-block">
                            <a class="nav-link" href="{{ route('contacto') }}">Contactanos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
