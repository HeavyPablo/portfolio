<script setup>
import {onMounted, ref} from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Typed from "typed.js";
import SectionAbout from "@/Components/SectionAbout.vue";
import SectionContact from "@/Components/SectionContact.vue";
import SectionFacts from "@/Components/SectionFacts.vue";
import SectionPortfolio from "@/Components/SectionPortfolio.vue";
import SectionResume from "@/Components/SectionResume.vue";
import SectionServices from "@/Components/SectionServices.vue";
import SectionSkills from "@/Components/SectionSkills.vue";
import SectionTestimonials from "@/Components/SectionTestimonials.vue";

defineProps({
    title: String,
});

let loaded = ref(false);
const email = ref('pabloasd3@gmail.com');
const phone = ref('+56 9 6534 0835');

onMounted(() => {

    setTimeout(() => {
        loaded.value = ! loaded.value;
    }, 200);

});

</script>

<template>

    <!-- LOAD THEME -->
    <div v-theme-app></div>

    <Head :title="title" />

    <Banner />

    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Acerca de mí</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Curriculum</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav>

    </header>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Mario Bustos</h1>
            <p>Soy <span class="typed" data-typed-items="Ingeniero en Informática, Desarrollador Web, Full Stack, Jefe de Proyecto"></span></p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

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


    <footer id="footer">
        <div class="container">
            <h3>Mario Bustos</h3>
            <p>La capacidad de hacer lo que quieras está sujeta a tu imaginación.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

            <div class="copyright">
                &copy; Copyright <strong><span>HeavyPablo</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>


    <Transition name="fade">
        <div v-show="! loaded" id="preloader"></div>
    </Transition>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</template>
