<script setup>

import ImageBayron from '~images/testimonials/bayron.webp';
import ImageDaniel from '~images/testimonials/daniel.webp';
import ImageDiego from '~images/testimonials/Diego.webp';
import ImageErick from '~images/testimonials/erick-doctum.webp';
import ImageJaime from '~images/testimonials/Jaime-doctum.webp';
import ImageRobinson from '~images/testimonials/Robinson-doctum.webp';

</script>

<template>
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonios</h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
<!--                    <div class="swiper-slide">-->
<!--                        <div class="testimonial-item">-->
<!--                            <img :src="ImageDaniel" class="testimonial-img" alt="Daniel Vargas | CEO & Founder">-->
<!--                            <h3>Daniel Vargas</h3>-->
<!--                            <h4>CEO & Founder</h4>-->
<!--                            <p>-->
<!--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.-->
<!--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img :src="ImageDiego" class="testimonial-img" alt="Diego Orellana | Freelance">
                            <h3>Diego Orellana</h3>
                            <h4>CEO</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 Trabajamos con Mario para el diseño y desarrollo de un portal web, con foco en uno de nuestros productos. Realizamos iteraciones rápidas y efectivas para llegar al entregable final. Recomendamos 100%.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img :src="ImageErick" class="testimonial-img" alt="Erick Morales | Senior Developer">
                            <h3>Erick Morales</h3>
                            <h4>Senior Developer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Mario fue mi Jefatura por más de dos años, su gestión y planificación siempre ayudaron a cumplir metas y trabajos propuestos, obteniendo el reconocimiento de nuestros clientes. Además, de estar siempre disponible a ayudar y apoyar al equipo de trabajo con su conocimiento.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img :src="ImageJaime" class="testimonial-img" alt="Jaime Figueroa | Backend Developer">
                            <h3>Jaime Figueroa</h3>
                            <h4>Backend Developer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                En el período de 1 año y medio que llevo conociendo a Mario Bustos, Jefe del departamento de informática y desarrollador Fullstack, con amplios conocimientos tanto en Frontend como Backend.
                                El tiempo que hemos trabajado, siempre se destacó por presentar soluciones en un corto plazo, siendo eficiente en la ejecución favoreciendo a la empresa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

<!--                    <div class="swiper-slide">-->
<!--                        <div class="testimonial-item">-->
<!--                            <img :src="ImageRobinson" class="testimonial-img" alt="Robinson Moraga | Fullstack developer">-->
<!--                            <h3>Robinson Moraga</h3>-->
<!--                            <h4>Fullstack developer</h4>-->
<!--                            <p>-->
<!--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.-->
<!--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</template>
