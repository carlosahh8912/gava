        <!-- Remove .navbar-sticky class to detach .navbar from page scroll -->
        <header class="header navbar navbar-expand-md navbar-dark navbar-sticky navbar-floating">
            <div class="container px-0 px-xl-3">
                <a class="navbar-brand order-md-1 me-md-5 me-0 pe-lg-2" href="index.html">
                    <img class="navbar-brand-static" src="{{ asset('img/logo-light.svg') }}" alt="Createx Logo" width="130">
                    <img class="navbar-brand-floating" src="{{ asset('img/logo-dark.svg') }}" alt="Createx Logo" width="130">
                </a>
                <div class="d-flex align-items-center order-md-3">
                    <a class="btn btn-primary rounded-pill d-sm-inline-block d-none ms-3" href="contacts.html">Contact
                        us</a>
                    <button class="navbar-toggler ms-1 me-n3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse1" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse order-md-2" id="navbarCollapse1">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="portfolio.html">Portfolio Grid</a></li>
                                <li><a class="dropdown-item" href="portfolio-single-v1.html">Single Project v.1</a>
                                </li>
                                <li><a class="dropdown-item" href="portfolio-single-v2.html">Single Project v.2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="blog.html">Blog List</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-sm-none d-block">
                            <a class="nav-link" href="contacts.html">Contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
