<x-main-layout>


    <!-- Story -->
    <section class="container mt-5 mb-2 mb-md-5 mb-lg-6 pt-md-4">
        <div class="row position-relative">
            <div class="col-md-7 col-sm-8">
                <h3 class="h6 mb-2 text-uppercase">Nosotros</h3>
                <h1 class="mb-4 mb-sm-6 px-0 col-sm-7">Somos Gava Design.</h1>
                <div class="gallery d-sm-none d-block mb-n2">
                    <a class="gallery-item video-item" href="https://vimeo.com/429640367"
                        data-sub-html="<h6 class='text-light'>Gallery video caption</h6>">
                        <img src="{{ asset('img/team/about_1.jpg') }}" alt="About">
                    </a>
                </div>
                <div class="py-5 px-sm-4 px-3 bg-secondary">
                    <div class="col-xl-7 col-lg-8 p-sm-3 px-0">
                        <h3 class="h6 mb-2 text-uppercase">est 2005</h3>
                        <h2 class="h1 mb-sm-5 mb-4">Un poco de nosotros</h2>
                        <p class="text-muted">Fundada en 2005, Gava Design is a crafty team of strategists, designers,
                            developers, and marketers.</p>
                        <p class="text-muted">Más de {{ date('Y') - 2005 }} años de experiencia representando marcas premium líderes en regalos, decoración, innovación y diseño.</p>
                        <div class="collapse" id="story-collapse">
                            <p class="text-muted">Texto.</p>
                            <p class="text-muted">Texto.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-sm-3">
                        <div>
                            <a class="collapse-toggler fs-sm fw-bold text-body text-decoration-none text-nowrap"
                                href="#story-collapse" data-collapsed="Leer más" data-expanded="Leer menos"
                                data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="story-collapse">
                                <i class="collapse-toggler-indicator ci-arrow-down"></i>
                            </a>
                        </div>
                        <div class="d-sm-block d-none me-xl-n2">
                            <a href="https://www.youtube.com/watch?v=4gAtw4qSF2U" class="btn-video me-sm-3 me-2"
                                data-gallery-video data-sub-html="<h6 class='fs-sm text-light'>Gava Design</h6>"
                                data-gallery-video></a>
                            <span class="fs-sm fw-bold text-dark text-nowrap align-middle">Ver video</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 d-sm-block d-none position-absolute" style="top: 0; right: 0;">
                <img class="mt-4 rounded" src="{{ asset('img/team/about_1.jpg') }}" alt="About">
            </div>
        </div>

        <div class="row mt-3 mt-sm-4 mt-md-0 pt-md-6 py-5" id="tabs">
            <div class="col-lg-10 ms-auto">
                <div class="row">
                    <div class="col-sm-4">

                        <!-- Vertical tab navs -->
                        <div class="mb-sm-0 mb-4 pb-sm-0 pb-2" data-simplebar data-simplebar-auto-hide="false">
                            <ul class="nav flex-sm-column flex-nowrap" id="storyTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link h1 mb-0 fw-black line-height-1 active" href="#vision"
                                        id="vision-tab" data-bs-toggle="tab" role="tab" aria-controls="vision"
                                        aria-selected="true">
                                        Visión
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h1 mb-0 fw-black line-height-1" href="#mission" id="mission-tab"
                                        data-bs-toggle="tab" role="tab" aria-controls="mission" aria-selected="false">
                                        Misión
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link h1 mb-0 fw-black line-height-1" href="#values" id="values-tab"
                                        data-bs-toggle="tab" role="tab" aria-controls="values" aria-selected="false">
                                        Valores
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <!-- Tabs content -->
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="vision" role="tabpanel"
                                aria-labelledby="vision-tab">
                                <p class="lead">Búsqueda constante de objetos para decoración y regalos, inspirados en divertir y sorprender por su diseño.</p> 
                                <p class="lead">Mantenemos siempre contacto cercano con nuestros clientes, brindándoles excelente servicio con un enfoque de colaboración, asesorando y ofreciendo las mejores marcas.</p>
                            </div>
                            <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                <p class="lead">Hacemos llegar a tu tienda artículos, regalos y emociones, llenos de innovación y diversión.</p> 
                                <p class="lead">Buscando la diferencia a través del diseño, donde cada uno de los artículos que te ofrecemos, cuenten una historia generando sorpresas y alegría a tus clientes.</p>
                            </div>
                            <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab">
                                <p class="lead">Valores en Gava.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Approach -->
        <section class="pt-lg-3 pb-4">
            <div class="container">
                <h3 class="h6 mb-2 text-uppercase">Nuestro enfoque</h3>
                <h2 class="h1 mb-lg-5 mb-4">Así es como lo hacemos</h2>
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
                                <h3 class="h5 mb-2">Productos únicos</h3>
                            </div>
                        </div>
    
                        <!-- Horizontal step item -->
                        <div class="step pt-2 px-3">
                            <div class="step-head mb-3">
                                <span class="step-indicator">02</span>
                                <span class="step-line"></span>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 mb-2">Regalos exclusivos</h3>
                            </div>
                        </div>
    
                        <!-- Horizontal step item -->
                        <div class="step pt-2 px-3">
                            <div class="step-head mb-3">
                                <span class="step-indicator">03</span>
                                <span class="step-line"></span>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 mb-2">Variedad de árticulos</h3>
                            </div>
                        </div>

                        <!-- Horizontal step item -->
                        <div class="step pt-2 px-3">
                            <div class="step-head mb-3">
                                <span class="step-indicator">04</span>
                                <span class="step-line"></span>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 mb-2">Novedades continuamente</h3>
                            </div>
                        </div>
    
                        <!-- Horizontal step item -->
                        <div class="step pt-2 px-3">
                            <div class="step-head mb-3">
                                <span class="step-indicator">05</span>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 mb-2">Sorpresas, diversión y emoción</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    

    <x-links/>

</x-main-layout>
