<x-main-layout>

    <!-- Page content-->
    <section class="container my-5 pt-md-4">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <h3 class="h6 mb-2 text-uppercase">Contacto</h3>
                <h1 class="mb-lg-5 mb-4 pb-1">Escribenos sobre:</h1>

                <!-- Nav tabs -->
                <div class="mb-md-5 mb-4 pb-lg-4" data-simplebar data-simplebar-auto-hide="false">
                    <ul class="nav flex-md-column flex-nowrap text-nowrap" id="contactTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link h3 me-md-0 me-sm-5 me-4 mb-0 px-0 active" href="#new-project"
                                id="new-project-tab" data-bs-toggle="tab" role="tab" aria-controls="new-project"
                                aria-selected="true">
                                New Project
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 me-md-0 me-sm-5 me-4 mb-0 px-0" href="#joining" id="joining-tab"
                                data-bs-toggle="tab" role="tab" aria-controls="joining" aria-selected="false">
                                Joining Our Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 me-md-0 me-sm-5 me-4 mb-0 px-0" href="#general" id="general-tab"
                                data-bs-toggle="tab" role="tab" aria-controls="general" aria-selected="false">
                                General Enquiries
                            </a>
                        </li>
                    </ul>
                </div>

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
            </div>


            <!-- Tab content -->
            <div class="col-md-8 ms-auto">
                <div class="tab-content mt-4 pt-md-3">

                    <!-- Tab: New project -->
                    <div class="tab-pane fade show active" id="new-project" role="tabpanel"
                        aria-labelledby="new-project-tab">
                        <p class="lead">Te agradecemos tu interés en contactarnos. Nos encantará poder contestar cualquier pregunta que puedas tener acerca de Gava Design, nuestros objetos y/o la oportunidad de negocio con Gava Design.</p>
                        <form class="row needs-validation" novalidate>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-name" class="form-label-lg">Name*</label>
                                    <input class="form-control" type="text" id="contact-name" placeholder="Your name"
                                        required>
                                    <div class="invalid-feedback">Please enter a username.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-company" class="form-label-lg">Company</label>
                                    <input class="form-control bg-image-0" type="text" id="contact-company"
                                        placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-email" class="form-label-lg">Email*</label>
                                    <input class="form-control" type="email" id="contact-email"
                                        placeholder="Your working email" required>
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-project" class="form-label-lg">Project title</label>
                                    <input class="form-control bg-image-0" type="text" id="contact-project"
                                        placeholder="Title your project">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4 mt-2">
                                    <label for="contact-details" class="form-label-lg">Project details*</label>
                                    <textarea class="form-control" id="contact-details" rows="3"
                                        placeholder="Brief project details" required></textarea>
                                    <div class="invalid-feedback">Please leave a message.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill mt-md-4 mt-2">Lets make
                                    something</button>
                            </div>
                        </form>
                    </div>

                    <!-- Tab: Join team -->
                    <div class="tab-pane fade" id="joining" role="tabpanel" aria-labelledby="joining-tab">
                        <p class="lead">We believe great work happens when great people work together. That's
                            why we're always looking for the next great person.</p>

                        <!-- Accordion -->
                        <div class="accordion" id="accordionContacts">

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-1">
                                    <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#contactsCollapse-1" aria-expanded="true"
                                        aria-controls="contactsCollapse-1">Copywriter</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse show" id="contactsCollapse-1"
                                    aria-labelledby="contactsHeader-1" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-2">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#contactsCollapse-2"
                                        aria-expanded="false" aria-controls="contactsCollapse-2">Paid media
                                        strategist</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="contactsCollapse-2"
                                    aria-labelledby="contactsHeader-2" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-3">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#contactsCollapse-3"
                                        aria-expanded="false" aria-controls="contactsCollapse-3">Data analyst</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="contactsCollapse-3"
                                    aria-labelledby="contactsHeader-3" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-4">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#contactsCollapse-4"
                                        aria-expanded="false" aria-controls="contactsCollapse-4">Email
                                        marketing</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="contactsCollapse-4"
                                    aria-labelledby="contactsHeader-4" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-5">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#contactsCollapse-5"
                                        aria-expanded="false" aria-controls="contactsCollapse-5">CEO</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="contactsCollapse-5"
                                    aria-labelledby="contactsHeader-5" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header h5" id="contactsHeader-6">
                                    <button class="accordion-button border-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#contactsCollapse-6"
                                        aria-expanded="false" aria-controls="contactsCollapse-6">Motion
                                        designer</button>
                                </h3>
                                <div class="accordion-collapse border-0 collapse" id="contactsCollapse-6"
                                    aria-labelledby="contactsHeader-6" data-bs-parent="#accordionContacts">
                                    <div class="accordion-body d-sm-flex align-items-start ms-n2">
                                        <p class="mb-0 pe-sm-4 text-muted">We're looking for a Copywriter with proven
                                            experience in the creation of both short-form and long-form content,
                                            including blogs, white papers, ad copy, product listings, website copy,
                                            script writing, email and social media.</p>
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-pill mt-sm-0 mt-4 ms-sm-5">Apply
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab: General enquiries -->
                    <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <p class="lead">Te agradecemos tu interés en contactarnos. Nos encantará poder contestar cualquier pregunta que puedas tener acerca de Gava Design, nuestros objetos y/o la oportunidad de negocio con Gava Design.</p>
                        <form class="row needs-validation" novalidate>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-name-2" class="form-label-lg">Name*</label>
                                    <input class="form-control" type="text" id="contact-name-2"
                                        placeholder="Your name" required>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-company-2" class="form-label-lg">Company</label>
                                    <input class="form-control bg-image-0" type="text" id="contact-company-2"
                                        placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="contact-email-2" class="form-label-lg">Email*</label>
                                    <input class="form-control" type="email" id="contact-email-2"
                                        placeholder="Your working email" required>
                                    <div class="invalid-feedback">Please choose a email.</div>
                                </div>
                                <div class="mb-4">
                                    <label for="contact-project-2" class="form-label-lg">Subject</label>
                                    <input class="form-control bg-image-0" type="text" id="contact-project-2"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4 mt-2">
                                    <label for="contact-details-2" class="form-label-lg">Message</label>
                                    <textarea class="form-control" id="contact-details-2" rows="3"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary rounded-pill mt-md-4 mt-2">Send
                                    message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-links/>


</x-main-layout>
