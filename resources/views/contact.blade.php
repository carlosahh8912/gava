<x-main-layout>

    <!-- Page content-->
    <section class="container my-5 pt-md-4">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <h3 class="h6 mb-2 text-uppercase">Contacto</h3>
                <h1 class="mb-lg-5 mb-4 pb-1">Contactanos en:</h1>

                 <!-- Address / Phone -->
                 <div class="row">
                    <div class="col-md-12 col-sm">
                        <h3 class="h6 mb-2 text-uppercase">Dirección</h3>
                        <ul class="mb-md-4 mb-3 pb-md-3 list-unstyled">
                            <li>Antiguo Camino a Culhuacan #120</li>
                            <li>Col. Sta Isabel Industrial</li>
                            <li>Iztapalápa, CDMX 09820</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm">
                        <h3 class="h6 mb-2 text-uppercase">Teléfonos</h3>
                        <ul class="mb-md-4 mb-3 pb-md-3 list-unstyled nav-dark">
                            <li><a class="nav-link p-0 fw-normal" href="phone:(405)555-0128">(55) 2065 – 3703</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Nav tabs -->
                <div class="mb-md-5 mb-4 pb-lg-4" data-simplebar data-simplebar-auto-hide="false">
                    <h3 class="h6 mb-2 text-uppercase">Redes Sociales</h3>
                    <ul class="nav flex-md-column flex-nowrap text-nowrap" id="contactTab" role="tablist">
                        <li class="nav-item">
                            <!-- Facebook -->
                            <a href="#" class="btn-social bs-solid">
                                <i class="ci-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- Facebook -->
                            <a href="#" class="btn-social bs-solid">
                                <i class="ci-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- Facebook -->
                            <a href="#" class="btn-social bs-solid">
                                <i class="ci-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>


            <!-- Tab content -->
            <div class="col-md-8 ms-auto">
                <div class=" mt-4 pt-md-3">

                    <!-- Tab: General enquiries -->
                        <p class="lead">Te agradecemos tu interés en contactarnos. Nos encantará poder
                            contestar cualquier pregunta que puedas tener acerca de Gava Design, nuestros objetos y/o la
                            oportunidad de negocio con Gava Design.</p>
                        <form class="row needs-validation" novalidate>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-name-2" class="form-label-lg">Nombre*</label>
                                    <input class="form-control" name="name" type="text" id="contact-name-2"
                                        placeholder="Tu nombre" required>
                                    <div class="invalid-feedback">El campo Nombre es requerido.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-company-2" class="form-label-lg">Nombre comercial*</label>
                                    <input class="form-control bg-image-0" name="comercio" type="text" id="contact-company-2"
                                        placeholder="Nombre de tu tienda" required>
                                    <div class="invalid-feedback">El nombre comercial es requerido.</div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-email-2" class="form-label-lg">Correo*</label>
                                    <input class="form-control" type="email" name="email" id="contact-email-2"
                                        placeholder="Tu correo electrónico" required>
                                    <div class="invalid-feedback">Ingresa un correo valido.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-project-2" class="form-label-lg">Sucursales</label>
                                    <input class="form-control bg-image-0" type="number" id="contact-project-2"
                                        placeholder="Número de sucursales">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-email-2" class="form-label-lg">Ciudad*</label>
                                    <input class="form-control" type="text" name="city" id="contact-city"
                                        placeholder="Ciudad" required>
                                    <div class="invalid-feedback">La ciudad es un campo requerido.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-project-2" class="form-label-lg">Teléfono*</label>
                                    <input class="form-control bg-image-0" type="text" id="contact-project-2"
                                        placeholder="Teléfono de contacto" required />
                                    <div class="invalid-feedback">El teléfono es un campo requerido.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4 mt-2">
                                    <label for="contact-details-2" class="form-label-lg">Mensaje*</label>
                                    <textarea class="form-control" id="contact-details-2" rows="3"
                                        placeholder="Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill mt-md-4 mt-2">Enviar</button>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </section>


    <x-links />


</x-main-layout>
