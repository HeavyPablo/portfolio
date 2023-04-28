<script setup lang="ts">
import AppLayout from '@/Layouts/AppLayout.vue';
import SectionAbout from "@/Components/SectionAbout.vue";
import SectionContact from "@/Components/SectionContact.vue";
import SectionFacts from "@/Components/SectionFacts.vue";
import SectionPortfolio from "@/Components/SectionPortfolio.vue";
import SectionResume from "@/Components/SectionResume.vue";
import SectionServices from "@/Components/SectionServices.vue";
import SectionSkills from "@/Components/SectionSkills.vue";
import SectionTestimonials from "@/Components/SectionTestimonials.vue";
import {onMounted, ref} from "vue";

import { Typed } from "@duskmoon/vue3-typed-js";
import { TypedOptions } from "@duskmoon/vue3-typed-js";

const options: TypedOptions = {
    strings: ['Ingeniero en Informática', 'Desarrollador Web', 'Full Stack', 'Jefe de Proyecto'],
    loop: true,
    typeSpeed: 100,
    backSpeed: 50,
    backDelay: 2000
};

const email = ref('pabloasd3@gmail.com');
const phone = ref('+56 9 6534 0835');
</script>

<template>
    <AppLayout title="Mi Portafolio">
        <section id="hero" class="d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <h1>Mario Bustos</h1>
                <Typed :options="options">
                    <p>Soy <span class="typing"></span></p>
                </Typed>

                <div class="social-links">
                    <a href="https://github.com/HeavyPablo" class="google-plus"><i class="bx bxl-github"></i></a>
                    <a href="https://www.linkedin.com/in/mario-bustos-sanchez-695011132/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </section>

        <main id="main">

            <SectionAbout :email="email" :phone="phone"></SectionAbout>

            <!--        <SectionFacts></SectionFacts>-->

            <SectionSkills></SectionSkills>

            <SectionResume></SectionResume>

            <SectionPortfolio></SectionPortfolio>

            <!--        <SectionServices></SectionServices>-->

            <SectionTestimonials></SectionTestimonials>

            <SectionContact :email="email" :phone="phone"></SectionContact>

        </main>
    </AppLayout>
</template>
