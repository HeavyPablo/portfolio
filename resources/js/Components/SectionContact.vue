<script setup>

import {computed, onMounted, ref, watch} from "vue";
import {usePage} from "@inertiajs/vue3";

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

const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const loading = ref(false);

console.log(usePage().props.jetstream.flash.banner)

const style = computed(() => usePage().props.jetstream.flash?.bannerStyle || 'success');
const message = computed(() => usePage().props.jetstream.flash?.banner || '');
const show = computed(() => usePage().props.jetstream.flash?.banner?.length > 0);


</script>

<template>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacto</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><a :href="'mailto:'+email.replace(' ', '')">{{ email }}</a></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Teléfono:</h4>
                            <p><a :href="'tel:'+phone.replace(' ', '')">{{ phone }}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="/new-request" method="post" role="form" class="php-email-form" @submit="loading = true">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject_request" id="subject_request" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div v-if="loading" class="loading">Loading</div>
                            <div v-if="show && style === 'danger'" class="error-message"></div>
                            <div v-if="show && style === 'success'" class="sent-message">{{ message }}</div>
                        </div>
                        <div v-if="! loading" class="text-center"><button type="submit">Enviar</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
</template>
