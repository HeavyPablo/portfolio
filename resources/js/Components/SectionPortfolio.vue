<script setup>

import ImageSeguronSeguros from '~images/portfolio/Seguron_Seguros.webp';
import ImageDigitalAbogados from '~images/portfolio/Digital_Abogados.webp';
import ImageDoctum from '~images/portfolio/Doctum.webp';
import ImageSigntum from '~images/portfolio/Signtum.webp';

</script>

<template>
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portafolio</h2>
                <p>Proyectos en los que he participado como desarrollador y/o jefe de proyecto.</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img :src="ImageSeguronSeguros" class="img-fluid" alt="Segurón Seguros">
                        <div class="portfolio-info">
                            <h4>Segurón Seguros</h4>
                            <p>Marketplace de seguros</p>
                            <div class="portfolio-links">
                                <a href="https://www.seguron.cl/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ir a seguron.cl"><i class="bx bx-link"></i></a>
                            </div>
                            <div>
                                <span class="badge bg-blue-400 mx-1">Subscripciones</span>
                                <span class="badge bg-blue-400 mx-1">Integraciones</span>
                                <span class="badge bg-blue-400 mx-1">ERP</span>
                                <span class="badge bg-blue-400 mx-1">CMS</span>
                                <span class="badge bg-blue-400 mx-1">Medios de pagos</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img :src="ImageDigitalAbogados" class="img-fluid" alt="Digital Abogados">
                        <div class="portfolio-info">
                            <h4>Digital Abogados</h4>
                            <p>Servicio de abogados</p>
                            <div class="portfolio-links">
                                <a href="https://www.digitalabogados.com/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ir a digitalabogados.com"><i class="bx bx-link"></i></a>
                            </div>
                            <div>
                                <span class="badge bg-blue-400 mx-1">CMS</span>
                                <span class="badge bg-blue-400 mx-1">ERP</span>
                                <span class="badge bg-blue-400 mx-1">Integraciones</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img :src="ImageDoctum" class="img-fluid" alt="Doctum">
                        <div class="portfolio-info">
                            <h4>Doctum</h4>
                            <p>Software de gestión</p>
                            <div class="portfolio-links">
                                <a href="https://www.doctum.cl/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ir a doctum.cl"><i class="bx bx-link"></i></a>
                            </div>
                            <div>
                                <span class="badge bg-blue-400 mx-1">Workflow</span>
                                <span class="badge bg-blue-400 mx-1">Documental</span>
                                <span class="badge bg-blue-400 mx-1">Administración contratos</span>
                                <span class="badge bg-blue-400 mx-1">Gestión normas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img :src="ImageSigntum" class="img-fluid" alt="Signtum">
                        <div class="portfolio-info">
                            <h4>Signtum</h4>
                            <p>Firma digital</p>
                            <div class="portfolio-links">
                                <a href="https://www.signtum.com/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ir a signtum.com"><i class="bx bx-link"></i></a>
                            </div>
                            <div>
                                <span class="badge bg-blue-400 mx-1">Administración</span>
                                <span class="badge bg-blue-400 mx-1">Subscripción</span>
                                <span class="badge bg-blue-400 mx-1">Firma digital simple</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>
