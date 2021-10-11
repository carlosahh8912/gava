</main><!-- / Main content: .page-wrapper -->

<footer class="footer pt-3 bg-dark">
    <div class="container py-lg-5 py-4">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-12 order-md-1 order-2 mb-md-0 mb-4">
                <h3 class="h6 mb-3 text-uppercase text-light">¿Quieres contactarnos?</h3>
                <ul class="nav nav-light flex-column">
                    <li class="nav-item mb-2">
                        <a href="tel:(405)555-0128" class="nav-link p-0 fw-normal">
                            <span class="text-light">Llama: </span>
                            (55) 2065 – 3703
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="mailto:hello@example.com" class="nav-link p-0 fw-normal">
                            <span class="text-light">Correo: </span>
                            info@gavadesign.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12 order-md-2 order-1 offset-lg-1 mb-md-0 mb-4">
                <h3 class="h6 mb-3 text-uppercase text-light">Enlaces</h3>
                <ul class="nav nav-light flex-md-column flex-sm-row flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Inicio</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Nosotros</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Marcas</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Nuevo distribuidor</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">¿Dónde comprar?</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('contacto') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 order-md-3 order-sm-4 order-3 offset-lg-1 mb-md-0 mb-4">
                <h3 class="h6 mb-3 text-uppercase text-light">Siguenos</h3>
                <a href="#" class="btn-social bs-solid rounded-circle bs-light me-2 mb-2 mt-md-0 mt-sm-1">
                    <i class="ci-facebook"></i>
                </a>
                <a href="#" class="btn-social bs-solid rounded-circle bs-light me-2 mb-2 mt-md-0 mt-sm-1">
                    <i class="ci-instagram"></i>
                </a>
                <a href="#" class="btn-social bs-solid rounded-circle bs-light me-2 mb-2 mt-md-0 mt-sm-1">
                    <i class="ci-linkedin"></i>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 order-md-4 order-sm-3 order-4 mb-md-0 mb-4">
                <h3 class="h6 mb-3 text-uppercase text-light">Productos</h3>
                <ul class="nav nav-light flex-md-column flex-sm-row flex-column">
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Novedades</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Top Sellers</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('/') }}" class="nav-link me-md-0 me-sm-4 p-0 fw-normal">Last Chance</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-2 pt-1">
            <div class="text-light">
                <span class="d-block fs-xs mb-1">
                    <span class="fs-sm">&copy; </span>
                    All rights reserved {{ date('Y') }}.
                </span>
                <span class="d-block fs-xs">
                    Gava Design | v 3.0.0
                </span>
            </div>
            <div class="d-flex align-items-end">
                <span class="d-sm-inline-block d-none text-light fs-sm me-3">Ir al inicio</span>
                <a class="btn-scroll-top position-static rounded-circle" href="#top" data-scroll>
                    <i class="btn-scroll-top-icon ci-angle-up"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
