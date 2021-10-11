<x-main-layout>
    <!-- Hero-->
    <section class="jarallax d-flex align-items-stretch min-vh-100 bg-dark overflow-hidden pt-5" data-jarallax
        data-speed="0.5">
        <div class="jarallax-img" style="background-image: url(assets/img/home/hero-bg.jpg);"></div>
        <div class="container d-flex flex-column justify-content-around pt-5 pt-sm-4 pb-5">
            <div class="row mt-md-5 pt-sm-5">
                <div class="col-lg-4 col-md-5 order-md-1 order-2 text-md-start text-center">
                    <div class="mt-lg-5 mb-4">
                        <a href="https://www.youtube.com/watch?v=4gAtw4qSF2U" class="btn-video me-3" data-gallery-video
                            data-sub-html="<h6 class='fs-sm text-light'>Agency Showreel</h6>"></a>
                        <span class="fs-sm fw-bold text-light">Play Showreel</span>
                    </div>
                    <h1 class="mb-lg-5 mb-4 pb-2 display-1 text-light">Hey, we’re CREATE<span
                            class="text-primary">X</span></h1>
                    <a href="#portfolio" class="mb-lg-0 mb-5 btn btn-lg btn-primary rounded-pill" data-scroll>View
                        showcase</a>
                </div>
                <div class="col-lg-8 col-md-7 order-md-2 order-1">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-12">
                            <div class="parallax mb-md-0 mb-4">
                                <div class="parallax-layer" data-depth="-0.09" style="z-index: 3;">
                                    <img src="{{ asset('img/home/hero-image/01.png') }}" alt="Layer">
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
                        <li>UX / UI</li>
                        <li>MOBILE &amp; WEB-TECH</li>
                        <li>BRANDING</li>
                        <li>SEO</li>
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
                            12+ <br>
                            awards
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Mission -->
    <section id="mission" class="container py-lg-6 py-5 my-3 mt-lg-1 mb-sm-5">
        <h3 class="h6 mb-3 pb-1 text-uppercase">What we do</h3>
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <p class="h3 mb-md-0 mb-3 pb-md-0 pb-1 line-height-base">We are a full-service creative studio. We
                    generate innovative ideas, purposeful content and unique visual languages to empower meaningful
                    interactions with audiences, brands, products and purposes.</p>
            </div>
            <div class="col-lg-5 col-md-6 overflow-hidden">
                <div class="d-flex justify-content-md-end flex-sm-nowrap flex-wrap mx-n4">
                    <div class="mb-sm-0 mb-4 px-4">
                        <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">Highlighted in</span>
                        <img class="d-block mt-md-3 mt-2" src="assets/img/logo/forbes.svg" alt="Brand logo">
                    </div>
                    <div class="mb-sm-0 mb-4 px-4">
                        <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">Top rated agency</span>
                        <img class="d-block mt-md-3 mt-2" src="assets/img/logo/upwork.svg" alt="Brand logo">
                    </div>
                    <div class="mb-sm-0 mb-4 px-4">
                        <span class="d-inline-block pb-1 fs-sm text-dark text-nowrap">5 stars only</span>
                        <img class="d-block mt-md-3 mt-2" src="assets/img/logo/clutch.svg" alt="Brand logo">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Approach -->
    <section class="pt-lg-3 pb-4">
        <div class="container">
            <h3 class="h6 mb-2 text-uppercase">Our approach</h3>
            <h2 class="h1 mb-lg-5 mb-4">That’s how we do it</h2>
        </div>

        <!-- Carousel -->
        <div class="container px-0">
            <div class="tns-carousel-wrapper tns-nav-outside mt-n4 ms-lg-n5">
                <div class="tns-carousel-inner pt-4 ps-lg-5" data-carousel-options='{
              "loop": false,
              "controls": false,
              "responsive": {
                "0": {
                  "items": 1
                },
                "576": {
                  "items": 2
                },
                "768": {
                  "items": 3
                },
                "992": {
                  "items": 4
                }
              }
            }'>

                    <!-- Horizontal step item -->
                    <div class="step pt-2 px-3">
                        <div class="step-head mb-3">
                            <span class="step-indicator">01</span>
                            <span class="step-line"></span>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 mb-2">Research &amp; Analysis</h3>
                            <p class="mb-0 text-muted">Culpa nostrud commodo ea consequat aliquip reprehenderit.
                                Veniam velit nostrud aliquip sunt.</p>
                        </div>
                    </div>

                    <!-- Horizontal step item -->
                    <div class="step pt-2 px-3">
                        <div class="step-head mb-3">
                            <span class="step-indicator">02</span>
                            <span class="step-line"></span>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 mb-2">Prototyping</h3>
                            <p class="mb-0 text-muted">Anim reprehenderit sint voluptate exercitation adipisicing
                                laborum adipisicing. Minim ad tempor.</p>
                        </div>
                    </div>

                    <!-- Horizontal step item -->
                    <div class="step pt-2 px-3">
                        <div class="step-head mb-3">
                            <span class="step-indicator">03</span>
                            <span class="step-line"></span>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 mb-2">Pixel-perfect UI Design</h3>
                            <p class="mb-0 text-muted">Sit veniam aute dolore adipisicing nulla sit culpa. Minim
                                mollit voluptate ullamco proident ea ad.</p>
                        </div>
                    </div>

                    <!-- Horizontal step item -->
                    <div class="step pt-2 px-3">
                        <div class="step-head mb-3">
                            <span class="step-indicator">04</span>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 mb-2">Development (Coding)</h3>
                            <p class="mb-0 text-muted">Adipisicing esse aliqua aliquip qui amet. Aute eiusmod
                                dolore dolore et ad et veniamad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section class="container py-lg-6 mb-md-3 mb-lg-0 py-5">
        <h3 class="h6 mb-2 text-uppercase">Capabilities</h3>
        <h2 class="h1 mb-lg-4 mb-2 pb-3">Our services</h2>
        <div class="row align-items-center">
            <div class="col-md-5 order-md-1 order-2">

                <!-- Accordion -->
                <div class="accordion" id="accordionServices">

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-1">
                            <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                data-binded-content="#identity" data-bs-target="#servicesCollapse-1"
                                aria-expanded="true" aria-controls="servicesCollapse-1">Identity Design &amp;
                                Illustration</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse show" id="servicesCollapse-1"
                            aria-labelledby="servicesHeading-1" data-bs-parent="#accordionServices">
                            <div class="accordion-body">At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-2">
                            <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse"
                                data-binded-content="#web" data-bs-target="#servicesCollapse-2" aria-expanded="false"
                                aria-controls="servicesCollapse-2">UX / UI Design<br>Web &amp; Mobile
                                Design</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="servicesCollapse-2"
                            aria-labelledby="servicesHeading-2" data-bs-parent="#accordionServices">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Inventore porro molestiae nihil ad aut atque tempora tempore fugiat ipsum aspernatur
                                officiis, obcaecati modi excepturi, aliquid reprehenderit? Sint ullam magni
                                molestias?</div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="servicesHeading-3">
                            <button class="accordion-button border-0 collapsed" type="button" data-bs-toggle="collapse"
                                data-binded-content="#photography" data-bs-target="#servicesCollapse-3"
                                aria-expanded="false" aria-controls="servicesCollapse-3">Photography &amp; Video
                                Production</button>
                        </h3>
                        <div class="accordion-collapse border-0 collapse" id="servicesCollapse-3"
                            aria-labelledby="servicesHeading-3" data-bs-parent="#accordionServices">
                            <div class="accordion-body">Doloribus quo sed beatae provident placeat voluptate
                                corporis eligendi maxime laborum reprehenderit voluptatibus obcaecati recusandae
                                illum, delectus ipsum ab vitae cum excepturi? Illo ad id mollitia, sit obcaecati qui
                                laborum iste minima deserunt consequatur sunt neque aliquid, error aspernatur!</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 order-md-2 order-1 ms-auto">

                <!-- Images binded to accordion -->
                <div class="binded-content mb-4">
                    <div id="identity" class="binded-item active">
                        <img class="d-block" src="{{ asset('img/home/services/01.svg') }}"
                            alt="Identity Design &amp; Illustration">
                    </div>
                    <div id="web" class="binded-item">
                        <img class="d-block" src="{{ asset('img/home/services/02.svg') }}" alt="UX / UI Design">
                    </div>
                    <div id="photography" class="binded-item">
                        <img class="d-block" src="{{ asset('img/home/services/03.svg') }}"
                            alt="Photography &amp; Video Production">
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
                                <img src="assets/img/portfolio/04.jpg" alt="Card image">
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


    <!-- Brands -->
    <section class="container mt-md-4 py-lg-6 pt-5 pb-sm-5 pb-4 px-0">
        <div class="tns-carousel-wrapper tns-nav-outside">
            <div class="tns-carousel-inner" data-carousel-options='{
            "nav": false,
            "controls": false,
            "autoplay": true,
            "autoplayTimeout": 4000,
            "responsive": {
              "0": {
                "items": 2
              },
              "576": {
                "items": 3
              },
              "768": {
                "items": 4
              },
              "992": {
                "items": 5
              },
              "1200": {
                "items": 6
              }
            }
          }'>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/coca-cola.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/coca-cola-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/bassett-furniture.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/bassett-furniture-g.svg" class="swap-from" width="120"
                            alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/albatron.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/albatron-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/wisecat.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/wisecat-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/curtis.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/curtis-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/gabor.svg" class="swap-to" width="120" alt="Brand logo hover">
                        <img src="assets/img/logo/gabor-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/huggies.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/huggies-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/lovato.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/lovato-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/xrite.svg" class="swap-to" width="120" alt="Brand logo hover">
                        <img src="assets/img/logo/xrite-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/rainx.svg" class="swap-to" width="120" alt="Brand logo hover">
                        <img src="assets/img/logo/rainx-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/soundcloud.svg" class="swap-to" width="120"
                            alt="Brand logo hover">
                        <img src="assets/img/logo/soundcloud-g.svg" class="swap-from" width="120"
                            alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="swap-image">
                        <img src="assets/img/logo/exxon.svg" class="swap-to" width="120" alt="Brand logo hover">
                        <img src="assets/img/logo/exxon-g.svg" class="swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
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
    </section>


    <!-- Blog (Recent posts) -->
    <section class="bg-secondary pt-lg-6 py-5">
        <div class="container pt-3 pt-lg-0">
            <h3 class="h6 mb-2 text-uppercase">Our blog</h3>
            <h2 class="h1 mb-lg-5 mb-4 pb-2 d-flex align-items-center justify-content-between">
                Recent news
                <a href="blog.html" class="btn btn-outline-primary rounded-pill">View blog</a>
            </h2>
            <div class="row">

                <!-- Post card: image fade in -->
                <div class="col-lg-4 col-sm-6 mb-sm-grid-gutter mb-3">
                    <article class="image-fade card card-hover shadow"
                        style="background-image: url(assets/img/blog/recent/01.jpg);">
                        <div class="image-inner d-flex flex-column justify-content-between h-100 p-3">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-muted mb-2 pb-1">
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            Creativity
                                        </a>
                                        <span class="inner-text text-border px-1">|</span>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            April 9, 2020
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body pt-0" style="min-height: 15rem;">
                                <h3 class="h5 mb-2 pb-1">
                                    <a class="inner-text nav-link" href="blog-single.html">
                                        Definitive Guide to Make a Daily More Productive Working Flow.
                                    </a>
                                </h3>
                            </div>
                            <div class="card-footer border-0">
                                <div class="h6 mb-0 text-end">
                                    <a class="inner-text nav-link py-3" href="blog-single.html">
                                        Read more
                                    </a>
                                    <i class="inner-text ci-arrow-right align-middle h5 mb-0 ms-2 card-text"></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Post card: image fade in -->
                <div class="col-lg-4 col-sm-6 mb-sm-grid-gutter mb-3">
                    <article class="image-fade card card-hover shadow"
                        style="background-image: url(assets/img/blog/recent/02.jpg);">
                        <div class="image-inner d-flex flex-column justify-content-between h-100 p-3">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-muted mb-2 pb-1">
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            Design
                                        </a>
                                        <span class="inner-text text-border px-1">|</span>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            April 9, 2020
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body pt-0" style="min-height: 15rem;">
                                <h3 class="h5 mb-2 pb-1">
                                    <a class="inner-text nav-link" href="blog-single.html">
                                        Outdoor Work: a Designer’s Checklist for Every UX Project..
                                    </a>
                                </h3>
                            </div>
                            <div class="card-footer border-0">
                                <div class="h6 mb-0 text-end">
                                    <a class="inner-text nav-link py-3" href="blog-single.html">
                                        Read more
                                    </a>
                                    <i class="inner-text ci-arrow-right align-middle h5 mb-0 ms-2 card-text"></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Post card: image fade in -->
                <div class="col-lg-4 col-sm-6 d-sm-none d-lg-block mb-sm-grid-gutter mb-3">
                    <article class="image-fade card card-hover shadow"
                        style="background-image: url(assets/img/blog/recent/03.jpg);">
                        <div class="image-inner d-flex flex-column justify-content-between h-100 p-3">
                            <div class="card-header border-0 pb-0">
                                <ul class="nav nav-muted mb-2 pb-1">
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            Creativity
                                        </a>
                                        <span class="inner-text text-border px-1">|</span>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="inner-text nav-link d-inline-block me-2 p-0 fs-sm fw-normal"
                                            href="#">
                                            April 9, 2020
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body pt-0" style="min-height: 15rem;">
                                <h3 class="h5 mb-2 pb-1">
                                    <a class="inner-text nav-link" href="blog-single.html">
                                        Creativo Para Jóvenes: a Designer’s UI/UX Complete Checklist.
                                    </a>
                                </h3>
                            </div>
                            <div class="card-footer border-0">
                                <div class="h6 mb-0 text-end">
                                    <a class="inner-text nav-link py-3" href="blog-single.html">
                                        Read more
                                    </a>
                                    <i class="inner-text ci-arrow-right align-middle h5 mb-0 ms-2 card-text"></i>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


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
        <h2 class="h3 mb-5 pb-2 text-center">Let's build something amazing together!</h2>
        <div class="row justify-content-center px-2 px-sm-0">
            <div class="col-md-3 col-sm-4 col px-2 px-sm-3">
                <h3 class="h6 pb-lg-3 pb-2 text-uppercase text-muted text-center">Follow us</h3>
                <a class="d-block" href="#">
                    <img class="rounded" src="assets/img/logo/block-dribbble.svg" alt="Dribble">
                </a>
                <a class="mt-sm-4 mt-3 d-block" href="#">
                    <img class="rounded" src="assets/img/logo/block-behance.svg" alt="Behance">
                </a>
            </div>
            <div class="divider-vertical d-sm-block d-none offset-sm-1"></div>
            <div class="col-md-3 col-sm-4 col offset-sm-1 px-2 px-sm-3">
                <h3 class="h6 pb-lg-3 pb-2 text-uppercase text-muted text-center">Get in touch</h3>
                <a class="d-block" href="#">
                    <img class="rounded" src="assets/img/logo/block-upwork.svg" alt="Upwork">
                </a>
                <a class="mt-sm-4 mt-3 d-block" href="mailto:hello@example.com">
                    <img class="rounded" src="assets/img/logo/block-email.svg" alt="Email">
                </a>
            </div>
        </div>
    </section>
    </main><!-- / Main content: .page-wrapper -->

</x-main-layout>
