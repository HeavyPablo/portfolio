<script setup>
import {onMounted, ref} from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import AOS from "aos";

defineProps({
    title: String,
});

let loaded = ref(false);


onMounted(() => {
    setTimeout(() => {
        loaded.value = ! loaded.value;
    }, 200);

    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
});

</script>

<template>

    <!-- LOAD THEME -->
    <div v-theme-app></div>

    <Head :title="title" />

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

    <slot></slot>

    <footer id="footer">
        <div class="container">
            <h3>Mario Bustos</h3>
            <p>La capacidad de hacer lo que quieras está sujeta a tu imaginación.</p>
            <div class="social-links">
                <a href="https://github.com/HeavyPablo" target="_blank" class="google-plus"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/mario-bustos-sanchez-695011132/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
