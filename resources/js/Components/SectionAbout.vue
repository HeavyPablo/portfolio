<script setup>
    import ProfileImage from '~images/profile.webp';
    import {computed, ref} from "vue";

    defineProps({
        email: {
            type: String,
            default: ''
        },
        phone: {
            type: String,
            default: ''
        }
    });

    const startYear = ref(1998);
    const startYearExperience = ref(2020);

    const age = computed(() => {
        const now = new Date();
        if ((now.getMonth() === 4 && now.getDate() >= 4) || now.getMonth() > 4) {
            return now.getFullYear() - (startYear.value);
        }

        return now.getFullYear() - (startYear.value + 1);
    });

    const experienceAge = computed(() => {
        const now = new Date();
        return now.getFullYear() - startYearExperience.value;
    });
</script>

<template>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Acerca de mí</h2>
                <p>
                    Soy profesional con el titulo de Ingeniería en Informática, especialista en desarrollo web para aplicaciones personalizadas.
                    <br>
                    Tengo experiencia trabajando con sistema de gestión documental, gestión de hallazgos, marketplace, firma digital, administración y generación de contratos.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img :src="ProfileImage" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Fullstack developer & Jefe de proyecto</h3>
                    <p class="fst-italic">
                        Presente en todas las etapas del proyecto, desde el levantamiento, desarrollo, delegación y posterior entrega/seguimiento.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Teléfono:</strong> <span><a
                                    :href="'tel:' + phone.replace(' ', '')">{{ phone }}</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Grado:</strong> <span>Semi Senior</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Melipilla, Chile</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>{{ age }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Correo:</strong> <span><a :href="'mailto:' + email.replace(' ', '')">{{ email }}</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Años de experiencia:</strong> <span>{{ experienceAge }} años</span></li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <p>El movimiento tecnológico es rápido, por ende, trato de mantenerme al día con las innovaciones en el área, para mejorar los procesos y ampliar mis habilidades para resolver problemas específicos.</p>

                    <hr>

                    <p>En mis tiempos libres juego videojuegos, toco la guitarra y soy un especialista en asados.</p>
                </div>
            </div>

        </div>
    </section>
</template>
