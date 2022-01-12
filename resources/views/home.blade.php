<x-main-layout>
    <!-- Hero-->
    <section class="jarallax d-flex align-items-stretch min-vh-100 bg-dark overflow-hidden pt-5" data-jarallax
        data-speed="0.5">
        <div class="jarallax-img" style="background-image: url({{ asset('img/home/hero-bg.jpg') }});"></div>
        <div class="container d-flex flex-column justify-content-around pt-5 pt-sm-4 pb-5">
            <div class="row mt-md-5 pt-sm-5">
                <div class="col-lg-4 col-md-5 order-md-1 order-2 text-md-start text-center">
                    <div class="mt-lg-5 mb-4">
                        <a href="https://www.youtube.com/watch?v=4gAtw4qSF2U" class="btn-video me-3" data-gallery-video
                            data-sub-html="<h6 class='fs-sm text-light'>Agency Showreel</h6>"></a>
                        <span class="fs-sm fw-bold text-light">Play Showreel</span>
                    </div>
                    <h1 class="mb-lg-5 mb-4 pb-2 display-1 text-light">Hola somos #<span
                            class="text-primary">GavaDesign</span></h1>
                    <a href="#" class="mb-lg-0 mb-5 btn btn-lg btn-primary rounded-pill" data-scroll>Conocenos</a>
                </div>
                <div class="col-lg-8 col-md-7 order-md-2 order-1">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-12">
                            <div class="parallax mb-md-0 mb-4">
                                <div class="parallax-layer" data-depth="-0.09" style="z-index: 3;">
                                    <img src="{{ asset('img/home/hero-image/BO09-A.png') }}" alt="Layer">
                                </div>
                                <div class="parallax-layer" data-depth="-0.35" style="z-index: 4;">
                                    <img src="{{ asset('img/home/hero-image/02.png') }}" alt="Layer">
                                </div>
                                <div class="parallax-layer" data-depth="-0.25" style="z-index: 2;">
                                    <img src="{{ asset('img/home/hero-image/03.png') }}" alt="Layer">
                                </div>
                                <div class="parallax-layer" data-depth="-0.15" style="z-index: 1;">
                                    <img src="{{ asset('img/home/hero-image/04.png') }}" alt="Layer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-md-flex d-none align-items-center mt-lg-n5">
                <div class="col-4">
                    <ul class="ps-4 list-unstyled border-start border-primary fw-bold text-muted text-uppercase lead">
                        <li>Kikkerland</li>
                        <li>Ooly</li>
                        <li>Doiy</li>
                        <li>Flipper</li>
                    </ul>
                </div>
                <div class="col-4">
                    <a href="#mission" data-scroll
                        class="d-flex align-items-center justify-content-center fs-sm fw-bold text-light text-decoration-none">
                        <i class="ci-arrow-down h4 me-2 mb-0 fw-normal text-light"></i>
                        Scroll down
                    </a>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <span class="ms-auto fw-bold text-light">
                            5+ <br>
                            Marcas de Diseño
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Mission -->
    <section id="mission" class="container py-lg-6 py-5 my-3 mt-lg-1 mb-sm-5">
        <h3 class="h6 mb-3 pb-1 text-uppercase">¿Qúe hacemos?</h3>
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <p class="h3 mb-md-0 mb-3 pb-md-0 pb-1 line-height-base">Hacemos llegar a tu tienda artículos, regalos y
                    emociones llenos de innovación y diversión.</p>
            </div>
            <div class="col-lg-5 col-md-6 overflow-hidden">
                <div class="d-flex justify-content-md-end flex-sm-nowrap flex-wrap mx-n4">
                    <div class="mb-sm-0 mb-4 px-4">
                        <img class="d-block mt-md-3 mt-2" src="{{ asset('img/brands/kikkerland.webp') }}" width="500"
                            alt="kikkerland_logo">
                    </div>
                    <div class="mb-sm-0 mb-4 px-4">
                        <img class="d-block mt-md-3 mt-2" src="{{ asset('img/brands/ooly.webp') }}" width="350"
                            alt="ooly_logo">
                    </div>
                    <div class="mb-sm-0 mb-4 px-4">
                        <img class="d-block mt-md-3 mt-2" src="{{ asset('img/brands/doiy.webp') }}" width="350"
                            alt="doiy_logo">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="container mt-5 py-3 pb-lg-0 pt-md-5 pt-lg-4">
            <h3 class="h6 mb-2 text-uppercase">Nuestro trabajo</h3>
            <div class="row align-items-end mb-lg-5 mb-4">
                <div class="col-lg">
                    <h2 class="h1 mb-lg-0 mb-md-3 mb-2">Gava Design</h2>
                </div>
            </div>
    
            <!-- Filterable grid of items -->
            <div class="row" style="">

                <div class="grid-item branding col-md-8 pb-lg-2 mb-4" style="">
                    <a class="portfolio-card-scale" href="portfolio-single-v1.html">
                        <div class="portfolio-card-img">
                            <img src="{{ asset('img/blog/CRITTERS-WEB-BANNER.jpg') }}" alt="Card image">
                        </div>
                        <div class="portfolio-card-body">
                            <h3 class="portfolio-card-title">#GavaDesign</h3>
                            <span class="fs-sm text-muted">HACEMOS LLEGAR A TU TIENDA ARTÍCULOS, REGALOS Y EMOCIONES LLENOS DE INNOVACIÓN Y DIVERSIÓN.</span>
                        </div>
                    </a>
                </div>

                <div class="grid-item video-production col-md-4 col-sm-6 pb-lg-2 mb-4" style="">
                    <a class="portfolio-card-scale portfolio-card-video" href="#">
                        <div class="portfolio-card-img">
                            <img src="{{ asset('img/products/MH02_c.jpg') }}" alt="Card image">
                        </div>
                        <div class="portfolio-card-body">
                            <h3 class="portfolio-card-title">#tuespacio</h3>
                            <span class="fs-sm text-muted">POR QUE EL TIEMPO QUE SE DISFRUTA, ES EL VERDADERO TIEMPO VIVIDO. DISFRUTA TU TIEMPO Y TU ESPACIO CON GAVA DESIGN.</span>
                        </div>
                    </a>
                </div>

                <div class="grid-item web-design col-md-4 col-sm-6 pb-lg-2 mb-4" style="">
                    <a class="portfolio-card-scale" href="portfolio-single-v1.html">
                        <div class="portfolio-card-img">
                            <img src="{{ asset('img/products/MH02_c.jpg') }}" alt="Card image">
                        </div>
                        <div class="portfolio-card-body">
                            <h3 class="portfolio-card-title">#beunique, #regalosoriginales</h3>
                            <span class="fs-sm text-muted">SE UN UNICORNIO EN UN CAMPO DE CABALLOS. ENCUENTRA LOS OBJETOS MAS ORIGINALES Y ÚNICOS EN GAVA DESIGN.</span>
                        </div>
                    </a>
                </div>

                <div class="grid-item branding col-md-8 pb-lg-2 mb-4" style="">
                    <a class="portfolio-card-scale" href="portfolio-single-v2.html">
                        <div class="portfolio-card-img">
                            <img src="{{ asset('img/blog/CRITTERS-WEB-BANNER.jpg') }}" alt="Card image">
                        </div>
                        <div class="portfolio-card-body">
                            <h3 class="portfolio-card-title">Striped Smooth Surface With Lines</h3>
                            <span class="fs-sm text-muted">Branding</span>
                        </div>
                    </a>
                </div>

            </div>
    </section>




    <!-- Services -->
    <section class="container py-lg-6 mb-md-3 mb-lg-0 py-5">
        <h3 class="h6 mb-2 text-uppercase">Nuestras</h3>
        <h2 class="h1 mb-lg-4 mb-2 pb-3">Marcas</h2>
        <div class="row align-items-center">
            <div class="col-md-5 order-md-1 order-2">

                <!-- Accordion -->
                <div class="accordion" id="accordionServices">

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-1">
                            <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                data-binded-content="#kikkerland" data-bs-target="#servicesCollapse-1"
                                aria-expanded="true" aria-controls="servicesCollapse-1">Kikkerland</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse show" id="servicesCollapse-1"
                            aria-labelledby="servicesHeading-1" data-bs-parent="#accordionServices">
                            <div class="accordion-body">Desde 1992, la gente de Kikkerland ha viajado por todo el mundo en busca de diseños originales para las cosas que pueden hacer la vida más disfrutable, cosas ingeniosas que te intriguen; cosas inteligentes que hacen más fácil las actividades del diario; y cosas agradables que te hagan sentir más feliz cuando las uses.</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-2">
                            <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse"
                                data-binded-content="#ooly" data-bs-target="#servicesCollapse-2" aria-expanded="false"
                                aria-controls="servicesCollapse-2">Ooly</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="servicesCollapse-2"
                            aria-labelledby="servicesHeading-2" data-bs-parent="#accordionServices">
                            <div class="accordion-body">OOLY nació desde 2005, han estado soñando con todo tipo de productos coloridos, frescos e inspiradores llenos de deleite inesperado. Cosas seriamente divertidas para hacer que tu espacio de arte, espacio creativo, espacio escolar o espacio de oficina sea más divertido. Sea cual sea el espacio en el que se encuentre, seguramente encontrará algo especial para despertar tu creatividad y expresarse ante el mundo.</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-3">
                            <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse"
                                data-binded-content="#doiy" data-bs-target="#servicesCollapse-3"
                                aria-expanded="false" aria-controls="servicesCollapse-3">Doiy</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="servicesCollapse-3"
                            aria-labelledby="servicesHeading-3" data-bs-parent="#accordionServices">
                            <div class="accordion-body">DOIY es creatividad, sorpresa, pasión y mucha ilusión. DOIY es diseño, diseño para compartir, para reír, para sorprender y sobre todo diseño para todos. DOIY es una marca joven que crea productos de calidad, sin que esto sea sinónimo de precios elevados.</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-4">
                            <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse"
                                data-binded-content="#flipper" data-bs-target="#servicesCollapse-4"
                                aria-expanded="false" aria-controls="servicesCollapse-4">Flipper</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="servicesCollapse-4"
                            aria-labelledby="servicesHeading-4" data-bs-parent="#accordionServices">
                            <div class="accordion-body">Flipper, Haz del cepillado algo divertido, las cubiertas protectoras para cepillos de dientes de Flipper hacen el tiempo de cepillado mas divertido, manteniendo tu cepillo libre de gérmenes, polvo e insectos.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 order-md-2 order-1 ms-auto">

                <!-- Images binded to accordion -->
                <div class="binded-content mb-4">
                    <div id="kikkerland" class="binded-item active">
                        <img class="d-block" src="{{ asset('img/brands/kikkerland.webp') }}"
                            alt="kikkerland">
                    </div>
                    <div id="ooly" class="binded-item">
                        <img class="d-block" src="{{ asset('img/brands/ooly.webp') }}"
                            alt="ooly" width="550">
                    </div>
                    <div id="doiy" class="binded-item">
                        <img class="d-block" src="{{ asset('img/brands/doiy.webp') }}"
                            alt="doiy" width="550">
                    </div>

                    <div id="flipper" class="binded-item">
                        <img class="d-block" src="{{ asset('img/brands/flipper.webp') }}"
                            alt="flipper">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio: Featured projects -->
    <section id="portfolio" class="bg-secondary py-lg-6 py-5">
        <div class="container py-3 py-lg-0">
            <h3 class="h6 mb-2 text-uppercase">Enjoy our latest projects</h3>
            <div class="mb-lg-5 mb-4 d-flex justify-content-between">
                <h2 class="h1 mb-0">Selected work</h2>
                <div class="tns-custom-controls tns-controls-inverse mb-md-n4" id="tns-portfolio-controls"
                    tabindex="0">
                    <button type="button" data-controls="prev" tabindex="-1">
                        <i class="ci-arrow-left"></i>
                    </button>
                    <button type="button" data-controls="next" tabindex="-1">
                        <i class="ci-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container px-0">

            <!-- Carousel  -->
            <div class="tns-carousel-wrapper mt-n2 mb-lg-5 mb-4">
                <div class="tns-carousel-inner" data-carousel-options='{
              "nav": false,
              "controlsContainer": "#tns-portfolio-controls",
              "responsive": {
                "0": {
                  "items": 1
                },
                "576": {
                  "items": 2
                },
                "768": {
                  "items": 3
                }
              }
            }'>
                    <div class="rounded">
                        <a class="portfolio-card-scale text-decoration-none mt-3 mx-3" href="portfolio-single-v1.html">
                            <div class="portfolio-card-img">
                                <img src="{{ asset('img/portfolio/01.jpg') }}" alt="Card image">
                            </div>
                            <div class="portfolio-card-body">
                                <h3 class="portfolio-card-title">Pink Fur Light Bulb Creative Concept</h3>
                                <span class="fs-sm text-muted">Web Design</span>
                            </div>
                        </a>
                    </div>
                    <div class="rounded">
                        <a class="portfolio-card-scale text-decoration-none mt-3 mx-3" href="portfolio-single-v2.html">
                            <div class="portfolio-card-img">
                                <img src="{{ asset('img/portfolio/02.jpg') }}" alt="Card image">
                            </div>
                            <div class="portfolio-card-body">
                                <h3 class="portfolio-card-title">Minimalistic Mobile Interface</h3>
                                <span class="fs-sm text-muted">Mobile Apps</span>
                            </div>
                        </a>
                    </div>
                    <div class="rounded">
                        <a class="portfolio-card-scale text-decoration-none mt-3 mx-3" href="portfolio-single-v1.html">
                            <div class="portfolio-card-img">
                                <img src="{{ asset('img/portfolio/03.jpg') }}" alt="Card image">
                            </div>
                            <div class="portfolio-card-body">
                                <h3 class="portfolio-card-title">Hardcover Book Concept</h3>
                                <span class="fs-sm text-muted">Branding</span>
                            </div>
                        </a>
                    </div>
                    <div class="rounded">
                        <a class="portfolio-card-scale text-decoration-none mt-3 mx-3" href="portfolio-single-v2.html">
                            <div class="portfolio-card-img">
                                <img src="{{ asset('img/portfolio/04.jpg') }}" alt="Card image">
                            </div>
                            <div class="portfolio-card-body">
                                <h3 class="portfolio-card-title">Mobile App Icon Design</h3>
                                <span class="fs-sm text-muted">Mobile App Design</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-md-row flex-column px-3">
                <h3 class="mb-md-0">Fallen in love with our works?</h3>
                <a href="portfolio.html" class="ms-md-4 btn btn-lg btn-primary rounded-pill">View portfolio</a>
            </div>
        </div>
    </section>

    <section class="container-fuid pb-5 pb-lg-4">

        <div class="row">
            <div class="jarallax bg-dark py-5 mb-5" data-jarallax data-speed="0.3">
                <span class="bg-overlay opacity-25"></span>
                <div class="jarallax-img"
                    style="background-image: url({{ asset('img/portfolio/novedades.jpg') }});"></div>
                <div class="container bg-overlay-content py-sm-5 text-center">
                    <h2 class="h1 my-5 text-light">Novedades {{ date('Y') }}</h2>
                </div>
            </div>
            <div class="jarallax bg-dark py-5 mb-5" data-jarallax data-speed="0.3">
                <span class="bg-overlay opacity-25"></span>
                <div class="jarallax-img"
                    style="background-image: url({{ asset('img/portfolio/topsellers.jpg') }});"></div>
                <div class="container bg-overlay-content py-sm-5 text-center">
                    <h2 class="h1 my-5 text-light">Top sellers</h2>
                </div>
            </div>
            <div class="jarallax bg-dark py-5 mb-5" data-jarallax data-speed="0.3">
                <span class="bg-overlay opacity-25"></span>
                <div class="jarallax-img"
                    style="background-image: url({{ asset('img/portfolio/lastchance.jpg') }});"></div>
                <div class="container bg-overlay-content py-sm-5 text-center">
                    <h2 class="h1 my-5 text-light">Last chance {{ date('Y') }}</h2>
                </div>
            </div>
        </div>

    </section>



    {{-- <!-- Testimonials -->
    <section class="container pb-5 pb-lg-4">
        <div class="row">
            <div class="col-md-6">
                <h3 class="h6 mb-2 text-uppercase">Testimonials</h3>
                <h2 class="h1 mb-lg-5 mb-4 pb-2">What they say about us</h2>

                <!-- Carousel custom controls -->
                <div class="tns-custom-controls tns-controls-inverse d-md-flex d-none mb-n5 mx-0"
                    id="tns-custom-controls" tabindex="0">
                    <button class="mb-n2" type="button" data-controls="prev" tabindex="-1">
                        <i class="ci-arrow-left"></i>
                    </button>
                    <button class="mb-n2" type="button" data-controls="next" tabindex="-1">
                        <i class="ci-arrow-right"></i>
                    </button>
                </div>

                <!-- Carousel -->
                <div class="tns-carousel-wrapper tns-nav-outside">
                    <div class="tns-carousel-inner" data-carousel-options='{
                "gutter": 15,
                "controlsContainer": "#tns-custom-controls",
                "autoHeight": true,
                "responsive": {
                  "0": {
                    "nav": true
                  },
                  "768": {
                    "nav": false
                  }
                }
              }'>

                        <!-- Testimonial -->
                        <blockquote>
                            <img class="mb-4 rounded-circle" src="assets/img/testimonials/01.jpg" width="72"
                                alt="Author">
                            <p>Quae, recusandae! Rem cumque a, dolorum error quis blanditiis exercitationem culpa
                                enim harum! Praesentium repellendus placeat deleniti! Maxime deserunt inventore
                                nihil magnam vero iure amet dolores enim soluta sint accusamus.</p>
                            <footer>
                                <h3 class="h6 mb-0">Courtney Alexander</h3>
                                <span class="fs-sm text-muted">Position, Company</span>
                            </footer>
                        </blockquote>

                        <!-- Testimonial -->
                        <blockquote>
                            <img class="mb-4 rounded-circle" src="assets/img/testimonials/02.jpg" width="72"
                                alt="Author">
                            <p>Eveniet molestias, iste excepturi optio libero aspernatur eius, eos nostrum sunt
                                magnam ipsa impedit dignissimos est expedita, amet quidem et quod. Expedita porro
                                doloremque sit at fugiat in animi obcaecati repellendus, quaerat quo soluta quisquam
                                adipisci odit error repudiandae dolorum accusamus vel?</p>
                            <footer>
                                <h3 class="h6 mb-0">Eleanor Pena</h3>
                                <span class="fs-sm text-muted">Position, Company</span>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-5 col-md-6 d-md-block d-none ms-lg-auto">
                <img class="mb-lg-n6 rounded" src="assets/img/testimonials/03.jpg" alt="Testimonials">
            </div>
        </div>
    </section> --}}


    <!-- Achievements -->
    <section class="container pt-lg-6 py-5 mt-4 mt-lg-3">
        <h3 class="h6 mb-2 text-uppercase">Our achievements</h3>
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <h2 class="h1 mb-lg-5 mb-4">The awards won by our studio</h2>
            </div>
            <div
                class="col-lg-7 mt-2 d-flex flex-sm-row flex-column align-items-start justify-content-sm-between flex-lg-nowrap flex-wrap ms-auto">
                <div class="d-flex flex-sm-column justify-content-center mb-lg-0 mb-3 px-3">
                    <a href="#" class="swap-image me-sm-0 me-3 mb-3">
                        <img src="assets/img/logo/webby.svg" class="swap-to" width="60" alt="Brand logo hover">
                        <img src="assets/img/logo/webby-g.svg" class="swap-from" width="60" alt="Brand logo">
                    </a>
                    <span class="d-block pt-1 fs-sm text-dark text-nowrap">4x mobile of the day</span>
                </div>
                <div class="d-flex flex-sm-column justify-content-center mb-lg-0 mb-3 px-3">
                    <a href="#" class="swap-image me-sm-0 me-3 mb-3">
                        <img src="assets/img/logo/cssda.svg" class="swap-to" width="60" alt="Brand logo hover">
                        <img src="assets/img/logo/cssda-g.svg" class="swap-from" width="60" alt="Brand logo">
                    </a>
                    <span class="d-block pt-1 fs-sm text-dark text-nowrap">1x Kudos</span>
                </div>
                <div class="d-flex flex-sm-column justify-content-center mb-lg-0 mb-3 px-3">
                    <a href="#" class="swap-image me-sm-0 me-3 mb-3">
                        <img src="assets/img/logo/awwwards.svg" class="swap-to" width="60"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/awwwards-g.svg" class="swap-from" width="60" alt="Brand logo">
                    </a>
                    <span class="d-block pt-1 fs-sm text-dark text-nowrap">3x website of the day</span>
                </div>
                <div class="d-flex flex-sm-column justify-content-center mb-lg-0 mb-3 px-3">
                    <a href="#" class="swap-image me-sm-0 me-3 mb-3">
                        <img src="assets/img/logo/fwa.svg" class="swap-to" width="60" alt="Brand logo hover">
                        <img src="assets/img/logo/fwa-g.svg" class="swap-from" width="60" alt="Brand logo">
                    </a>
                    <span class="d-block pt-1 fs-sm text-dark text-nowrap">2x best website</span>
                </div>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="container pt-lg-6 pt-sm-5 pb-lg-5 pb-4">
        <div class="row">
            <div class="col-lg-4 col-sm-5 order-sm-1 order-2">

                <!-- Images binded to accordion -->
                <div class="binded-content mb-4">
                    <div id="team1" class="binded-item active">
                        <img class="rounded" src="assets/img/home/team/01.jpg" alt="Team member">
                    </div>
                    <div id="team2" class="binded-item">
                        <img class="rounded" src="assets/img/home/team/02.jpg" alt="Team member">
                    </div>
                    <div id="team3" class="binded-item">
                        <img class="rounded" src="assets/img/home/team/03.jpg" alt="Team member">
                    </div>
                    <div id="team4" class="binded-item">
                        <img class="rounded" src="assets/img/home/team/04.jpg" alt="Team member">
                    </div>
                </div>
                <a href="about.html"
                    class="d-lg-none d-inline-block btn-block btn btn-outline-primary rounded-pill">More about
                    us</a>
            </div>
            <div class="col-sm-7 order-sm-2 order-1 mb-sm-0 mb-4 ms-auto">
                <div class="d-flex justify-content-between">
                    <div class="me-3">
                        <h3 class="h6 mb-2 text-uppercase">Creative people are all here</h3>
                        <h2 class="h1 mb-lg-5 mb-3 pb-2">Meet our team</h2>
                    </div>
                    <div class="d-lg-block d-none">
                        <a href="about.html" class="btn btn-outline-primary rounded-pill">More about us</a>
                    </div>
                </div>

                <!-- Accordion -->
                <div class="accordion" id="accordionTeam">

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header h5" id="teamHeading-1">
                            <button class="accordion-button py-2 border-0" type="button" data-bs-toggle="collapse"
                                data-binded-content="#team1" data-bs-target="#teamCollapse-1" aria-expanded="true"
                                aria-controls="teamCollapse-1">Shawn Edwards</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse show" id="teamCollapse-1"
                            aria-labelledby="teamHeading-1" data-bs-parent="#accordionTeam">
                            <div class="accordion-body">
                                <h4 class="h6 mb-2 pb-1 fw-normal text-muted">Co-founder and CEO</h4>
                                Eleifend adipiscing lacus nullam malesuada ullamcorper non pharetrainteret velit.
                                Integer pellentesque tortor amet sociis. Nibh ultrices etiam enim.
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header h5" id="teamHeading-2">
                            <button class="accordion-button py-2 border-0 collapsed" type="button"
                                data-bs-toggle="collapse" data-binded-content="#team2" data-bs-target="#teamCollapse-2"
                                aria-expanded="false" aria-controls="teamCollapse-2">Theresa Cooper</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="teamCollapse-2"
                            aria-labelledby="teamHeading-2" data-bs-parent="#accordionTeam">
                            <div class="accordion-body">
                                <h4 class="h6 mb-2 pb-1 fw-normal text-muted">Project Manager</h4>
                                Eleifend adipiscing lacus nullam malesuada ullamcorper non pharetrainteret velit.
                                Integer pellentesque tortor amet sociis. Nibh ultrices etiam enim.
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header h5" id="teamHeading-3">
                            <button class="accordion-button py-2 border-0 collapsed" type="button"
                                data-bs-toggle="collapse" data-binded-content="#team3" data-bs-target="#teamCollapse-3"
                                aria-expanded="false" aria-controls="teamCollapse-3">Debra Warren</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="teamCollapse-3"
                            aria-labelledby="teamHeading-3" data-bs-parent="#accordionTeam">
                            <div class="accordion-body">
                                <h4 class="h6 mb-2 pb-1 fw-normal text-muted">UI/UX Designer</h4>
                                Eleifend adipiscing lacus nullam malesuada ullamcorper non pharetrainteret velit.
                                Integer pellentesque tortor amet sociis. Nibh ultrices etiam enim.
                            </div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header h5" id="teamHeading-4">
                            <button class="accordion-button py-2 border-0 collapsed" type="button"
                                data-bs-toggle="collapse" data-binded-content="#team4" data-bs-target="#teamCollapse-4"
                                aria-expanded="false" aria-controls="teamCollapse-4">Dustin Williamson</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="teamCollapse-4"
                            aria-labelledby="teamHeading-4" data-bs-parent="#accordionTeam">
                            <div class="accordion-body">
                                <h4 class="h6 mb-2 pb-1 fw-normal text-muted">Motion Designer</h4>
                                Eleifend adipiscing lacus nullam malesuada ullamcorper non pharetrainteret velit.
                                Integer pellentesque tortor amet sociis. Nibh ultrices etiam enim.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact links -->
    <section class="container mb-4 mb-sm-5 mt-md-4 mt-lg-0 px-3 py-lg-6 py-5">
        <h2 class="h3 mb-5 pb-2 text-center">¡Construyamos juntos algo increíble!</h2>
        <div class="row justify-content-center px-2 px-sm-0">
            <div class="col-md-3 col-sm-4 col px-2 px-sm-3">
                <h3 class="h6 pb-lg-3 pb-2 text-uppercase text-muted text-center">Siguenos</h3>
                <a class="d-block h3" href="#">
                    <i class="ci-facebook me-2"></i> Facebook
                </a>
                <a class="d-block h3" href="#">
                    <i class="ci-instagram me-2"></i> Instagram
                </a>
                <a class="d-block h3" href="#">
                    <i class="ci-linkedin me-2"></i> Linkedin
                </a>
            </div>
            <div class="divider-vertical d-sm-block d-none offset-sm-1"></div>
            <div class="col-md-4 col-sm-5 col offset-sm-1 px-1 px-sm-1">
                <h3 class="h6 pb-lg-3 pb-2 text-uppercase text-muted text-center">Contactanos</h3>
                <span class="d-block h3">
                    <i class="ci-mail me-2"></i> info@gavadesign.com
                </span>
                <span class="d-block h3">
                    <i class="ci-iphone me-2"></i> (55) 2065 – 3703
                </span>

            </div>
        </div>
    </section>

    <x-links />



</x-main-layout>
